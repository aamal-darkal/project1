@extends('layout')
@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="header-text">
    <section class="header section-padding">
        <div class="background">&nbsp;</div>
        <div class="container">
            <img src={{ URL('') }}
            <h1>Learning Laravel: The Easiest Way</h1>
            <p>
                Fastest way to learn developing web applications
                <br /> using Laravel 4 framework!
                <div class="container">
                    <section class="section-padding">
                        <div class="jumbotron text-center">
                            <h1 class="grey">WELCOME TO OUR HOME</h1>
                            <p>Wanna learn Laravel? You've found a great way to start with.</p>
                        </div>
                    </section>
                </div>
            </p>
        </div>
    </section>
</div>


<div class="jumbotron text-center"  >
    <div class="row">
        <div class="showcase-box col-md-4">
            <div class="showcase-item">                               
                <img src="{{ asset('storage/icon1.png') }}" />
                <p>
                    The most comprehensive book of Laravel
                </p>
            </div>
        </div>

        <div class="showcase-box col-md-4">
            <div class="showcase-item">
                <img src="{{ asset('storage/icon2.png') }}" />
                <p>
                    Building many web applications while learning
                </p>
            </div>
        </div>

        <div class="showcase-box col-md-4">
            <div class="showcase-item">
                <img src="{{ asset('storage/icon3.png') }}" />
                <p>
                    It's not just a book, it's a great community
                </p>
            </div>
        </div>
    </div>
</div>
<br/>
<div> 
    {{asset('') }} <br/>
    {{URL('') }} <br/>
    <img src="{{ asset('storage/icon3.png') }}" />
    <img src="{{ URL('storage/icon3.png') }}" />
</div>

@stop