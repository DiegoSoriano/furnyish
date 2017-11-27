@extends('layouts.master')

@section('style')

@endsection


@section('content')

    <div class="login_sec">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="/">Inicio</a></li>
                <li class="active">Login</li>
            </ol>
            <h2>Perfil de Usuario</h2>
            <hr>
            <h3>Mis Pedidos</h3>
            @foreach($orders as $order)
            <div class="card col-md-8">


                <div class="card-body">

                    <ul class="list-group list-group-flush">
                        @foreach($order->cart->items as $item)
                        <li class="list-group-item">
                            <span class="badge">${{ $item['price'] }}</span>
                            {{ $item['item']['nombre_mueble'] }} | {{ $item['qty'] }}
                            @if( $item['qty'] > 1 )
                                 Piezas
                                @else
                                 Pieza
                                @endif
                        </li>
                        @endforeach
                    </ul>
                    <ul class="list-group list-group-flush bg-light">
                        <li class="list-group-item"><strong>Precio Total: {{ $order->cart->totalPrice }}</strong></li>

                    </ul>

                </div>


            </div>
                <div class="clear-fix"></div>
            @endforeach

        </div>
    </div>


@endsection

@section('scripts')

@endsection