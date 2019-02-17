
@extends('admin.layout')
@section('publishedProductContent')
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Published products</h2>
            </div>
            <div class="box-content">
                <table class="table ">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Category</th>
                            <th>Stock</th>
                            <th>Published Date</th>
                            <th>Added By</th>
                            <th>Actions</th>
                        </tr>
                    </thead>   
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{$product->name}}</td>
                            <td>{{$product->category}}</td>
                            <td>{{$product->stock}}</td>
                            <td>{{$product->updated_at}}</td>
                            <td>{{$product->addedBy}}</td>
                            <td class="center">
                                <a class="btn btn-info" href="{{url('/admin/addsupply/'.$product->id)}}">
                                    <i>Add Supply</i>  
                                </a>
                                <a class="btn btn-danger" href="{{url('/admin/changetype/'.$product->id)}}" onclick="return confirm('Are you sure you want to Unpublish this product?');">
                                    <i>Unpublish</i> 
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