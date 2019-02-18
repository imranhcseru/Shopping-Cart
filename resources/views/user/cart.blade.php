@extends('user.layout')
@section('cartContent')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 ">
                <div class="box span12 bg-light">
                    <div class="box-header" data-original-title>
                        <h2><i class="halflings-icon edit"></i><span class="break"></span>Products on Cart</h2>
                    </div>
                    <div class="box-content">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th class = "col-2"></th>
                                    <th class = "col-3">Product</th>
                                    <th class = "col-1">Price</th>
                                    <th class = "col-1">Quantity</th>
                                    <th class = "col-1">Actions</th>
                                </tr>
                            </thead>   
                            <tbody>
                                @for($id = 0;$id < $data['length'];$id++)
                                <tr>
                                    <td class = "col-2"><img src = "/upload/{{$data[$id]->image}}" style = "height:80px;width:80px;"></td>
                                    <td class = "col-3">{{$data[$id]->name}}</td>
                                    <td class = "col-1">{{$data[$id]->price}}</td>
                                    <td class = "col-1">Quantity</td>
                                    <td class="col-1 center">
                                        <button class = "btn btn-warning" id = "removeButton">
                                            Remove 
                                        </button>
                                    </td>
                                </tr>
                                @endfor
                            </tbody>
                        </table>            
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-4">
                <div class="box span12 bg-light">
                    <div class="box-header" data-original-title>
                        <h2><i class="halflings-icon edit"></i><span class="break"></span>Order Summary</h2>
                    </div>
                    <hr>
                    <div class="box-content">
                        <?php
                        $price = 0;$sheepFee = 100;$totalPrice = 0;
                        for($id = 0;$id < $data['length'];$id++)
                            $price = $data[$id]->price + $price;
                        $totalPrice = $price + $sheepFee;
                        ?>
                        <h3 style = "color:green;">Subtotal Price: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;৳&nbsp;{{$price}}</h3>
                        <h3>Shipping Fee&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;৳&nbsp;{{$sheepFee}}</h3>
                        <h3 style = "color:red;">Total Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;৳&nbsp;{{$totalPrice}}</h3>
                        <br>
                        <a class = "btn btn-warning" style = "width:100%;font-size: 20px;">Check Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection