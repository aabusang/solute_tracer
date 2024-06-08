@extends('layouts.app')

@section('content')
    <div class="row">

        <!-- navbar (default is inside layouts.app) -->
        <!-- hero/home contexnt -->

        <section id="title">
            <div class="row cta-hero">
                <div class="row cta">
                    <h1>River Solute Project Overview.</h1>
                    <h1>Centuries of Solute Tracer Data</h1>
                    <!-- <form action="{{ url('explore') }}" method="post">
                        <button type="submit" class="btn btn-dark btn-lg explore-btn">Explore The Data</button>
                    </form> -->
                    
                    <!-- <button onclick=handleBtns('explore') type="button" class="btn btn-dark btn-lg explore-btn">Explore The Data</button> -->
                    <!-- <button onclick=handleBtns('upload') type="button" class="btn btn-outline-light btn-lg upload-btn">Submit Data</button> -->
                </div>
                <div class="row hero-image">
                    <h1>test image text</h1>
                    <!-- <img id="sunshine-river" src="{{ asset('images/sunshine-river.jpg') }}" alt="image of river"> -->
                </div>
            </div>
        </section>


        <!-- map and btc of current location -->
        <section id="map" style="margin-bottom: 10%">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div id="mapid"></div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div id="btc"></div>
                </div>
            </div>
        </section>

         <!-- footer -->




    </div>
@endsection


