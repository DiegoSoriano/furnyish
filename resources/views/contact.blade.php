@extends('layouts.master')
<!---->
@section('content')
<div class="contact">
	 <div class="container">
		 <ol class="breadcrumb">
		  <li><a href="index.html">Inicio</a></li>
		  <li class="active">Contacto</li>
		 </ol>
		 <div class="contact-head">
		 	 <h2>CONTACTO</h2>
			  <form>
				  <div class="col-md-6 contact-left">
				  	<p class="lead">Cualquier duda o comentario, no te lo quedes!! En Furnyish nos gusta que nos compartas tus inquietudes.</p>
				  	<p class="lead">Puedes enviarnos un correo llenando el siguiente formulario o bien llámanos desde San Luis Ptosí al (444) 850 2020 y desde el resto de la Republica al 01 800 22 FRNSH (37685)</p>
				  	<p class="lead">Si quieres contactar una tienda directamente visita <a href="/tiendas">SUCURSALES - FURNYISH</a></p>
				  	
				 </div>

				 <div class="col-md-6 contact-right">
				 		<input type="text" placeholder="Nombre" required/>
						<input type="text" placeholder="Apellidos" required/>
						<input type="text" placeholder="E-mail" required/>
						<input type="text" placeholder="Telefono" required/>
						 <textarea placeholder="Comentarios"></textarea>
						 <input type="submit" value="ENVIAR"/>
				 </div>
				 <div class="clearfix"></div>
			 </form>
		 </div>
		 
	 </div>
</div>
<!---->
@endsection