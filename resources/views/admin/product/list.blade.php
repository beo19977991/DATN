@extends('admin.layouts.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @if(session('message'))
                        <div class="alert alert-success">
                            {{session('message')}}
                        </div>
                    @endif
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th> ID</th>
                                <th> Product Type</th>
                                <th> Product Name</th>
                                <th> Preview</th>
                                <th> Photo</th>
                                <th> Price</th>
                                <th> Delete</th>
                                <th> Block</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($product as $p)
                            <tr class="odd gradeX" align="center">
                                <td>{{$p->id}}</td>
                                <td>{{$p->typeProduct->typeProductName}}</td>
                                <td>{{$p->productName}}</td>
                                <td>{{$p->preview}}</td>
                                <!-- <td>{{$p->photo}}</td> -->
                                <td><img style="width:150px;height:100px" src="upload/product/{{$p->photo}}"></td>
                                <td>{{$p->price}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i>
                                <a href="admin/product/delete/{{$p->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> 
                                <a href="admin/product/edit/{{$p->id}}">Edit</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection