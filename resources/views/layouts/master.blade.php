
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>

    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/prettyPhoto.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/price-range.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/toastr.min.css') }}">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

<input type="hidden" id="qty" size="3" />

    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->

        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">

                            <a href="/"><img src="{{ URL::to('images/home/logo.png') }}" alt="" /></a>
                        </div>
             
                        <div class="btn-group pull-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                     @if(Session::has('locale'))
                                        {{session('locale')}}
                                    @else
                                        {{Config::get('app.locale')}}
                                    @endif
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="{{url('language/en')}}">English</a></li>
          <li><a href="{{url('language/bd')}}">Bangla</a></li>
                                </ul>
                            </div>

                           <!-- <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                    DOLLAR
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Canadian Dollar</a></li>
                                    <li><a href="#">Pound</a></li>
                                </ul>
                            </div>-->
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <?php
                                if(Auth::check()){ ?>
                                <li><a href="{{ URL::to('myaccount') }}"><i class="fa fa-user"></i> {{ __('menu_name.menu_1') }}</a></li>
                                <?php } ?>
                                <!--<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>-->
                                <li><a href="{{ URL::to('checkout') }}"><i class="fa fa-crosshairs"></i> {{ __('menu_name.menu_2') }}</a></li>
                                <li><a href="{{ URL::to('cart') }}"><i class="fa fa-shopping-cart"></i> {{ __('menu_name.menu_3') }} <span id="cart_update"><span></a></li>
                                @if (Auth::guest())
                                <li><a href="{{ URL::to('login') }}"><i class="fa fa-lock"></i> {{ __('menu_name.menu_4') }}</a></li>
                                @else
                                <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa fa-lock"></i> {{ __('menu_name.menu_5') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->

        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="index.html" class="active">Home</a></li>
                                <li><a href="{{url('shop')}}">Shop</a></li>
                                
                                <li><a href="{{ route('contact.index') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                          <form action="/search" method="POST" role="search">
                            {{ csrf_field() }}

                              <input type="text" class="form-control" name="q"
                                placeholder="Search products"> <span class="input-group-btn">

                              </span>

                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->

            @yield('content')

 <footer id="footer"><!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="companyinfo">
                            <h2><span>e</span>-shopper</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="images/home/iframe1.png" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="images/home/iframe2.png" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="images/home/iframe3.png" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="images/home/iframe4.png" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="address">
                            <img src="images/home/map.png" alt="" />
                            <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Service</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Online Help</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Order Status</a></li>
                                <li><a href="#">Change Location</a></li>
                                <li><a href="#">FAQ’s</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Quock Shop</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">T-Shirt</a></li>
                                <li><a href="#">Mens</a></li>
                                <li><a href="#">Womens</a></li>
                                <li><a href="#">Gift Cards</a></li>
                                <li><a href="#">Shoes</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Policies</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privecy Policy</a></li>
                                <li><a href="#">Refund Policy</a></li>
                                <li><a href="#">Billing System</a></li>
                                <li><a href="#">Ticket System</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>About Shopper</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Company Information</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Store Location</a></li>
                                <li><a href="#">Affillate Program</a></li>
                                <li><a href="#">Copyright</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>About Shopper</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Your email address" />
                                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                <p>Get the most recent updates from <br />our site and be updated your self...</p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
                    <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
                </div>
            </div>
        </div>

    </footer><!--/Footer-->


    <script src="{{ URL::to('js/jquery.js') }}"></script>
    <script src="{{ URL::to('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::to('js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ URL::to('js/price-range.js') }}"></script>
    <script src="{{ URL::to('js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ URL::to('js/main.js') }}"></script>
    <script src="{{ URL::to('js/toastr.min.js') }}"></script>

     <script>
        var total_cart_items = 0;
     var ttl_price = 0;

        var cart = [];

        $(function () {
            if (localStorage.cart)
            {
                cart = JSON.parse(localStorage.cart);
                showCart();
            }
        });

        function addToCart(id,sku,name,description,image,quantity,price,barcode) {
            var id = id;
            var sku = sku;
            var name = name;
            var description = description;
            var image = image;
            var available_quantity = quantity;
            var price = price;
            var barcode = barcode;
            var product_quantity_add_to_cart = document.getElementById("product_quantity_add_to_cart").value;
            if(product_quantity_add_to_cart>1){
                var quantity = product_quantity_add_to_cart;
            }else{
                var quantity=1;
            }

            // update qty if product is already present
            for (var i in cart) {
                if(cart[i].Sku == sku)
                {
                    cart[i].Qty = qty;
                    showCart();
                    saveCart();
                    toastr.error('Product already added','Error Alert',{timeOut:5000});
                    return;
                }
            }
            // create JavaScript Object
            var item = { ID: name,  Sku: sku, Name: name, Description: description, Image: image, Quantity: quantity, Price: price, Barcode: barcode , Available_quantity: available_quantity };
            cart.push(item);
            toastr.success('Product added successfully','Success Alert',{timeOut:5000});
            saveCart();
            showCart();
        }

        function deleteItem(index){
            cart.splice(index,1); // delete item at index
            showCart();
            showTheCart();
            saveCart();
        }

        function saveCart() {
            if ( window.localStorage)
            {
                localStorage.cart = JSON.stringify(cart);
            }
        }

        function showCart() {
            total_cart_items = 0;

            if (cart.length == 0) {
                $("#cart").css("visibility", "hidden");
                $("#cart_update").empty();
                return;
            }

            $("#cart").css("visibility", "visible");
            $("#cartBody").empty();
            $("#cart_update").empty();
            for (var i in cart) {
                var item = cart[i];
                var row = "<tr><td>" + item.ID + "</td><td>" +
                             item.Name + "</td><td>" + item.Quantity + "</td><td>"
                             + item.Quantity * item.Price + "</td><td>"
                             + "<button onclick='deleteItem(" + i + ")'>Delete</button></td></tr>";
                $("#cartBody").append(row);
                console.log(item.Quantity);
                total_cart_items += parseInt(item.Quantity);
            }
            console.log(total_cart_items);
            $("#cart_update").append('('+total_cart_items+')');
        }
    </script>


    <script>function highlightStar(obj,id) {
    removeHighlight(id);
    $('.demo-table #tutorial-'+id+' li').each(function(index) {
        $(this).addClass('highlight');
        if(index == $('.demo-table #tutorial-'+id+' li').index(obj)) {
            return false;
        }
    });
}

