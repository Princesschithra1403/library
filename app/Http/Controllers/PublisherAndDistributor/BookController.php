<?php

namespace App\Http\Controllers\PublisherAndDistributor;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\District;
use Illuminate\Support\Facades\Validator;
use Throwable;
use Carbon\Carbon;
use App\Models\Subadmin;
use App\Models\Ticket;
use App\Models\Book;
use App\Models\Publisher;
use Illuminate\Support\Facades\Hash;
use File;
use Illuminate\Support\Str;
use App\Models\Notifications;
use App\Models\Admin;
use App\Models\Procurementpaymrnt;

class BookController extends Controller
{
    
public function create(Request $request){
    $validator= Validator::make($request->all(),[
        'book_title'                          =>['required'],
        'weight'                          =>['required'],
        'type'                          =>['required'],
        'length_breadth'                          =>['required'],
        'paper_finishing'                          =>['required'],
        'currency_type'                          =>['required'],
        'width'                          =>['required'],
        'gsm'                          =>['required'],
        'quality'                          =>['required'],
        'multicolor'                          =>['required'],
        'monocolor'                          =>['required'],
        'pages'                          =>['required'],
        'isbn'                          =>['required'],
        'front_img'                          =>['required'],
        'back_img'                          =>['required'],
        'full_img'                          =>['required'],
        'place'                          =>['required'],
        'price'                          =>['required'],
        'language.*'                          =>['required'],
        'category'                          =>['required'],
        'description'                          =>['required'],
        'author_name'                          =>['required'],
        'banner_img'                          =>['required'],
        'author_description'                          =>['required'],
        'bookdescription.*'                          =>['required'],
        'productdescription'                          =>['required'],
                    
    ]);
    if($validator->fails()){
        return $validator->errors();
        // return redirect()->back()->withInput()->withErrors($validator->errors());
       }

      $heightWidthString = $request->length_breadth;


      $dimensionsArray = explode('x', $heightWidthString);
      $length = trim($dimensionsArray[0]);
      $breadth = trim($dimensionsArray[1]);
   
        $series_number = $request->series_number;
       $series_title = $request->series_title;
       $isbn_number = $request->isbn_number;
       $series_num = sizeof($series_number);
       $series=[];
       for($i=0;$i<$series_num;$i++){
           $obj=(Object)[
               "series_number"=>$series_number[$i],
               "series_title"=>$series_title[$i],
               "isbn_number"=>$isbn_number[$i],
           ];
           array_push($series,$obj);
       }

    //    volume
    $volume_number = $request->volume_number;
    $volume_title = $request->volume_title;
    $isbn_number1 = $request->isbn_number1;
    $volume_num = sizeof($volume_number);
    $volume=[];
    for($i=0;$i<$volume_num;$i++){
        $obj=(Object)[
            "volume_number"=>$volume_number[$i],
            "volume_title"=>$volume_title[$i],
            "isbn_number"=>$isbn_number[$i],
        ];
        array_push($volume,$obj);
    }
     
       $book = new Book();
        if($request->sample_file == "Pdf"){
            if ($request->hasFile('sample_pdf')) {
                $samplepdf = $request->file('sample_pdf');
               $samplepdf_name = $request->book_title . time() . '_' . $samplepdf->getClientOriginalName();
                $samplepdf->move(('Books/samplepdf'), $samplepdf_name);
                $book->sample_pdf = $samplepdf_name;
                $book->sample_file = $request->sample_file;

                
            }

        }else{
           
            if ($request->hasFile('sample_epub')) {
                $sampleepub = $request->file('sample_epub');
               $sampleepub_name = $request->book_title . time() . '_' . $sampleepub->getClientOriginalName();
                $sampleepub->move(('Books/sampleepub'), $sampleepub_name);
                $book->sample_epub = $sampleepub_name;
                $book->sample_file = $request->sample_file;
        }
    }
  
       if ($request->hasFile('front_img')) {
        $front = $request->file('front_img');
        $front_name = $request->book_title . time() . '_' . $front->getClientOriginalName();
        $front->move(('Books/front'), $front_name);
        $book->front_img = $front_name;
    }
  // Back Image
if ($request->hasFile('back_img')) {
    $back = $request->file('back_img');
    $back_name = $request->book_title . time() . '_' . $back->getClientOriginalName();
    $back->move(('Books/back'), $back_name);
    $book->back_img = $back_name;
}
 //Other Image
 if(isset($request->full_img)){
    if ($request->hasFile('full_img')) {
        $full = $request->file('full_img');
        $full_name = $request->book_title . time() . '_' . $full->getClientOriginalName();
        $full->move(('Books/full'), $full_name);
        $book->full_img = $full_name;
    }
 }
       

        //Author Image
        if ($request->hasFile('author_img')) {
            $author_img = $request->file('author_img');
            $author_img_name = $request->book_title . time() . '_' . $author_img->getClientOriginalName();
            $author_img->move(('Books/author_img'), $author_img_name);
            $book->author_img = $author_img_name;
        }
        
        if(isset($request->banner_img)){
           
            $bannerimg = $request->banner_img;
            
            $mem_len = sizeof($bannerimg);
            $banner=[];
            for($i=0;$i<$mem_len;$i++){
                $bannerim = $bannerimg[$i];
                $banner_name=$request->book_title.time().'_'.$bannerim->getClientOriginalName();
                $bannerim->move(('Books/banner'),$banner_name);  
               
                array_push($banner,$banner_name);
            }
              
            $book->banner_img = json_encode($banner);
        }
   
        //Banner Image
        // if ($request->hasFile('banner_img')) {
        //     $banner = $request->file('banner_img');
        //     $banner_name = $request->book_title . time() . '_' . $banner->getClientOriginalName();
        //     $banner->move(public_path('Books/banner'), $banner_name);
        //     $book->banner_img = $banner_name;
        // }
        

          //Product Image
          if(isset($request->product_img)){  

            if ($request->hasFile('product_img')) {
                $product = $request->file('product_img');
                $product_name = $request->book_title . time() . '_' . $product->getClientOriginalName();
                $product->move(('Books/product'), $product_name);
                $book->product_img = $product_name;
            }
            
        }

        //otherImg

        if(isset($request->other_img)){
           
            $subsidiary_doc = $request->other_img;
            
            $mem_len = sizeof($subsidiary_doc);
            $others=[];
            for($i=0;$i<$mem_len;$i++){
                $other = $subsidiary_doc[$i];
                $other_name=$request->book_title.time().'_'.$other->getClientOriginalName();
                $other->move(('Books/other_img'),$other_name);  
               
                array_push($others,$other_name);
            }
              
            $book->other_img = json_encode($others);
        }


   

       $book->book_title = $request->book_title ;
       $book->subtitle =       $request->subtitle ?? Null;
       $book->series =        json_encode($series) ?? Null ;
       $book->volume =        json_encode($volume) ?? Null ;
       $book->booktag =        json_encode($request->tag)  ?? Null;
       $book->edition_number =       $request->edition_number  ?? Null;
       $book->primaryauthor =      json_encode( $request->primaryauthor) ;
       $book->trans_author =        json_encode($request->trans_author)  ?? Null;
       $book->trans_from =        json_encode($request->trans_from)  ?? Null;
       $book->type =        $request->type;
       $book->length =       $length ;
       $book->breadth =       $breadth ;
       $book->paper_finishing =      $request->paper_finishing ;
       $book->length_breadth =      $request->length_breadth ;
       $book->currency_type =      $request->currency_type ;
       $book->width =       $request->width ;
       $book->weight =       $request->weight ;

       $book->gsm =       $request->gsm ;
       $book->quality =       $request->quality ;
       $book->multicolor =       $request->multicolor ;
       $book->monocolor =       $request->monocolor ;
       $book->pages =       $request->pages ;
       $book->isbn =       $request->isbn ;
       $book->subject =       $request->subject ;

       $randomCode = str_pad(random_int(0, 99999999), 8, '0', STR_PAD_LEFT);

       $book->product_code =       $randomCode ;
       $book->others =       $request->others  ?? Null;
       $book->place =       $request->place ;
       $book->price =       $request->price ;
       $book->language =       $request->language;
       $book->other_indian= $request->Other_Indian ?? Null;
       $book->other_foreign= $request->Other_Foreign ?? Null;
       $book->category =       $request->category ;
       $book->description =       $request->description ;
       $book->notes =       $request->notes  ?? Null;
       $book->author_name =       $request->author_name ;
       $book->author_description =       $request->author_description ;
       $book->bookdescription =       json_encode($request->bookdescription) ;
       $book->productdescription =       $request->productdescription  ;   
       $book->nameOfPublisher =       $request->nameOfPublisher  ;   
       $book->yearOfPublication =       $request->yearOfPublication  ;  
       $book->user_type =    "publisher_distributor" ;
       $book->user_id =   auth('publisher_distributor')->user()->id; 
       $book->save();
       return back()->with('success',"Books added successfully");


}
public function bookmanageall(){
      $id=auth('publisher_distributor')->user()->id;
      $data=Book::where('user_id','=',$id)->where('book_procurement_status','=',0)->get();
      return view('publisher_and_distributor.book_manage_all')->with('data',$data);   
}

public function bookmanageview($id){
   
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
  $book->firstName=auth('publisher_distributor')->user()->firstName;
  $book->lastName=auth('publisher_distributor')->user()->lastName;
//   return $book;
    return redirect('publisher_and_distributor/bookmanageview')->with('book',$book);    
}
public function procurement(){
    $id=auth('publisher_distributor')->user()->id;
    $data=Book::where('user_id','=',$id)->where('book_procurement_status','=',0)->get(); 
    return view('publisher_and_distributor.book_procurement')->with('data',$data); 
}
public function procurelist(){
    $id=auth('publisher_distributor')->user()->id;
    $data=Book::where('user_id','=',$id)->where('book_procurement_status','=',1)->where('book_status','=',null)->get(); 
    return view('publisher_and_distributor.book_procurement_list')->with('data',$data); 
}
public function procurereject(){
    $id=auth('publisher_distributor')->user()->id;
    $data=Book::where('user_id','=',$id)->where('book_procurement_status','=',1)->where('book_status','=',0)->get(); 
    return view('publisher_and_distributor.book_procurement_reject')->with('data',$data); 
}
public function procurecompleted(){
    $id=auth('publisher_distributor')->user()->id;
    $data=Book::where('user_id','=',$id)->where('book_procurement_status','=',1)->where('book_status','=',1)->get(); 
    return view('publisher_and_distributor.book_procurement_complete')->with('data',$data); 
}

public function procurementstatus(Request $request){
    $id=auth('publisher_distributor')->user()->id;
    $data1=Book::where('user_id','=',$id)->where('id','=',$request->id)->first();   
    $data1->book_procurement_status = 1;
    $data1->save();
    $data= [
        'success' => 'Book applied Successfully',
             ];
    return response()->json($data);   
}
public function checkBookTitle(Request $request)
{
    $newBookTitle = trim($request->input('book_title'));

    $processedNewTitle = preg_replace('/[^a-zA-Z0-9]/', '', strtolower(preg_replace('/\s+/', '', preg_replace('/(?<!^)[A-Z]/', '_$0', $newBookTitle))));

    $existingTitles = Book::pluck('book_title')->map(function ($title) {
        return preg_replace('/[^a-zA-Z0-9]/', '', strtolower(trim($title)));
    });

    $isUnique = !$existingTitles->contains($processedNewTitle);

    $response = $isUnique
        ? ['success' => true]
        : ['error' => 'Please enter a unique title. This title is already in use.'];

    return response()->json($response);
}



public function applay_procurment(Request $request){
    $validator = Validator::make($request->all(), [
  
        'bookId'=> 'required|array|min:1',
      
    ]);

    if ($validator->fails()) {
        $data = [
            'error' => $validator->errors()->first(),
        ];
        return response()->json($data);
    }
    $bookitem=[];
    $bookIds = $request->input('bookId', []);
    foreach($bookIds as $key=>$val){
   
        $books = Book::find($val);
        array_push($bookitem,$books);

    }
    \Session::put('bookitem', $bookitem);
  
    $data= [
        'success' => 'Book Send Payment Page Successfully',
             ];
    return response()->json($data);  
 }

