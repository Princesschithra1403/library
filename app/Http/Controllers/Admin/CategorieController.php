<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Throwable;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Specialcategories;
class CategorieController extends Controller
{
    public function categoryadd(Request $req){
     
        $validator = Validator::make($req->all(),[
            'name'=>'required|string',
            'status'=>'required|string',
           
           
        ]);
        if($validator->fails()){
            $data= [
                'error' => $validator->errors()->first(),
                     ];
            return response()->json($data);  
           
        }
       
      
             $category= New Specialcategories();
             $category->name=$req->name;
             $category->status=$req->status;
             $category->save();
             $data= [
                'success' => 'Special Categories  Create Successfully',
                     ];
            return response()->json($data);  
           
          
      
    
    }
    public function  change_status(Request $req){
   
        $category=Specialcategories::find($req->id);
        $category->status=$req->status;
        $category->save();
        $data= [
            'success' => 'Status Change  Successfully',
                 ];
        return response()->json($data);  
    }
    public function  categories_edit($id){
   
        $category=Specialcategories::find($id);
        \Session::put('category', $category);
        return redirect('admin/categoriesedit');
    }
    
    public function categoryedit(Request $req){
      
        $validator = Validator::make($req->all(),[
            'status'=>'required|string',
            'name'=>'required|string',
           
        ]);
        if($validator->fails()){
            $data= [
                'error' => $validator->errors()->first(),
                     ];
            return response()->json($data);  
           
        }
       
             $category=Specialcategories::find($req->id);
             $category->name=$req->name;
             $category->status=$req->status;
             $category->save();
             $data= [
                'success' => 'Special Categories  Update Successfully',
                     ];
            return response()->json($data);  
           
          
      
    
    }
    public function  categoriesdelete(Request $req){

        $category=Specialcategories::find($req->id);
        $category->delete();
        $data= [
            'success' => 'Special Categories delete Successfully',
                 ];
        return response()->json($data);  
    }
    
    
}
