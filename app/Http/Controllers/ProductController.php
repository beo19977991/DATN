<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Product;
use App\TypeProduct;


class ProductController extends Controller
{
    public function getList()
    {
        $product = Product::all();
        return view('admin.product.list',['product'=>$product]);
    }
    public function getAdd()
    {
        $typeProduct = TypeProduct::all();
        return view('admin.product.add',['typeProduct'=>$typeProduct]);
    }
    public function postAdd(Request $request)
    {
        $this->validate($request,[
            'product_name'=>'required',
            'preview'=>'required',
            'price'=>'required',
        ],[
            'product_name.required'=>'You have not enter Product Name',
            'preview.required'=>'You have not enter Preview of product',
            'price.required'=>'You have not enter Price of product',
        ]);
        $product = new Product;
        $product->idProductType=$request->typeProduct;
        $product->productName=$request->product_name;
        $product->preview=$request->preview;
        if($request->hasFile('photo'))
        {
            $file=$request->file('photo');
            $extension= $file->getClientOriginalExtension();
            if($extension != 'png' && $extension != 'jpg' && $extension != 'jepg')
            {
                return redirect('admin/product/add')->with('error','You just select file have extension png, jpg, jepg');
            }
            $name = $file->getClientOriginalName();
            $photo = Str::random(4)."_".$name;
            while(file_exists("upload/product".$photo))
            {
                $photo = Str::random(4)."_".$name;
            }
            $file->move("upload/product",$photo);
            $product->photo=$photo;
        }
        else
        {
            $product->photo="";
        }
        $product->price=$request->price;
        $product->save();
        return redirect('admin/product/add')->with('message','Add product Success');
    }
    public function getEdit($id)
    {
        $typeProduct=TypeProduct::all();
        $product = Product::find($id);
        return view('admin.product.edit',['typeProduct'=>$typeProduct,'product'=>$product]);
    }
    public function postEdit(Request $request, $id)
    {
        $this->validate($request,[
            'product_name'=>'required',
            'preview'=>'required',
            'price'=>'required',
        ],[
            'product_name.required'=>'You have not enter Product Name',
            'preview.required'=>'You have not enter Preview of product',
            'price.required'=>'You have not enter Price of product',
        ]);
        $product = Product::find($id);
        $product->idProductType= $request->typeProduct;
        $product->productName= $request->product_name;
        $product->preview =$request->preview;
        if($request->hasFile('photo'))
        {
            $file=$request->file('photo');
            $extension= $file->getClientOriginalExtension();
            if($extension != 'png' && $extension != 'jpg' && $extension != 'jepg')
            {
                return redirect('admin/product/add')->with('error','You just select file have extension png, jpg, jepg');
            }
            $name = $file->getClientOriginalName();
            $photo = Str::random(4)."_".$name;
            while(file_exists("upload/product".$photo))
            {
                $photo = Str::random(4)."_".$name;
            }
            $file->move("upload/product",$photo);
            unlink("upload/product".$product->photo);
            $product->photo=$photo;
        }
        $product->price=$request->price;
        $product->save();
        return redirect('admin/product/edit/'.$id)->with('message','Edit Product Success');
    }
    public function getDelete($id)
    {
        $product =Product::find($id);
        $product->delete();
        return redirect('admin/product/list')->with('message','Delete Product Success');
    }
}