 public function pay_endpoint(Request $request){

   $record= \Session::get('bookitem');
   $id=auth('publisher_distributor')->user()->id;

   $bookitem =[];
   foreach($record as $key=>$val){
    array_push($bookitem,$val->id);


    }

   $id=auth('publisher_distributor')->user()->id;
   $pay = New Procurementpaymrnt();
   $pay->bookId = json_encode( $bookitem);
   $pay->userName = auth('publisher_distributor')->user()->firstName . ' ' . auth('publisher_distributor')->user()->lastName ;
   
   $pay->userId = $id;
   $pay->amount = "1000";
   $pay->totalAmount =  count($record) *1000;;
   $pay->userType = "publisher cum distributor";
   $pay->paymentType = "gpay";
   $randomCode = str_pad(random_int(0, 99999999), 8, '0', STR_PAD_LEFT);
   $pay->invoiceNumber =       $randomCode ;
   $pay->save();
   foreach($record as $key=>$val){
   $data1=Book::where('user_id','=',$id)->where('id','=',$val->id)->first();  
 
   $data1->book_procurement_status = "1";
   $data1->save();

   }

   $notifi= new Notifications();
   $admin=Admin::first();
   
   $notifi->message = "Book Applied For Procurement";
   $notifi->to= $admin->id;
   $notifi->from=auth('publisher_distributor')->user()->id;
   $notifi->type="publisher_distributor";
   $notifi->save();
   $data= [
       'success' => 'Book applied Successfully',
            ];
   return response()->json($data); 
 }

