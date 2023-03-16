@extends('layouts.main')

@section('jumbo')
    <section class="jumbo"></section>
@endsection

@section('content')
    <section class="main-container">
        <div class="title"><h2>CURRENT SERIES</h2></div>
        @foreach ($comics as $comic)
                <a href="{{ route('comic-details', ['id' => $comic['id']]) }}" class="dc-card">
                    <div class="img-area">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    </div>
                    <div class="card-body">{{ $comic['title'] }}</div>
                </a>
        @endforeach
        <div class="btn-load"><button>Load More</button></div>
    </section>
@endsection

@section('page-strip')
    <section class="page-strip grey">
        <div class="sections-container h-100">
            <div class="container-fluid h-100">
                <div class="row p-0 h-100">
                    <a class="col-3" href="#">
                        <span>DIGITAL COMICS</span>
                        <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="">
                    </a>
                    <a class="col-3" href="#">
                        <span>SHOP DC</span>
                        <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="">
                    </a>
                    <a class="col-3" href="#">
                        <span>COMIC SHOP LOCATOR</span>
                        <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="">
                    </a>
                    <a class="col-3" href="#">
                        <span>SUBSCRIPTIONS</span>
                        <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
