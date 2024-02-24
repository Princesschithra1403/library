<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Throwable;
use Carbon\Carbon;
use App\Models\Librarian;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\UploadedFile;
use File;
use App\Models\Ticket;
use App\Models\Book;
use App\Models\Distributor;
use App\Models\PublisherDistributor; 
use App\Models\Publisher;
 use Illuminate\Support\Str;
 
 use Illuminate\Support\Facades\Notification;
use App\Notifications\Member1detailNotification;
class LibrarianController extends Controller
{
        
    public function createlibrarian(Request $req){
     
     
        
        $validator = Validator::make($req->all(),[
            'libraryType'=>'required|string',
            'libraryName'=>'required|string',
            'state'=>'required',
            'district'=>'required|string',
            'city'=>'required|string',
            'Village'=>'required',
            'metaChecker'=>'required',
            'librarianName'=>'required',
            'librarianDesignation'=>'required|string',
            'phoneNumber'=>'required|string|min:10|max:10',
            'email'=>'required|unique:librarians',
            'password'=>'required|min:8|max:8',
        ]);
        if($validator->fails()){
            $data= [
                'error' => $validator->errors()->first(),
                     ];
            return response()->json($data);  
           
        }
      
            $Admin=auth('admin')->user()->first();
           $librarian=new Librarian();
            $librarian->libraryType = $req->libraryType;
            $librarian->libraryName = $req->libraryName;
            $librarian->state = $req->state;
            $librarian->district = $req->district;
            $librarian->city = $req->city;
            $librarian->email = $req->email;
            $librarian->phoneNumber = $req->phoneNumber; 
            $librarian->Village = $req->Village;
            $librarian->role = "librarian";
            $librarian->metaChecker = $req->metaChecker;
           
             $randomCode = str_pad(random_int(0, 99999999), 8, '0', STR_PAD_LEFT);
             $librarian->librarianId= $randomCode;
            $librarian->librarianName = $req->librarianName;
            $librarian->librarianDesignation = $req->librarianDesignation;
            $librarian->password=Hash::make($req->password);
             $librarian->save();
             $user =  $librarian->email;
             $record =  $librarian;
             $password = $req->password;
             $url = "http://127.0.0.1:8000/member/login";
             Notification::route('mail',$librarian->email)->notify(new Member1detailNotification($user, $url,$record,$password));  
             $data= [
                'success' => 'librarian Create Successfully',
                     ];
            return response()->json($data);    
    
}
public function multiple_librarianstatus(Request $req){
    if (!empty($req->requestData['librarianId'])) {
        $librarians = $req->requestData['librarianId'];
  
      foreach ($librarians as $key => $val) {
       $librarian= Librarian::find($val);
    $librarian->status =$req->status;
    $librarian->save();
      }
      $data = [
        'success' => 'Status Change Successfully',
    ];
    return response()->json($data);
  
  }else{
    $data = [
      'error' => 'Select  Librarian Id',
  ];
  return response()->json($data);
 
   }  

}

public function librarianstatus(Request $req){
          
    $librarian= Librarian::find($req->id);
    $librarian->status =$req->status;
    $librarian->save();
    $data= [
        'success' => 'Status Change Sucessfully',
             ];
    return response()->json($data);   
   }  
   public function metabooklist(){

    $id=auth('librarian')->user()->id; 
      $book = Book::where('book_reviewer_id','=','$id')->get();
      return  $book;
   }
   public function librarianview(Request $req){
    $librarian= Librarian::find($req->id);
    return redirect('/admin/librariandata')->with('librarian',$librarian); 

   }

   public function libraryedit(Request $req){
    $librarian= Librarian::find($req->id);
    return redirect('/admin/librarydata')->with('librarian',$librarian); 

   }
   public function librarianedit(Request $req){
    $validator = Validator::make($req->all(),[
        'libraryType'=>'required|string',
        'libraryName'=>'required|string',
        'state'=>'required',
        'district'=>'required|string',
        'city'=>'required|string',
        'Village'=>'required',
        'metaChecker'=>'required',
        'librarianName'=>'required',
        'librarianDesignation'=>'required|string',
        'phoneNumber'=>'required|string|min:10|max:10',
        'email'=>'required',
      
    ]);
    if($validator->fails()){
        $data= [
            'error' => $validator->errors()->first(),
                 ];
        return response()->json($data);  
       
    }
  
    if(empty($req->newpassword) && empty($req->confirmpassword)) {
        
             $librarian=Librarian::find($req->id);
           
            $librarian->libraryType = $req->libraryType;
            $librarian->libraryName = $req->libraryName;
            $librarian->state = $req->state;
            $librarian->district = $req->district;
            $librarian->city = $req->city;
            $librarian->email = $req->email;
            $librarian->phoneNumber = $req->phoneNumber; 
            $librarian->Village = $req->Village;
            $librarian->metaChecker = $req->metaChecker;
            $librarian->librarianName = $req->librarianName;
            $librarian->librarianDesignation = $req->librarianDesignation;
        
             $librarian->save();

             $user =  $librarian->email;
             $record =  $librarian;
           
             $password = "########";
             $url = "http://127.0.0.1:8000/member/login";
             Notification::route('mail',$librarian->email)->notify(new Member1detailNotification($user, $url,$record,$password));  
             $data= [
                'success' => 'librarian Update Successfully',
                     ];
            return response()->json($data);
        
     }elseif(!empty($req->newpassword) && empty($req->confirmpassword) ){
      $data= [
        'error' => 'please enter confirmPassword',
             ];
         return response()->json($data);
   
     }elseif(empty($req->newpassword) && !empty($req->confirmpassword) ){
      $data= [
        'error' => 'please enter newpassword ',
             ];
         return response()->json($data);
     }else{

      if($req->newpassword == $req->confirmpassword){
        if (strlen($req->newpassword ) == 8 && strlen($req->confirmpassword) == 8) {
            $librarian=Librarian::find($req->id);
            $librarian->libraryType = $req->libraryType;
            $librarian->libraryName = $req->libraryName;
            $librarian->state = $req->state;
            $librarian->district = $req->district;
            $librarian->city = $req->city;
            $librarian->email = $req->email;
            $librarian->phoneNumber = $req->phoneNumber; 
            $librarian->Village = $req->Village;
            $librarian->metaChecker = $req->metaChecker;
            $librarian->librarianName = $req->librarianName;
            $librarian->librarianDesignation = $req->librarianDesignation;
            $librarian->password=Hash::make($req->newpassword);
             $librarian->save();
             $user =  $librarian->email;
             $record =  $librarian;
             $password = $req->password;
             $url = "http://127.0.0.1:8000/member/login";
             Notification::route('mail',$librarian->email)->notify(new Member1detailNotification($user, $url,$record,$password));  
             $data= [
                'success' => 'librarian update Successfully',
                     ];
            return response()->json($data);
        
       
      }else{
        $data= [
          'error' => 'Password must be at least 8 characters long',
               ];
           return response()->json($data);
            }
     }else{
      $data= [
        'error' => 'Password and confirmPassword is mishmatch',
             ];
         return response()->json($data);
    }

    return redirect('/admin/librarydata')->with('librarian',$librarian); 

   }
   
    }
}