<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="{{{ asset('adminStatic/img/favicon.png') }}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Shopping Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="{{URL::asset('userStatic/css/style.css')}}">
</head>
<body>
    <header class = "bg-light">
    <div class = "container-fluid">
        <nav class="navbar navbar-expand-md navbar-light ">
        <a class="navbar-brand pb-2 " href="index.html"><img class = "cart_logo"src = "{{url('/userStatic/img/logo.jpg')}}"></a>
        <button class="navbar-toggler btn btn-secondary" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Electronics</a></li>
                    <li><a class="dropdown-item" href="#">Beauty & Health</a></li>
                    <li><a class="dropdown-item" href="#">Babies & Toys</a></li>
                    <li><a class="dropdown-item" href="#">Sports & Outdoor</a></li>
                    <li><a class="dropdown-item" href="#">Mens Fashion</a></li>
                    <li><a class="dropdown-item" href="#">Womens Fashion</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="wrap">
            <div class="search">
                <input type="text" class="searchTerm" placeholder="What are you looking for?">
                <button type="submit" class="searchButton">
                <i class="fa fa-search">Search</i>
            </button>
            </div>
        </div>
        <div>
            <a class="navbar-brand pb-2 " href="index.html">
                <img id = "cart_icon" class = "cart_logo"src = "{{url('/userStatic/img/cart.png')}}">
                <p id = "cart-number">
                    <?php 
                        if(Session::has('prodOnCart')){
                            //session()->flush();
                            echo Session::get('prodOnCart');
                        }
                        else{
                            Session::put('prodOnCart',0);
                            echo Session::get('prodOnCart');
                        }
                    ?>
                </p>
            </a>
        </div>
        <a class = "btn btn-success">Login</a><span>  &nbsp;&nbsp;&nbsp;  </span>
        <a class = "btn btn-secondary">Register</a>
        </nav>
    </div>
    </header>
    <hr>
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
                            <form id = "form-insert" method = "post" action="/cartsession">
                                <input name = 'prodOnCart' type="hidden" id = "prodOnCart" value = <?php echo Session::get('prodOnCart');?>>
                                <input id="signup-token" name="_token" type="hidden" value="{{csrf_token()}}">
                                <button class="btn btn-warning addCart"><input name = 'prodId' type="hidden" id = "prodId" value = {{$flashSale->id}}>Add to Cart</button>
                            </form>
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
                            <form id = "form-insert" method = "post" action="/cartsession">
                                <input name = 'prodOnCart' type="hidden" id = "prodOnCart" value = <?php echo Session::get('prodOnCart');?>>
                                <input id="signup-token" name="_token" type="hidden" value="{{csrf_token()}}">
                                <button class="btn btn-warning addCart"><input name = 'prodId' type="hidden" id = "prodId" value = {{$electronics->id}}>Add to Cart</button>
                            </form>
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
                            <form id = "form-insert" method = "post" action="/cartsession">
                                <input name = 'prodOnCart' type="hidden" id = "prodOnCart" value = <?php echo Session::get('prodOnCart');?>>
                                <input id="signup-token" name="_token" type="hidden" value="{{csrf_token()}}">
                                <button class="btn btn-warning addCart"><input name = 'prodId' type="hidden" id = "prodId" value = {{$beautyAndHealth->id}}>Add to Cart</button>
                            </form>
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
                            <form id = "form-insert" method = "post" action="/cartsession">
                                <input name = 'prodOnCart' type="hidden" id = "prodOnCart" value = <?php echo Session::get('prodOnCart');?>>
                                <input id="signup-token" name="_token" type="hidden" value="{{csrf_token()}}">
                                <button class="btn btn-warning addCart"><input name = 'prodId' type="hidden" id = "prodId" value = {{$babiesAndToys->id}}>Add to Cart</button>
                            </form>
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
                            <form id = "form-insert" method = "post" action="/cartsession">
                                <input name = 'prodOnCart' type="hidden" id = "prodOnCart" value = <?php echo Session::get('prodOnCart');?>>
                                <input id="signup-token" name="_token" type="hidden" value="{{csrf_token()}}">
                                <button class="btn btn-warning addCart"><input name = 'prodId' type="hidden" id = "prodId" value = {{$sportsAndOutdoor->id}}>Add to Cart</button>
                            </form>
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
                            <form id = "form-insert" method = "post" action="/cartsession">
                                <input name = 'prodOnCart' type="hidden" id = "prodOnCart" value = <?php echo Session::get('prodOnCart');?>>
                                <input id="signup-token" name="_token" type="hidden" value="{{csrf_token()}}">
                                <button class="btn btn-warning addCart"><input name = 'prodId' type="hidden" id = "prodId" value = {{$mensFashion->id}}>Add to Cart</button>
                            </form>
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
                            <form id = "form-insert" method = "post" action="/cartsession">
                                <input name = 'prodOnCart' type="hidden" id = "prodOnCart" value = <?php echo Session::get('prodOnCart');?>>
                                <input id="signup-token" name="_token" type="hidden" value="{{csrf_token()}}">
                                <button class="btn btn-warning addCart"><input name = 'prodId' type="hidden" id = "prodId" value = {{$womensFashion->id}}>Add to Cart</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>  
        </div>
    </div>
    <hr>
    <hr>

        <!-- Footer -->
    <div class = "container-fluid">
        <section id="footer">
            <div class="container">
                <div class="row text-center text-xs-center text-sm-left text-md-left">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <h5>Shopping Cart</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a href=""><i class="fa fa-angle-double-right"></i>Electronics</a></li>
                            <li><a href=""><i class="fa fa-angle-double-right"></i>Beauty & Health</a></li>
                            <li><a href=""><i class="fa fa-angle-double-right"></i>Babies & Toys</a></li>
                            <li><a href=""><i class="fa fa-angle-double-right"></i>Sports & Outdoor</a></li>
                            <li><a href=""><i class="fa fa-angle-double-right"></i>Mens Fashion</a></li>
                            <li><a href=""><i class="fa fa-angle-double-right"></i>Womens Fashion</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <h5>Customer Service</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a href=""><i class="fa fa-angle-double-right"></i>Help Center</a></li>
                            <li><a href=""><i class="fa fa-angle-double-right"></i>Contact Us</a></li>
                            <li><a href=""><i class="fa fa-angle-double-right"></i>Report Abuse</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <h5>About Us</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a href=""><i class="fa fa-angle-double-right"></i>About Shopping Cart</a></li>
                            <li><a href=""><i class="fa fa-angle-double-right"></i>Blog</a></li>
                            <li><a href=""><i class="fa fa-angle-double-right"></i>Policies & Rules</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                        <ul class="list-unstyled list-inline social text-center">
                            <li class="list-inline-item"><a href="https://www.facebook.com/mih133" target="_blank"><img class = "acnt_logo"src = "{{url('/userStatic/img/facebook.png')}}"></a></li>
                            <li class="list-inline-item"><a href="https://github.com/imranhcseru" target="_blank"><img class = "acnt_logo"src = "{{url('/userStatic/img/github.png')}}"></a></li>
                            <li class="list-inline-item"><a href="https://www.instagram.com/iammimranh/" target="_blank"><img class = "acnt_logo"src = "{{url('/userStatic/img/instagram.png')}}"></a></li>
                            <li class="list-inline-item"><a href="https://plus.google.com/u/0/100176714962618354106?tab=wX" target="_blank"><img class = "acnt_logo"src = "{{url('/userStatic/img/google.png')}}"></a></li>
                        </ul>
                    </div>
                    <hr>
                </div>	
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                        <p class="h6">All right Reversed &copy Shopping Cart</p>
                        <p class="h6">Developed By Imran</p>
                    </div>
                    <hr>
                </div>	
            </div>
        </section>
    </div>
    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN': $('meta[name = "csrf-token"]').attr('content')
                }
            });

            $('.hiddenId').hide();
            var prodOnCart = parseInt($('#cart-number').text());
            $(document).on('click','.addCart',function(event){
                prodOnCart = prodOnCart + 1;
                var id = $(this).find('#prodId').val();
                $('#cart-number').text(prodOnCart);
                swal({
                    title:"Add to Cart",
                    text: "1 Product added to Cart",
                    icon: "success",
                    timer:3000
                });
                console.log(id);
                // $("#form-insert").on('submit',function(e){
                //     e.preventDefault();
                //     var data = $(this).serialize();
                //     var url = $(this).attr('action');
                //     $.ajax({
                //         type : 'post',
                //         url : url,
                //         data : data,
                //         success:function(response){
                //                 location.reload();
                //         }
                //     });
                // });
                
            });
        });
    </script>
</body>
</html>