
@extends('admin.layout')
@section('allProductContent')
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>All products</h2>
            </div>
            <div class="box-content">
                <table class="table ">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Type</th>
                            <th>Update Date</th>
                            <th>Added By</th>
                            <th>Actions</th>
                        </tr>
                    </thead>   
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{$product->name}}</td>
                            <td>{{$product->category}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->type}}</td>
                            <td>{{$product->updated_at}}</td>
                            <td>{{$product->addedBy}}</td>
                            <td class="center">
                                <a class="btn btn-info" href="{{url('/admin/editproduct/'.$product->id)}}">
                                    <i class="halflings-icon white edit"></i>  
                                </a>
                                <a class="btn btn-danger" href="{{url('/admin/deleteproduct/'.$product->id)}}" onclick="return confirm('Are you sure you want to delete this product?');">
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