 public function bookdelete(Request $request){

    $id=auth('publisher_distributor')->user()->id;
   
    $data1=Book::where('user_id','=',$id)->where('id','=',$request->id)->first();  
    $data1->delete();
 
 
    $data= [
        'success' => 'Book deleted Successfully',
             ];
    return response()->json($data); 
  }
 
  public function multibookdelete(Request $request){

    $id=auth('publisher_distributor')->user()->id;
    $bookIds = $request->input('bookId', []);
    foreach($bookIds as $key=>$val){
        $data1=Book::where('user_id','=',$id)->where('id','=',$val)->first();  
        $data1->delete();

    }
    $data= [
        'success' => 'Book deleted Successfully',
             ];
    return response()->json($data); 
  }
 public function sendnegotiationstatus(Request $req) {
    $bookId=$req->bookId;
    $status=$req->status;

   if($status == "Approve"){
    $data1 = Book::find($bookId);
    $data1->final_price= $data1->calculated_price;
    $data1->negotiation_status ="2";
    $data1->save();
    $data= [
        'success' => 'Approved Successfully',
             ];
    return response()->json($data); 
   }else{
    $data1 = Book::find($bookId);
    $data1->negotiation_status ="3";
    $data1->save();
    $data= [
        'success' => 'Reject Successfully',
             ];
    return response()->json($data); 
   }
   

  
   

}
public function sendnegotiationsamount(Request $req) {

   if($req->amount !=null){
    $data1 = Book::find($req->bookId);

    $data1->negotiation_status = "1";
    $data1->negotiation_price = $req->amount;
    $data1->negotiation_message = $req->Description;
    $data1->save();

    $data = [
        'success' => 'Negotiation send Successfully',
    ];

    return response()->json($data);
   }else{
    $data = [
        'error' => 'Amount Filed is  Required',
    ];

    return response()->json($data);
   }

   
}

public function isbn(Request $req) {
    $id=auth('publisher_distributor')->user()->id;

    $data1=Book::where('user_id','=',$id)->where('isbn','=',$req->bookisbn)->first();  
    if($data1 != null){
        $data= [
            'error' => 'Isbn Number Is duplecate Please Enter the Valid Isbn Number',
                 ];
        return response()->json($data);
    }
 
 

}
}