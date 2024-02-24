<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Throwable;
use Carbon\Carbon;
use App\Models\Reviewer;
use App\Models\BookReviewStatus;
use App\Models\Book;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\UploadedFile;
use File;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Notification;
use App\Notifications\MemberdetailNotification;
use App\Notifications\MemberupdateNotification;
class ReviewerController extends Controller
{
        
    public function createreviewer(Request $req){
     
        $validator = Validator::make($req->all(),[
            'reviewerType'=>'required|string',
        ]);
        if($validator->fails()){
            $data= [
                'error' => $validator->errors()->first(),
                     ];
            return response()->json($data);  
           
        }
        if($req->reviewerType == "internal"){
            $validator = Validator::make($req->all(),[
                'reviewerType'=>'required|string',
                'name'=>'required|string',
                'subject'=>'required',
                'designation'=>'required|string',
                'organisationDetails'=>'required|string',
                'phoneNumber'=>'required|string|min:10|max:10',
                'email'=>'required|unique:reviewer',
                'profileImage'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'password'=>'required|min:8|max:8',
            ]);
            if($validator->fails()){
                $data= [
                    'error' => $validator->errors()->first(),
                         ];
                return response()->json($data);  
               
            }
            if($req->profileImage !=null){
                $Admin=auth('admin')->user()->first();
                $reviewer=new Reviewer();
                $reviewer->reviewerType = $req->reviewerType;
                $reviewer->name = $req->name;
                $reviewer->subject = $req->subject;
                $reviewer->designation = $req->designation;
                $reviewer->organisationDetails = $req->organisationDetails;
                $reviewer->email = $req->email;
                $reviewer->phoneNumber = $req->phoneNumber; 
                $reviewer->password=Hash::make($req->password);
                $reviewer->role = "reviewer";
                $randomCode = str_pad(random_int(0, 99999999), 8, '0', STR_PAD_LEFT);
                $reviewer->reviewerId= $randomCode;
                $image = $req->file('profileImage');
                $imagename = $req->name . time() . '.' . $image->getClientOriginalExtension();
                $image->move('reviewer/ProfileImage', $imagename);
               
                $reviewer->profileImage = $imagename;
            
                 $reviewer->save();
                 $user =  $reviewer->email;
                 $record =  $reviewer;
                 $password = $req->password;
                 $url = "http://127.0.0.1:8000/member/login";
                 Notification::route('mail',$reviewer->email)->notify(new MemberdetailNotification($user, $url,$record,$password));  
                 $data= [
                    'success' => 'Reviewer Create Successfully',
                         ];
                return response()->json($data);   
            }
               else{
                $data= [
                    'error' => 'ProfileImage Filed Is Rdquired',
                         ];
                return response()->json($data);   
               } 
        }else{
            $validator = Validator::make($req->all(),[
                'reviewerType'=>'required|string',
                'name'=>'required|string',
                'subject'=>'required',
                'designation'=>'required|string',
                'organisationDetails'=>'required|string',
                'phoneNumber'=>'required|string|min:10|max:10',
                'bankName'=>'required|string',
                'accountNumber'=>'required',
                'branch'=>'required|string',
                'ifscNumber'=>'required',
                'email'=>'required|unique:reviewer',
                'profileImage'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'password'=>'required|min:8|max:8',
            ]);
            if($validator->fails()){
                $data= [
                    'error' => $validator->errors()->first(),
                         ];
                return response()->json($data);  
               
            }
        if($req->profileImage !=null){
            $Admin=auth('admin')->user()->first();
            $reviewer=new Reviewer();
            $reviewer->reviewerType = $req->reviewerType;
            $reviewer->name = $req->name;
            $reviewer->subject = $req->subject;
            $reviewer->designation = $req->designation;
            $reviewer->organisationDetails = $req->organisationDetails;
            $reviewer->email = $req->email;
            $reviewer->phoneNumber = $req->phoneNumber; 
            $reviewer->bankName = $req->bankName;
            $reviewer->accountNumber = $req->accountNumber;
            $reviewer->branch = $req->branch;
            $reviewer->ifscNumber = $req->ifscNumber;
            $reviewer->password=Hash::make($req->password);
            $reviewer->role = "reviewer";
            $randomCode = str_pad(random_int(0, 99999999), 8, '0', STR_PAD_LEFT);
            $reviewer->reviewerId= $randomCode;
            $image = $req->file('profileImage');
            $imagename = $req->name . time() . '.' . $image->getClientOriginalExtension();
            $image->move('reviewer/ProfileImage', $imagename);
           
            $reviewer->profileImage = $imagename;
        
             $reviewer->save();
             $user =  $reviewer->email;
             $record =  $reviewer;
             $password = $req->password;
             $url = "http://127.0.0.1:8000/member/login";
             Notification::route('mail',$reviewer->email)->notify(new MemberdetailNotification($user, $url,$record,$password));  
             $data= [
                'success' => 'Reviewer Create Successfully',
                     ];
            return response()->json($data);   
        }
           else{
            $data= [
                'error' => 'ProfileImage Filed Is Rdquired',
                     ];
            return response()->json($data);   
           } 
        }
       
      
    
}

public function multiple_reviewerstatus(Request $req){
    if (!empty($req->requestData['reviewerId'])) {
        $reviewers = $req->requestData['reviewerId'];
  
      foreach ($reviewers as $key => $val) {
        $reviewer= Reviewer::find($val);
    $reviewer->status =$req->status;
    $reviewer->save();
      }
      $data = [
        'success' => 'Status Change Successfully',
    ];
    return response()->json($data);
  
  }else{
    $data = [
      'error' => 'Select  reviewer Id',
  ];
  return response()->json($data);
 
   }  

}




public function reviewerstatus(Request $req){
          
    $reviewer= Reviewer::find($req->id);
    $reviewer->status =$req->status;
    $reviewer->save();
    $data= [
        'success' => 'Status Change Sucessfully',
             ];
    return response()->json($data);   
   } 
   public function memberview(Request $req){
    $reviewer= Reviewer::find($req->id);
    $review=BookReviewStatus::where('reviewer_id','=',$req->id)->get();
    $data=[];
    foreach($review as $key=>$val){
        $book= Book::find($val->book_id);
        $val->bookname=$book->book_title;
        $val->subbookname=$book->subtitle;

        
        array_push($data,$val);
    }
    $reviewer->record= $data;
// return $reviewer;
    return redirect('/admin/reviewerdata')->with('reviewer',$reviewer); 

   }
   public function memberedit($id){
    $reviewer= Reviewer::find($id);

    return redirect('/admin/revieweredit')->with('reviewer',$reviewer); 

   }
   public function editreviewer(Request $req){
     
    $validator = Validator::make($req->all(),[
        'reviewerType'=>'required|string',
    ]);
    if($validator->fails()){
        $data= [
            'error' => $validator->errors()->first(),
                 ];
        return response()->json($data);  
       
    }
    if($req->reviewerType == "internal"){
        $validator = Validator::make($req->all(),[
            'reviewerType'=>'required|string',
            'name'=>'required|string',
            'subject'=>'required',
            'designation'=>'required|string',
            'organisationDetails'=>'required|string',
            'phoneNumber'=>'required|string|min:10|max:10',
            'email'=>'required',
            'profileImage'=>'required',
           
        ]);
        if($validator->fails()){
            $data= [
                'error' => $validator->errors()->first(),
                     ];
            return response()->json($data);  
           
        }
   
        if(empty($req->newpassword) && empty($confirmpassword)) {
            $Admin=auth('admin')->user()->first();
            $reviewer = Reviewer::find($req->id);
            $reviewer->name = $req->name;
            $reviewer->subject = $req->subject;
            $reviewer->designation = $req->designation;
            $reviewer->organisationDetails = $req->organisationDetails;
            if ($reviewer->email == $req->email) {
                $reviewer->email = $req->email;
            } else {
                $existingReviewer = Reviewer::where('email', $req->email)->first();
            
                if ($existingReviewer == null) {
                    $reviewer->email = $req->email;
                } else {
                    $data = [
                        'error' => 'Email is already taken',
                    ];
                    return response()->json($data);
                }
            }
            
           
            $reviewer->phoneNumber = $req->phoneNumber; 
            if($req->profileImage !="undefined"){
                $path = 'reviewer/ProfileImage/'.$reviewer->profileImage;
                if(File::exists($path)){
                 File::delete($path);
                }
                File::delete($path);
                $image = $req->file('profileImage');
                $imagename = $req->name . time() . '.' . $image->getClientOriginalExtension();
                $image->move('reviewer/ProfileImage', $imagename);
                $reviewer->profileImage = $imagename;
              }
       
             $reviewer->save();
             $user =  $reviewer->email;
             $record =  $reviewer;
             $password = "########";
             $url = "http://127.0.0.1:8000/member/login";
             Notification::route('mail',$reviewer->email)->notify(new MemberupdateNotification($user, $url,$record,$password));  
             $data = [
                'success' => 'Reviewer update Successfully',
                'type' => asset("reviewer/ProfileImage/" . $reviewer->profileImage)
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
                $Admin=auth('admin')->user()->first();
                $reviewer = Reviewer::find($req->id);
                $reviewer->name = $req->name;
                $reviewer->subject = $req->subject;
                $reviewer->designation = $req->designation;
                $reviewer->organisationDetails = $req->organisationDetails;
                if ($reviewer->email == $req->email) {
                    $reviewer->email = $req->email;
                } else {
                    $existingReviewer = Reviewer::where('email', $req->email)->first();
                
                    if ($existingReviewer == null) {
                        $reviewer->email = $req->email;
                    } else {
                        $data = [
                            'error' => 'Email is already taken',
                        ];
                        return response()->json($data);
                    }
                }
                $reviewer->password=Hash::make($req->newpassword);
                $reviewer->phoneNumber = $req->phoneNumber; 
                if($req->profileImage !="undefined"){
                    $path = 'reviewer/ProfileImage/'.$reviewer->profileImage;
                    if(File::exists($path)){
                     File::delete($path);
                    }
                    File::delete($path);
                    $image = $req->file('profileImage');
                    $imagename = $req->name . time() . '.' . $image->getClientOriginalExtension();
                    $image->move('reviewer/ProfileImage', $imagename);
                    $reviewer->profileImage = $imagename;
                  }
           
                 $reviewer->save();
                 $user =  $reviewer->email;
                 $record =  $reviewer;
                 $password = $req->newpassword;
                 $url = "http://127.0.0.1:8000/member/login";
                 Notification::route('mail',$reviewer->email)->notify(new MemberupdateNotification($user, $url,$record,$password));  
                 $data = [
                    'success' => 'Reviewer update Successfully',
                    'type' => asset("reviewer/ProfileImage/" . $reviewer->profileImage)
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
    }
    }else{
        $validator = Validator::make($req->all(),[
            'reviewerType'=>'required|string',
            'name'=>'required|string',
            'subject'=>'required',
            'designation'=>'required|string',
            'organisationDetails'=>'required|string',
            'phoneNumber'=>'required|string|min:10|max:10',
            'bankName'=>'required|string',
            'accountNumber'=>'required',
            'branch'=>'required|string',
            'ifscNumber'=>'required',
            'email'=>'required|unique:reviewer',
            'profileImage'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'password'=>'required|min:8|max:8',
        ]);
        if($validator->fails()){
            $data= [
                'error' => $validator->errors()->first(),
                     ];
            return response()->json($data);  
           
        }
        if(empty($req->newpassword) && empty($confirmpassword)) {
          
            $reviewer = Reviewer::find($req->id);
            $reviewer->name = $req->name;
            $reviewer->subject = $req->subject;
            $reviewer->designation = $req->designation;
            $reviewer->bankName = $req->bankName;
            $reviewer->accountNumber = $req->accountNumber;
            $reviewer->branch = $req->branch;
            $reviewer->ifscNumber = $req->ifscNumber;
            $reviewer->organisationDetails = $req->organisationDetails;
            if ($reviewer->email == $req->email) {
                $reviewer->email = $req->email;
            } else {
                $existingReviewer = Reviewer::where('email', $req->email)->first();
            
                if ($existingReviewer == null) {
                    $reviewer->email = $req->email;
                } else {
                    $data = [
                        'error' => 'Email is already taken',
                    ];
                    return response()->json($data);
                }
            }
            
           
            $reviewer->phoneNumber = $req->phoneNumber; 
            if($req->profileImage !="undefined"){
                $path = 'reviewer/ProfileImage/'.$reviewer->profileImage;
                if(File::exists($path)){
                 File::delete($path);
                }
                File::delete($path);
                $image = $req->file('profileImage');
                $imagename = $req->name . time() . '.' . $image->getClientOriginalExtension();
                $image->move('reviewer/ProfileImage', $imagename);
                $reviewer->profileImage = $imagename;
              }
       
             $reviewer->save();
             $user =  $reviewer->email;
             $record =  $reviewer;
             $password = "########";
             $url = "http://127.0.0.1:8000/member/login";
             Notification::route('mail',$reviewer->email)->notify(new MemberupdateNotification($user, $url,$record,$password));  
             $data = [
                'success' => 'Reviewer update Successfully',
                'type' => asset("reviewer/ProfileImage/" . $reviewer->profileImage)
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
                $Admin=auth('admin')->user()->first();
                $reviewer = Reviewer::find($req->id);
                $reviewer->name = $req->name;
                $reviewer->subject = $req->subject;
                $reviewer->designation = $req->designation;
                $reviewer->bankName = $req->bankName;
                $reviewer->accountNumber = $req->accountNumber;
                $reviewer->branch = $req->branch;
                $reviewer->ifscNumber = $req->ifscNumber;
                $reviewer->organisationDetails = $req->organisationDetails;
                if ($reviewer->email == $req->email) {
                    $reviewer->email = $req->email;
                } else {
                    $existingReviewer = Reviewer::where('email', $req->email)->first();
                
                    if ($existingReviewer == null) {
                        $reviewer->email = $req->email;
                    } else {
                        $data = [
                            'error' => 'Email is already taken',
                        ];
                        return response()->json($data);
                    }
                }
                $reviewer->password=Hash::make($req->newpassword);
                $reviewer->phoneNumber = $req->phoneNumber; 
                if($req->profileImage !="undefined"){
                    $path = 'reviewer/ProfileImage/'.$reviewer->profileImage;
                    if(File::exists($path)){
                     File::delete($path);
                    }
                    File::delete($path);
                    $image = $req->file('profileImage');
                    $imagename = $req->name . time() . '.' . $image->getClientOriginalExtension();
                    $image->move('reviewer/ProfileImage', $imagename);
                    $reviewer->profileImage = $imagename;
                  }
           
                 $reviewer->save();
                 $user =  $reviewer->email;
                 $record =  $reviewer;
                 $password = $req->newpassword;
                 $url = "http://127.0.0.1:8000/member/login";
                 Notification::route('mail',$reviewer->email)->notify(new MemberupdateNotification($user, $url,$record,$password));  
                 $data = [
                    'success' => 'Reviewer update Successfully',
                    'type' => asset("reviewer/ProfileImage/" . $reviewer->profileImage)
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
    }
  

}
   
}
    
public function publicedit(Request $req){
     

   
    $validator = Validator::make($req->all(),[
      
        'name'=>'required|string',
        'phoneNumber'=>'required|string|min:10|max:10',
        'email'=>'required',
        'membershipId'=>'required',
        'district'=>'required',
       
    ]);

    if($validator->fails()){
        $data= [
            'error' => $validator->errors()->first(),
                 ];
        return response()->json($data);  
       
    }

   

    if(empty($req->newpassword) && empty($req->confirmpassword)) {
    
        $reviewer=Reviewer::find($req->id);
        $reviewer->name = $req->name;
                if ($reviewer->email == $req->email) {
                    $reviewer->email = $req->email;
                } else {
                    $existingReviewer = Reviewer::where('email', $req->email)->first();
                
                    if ($existingReviewer == null) {
                        $reviewer->email = $req->email;
                    } else {
                        $data = [
                            'error' => 'Email is already taken',
                        ];
                        return response()->json($data);
                    }
                }
                $reviewer->phoneNumber = $req->phoneNumber; 
                $reviewer->membershipId = $req->membershipId;
                $reviewer->district = $req->district;

                if($reviewer->save()){
                    $user =  $reviewer->email;
                    $record =  $reviewer;
                    $password = "########";
                    $url = "http://127.0.0.1:8000/member/login";
                    Notification::route('mail',$reviewer->email)->notify(new MemberupdateNotification($user, $url,$record,$password));  
                        $data= [
                            'success' => 'Public Reviewer Uodate Successfully',
                                    ];
                    return response()->json($data); 
            }
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
       $reviewer=Reviewer::find($req->id);
       $reviewer->name = $req->name;
    if ($reviewer->email == $req->email) {
        $reviewer->email = $req->email;
    } else {
        $existingReviewer = Reviewer::where('email', $req->email)->first();
    
        if ($existingReviewer == null) {
            $reviewer->email = $req->email;
        } else {
            $data = [
                'error' => 'Email is already taken',
            ];
            return response()->json($data);
        }
    }
    $reviewer->password=Hash::make($req->newpassword);
    $reviewer->phoneNumber = $req->phoneNumber; 
    $reviewer->membershipId = $req->membershipId;
    $reviewer->district = $req->district;
    // $reviewer->password=Hash::make($req->password);
    if($reviewer->save()){
        $user =  $reviewer->email;
        $record =  $reviewer;
        $password = $req->newpassword;
        $url = "http://127.0.0.1:8000/member/login";
        Notification::route('mail',$reviewer->email)->notify(new MemberupdateNotification($user, $url,$record,$password));  
        $data= [
            'success' => 'Public Reviewer Uodate Successfully',
                 ];
             return response()->json($data);
              }
       
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
    
    
}
}
        public function reviewerpublic($id){
           $reviewer= Reviewer::find($id);
            return redirect('/admin/reviewerpublic')->with('reviewer',$reviewer); 
        
           }
}
