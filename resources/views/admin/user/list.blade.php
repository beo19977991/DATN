@extends('admin.layouts.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
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
                                <th> UserName</th>
                                <th> Name</th>
                                <th> Email</th>
                                <th> Phone</th>
                                <th> Address</th>
                                <th> Avatar</th>
                                <th> Role</th>
                                <th> Delete</th>
                                <th> Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($user as $u)
                            <tr class="odd gradeX" align="center">
                                <td>{{$u->id}}</td>
                                <td>{{$u->username}}</td>
                                <td>{{$u->name}}</td>
                                <td>{{$u->email}}</td>
                                <td>{{$u->phone}}</td>
                                <td>{{$u->address}}</td>
                                <td>{{$u->photo}}</td>
                                <td>
                                @if($u->role ==0)
                                {{"Admin"}}
                                @elseif($u->role ==1)
                                {{"Customer"}}
                                @elseif($u->role ==2)
                                {{"Trainer"}}
                                @elseif($u->role ==3)
                                {{"Staff"}}
                                @endif
                                </td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i>
                                <a href="admin/user/delete/{{$u->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> 
                                <a href="admin/user/edit/{{$u->id}}">Edit</a></td>
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