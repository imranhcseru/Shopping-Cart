@extends('admin.layout')
@section('adminListContent')
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>All Admins</h2>
            </div>
            <div class="box-content">
                <table class="table ">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Added Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>   
                    <tbody>
                    @foreach($admins as $admin)
                    <tr>
                        <td>{{$admin->fname}} {{$admin->lname}}</td>
                        <td>{{$admin->email}}</td>
                        <td>{{$admin->created_at}}</td>
                        <td class="center">
                        <a class="btn btn-info" href="#">
                            <i class="halflings-icon white edit"></i>  
                        </a>
                        <a class="btn btn-danger" href="#">
                            <i class="halflings-icon white trash"></i> 
                        </a>
                    </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>            
            </div>
        </div>
    </div>
@endsection