function removeHighlight(id) {
    $('.demo-table #tutorial-'+id+' li').removeClass('selected');
    $('.demo-table #tutorial-'+id+' li').removeClass('highlight');
}

function addRating(obj,id) {
    $('.demo-table #tutorial-'+id+' li').each(function(index) {
        $(this).addClass('selected');
        $('#tutorial-'+id+' #rating').val((index+1));
        if(index == $('.demo-table #tutorial-'+id+' li').index(obj)) {
            return false;
        }
    });
    document.getElementById("txt").value = $('#tutorial-'+id+' #rating').val();
    //alert($('#tutorial-'+id+' #rating').val());
    $.ajax({
    url: "add_rating.php",
    data:'id='+id+'&rating='+$('#tutorial-'+id+' #rating').val(),
    type: "POST"
    });
}

function resetRating(id) {
    if($('#tutorial-'+id+' #rating').val() != 0) {
        $('.demo-table #tutorial-'+id+' li').each(function(index) {
            $(this).addClass('selected');
            if((index+1) == $('#tutorial-'+id+' #rating').val()) {
                return false;
            }
        });
    }
} </script>

<script type="text/javascript">
    var textbox_value= 0;

    function cart_quantity_up(i,price,quantity){


        var tot_id = '#total_price'+i;

        var textbox_id = 'textbox_id'+ i;

        textbox_value = document.getElementById(textbox_id).value;

        textbox_value = parseInt(textbox_value);

        textbox_value = textbox_value+1;


        if (quantity<textbox_value) {
            toastr.error('Only '+quantity+' products are available','Error Alert',{timeOut:5000});
            return;
        }

        total_cart_items+=1;
        $("#cart_update").empty();
        $("#cart_update").append('('+total_cart_items+')');

        cart[i].Quantity=textbox_value;
         localStorage.cart = JSON.stringify(cart);

        $(tot_id).text(price*textbox_value);

        document.getElementById(textbox_id).value = textbox_value;

        ttl_price+=price;
        $('#cart_sub_total').text(ttl_price);
        $('#cart_sub_total_with_tax').text(ttl_price+2);
        //alert(ttl_price);

    }
    function cart_quantity_down(i,price){
        var tot_id = '#total_price'+i;

        var textbox_id = 'textbox_id'+ i;

        textbox_value = document.getElementById(textbox_id).value;

        textbox_value = parseInt(textbox_value);

        textbox_value = textbox_value-1;


        if(textbox_value<=0){
            textbox_value = 1;
        }else{
            ttl_price-=price;
            total_cart_items-=1;
        $("#cart_update").empty();
        $("#cart_update").append('('+total_cart_items+')');
            cart[i].Quantity=textbox_value;
         localStorage.cart = JSON.stringify(cart);
        }



        $(tot_id).text(price*textbox_value);
        document.getElementById(textbox_id).value = textbox_value;

          $('#cart_sub_total').text(ttl_price);
          $('#cart_sub_total_tax').text(ttl_price+2);

    }

    function keyWasPressed(i,price){
        alert(price);
    }



