<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class WebsitebookController extends Controller
{
   // Import your Book model

    public function  websitebook()
    {
      
    $books = Book::where('negotiation_status', '=', 2)
    ->where('book_active_status', '=', 1)
    ->orderBy('marks', 'desc')
    ->paginate(3); // Adjust the pagination size as needed

$popularBooks = Book::where('negotiation_status', '=', 2)
            ->where('book_active_status', '=', 1)
            ->orderBy('marks', 'desc')
            ->paginate(3);

return view('product', compact('books', 'popularBooks'));
               
    // return view('product', compact('books'));
    
}

// public function book_categories(Request $req)
// {
//     $checkedIds = $req->input('checkedIds');

//     $books = Book::where('negotiation_status', '=', 2)
//     ->where('book_active_status', '=', 1)
//     ->whereIn('category', $checkedIds)
//     ->orderBy('marks', 'desc')
//     ->paginate(3);

// $html = '<div class="row row-cols-xxl-3 row-cols-xl-3 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1 tpproduct__shop-item">';

// foreach ($books as $val) {
//     $html .= '
//     <div class="col">
//        <div class="tpproduct p-relative">
//           <div class="tpproduct__thumb p-relative text-center">
//              <a href="#"><img src="' . asset("Books/full/".$val->full_img) . '" class="w-100" alt=""></a>
//              <a class="tpproduct__thumb-img" href="/shope"><img src="' . asset("Books/full/".$val->full_img) . '" alt=""></a>
//              <div class="tpproduct__info bage">
              
//              </div>
//              <div class="tpproduct__shopping">
//                 <a class="tpproduct__shopping-wishlist" href="/wishlist"><i class="icon-heart icons"></i></a>
//                 <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
//                 <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
//              </div>
//           </div>
//           <div class="tpproduct__content">
//              <span class="tpproduct__content-weight">
//                 <a href="/shope">' . $val->category . '</a>
//              </span>
//              <h4 class="tpproduct__title">
//                 <a href="/shope-top.html">' . $val->book_title . '</a>
//              </h4>
//              <p class="text-primary"><b>By</b> Name</p> | ' . \Carbon\Carbon::parse($val->created_at)->format('d-M-Y') . '

//              <div class="tpproduct__price">
//                 <span>$' . $val->final_price . '</span>
               
//              </div>
//           </div>
//           <div class="tpproduct__hover-text">
//              <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
//                 <a class="tp-btn-2" href="/cart">Add to cart</a>
//              </div>
//              <div class="tpproduct__descrip">
//                 <ul>
//                    <li>Subject: ' . $val->subject . '</li>
//                    <li>MFG: August 4, 2021</li>
//                    <li>LIFE: 60 days</li>
//                 </ul>
//              </div>
//           </div>
//        </div>
//     </div>';
// }

// $html .= '</div>';

// $html .= '<div class="basic-pagination text-center mt-35">
//     <nav>
//         <ul>';

// if ($books->onFirstPage()) {
//     $html .= '<li><span class="current">1</span></li>';
// } else {
//     $html .= '<li><a href="' . $books->previousPageUrl() . '">1</a></li>';
// }

// if ($books->currentPage() >= 2) {
//     $html .= '<li><a href="' . $books->url(2) . '">2</a></li>';
// }

// if ($books->currentPage() >= 3) {
//     $html .= '<li><a href="' . $books->url(3) . '">3</a></li>';
// }

// if ($books->hasMorePages()) {
//     $html .= '<li><a href="' . $books->nextPageUrl() . '"><i class="icon-chevrons-right"></i></a></li>';
// }

// $html .= '</ul>
//     </nav>
// </div>';


// $data = [
//     "success" => $html, // Constructing an array with a key 'success' and assigning the HTML content to it
// ];

// return response()->json($data); // Returning a JSON response with the constructed array


// }
// second
// public function book_categories(Request $req)
// {
//     // Retrieve checkedIds from the request, defaulting to an empty array if not present
//     $checkedIds = $req->input('checkedIds', []);

//     // Ensure $checkedIds is an array and not null
//     if (!is_array($checkedIds)) {
//         // Handle the case where $checkedIds is not an array (e.g., set it to an empty array)
//         $checkedIds = [];
//     }

//     // Now you can safely use $checkedIds in your query
//     $books = Book::where('negotiation_status', '=', 2)
//         ->where('book_active_status', '=', 1);

//     // Add the whereIn clause only if $checkedIds is not empty
//     if (!empty($checkedIds)) {
//         $books->whereIn('category', $checkedIds);
//     }

//     $books = $books->orderBy('marks', 'desc')->paginate(3);

//     $html = '<div class="row row-cols-xxl-3 row-cols-xl-3 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1 tpproduct__shop-item">';

//     if ($books->isEmpty()) {
//         // Handle the case where $books is empty, perhaps by returning a message or an empty result
//         $html .= '<div>No books found</div>';
//     } else {
//         foreach ($books as $val) {
//             $html .= '
//             <div class="col">
//                <div class="tpproduct p-relative">
//                   <div class="tpproduct__thumb p-relative text-center">
//                      <a href="#"><img src="' . asset("Books/full/".$val->full_img) . '" class="w-100" alt=""></a>
//                      <a class="tpproduct__thumb-img" href="/shope"><img src="' . asset("Books/full/".$val->full_img) . '" alt=""></a>
//                      <div class="tpproduct__info bage">
                      
//                      </div>
//                      <div class="tpproduct__shopping">
//                         <a class="tpproduct__shopping-wishlist" href="/wishlist"><i class="icon-heart icons"></i></a>
//                         <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
//                         <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
//                      </div>
//                   </div>
//                   <div class="tpproduct__content">
//                      <span class="tpproduct__content-weight">
//                         <a href="/shope">' . $val->category . '</a>
//                      </span>
//                      <h4 class="tpproduct__title">
//                         <a href="/shope-top.html">' . $val->book_title . '</a>
//                      </h4>
//                      <p class="text-primary"><b>By</b> Name</p> | ' . \Carbon\Carbon::parse($val->created_at)->format('d-M-Y') . '
        
//                      <div class="tpproduct__price">
//                         <span>$' . $val->final_price . '</span>
                       
//                      </div>
//                   </div>
//                   <div class="tpproduct__hover-text">
//                      <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
//                         <a class="tp-btn-2" href="/cart">Add to cart</a>
//                      </div>
//                      <div class="tpproduct__descrip">
//                         <ul>
//                            <li>Subject: ' . $val->subject . '</li>
//                            <li>MFG: August 4, 2021</li>
//                            <li>LIFE: 60 days</li>
//                         </ul>
//                      </div>
//                   </div>
//                </div>
//             </div>';
//         }
//     }

//     $html .= '</div>';

//     $html .= '<div class="basic-pagination text-center mt-35">
//         <nav>
//             <ul>';

//     if ($books->onFirstPage()) {
//         $html .= '<li><span class="current">1</span></li>';
//     } else {
//         $html .= '<li><a href="' . $books->previousPageUrl() . '">1</a></li>';
//     }

//     if ($books->currentPage() >= 2) {
//         $html .= '<li><a href="' . $books->url(2) . '">2</a></li>';
//     }

//     if ($books->currentPage() >= 3) {
//         $html .= '<li><a href="' . $books->url(3) . '">3</a></li>';
//     }

//     if ($books->hasMorePages()) {
//         // Append the $checkedIds to the next page URL
//         $nextPageUrl = $books->nextPageUrl();
//         if ($nextPageUrl !== null) {
//             $nextPageUrl .= '&checkedIds=' . implode(',', $checkedIds);
//         }
//         $html .= '<li><a href="' . $nextPageUrl . '"><i class="icon-chevrons-right"></i></a></li>';
//     }

//     $html .= '</ul>
//         </nav>
//     </div>';


//     $data = [
//         "success" => $html, // Constructing an array with a key 'success' and assigning the HTML content to it
//     ];

//     return response()->json($data); // Returning a JSON response with the constructed array
// }

public function book_categories(Request $req)
{
    $checkedIds = $req->input('checkedIds', []);

    $books = Book::where('negotiation_status', '=', 2)
        ->where('book_active_status', '=', 1);

    if (!empty($checkedIds)) {
        $books->whereIn('category', $checkedIds); // Apply whereIn() to the $books query builder
    }

    $books = $books->orderBy('marks', 'desc')->paginate(3);

    $html = '<div class="row row-cols-xxl-3 row-cols-xl-3 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1 tpproduct__shop-item">';

    foreach ($books as $val) {
        $html .= '
        <div class="col">
           <div class="tpproduct p-relative">
              <div class="tpproduct__thumb p-relative text-center">
                 <a href="/shope/' . $val->id . '"><img src="' . asset("Books/full/".$val->full_img) . '" class="w-100" alt=""></a>
                 <a class="tpproduct__thumb-img" href="/shope/' . $val->id . '""><img src="' . asset("Books/full/".$val->full_img) . '" alt=""></a>
                 <div class="tpproduct__info bage"></div>
                 <div class="tpproduct__shopping">
                    <a class="tpproduct__shopping-wishlist" href="/wishlist"><i class="icon-heart icons"></i></a>
                    <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                    <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                 </div>
              </div>
              <div class="tpproduct__content">
                 <span class="tpproduct__content-weight">
                    <a href="/shope/' . $val->id . '">' . $val->category . '</a>
                 </span>
                 <h4 class="tpproduct__title">
                    <a href="/shope/' . $val->id . '">' . $val->book_title . '</a>
                 </h4>
                 <p class="text-primary"><b>By</b> Name</p> | ' . \Carbon\Carbon::parse($val->created_at)->format('d-M-Y') . '
                 <div class="tpproduct__price">
                    <span>$' . $val->final_price . '</span>
                 </div>
              </div>
              <div class="tpproduct__hover-text">
                 <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                    <a class="tp-btn-2" href="/cart">Add to cart</a>
                 </div>
                 <div class="tpproduct__descrip">
                    <ul>
                       <li>Subject: ' . $val->subject . '</li>
                       <li>MFG: August 4, 2021</li>
                       <li>LIFE: 60 days</li>
                    </ul>
                 </div>
              </div>
           </div>
        </div>';
    }

    $html .= '</div>';

    $html .= '<div class="basic-pagination text-center mt-35">
        <nav>
            <ul>';

    if ($books->onFirstPage()) {
        $html .= '<li><span class="current">1</span></li>';
    } else {
        $html .= '<li><a href="' . $books->previousPageUrl() . '">1</a></li>';
    }

    if ($books->currentPage() >= 2) {
        $html .= '<li><a href="' . $books->url(2) . '">2</a></li>';
    }

    if ($books->currentPage() >= 3) {
        $html .= '<li><a href="' . $books->url(3) . '">3</a></li>';
    }

    if ($books->hasMorePages()) {
        $html .= '<li><a href="' . $books->nextPageUrl() . '"><i class="icon-chevrons-right"></i></a></li>';
    }

    $html .= '</ul>
        </nav>
    </div>';

    $data = [
        "success" => $html,
    ];

    return response()->json($data);
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

//   return $book;
// return view('shope', compact('data'));
\Session::put('book', $book);
    return redirect('singlebookview');   
    // return redirect('shope');    
}


}