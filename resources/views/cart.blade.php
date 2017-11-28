@extends('layouts.master')

@Section('content')
<div class="cart_main">
	 <div class="container">
			 <ol class="breadcrumb">
		  <li><a href="/">Inicio</a></li>
		  <li class="active">Carrito</li>
		 </ol>			
		 <div class="cart-items">
			 @if (Session::has('cart'))
			 	<h2>Mi Carrito de Compras ({{ Session::get('cart')->totalQty }})</h2>
				
				 @foreach ($products as $product)
				 <script>$(document).ready(function(c) {
					$('.close-{{ $product['item']['id_mueble'] }}').on('click', function(c){
						$('.cart-header-{{ $product['item']['id_mueble'] }}').fadeOut('slow', function(c){
							$('.cart-header-{{ $product['item']['id_mueble'] }}').remove();
						});
						});	  
					});
			   </script>
				 	<div class="cart-header-{{ $product['item']['id_mueble'] }}">
				 		
						 <div class="close-{{ $product['item']['id_mueble'] }}" onclick="event.preventDefault();
                                             document.getElementById('addToCart-form{{ $product['item']['id_mueble'] }}').submit();"> </div>
                        <form id="addToCart-form{{ $product['item']['id_mueble'] }}" action="{{ route('remove-all', ['id' => $product['item']['id_mueble']]) }}" method="GET" style="display: none;">
									{{ csrf_field() }}
							</form>
						 <div class="cart-sec">
								<div class="cart-item cyc">
									 <img src="{{ URL::asset($product['item']['furnishing_img']) }}" alt="{{ $product['item']['nombre_mueble'] }}"/>
								</div>
							   <div class="cart-item-info">
									 <h3>{{ $product['item']['nombre_mueble'] }}<span>Modelo No: 3578</span></h3>
									 <h4><span>Rs. $ </span>{{ $product['item']['precio_mueble'] }}</h4>
									 <p class="qty">Cantidad :: {{ $product['qty'] }}</p>
								   <div class="btn-group">
									   <button class="btn btn-primary btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Acción <span class="caret"></span></button>
									   <ul class="dropdown-menu">
										   <li><a href="{{ route('remove-one', ['id' => $product['item']['id_mueble']]) }}">Remover 1</a></li>
										   <li><a href="{{ route('remove-all', ['id' => $product['item']['id_mueble']]) }}">Eliminar</a></li>
									   </ul>
								   </div>
							   </div>
							   <div class="clearfix"></div>
								<div class="delivery">
									 <p>Cargo por envío: $350</p>
						        </div>						
						  </div>
					 </div>	
				 @endforeach

				 <div class="cart-total">
					 {{-- <a class="continue" href="#">Continue to basket</a> --}}
					 <div class="price-details">
						 <h3>Price Details</h3>
						 <span>Total</span>
						 <span class="total">{{ $totalPrice }}</span>
						 <span>Descuento</span>
						 <span class="total">---</span>
						 <span>Cargos por Envío</span>
						 <span class="total">{{ Session::get('cart')->totalQty * 100 }}</span>
						 <div class="clearfix"></div>				 
					 </div>	
					 <h4 class="last-price">TOTAL</h4>
					 <span class="total final">{{ ( Session::get('cart')->totalQty * 100 ) + $totalPrice }}</span>
					 <div class="clearfix"></div>
					 {{-- <a class="order" href="#">Place Order</a> --}}
					 {{-- <div class="total-item">
						 <h3>OPTIONS</h3>
						 <h4>COUPONS</h4>
						 <a class="cpns" href="#">Apply Coupons</a>
						 <p><a href="#">Log In</a> to use accounts - linked coupons</p>
					 </div>
 --}}					 <a class="continue" href="{{ route('checkout')  }}">Comprar Ahora</a>
			</div>
			 @else
				<h2>No tienes productos en el carrito!</h2>
			 @endif	
		 </div>
		 
		 
	 </div>
</div>
<!---->
@endsection


