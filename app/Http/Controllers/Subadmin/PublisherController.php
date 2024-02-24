<?php

namespace App\Http\Controllers\Subadmin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\District;
use Illuminate\Support\Facades\Validator;
use Throwable;
use Carbon\Carbon;
use App\Models\Subadmin;
use App\Models\Ticket;
use App\Models\Publisher;


class PublisherController extends Controller
{

    public function publisherchangepassword(Request $req,$id){
        $validator = Validator::make($req->all(),[
            'oldPassword'=>'required|string',
            'newPassword'=>'required|string',
            'confirmPassword'=>'required',
        ]);
        if($validator->fails()){
            return back()->withInput()->withErrors($validator->errors());
        }
        $publisher=Publisher::find($id);;
        if((Hash::check($req->oldPassword,$user->password))){
           if($req->newPassword == $req->confirmPassword){
             $publisher->password=Hash::make($req->newPassword);
             $publisher->save();
             return back()->with('success','Passdword Change  Successfully ');
            }else{
                return back()->with('error','newPassword and confirmPassword is mishmatch');
            }
        }else{
            return back()->with('error','Old password is incorrect');
        }
    
    }
    public function rejectstatus(Request $req){
        $publisher=Publisher::find($req->id);
            $publisher->approved_status="reject";
             $publisher->save();
             $data= [
                 'success' => 'Statuas Updated Successfully',
                      ];
             return response()->json($data);
         }
 
    public function approvestatus(Request $req){
        dd($req);
      $publisher=Publisher::find($req->publisherid);
           $publisher->approved_status="approve";
           $publisher->status="1";
            $publisher->save();
            $data= [
                'success' => 'Statuas Updated Successfully',
                     ];
            return response()->json($data);
        }


    public function publisherstatus(Request $req){
        $publisher=Publisher::find($req->publisherid);
        if($publisher->approved_status == "approve"){
            $publisher->status=$req->status;
            $publisher->save();
            $data= [
                'success' => 'Statuas Updated Successfully',
                     ];
            return response()->json($data);
        }else{
            $data= [
                'error' => 'Your can only change status for approved persons',
                     ];
            return response()->json($data);
        }
        }

    public function publisherget(){
        $publisher=Publisher::all();
        return view('sub_admin.publisher_list')->with('publisher',$publisher);  
        }

    public function publisheractive(){
      $publisher=Publisher::where('status', '=', '1')->where('approved_status', '=', 'approve')->get();
     return view('sub_admin/publisher_active_list')->with('publisher',$publisher);  
      }
      public function publisherinactive(){
        $publisher=Publisher::where('status', '=', '0')->where('approved_status', '=', 'approve')->get();
         return view('sub_admin/publisher_inactive_list')->with('publisher',$publisher);  
         }         
     public function publisherpending(){
       $publisher=Publisher::where('status', '=', '0')->where('approved_status', '=', 'pending')->get();
       return view('sub_admin/publisher_pending_list')->with('publisher',$publisher);  
       }                      
     public function publisherrejectlist(){
        $publisher=Publisher::where('status', '=', '0')->where('approved_status', '=', 'reject')->get();
         return view('sub_admin/publisher_reject_list')->with('publisher',$publisher);  
         }     
         public function pubprofile($id){
            $publisher=Publisher::find($id);
            $publisher->topTitles1= json_decode($publisher->topTitles);
            $publisher->topTranslatedBooks1= json_decode($publisher->topTranslatedBooks);
            $publisher->awardTitle1= json_decode($publisher->awardTitle); 
            $publisher->association1= json_decode($publisher->association);
            $publisher->subsidiary1= json_decode($publisher->subsidiary);
            // return $publisher;
            return redirect('/sub_admin/pubprofile')->with('publisher',$publisher); 
             } 
    }
    