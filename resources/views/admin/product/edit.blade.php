@extends('admin.layouts.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product
                            <small>Edit</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @if(count($errors) >0)
                        <div class ="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{$err}}</br>
                            @endforeach
                        </div>
                    @endif
                    @if(session('message'))
                        <div class="alert alert-success">
                            {{session('message')}}
                        </div>
                    @endif
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="admin/product/edit/{{$product->id}}" method="POST" enctype="multipart/form-data" >
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>Type Product</label>
                                <select class="form-control" name="typeProduct" id="typeProduct">
                                @foreach($typeProduct as $type)
                                <option 
                                @if($product->typeProduct->id==$type->id)
                                {{"selected"}}
                                @endif
                                value="{{$type->id}}"> {{$type->typeProductName}}</option>
                                @endforeach
                                </select>

                            </div>
                            <div class="form-group">
                                <label>Product Name</label>
                                <input class="form-control" name="product_name" value="{{$product->productName}}"/>
                            </div>
                            <div class="form-group">
                                <label>Preview</label>
                                <textarea class="form-control" name="preview" >{{$product->preview}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Photo</label>
                                <input class="form-control" type="file" name="photo" />
                                <img src="upload/product/{{$product->photo}}" style="width:150px; height:100px">
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" name="price" value="{{$product->price}}" />
                            </div>
                            <button type="submit" class="btn btn-default">Edit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection