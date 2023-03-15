@extends('layouts.main')

@section('jumbo')
    <section class="jumbo"></section>
@endsection

@section('content')
    <main>CHARACTERS</main>
@endsection
@section('page-strip')
    <section class="page-strip grey">
        <div class="sections-container h-100">
            <div class="container-fluid h-100">
                <div class="row p-0 h-100">
                    <a class="col-3" href="#">
                        <span>DIGITAL COMICS</span>
                        <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                    </a>
                    <a class="col-3" href="#">
                        <span>SHOP DC</span>
                        <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="">
                    </a>
                    <a class="col-3" href="#">
                        <span>COMIC SHOP LOCATOR</span>
                        <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">
                    </a>
                    <a class="col-3" href="#">
                        <span>SUBSCRIPTIONS</span>
                        <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
