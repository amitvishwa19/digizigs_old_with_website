<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\TermsMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    
    public function index()
    {   
        $categories = Category::orderby('created_at','desc')->with('posts')->get();
        //dd($categories);
        return view('admin.pages.category.category',compact('categories'));
    }

    public function getcategories(){
        //$categories=Category::with('sub_category')->get();//Category::orderby('created_at','desc')->get();
        $categories = Category::where('parent_id', '=', 0)->with('childs')->get();


        return request()->json(200,$categories);
    }

  
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //return $request->all();

        $data = Validator::make($request->all(),[
            'category_name'=>'required|max:255',
            'category_type'=>'required|max:255',      
        ],[
            'category_name.required' => 'Category name is required',
            'category_type.required' => 'Category Type is required',  
        ])->Validate();

        $category = new Category;
        $category->type = $request->category_type;
        $category->name = $request->category_name;
        $category->slug = str_slug( $request->category_name );
        
        $cat_save = $category->save();

        if($cat_save){
            return redirect()->route('category.index')->with('message', 'Category added successfully');
        }

    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {   

        $category = Category::find($id);
        $categories = Category::orderby('created_at','desc')->get();
        return view('admin.pages.category.category_edit',compact('category','categories'));
    }

   
    public function update(Request $request, $id){

        //return $request->all();

        $data = Validator::make($request->all(),[
            'name'=>'required|unique:tags',
                 
        ],[
            'name.required' => 'Category already avaliable  ',
           
        ])->Validate();
       
        $category = Category::find($id);
        
        $category->name = $request->name;
        $category->slug = str_slug( $request->name );
       
        $cat_save = $category->save();

        $cat_save = $category->save();
        if($cat_save){
           
            return redirect()->route('category.index')->with('success', 'Category Updated successfully');
        }

    }

  
    public function destroy($id)
    {

        $category = Category::find($id);
        $is_deleted=$category->delete();
        if($is_deleted){
            return redirect()->route('category.index')->with('deleted', 'Category deleted successfully');
        }
    }
}
