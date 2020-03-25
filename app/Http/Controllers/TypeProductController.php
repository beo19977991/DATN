<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TypeProduct;

class TypeProductController extends Controller
{
    public function getList()
    {
        $typeProduct= TypeProduct::all();
        return view('admin.type-product.list',['typeProduct'=>$typeProduct]);
    }
    public function getAdd()
    {
        $typeProduct= TypeProduct::all();
        return view('admin.type-product.add',['typeProduct'=>$typeProduct]);
    }
    public function postAdd(Request $request)
    {
        $this->validate($request,[
            'type_product'=>'required',
        ],[
            'type_product.required'=>'You have not enter Type Product Name'
        ]);
        $typeProduct = new TypeProduct;
        $typeProduct->typeProductName = $request->type_product;
        $typeProduct->save();
        return redirect('admin/type-product/add')->with('message','Add Type Product Success');
    }
    public function getEdit($id)
    {
        $typeProduct = TypeProduct::find($id);
        return view('admin.type-product.edit',['typeProduct'=>$typeProduct]);
    }
    public function postEdit(Request $request, $id)
    {    
        $this->validate($request,[
            'type_product'=>'required',
        ],[
            'type_product.required'=>'You have not enter Type Exercise Name'
        ]);
        $typeProduct = TypeProduct::find($id);
        $typeProduct->typeProductName = $request->type_product;
        $typeProduct->save();
        return redirect('admin/type-product/edit/'.$id)->with('message','Edit Type Product Success');
    }
    public function getDelete($id)
    {
        $typeProduct =TypeProduct::find($id);
        $typeProduct->delete();
        return redirect('admin/type-product/list')->with('message','Delete Success');
    }
}