</script>

<script type="text/javascript">
        //alert(localStorage.cart);

        var cart = [];
        cart = JSON.parse(localStorage.cart);
        showTheCart();
        function showTheCart(){
        $("#cart_table").empty();
        ttl_price= 0;
        for (var i in cart) {
                var item = cart[i];

                var row = '<tr><td class="cart_product"><a href="#"><img src=images/home/'+item.Image+'  alt="bart" height="110px" width="110px"></a></td><td class="cart_description"><h4><a href="#">'+item.Name+'</a></h4><p>SKU: '+item.Sku+'</p></td><td class="cart_price"><p>$'+item.Price+'</p></td><td class="cart_quantity"><div class="cart_quantity_button"><a class="cart_quantity_up" onclick="cart_quantity_up('+i+','+item.Price+','+item.Available_quantity+')" href="javascript:void(0)"> + </a><input class="cart_quantity_input" type="text" name="quantity" id="textbox_id'+i+'"  value='+item.Quantity+' autocomplete="off" size="2" readonly><a class="cart_quantity_down" onclick="cart_quantity_down('+i+','+item.Price+')" href="javascript:void(0)"> - </a></div></td><td class="cart_total"><p class="cart_total_price">$<span id="total_price'+i+'">'+item.Price*item.Quantity+'</span></p></td><td class="cart_delete"><a class="cart_quantity_delete" onclick="deleteItem(' + i + ')" href="javascript:void(0)"><i class="fa fa-times"></i></a></td></tr>';

                    ttl_price += item.Price*item.Quantity;

                $("#cart_table").append(row);
            }
            $('#cart_sub_total').text(ttl_price);
          $('#cart_sub_total_tax').text(ttl_price+2);
        }
    </script>


    <script type="text/javascript">

     var cart_sub_total = $('#cart_sub_total').text();
     var eco_tax = $('#eco_tax').text();
     var cart_sub_total_with_tax = $('#cart_sub_total_with_tax').text();

     document.getElementById("cart_sub_total_get").value = cart_sub_total;
     document.getElementById("eco_tax_get").value = eco_tax;
     document.getElementById("cart_sub_total_with_tax_get").value = cart_sub_total_with_tax;
     document.getElementById("all_cart_product_details").value = localStorage.cart;
     //alert(document.getElementById("eco_taxx").value);

    </script>
    <script type="text/javascript">

$( document ).ready(function() {
        $( "#target" ).submit();
    });


</script>
</body>
</html>
