@extends('user.layout')
@section('cartContent')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 ">
                <div class="box span12 bg-light">
                    <div class="box-header" data-original-title>
                        <h2><i class="halflings-icon edit"></i><span class="break"></span>All products</h2>
                    </div>
                    <div class="box-content">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>   
                            <tbody>
                                @for($id = 0;$id < $data['length'];$id++)
                                <tr>
                                    <td>{{$data[$id]->name}}</td>
                                    <td>{{$data[$id]->price}}</td>
                                    <td></td>
                                    <td class="center">
                                        <a class="btn btn-info" href="{{url('/admin/editproduct/'.$data[$id]->id)}}">
                                            <i class="halflings-icon white edit"></i>  
                                        </a>
                                        <a class="btn btn-danger" href="{{url('/admin/deleteproduct/'.$data[$id]->id)}}" onclick="return confirm('Are you sure you want to delete this product?');">
                                            <i class="halflings-icon white trash"></i> 
                                        </a>
                                    </td>
                                </tr>
                                @endfor
                            </tbody>
                        </table>            
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                <div class="box span12 bg-light">
                    <div class="box-header" data-original-title>
                        <h2><i class="halflings-icon edit"></i><span class="break"></span>Order Summary</h2>
                    </div>
                    <hr>
                    <div class="box-content">
                                  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection