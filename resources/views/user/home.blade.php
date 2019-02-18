@extends('user.layout')
@section('homeContent')
    <!-- Slider -->
    <div class = "container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" id = "slider_div">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{url('/userStatic/img/image1.jpg')}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{url('/userStatic/img/image2.jpg')}}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{url('/userStatic/img/image3.jpg')}}" alt="Third slide">
            </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class = "row"> 
            <div class = "row">
                <span class = "row-title">
                    <h3>Flash Sale</h3>
                </span>
                <span class = "row-title"   style = "margin-left:900px; margin-top:13px;">
                    <a href = "#" class = "btn btn-info">Show More</a>
                </span>
            </div>
            <div class = "row" align = "center">
                @foreach($data['flashSale'] as $flashSale)
                    <div class="card" style="width: 22rem;">
                        <a href = "#"><img class="card-img-top" src="/upload/{{$flashSale->image}}" alt="Card image cap" style="height:170px;"></a> 
                        <div class="card-body" align = "center">
                            <h5 class="card-title">{{$flashSale->name}}</h5>
                            <p class="card-text" style = "text-decoration: line-through;">৳{{$flashSale->price}}</p>
                            <p class="card-text" >-{{$flashSale->discount}}%</p>
                            <p class="card-text" >৳{{$flashSale->totalPrice}}</p>
                            <button class="btn btn-warning addCart">
                                    <input name = 'prodOnCart' type = "hidden" id = "prodOnCart" value = <?php echo Session::get('prodOnCart');?>>
                                    <input name = "_token" type = "hidden" id="prodToken"   value="{{csrf_token()}}">
                                    <input name = 'prodId' type = "hidden" id = "prodId" value = {{$flashSale->id}}>
                                Add to Cart
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>  
        </div>
        <hr>
        <div class = "row"> 
            <div class = "row">
                <span class = "row-title">
                    <h3>Electronics</h3>
                </span>
                <span class = "row-title"   style = "margin-left:900px; margin-top:13px;">
                    <a href = "#" class = "btn btn-info">Show More</a>
                </span>
            </div>
            <div class = "row" align = "center">
                @foreach($data['electronics'] as $electronics)
                    <div class="card" style="width: 22rem;">
                        <a href = "#"><img class="card-img-top" src="/upload/{{$electronics->image}}" alt="Card image cap" style="height:170px;"></a> 
                        <div class="card-body" align = "center">
                            <h5 class="card-title">{{$electronics->name}}</h5>
                            <p class="card-text" style = "text-decoration: line-through;">৳{{$electronics->price}}</p>
                            <p class="card-text" >-{{$electronics->discount}}%</p>
                            <p class="card-text" >৳{{$electronics->totalPrice}}</p>
                            <button class="btn btn-warning addCart">
                                    <input name = 'prodOnCart' type = "hidden" id = "prodOnCart" value = <?php echo Session::get('prodOnCart');?>>
                                    <input name = "_token" type = "hidden" id="prodToken"   value="{{csrf_token()}}">
                                    <input name = 'prodId' type = "hidden" id = "prodId" value = {{$electronics->id}}>
                                Add to Cart
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>  
        </div>
        <hr>
        <div class = "row"> 
            <div class = "row">
                <span class = "row-title" >
                    <h3>Beauty & Health</h3>
                </span>
                <span class = "row-title"   style = "margin-left:1020px; margin-top:13px;">
                    <a href = "#" class = "btn btn-info">Show More</a>
                </span>
            </div>
            <div class = "row" align = "center">
                @foreach($data['beautyAndHealth'] as $beautyAndHealth)
                    <div class="card" style="width: 22rem;">
                        <a href = "#"><img class="card-img-top" src="/upload/{{$beautyAndHealth->image}}" alt="Card image cap" style="height:170px;"></a> 
                        <div class="card-body" align = "center">
                            <h5 class="card-title">{{$beautyAndHealth->name}}</h5>
                            <p class="card-text" style = "text-decoration: line-through;">৳{{$beautyAndHealth->price}}</p>
                            <p class="card-text" >-{{$beautyAndHealth->discount}}%</p>
                            <p class="card-text" >৳{{$beautyAndHealth->totalPrice}}</p>
                            <button class="btn btn-warning addCart">
                                    <input name = 'prodOnCart' type = "hidden" id = "prodOnCart" value = <?php echo Session::get('prodOnCart');?>>
                                    <input name = "_token" type = "hidden" id="prodToken"   value="{{csrf_token()}}">
                                    <input name = 'prodId' type = "hidden" id = "prodId" value = {{$beautyAndHealth->id}}>
                                Add to Cart
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>  
        </div>
        <hr>
        <div class = "row"> 
            <div class = "row">
                <span class = "row-title">
                    <h3>Babies & Toys</h3>
                </span>
                <span class = "row-title"   style = "margin-left:870px; margin-top:13px;">
                    <a href = "#" class = "btn btn-info">Show More</a>
                </span>
            </div>
            <div class = "row" align = "center">
                @foreach($data['babiesAndToys'] as $babiesAndToys)
                    <div class="card" style="width: 22rem;">
                        <a href = "#"><img class="card-img-top" src="/upload/{{$babiesAndToys->image}}" alt="Card image cap" style="height:170px;"></a> 
                        <div class="card-body" align = "center">
                            <h5 class="card-title">{{$babiesAndToys->name}}</h5>
                            <p class="card-text" style = "text-decoration: line-through;">৳{{$babiesAndToys->price}}</p>
                            <p class="card-text" >-{{$babiesAndToys->discount}}%</p>
                            <p class="card-text" >৳{{$babiesAndToys->totalPrice}}</p>
                            <button class="btn btn-warning addCart">
                                    <input name = 'prodOnCart' type = "hidden" id = "prodOnCart" value = <?php echo Session::get('prodOnCart');?>>
                                    <input name = "_token" type = "hidden" id="prodToken"   value="{{csrf_token()}}">
                                    <input name = 'prodId' type = "hidden" id = "prodId" value = {{$babiesAndToys->id}}>
                                Add to Cart
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>  
        </div>
        <hr>
        <div class = "row"> 
            <div class = "row">
                <span class = "row-title">
                    <h3>Sports & Outdoor</h3>
                </span>
                <span class = "row-title"   style = "margin-left:1020px; margin-top:13px;">
                    <a href = "#" class = "btn btn-info">Show More</a>
                </span>
            </div>
            <div class = "row" align = "center">
                @foreach($data['sportsAndOutdoor'] as $sportsAndOutdoor)
                    <div class="card" style="width: 22rem;">
                        <a href = "#"><img class="card-img-top" src="/upload/{{$sportsAndOutdoor->image}}" alt="Card image cap" style="height:170px;"></a> 
                        <div class="card-body" align = "center">
                            <h5 class="card-title">{{$sportsAndOutdoor->name}}</h5>
                            <p class="card-text" style = "text-decoration: line-through;">৳{{$sportsAndOutdoor->price}}</p>
                            <p class="card-text" >-{{$sportsAndOutdoor->discount}}%</p>
                            <p class="card-text" >৳{{$sportsAndOutdoor->totalPrice}}</p>
                            <button class="btn btn-warning addCart">
                                    <input name = 'prodOnCart' type = "hidden" id = "prodOnCart" value = <?php echo Session::get('prodOnCart');?>>
                                    <input name = "_token" type = "hidden" id="prodToken"   value="{{csrf_token()}}">
                                    <input name = 'prodId' type = "hidden" id = "prodId" value = {{$sportsAndOutdoor->id}}>
                                Add to Cart
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>  
        </div>
        <hr>
        <div class = "row"> 
            <div class = "row">
                <span class = "row-title">
                    <h3>Mens Fashion</h3>
                </span>
                <span class = "row-title"   style = "margin-left:870px; margin-top:13px;">
                    <a href = "#" class = "btn btn-info">Show More</a>
                </span>
            </div>
            <div class = "row" align = "center">
                @foreach($data['mensFashion'] as $mensFashion)
                    <div class="card" style="width: 22rem;">
                        <a href = "#"><img class="card-img-top" src="/upload/{{$mensFashion->image}}" alt="Card image cap" style="height:170px;"></a> 
                        <div class="card-body" align = "center">
                            <h5 class="card-title">{{$mensFashion->name}}</h5>
                            <p class="card-text" style = "text-decoration: line-through;">৳{{$mensFashion->price}}</p>
                            <p class="card-text" >-{{$mensFashion->discount}}%</p>
                            <p class="card-text" >৳{{$mensFashion->totalPrice}}</p>
                            <button class="btn btn-warning addCart">
                                    <input name = 'prodOnCart' type = "hidden" id = "prodOnCart" value = <?php echo Session::get('prodOnCart');?>>
                                    <input name = "_token" type = "hidden" id="prodToken"   value="{{csrf_token()}}">
                                    <input name = 'prodId' type = "hidden" id = "prodId" value = {{$mensFashion->id}}>
                                Add to Cart
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>  
        </div>
        <div class = "row"> 
            <div class = "row">
                <span class = "row-title">
                    <h3>Womens Fashion</h3>
                </span>
                <span class = "row-title"   style = "margin-left:1020px; margin-top:13px;">
                    <a href = "#" class = "btn btn-info">Show More</a>
                </span>
            </div>
            <div class = "row" align = "center">
                @foreach($data['womensFashion'] as $womensFashion)
                    <div class="card" style="width: 22rem;">
                        <a href = "#"><img class="card-img-top" src="/upload/{{$womensFashion->image}}" alt="Card image cap" style="height:170px;"></a> 
                        <div class="card-body" align = "center">
                            <h5 class="card-title">{{$womensFashion->name}}</h5>
                            <p class="card-text" style = "text-decoration: line-through;">৳{{$womensFashion->price}}</p>
                            <p class="card-text" >-{{$womensFashion->discount}}%</p>
                            <p class="card-text" >৳{{$womensFashion->totalPrice}}</p>
                            <button class="btn btn-warning addCart">
                                    <input name = 'prodOnCart' type = "hidden" id = "prodOnCart" value = <?php echo Session::get('prodOnCart');?>>
                                    <input name = "_token" type = "hidden" id="prodToken"   value="{{csrf_token()}}">
                                    <input name = 'prodId' type = "hidden" id = "prodId" value = {{$womensFashion->id}}>
                                Add to Cart
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>  
        </div>
    </div>
@endsection