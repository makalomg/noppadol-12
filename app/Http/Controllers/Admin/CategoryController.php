<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category(){
        $category = Category::orderBy('category_id','desc')->Paginate('5');
        return view('backend.category.index',compact('category'));
    }

    public function create(){
        return view('backend.category.create');
    }

    public function insert(Request $request){

        //ทำการป้องกันการกรอกข้อมูล
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:255',
        ],[
            'name.required'=>'กรุณากรอกชื่อประเภทสินต้า',
            'name.unique'=>'ชื่อนี้มีอยู่ในฐานข้อมูลแล้ว',
            'name.max'=> 'กรอกข้อมูลไม่เกิน 255 ตัวอักษร',
        ]);
        
        
        //บันทึกข้อมูล
        $cat = new Category(); 
        $cat->name = $request->name; 
        $cat->save();
        alert()->success('บันทึกข้อมูลสำเร็จ','บันทึกแล้ว');
        return redirect()->route('c.index');
    }

    public function edit($category_id){
        $category = Category::find($category_id);
        return view('backend.category.edit',compact('category'));

    }

    public function update(Request $request, $category_id){
        $category = Category::find($category_id);
        $category->name = $request->name;
        $category->update();
        alert()->success('อัพเดตข้อมูลสำเร็จ','บันทึกแล้ว');
        return redirect()->route('c.index');
    }

    public function delete($category_id){
        $category = Category::find($category_id);
        $category->delete();
        alert()->success('ลบข้อมูลสำเร็จ','ข้อมูลถูกลบออกแล้ว');
        return redirect()->route('c.index');
    }
}
