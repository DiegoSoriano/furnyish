

<div class="top_bg">
    <div class="container">
        <div class="header_top-sec">
            <div class="top_right">
                <div class="social">
                    <ul>
                        <li><a href="https://www.facebook.com"><i class="facebook"></i></a></li>
                        <li><a href="https://www.twitter.com"><i class="twitter"></i></a></li>
                        <li><a href="https://dribbble.com/"><i class="dribble"></i></a></li>    
                        <li><a href="https://plus.google.com/"><i class="google"></i></a></li>                                     
                    </ul>
                </div>
            </div>
            <div class="top_left">
                <ul>
                    <li class="top_link">Email:<a href="mailto@example.com">info@furnyish.com</a></li>
                                   
                </ul>
                
            </div>
                <div class="clearfix"> </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand logo" href="{{ url('/') }}">
                <a href="/"><img src="{{ URL::asset('images/logo.png') }}" alt=""/></a>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="/account">
                                    <i class="fa fa-user" aria-hidden="true"></i> 
                                    Perfil de Usuario
                                </a>
                                <a href="{{ route('shoppingCart') }}">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="simpleCart_total">Carrito</span>
                                    <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
                                </a>
                                <a href="javascript:;" class="simpleCart_empty"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Vaciar Carrito</a>
                                <div class="clearfix"></div> 
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out" aria-hidden="true"></i> Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<!--cart-->
     
<!--Menu-->
<div class="mega_nav">
     <div class="container">
         <div class="menu_sec">
         <!-- start header menu -->
         <ul class="megamenu skyblue">
             <li class="active grid"><a class="color1" href="/">Inicio</a></li>
             <li class="grid"><a class="color2" href="#">Catálogo</a>
                <div class="megapanel">
                    <div class="row">
                        <div class="col1">
                            <div class="h_nav">
                                <h4>Sala</h4>
                                <ul>
                                    <li><a href="/products">Sofá</a></li>
                                    <li><a href="/products">Love Seat</a></li>
                                    <li><a href="/products">Sillón</a></li>
                                    <li><a href="/products">Modulares</a></li>
                                    <li><a href="/products">Futones</a></li>                                 
                                    <li><a href="/products">Sillones Ocasionales</a></li>
                                    <li><a href="/products">Bancas</a></li>
                                    <li><a href="/products">Mesas De Centro</a></li>
                                    <li><a href="/products">Mesas Laterales</a></li>
                                    <li><a href="/products">Mesas Consolas</a></li>
                                </ul>   
                            </div>                          
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>Comedor</h4>
                                <ul>
                                    <li><a href="/products">Mesas</a></li>
                                    <li><a href="/products">Sillas</a></li>
                        
                                    <li><a href="/products">Bufeteros</a></li>
                                    <li><a href="/products">Bancas</a></li>
                                
                                </ul>   
                            </div>                          
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>Recámara</h4>
                                <ul>
                                    <li><a href="/products">Cabeceras y Camas</a></li>
                                    <li><a href="/products">Colchones</a></li>
                                    <li><a href="/products">Box</a></li>
                                    <li><a href="/products">Buros</a></li>
                                    <li><a href="/products">Cómodas</a></li>
                                    <li><a href="/products">Espejos</a></li>
                                </ul>   
                            </div>                                              
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>Muebles de TV y Libreros</h4>
                                <ul>
                                    <li><a href="/products">Centro de Entretenimiento</a></li>
                                    <li><a href="/products">Libreros</a></li>
                                    <li><a href="/products">Repisas</a></li>
                                </ul>   
                            </div>                      
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>Bar</h4>
                                <ul>
                                    <li><a href="/products">Bancos de Bar</a></li>
                                    <li><a href="/products">Barras</a></li>
                                </ul>   
                            </div>
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>Oficina</h4>
                                <ul>
                                    <li><a href="/products">Escritorios</a></li>
                                    <li><a href="/products">Archiveros</a></li>
                                    <li><a href="/products">Libreros</a></li>
                                    <li><a href="/products">Repisas</a></li>
                                </ul>   
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col2"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                    </div>
                    </div>
                </li>
                <li class="grid"><a class="color2" href="/acerca">Acerca De</a></li>     
               </ul> 
               <div class="search">
                 <form>
                    <input type="text" value="" placeholder="Buscar...">
                    <input type="submit" value="">
                    </form>
             </div>
            <div class="clearfix"></div>
         </div>
      </div>
</div>