@extends('layouts.main')

@section('page-title')
Home
@endsection

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

@section('home-strip')
<section class="page-strip home">
    <div class="sections-container h-100">
        <div class="container-fluid h-100">
            <div class="d-flex p-0 h-100">
                <a class="cta" href="#">
                    <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="">
                    <span>DIGITAL COMICS</span>
                </a>
                <a class="cta" href="#">
                    <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="">
                    <span>DC MERCHANDISE</span>
                </a>
                <a class="cta" href="#">
                    <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="">
                    <span>SUBSCRIPTIONS</span>
                </a>
                <a class="cta" href="#">
                    <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="">
                    <span>COMIC SHOP LOCATOR</span>
                </a>
                <a class="cta" href="#">
                    <img src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="">
                    <span>DC POWER VISA</span>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
