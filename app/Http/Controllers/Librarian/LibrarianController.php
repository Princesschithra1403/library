<?php

namespace App\Http\Controllers\Librarian;
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
use DB;
class LibrarianController extends Controller
{
        
   public function metabooklist(){

      $id=auth('librarian')->user()->id; 
      $book = Book::where('book_reviewer_id','=',$id)->get();
      return view('librarian/meta_book_list')->with('book',$book); 
     
   }
   public function librarianapprovestatus(Request $req){
    $book = Book::find($req->id);
    $book->book_status="1";
    $book->save();
    $data= [
        'success' => 'Book review status change Successfully',
             ];
    return response()->json($data); 

   }
   public function librarianrejectstatus(Request $req){
    $book = Book::find($req->id);
    $book->book_status="0";
    $book->reject_message=$req->rejectmessage;
    $book->save();
    $data= [
        'success' => 'Book review status change Successfully',
             ];
    return response()->json($data); 

   }
   public function meta_complete_book_list(){
    $id=auth('librarian')->user()->id; 
    $book = Book::where('book_reviewer_id','=',$id)->where('book_status','=','1')->get();
    return view('librarian/meta_complete_book_list')->with('book',$book); 
   }
   public function meta_pending(){
    $id=auth('librarian')->user()->id; 
    $book = Book::where('book_reviewer_id','=',$id)->where('book_status','=',Null)->get();
    return view('librarian/meta_pending')->with('book',$book); 
   }
   
public function bookview($id){
   
    $book=Book::find($id);
    $book->primaryauthor1= json_decode($book->primaryauthor); 
    $book->trans_from1= json_decode($book->trans_from); 
    $book->other_img1= json_decode($book->other_img); 
    $book->series1= json_decode($book->series); 
    // return $book;
    $book->banner_img1= json_decode($book->banner_img); 
    $book->booktag1= json_decode($book->booktag); 
    $book->trans_author1= json_decode($book->trans_author); 
    $book->bookdescription1= json_decode($book->bookdescription); 
    $book->series1= json_decode($book->series); 
    $book->volume1= json_decode($book->volume); 
  if($book->user_type == "publisher"){
   $pub=Publisher::find( $book->user_id);
   $book->firstName= $pub->firstName;
   $book->lastName= $pub->lastName;
  }else if($book->user_type == "distributor"){
    $pub=Distributor::find( $book->user_id);
    $book->firstName= $pub->firstName;
    $book->lastName= $pub->lastName;
  }else{
    $pub=PublisherDistributor::find( $book->user_id);
    $book->firstName= $pub->firstName;
    $book->lastName= $pub->lastName;
  }
  \Session::put('book', $book);
  // return $book;
    return redirect('librarian/bookview')->with('book',$book); 
    
}
public function meta_reject(){
    $id=auth('librarian')->user()->id; 
    $book = Book::where('book_reviewer_id','=',$id)->where('book_status','=','0')->get();
    return view('librarian/meta_reject')->with('book',$book); 
   }



   public function librarianchangepassword(Request $req){
    
    $validator = Validator::make($req->all(),[
        'currentPassword'=>'required|string',
        'newPassword'=>'required|string',
        'confirmPassword'=>'required',
    ]);
    if($validator->fails()){
        $data= [
            'error' => $validator->errors()->first(),
                 ];
        return response()->json($data);  
       
    }
    $Librarian=auth('librarian')->user()->first();
    if((Hash::check($req->currentPassword,$Librarian->password))){
       if($req->newPassword == $req->confirmPassword){
         $Librarian->password=Hash::make($req->newPassword);
         $Librarian->save();
         $data= [
            'success' => 'Passdword Change  Successfully',
                 ];
        return response()->json($data);  
       
        }else{
            $data= [
                'error' => 'newPassword and confirmPassword is mishmatch',
                     ];
            return response()->json($data);  
        }
    }else{
        $data= [
            'error' => 'Current password is incorrect',
                 ];
        return response()->json($data);  
       
    }

}
    }
    