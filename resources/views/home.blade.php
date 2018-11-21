@extends('layout2')

@section('content')
    <!-- collections -->
    <div class="new-collections">
        <div class="container">
            <h3 class="animated wow zoomIn" data-wow-delay=".5s">Servicios</h3>
            <p class="est animated wow zoomIn" data-wow-delay=".5s">Encuentra al cuidador perfecto para tu mascota.</p>
            <div class="new-collections-grids">
                @for($i=0; $i<$num;$i++)
                <div class="col-md-6 new-collections-grid">
                    <div class="new-collections-grid1 new-collections-grid1-image-width animated wow slideInUp" data-wow-delay=".5s">
                        <div class="new-collections-grid1-image">
                            <a href="single.html" class="product-image"><img width="500px" height="200px" src="images/triumph_big1.jpg" alt=" " class="img-responsive" /></a>
                            <div class="new-collections-grid1-image-pos new-collections-grid1-image-pos1">
                                <a href="single.html">Quick View</a>
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
                        <h4><a href="single.html">{{ $cuid->find($i+1)->titulo }}</a></h4>
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
                @endfor
            </div>
        </div>
    </div>
    <div class="clearfix"> </div>
    <!-- //collections -->


@endsection
