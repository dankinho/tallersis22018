@extends('layout')

@section('content')
    <div class="content">
        <div class="products-box">
            <div class="products">

                <h5 >
                    <a  href="{{ route('home') }}"    class="btn btn-default pull">Regresar</a>
                    <span>Los servicios de tu mascota</span>
                    <a       class="btn btn-primary pull" >Adquirir nuevos sevicios</a>
                </h5>
                <hr>
                <div class="section group" align="center">
                    <div class="col-xs-12 ">

                        @include('serviciosMascotas.fragment.info')
                        <div class="products products-secondbox">
                            @foreach($mascotasServicios as $mascotaServicio)
                                <div class="cartires-grids">
                                    <div class="grid_1_of_5 images_1_of_5">
                                        <img src="images/g1.jpg">
                                        <h3>{{ $mascotaServicio->fecha_servicio_inicio }} </h3>
                                        <h4> Fecha de creacion </h4>
                                        <p>{{ $mascotaServicio->fecha_servicio_final }}</p>

                                        <div class="button"><span><a   >Ver</a></span></div>
                                        <div class="button"><span><a   >Borrar</a></span></div>
                                    </div>

                                </div>

                            @endforeach


                        </div>


                        {!! $mascotasServicios->render() !!}
                    </div>
                </div>
            </div>

        </div>

        <div class="Cartires">
            <h5><span>Car</span> Audiosystem</h5>
            <div class="car-tires-top-pagnation">
                <ul>
                    <li><a href="index.html">Home /</a></li>
                    <li><span>Caraudio system</span></li>
                </ul>
            </div>
            <div class="cartires-grids">
                <div class="cartire-grid">
                    <div class="cartire-grid-img">
                        <img src="images/a1.jpg" title="tries" />
                    </div>
                    <div class="cartire-grid-info">
                        <ul>
                            <li><span>New</span> |&nbsp;&nbsp;Available !</li>
                        </ul>
                        <h3>Fondmetal 7500</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                    <div class="cartire-grid-cartinfo">
                        <h4>REDUCED PRICE!</h4>
                        <span>$502.00</span>
                        <ul>
                            <li><input type="checkbox"></li>
                            <li><p>Select to compare</p></li>
                        </ul>
                        <a href="singlepage.html">Add to Cart</a><br />
                        <a href="singlepage.html">View</a>
                    </div>
                    <div class="clear"> </div>
                </div><br />
                <div class="cartire-grid">
                    <div class="cartire-grid-img">
                        <img src="images/a2.jpg" title="tries" />
                    </div>
                    <div class="cartire-grid-info">
                        <ul>
                            <li><span>New</span> |&nbsp;&nbsp;Available !</li>
                        </ul>
                        <h3>Fondmetal 7500</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                    <div class="cartire-grid-cartinfo">
                        <h4>REDUCED PRICE!</h4>
                        <span>$502.00</span>
                        <ul>
                            <li><input type="checkbox"></li>
                            <li><p>Select to compare</p></li>
                        </ul>
                        <a href="singlepage.html">Add to Cart</a><br />
                        <a href="singlepage.html">View</a>
                    </div>
                    <div class="clear"> </div>
                </div><br />
                <div class="cartire-grid">
                    <div class="cartire-grid-img">
                        <img src="images/a3.jpg" title="tries" />
                    </div>
                    <div class="cartire-grid-info">
                        <ul>
                            <li><span>New</span> |&nbsp;&nbsp;Available !</li>
                        </ul>
                        <h3>Fondmetal 7500</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                    <div class="cartire-grid-cartinfo">
                        <h4>REDUCED PRICE!</h4>
                        <span>$502.00</span>
                        <ul>
                            <li><input type="checkbox"></li>
                            <li><p>Select to compare</p></li>
                        </ul>
                        <a href="singlepage.html">Add to Cart</a><br />
                        <a href="singlepage.html">View</a>
                    </div>
                    <div class="clear"> </div>
                </div><br />
                <div class="cartire-grid">
                    <div class="cartire-grid-img">
                        <img src="images/g6.jpg" title="tries" />
                    </div>
                    <div class="cartire-grid-info">
                        <ul>
                            <li><span>New</span> |&nbsp;&nbsp;Available !</li>
                        </ul>
                        <h3>Fondmetal 7500</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                    <div class="cartire-grid-cartinfo">
                        <h4>REDUCED PRICE!</h4>
                        <span>$502.00</span>
                        <ul>
                            <li><input type="checkbox"></li>
                            <li><p>Select to compare</p></li>
                        </ul>
                        <a href="singlepage.html">Add to Cart</a><br />
                        <a href="singlepage.html">View</a>
                    </div>
                    <div class="clear"> </div>
                </div><br />
            </div>
        </div>
    </div>
@endsection
