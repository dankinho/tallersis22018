@extends('layout2')

@section('content')
    <!-- collections -->
    <div class="new-collections">
        <div class="container">
            <h3 class="animated wow zoomIn" data-wow-delay=".5s">Servicios</h3>
            <p class="est animated wow zoomIn" data-wow-delay=".5s">Encuentra al cuidador perfecto para tu mascota.</p>
            <div class="new-collections-grids">
               @php ($h=0)
                @for($i=0; $i<$num;$i++)
                    @if($cuid->find($i+1)->tipo_serv==1)
                        @php($h=$h+1)
                        @elseif($cuid->find($i+1)->tipo_serv==2)
                        @php($h=$h+2)
                        @endif
                @endfor

                @if($h==0 || $h==1 || $h==2)
                    <h3 align="center" > <a href="{{ route('cuidador.create') }}"><span class="label label-primary">Agregar Servicio</span></a> </h3>
                @endif

                        @for($i=0; $i<$num;$i++)
                    @if($cuid->find($i+1)->tipo_serv==1 || $cuid->find($i+1)->tipo_serv==2)
                <div class="col-md-6 new-collections-grid">
                    <div class="new-collections-grid1 new-collections-grid1-image-width animated wow slideInUp" data-wow-delay=".5s">
                        <div class="new-collections-grid1-image">
                            @if($cuid->find($i+1)->tipo_serv==1)
                            <a href="{{ route('cuidador.vista') }}" class="product-image"><img src="images/5.jpg" alt=" " class="img-responsive" /></a>
                                @elseif($cuid->find($i+1)->tipo_serv==2)
                                <a href="{{ route('cuidador.vista2') }}" class="product-image"><img src="images/5.jpg" alt=" " class="img-responsive" /></a>
                            @endif
                            <div class="new-collections-grid1-image-pos new-collections-grid1-image-pos1">
                                @if($cuid->find($i+1)->tipo_serv==1)
                                    <a href="{{ route('cuidador.vista') }}">Quick View</a>
                                @elseif($cuid->find($i+1)->tipo_serv==2)
                                    <a href="{{ route('cuidador.vista2') }}">Quick View</a>
                                @endif

                            </div>
                            <div class="new-collections-grid1-right new-collections-grid1-right-rate">
                                <div class="rating">
                                    <div class="rating-left">
                                        <img src="images/2.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="rating-left">
                                        <img src="images/2.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="rating-left">
                                        <img src="images/2.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="rating-left">
                                        <img src="images/2.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="rating-left">
                                        <img src="images/1.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                        @if($cuid->find($i+1)->tipo_serv==1)
                            <h4><a href="{{ route('cuidador.vista') }}">{{ $cuid->find($i+1)->titulo }}</a></h4>
                        @elseif($cuid->find($i+1)->tipo_serv==2)
                            <h4><a href="{{ route('cuidador.vista2') }}">{{ $cuid->find($i+1)->titulo }}</a></h4>
                        @endif

                        <p>Descripcion: </p>
                        <h4>{{ $cuid->find($i+1)->descripcion }}</h4>
                        <p>Precios: </p>
                        <h4>Paseo por hora : Bs. {{ $cuid->find($i+1)->precio_paseo }}   </h4>

                        <h4>Alojamiento por dia: Bs. {{ $cuid->find($i+1)->precio_alojamiento }} </h4>
                        <div class="new-collections-grid1-left simpleCart_shelfItem">
                            <p>
                                <a class="item_add" href="#">Comprar</a></p>
                        </div>
                    </div>

                </div>
                    @endif
                @endfor
            </div>
        </div>
    </div>
    <div class="clearfix"> </div>
    <!-- //collections -->


@endsection
