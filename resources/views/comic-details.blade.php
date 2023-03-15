@extends('layouts.main')

@section('jumbo')
    <section class="jumbo"></section>
@endsection

@section('content')
    <section class="comics">
        <div class="main-container">
            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" class="thumb">
            <div class="container-fluid">
                <div class="row d-flex align-items-start mt-4">
                    <div class="col-8 col">
                        <h2 style="text-transform:uppercase" class="my-3 main-title">{{$comic['title']}}</h2>
                        <div class="green-container container-fluid">
                            <div class="row">
                                <div class="col-8 col d-flex justify-content-between">
                                    <div><span>U.S. Price:</span> {{$comic['price']}}</div>
                                    <span>AVAILABLE</span>
                                </div>
                                <div class="col-4 col d-flex justify-content-center"><a href="#">Check availability <i class="bi bi-chevron-compact-down"></i></a>
                                </div>
                            </div>
                        </div>
                        <p class="mt-5 descr">{!! $comic['description']!!} </p>
                    </div>
                    <div class="col-3 offset-1 mt-4 mb-5 p-0 position-relative">
                        <h5 class="text-end">ADVERTISEMENT</h5>
                        <img src="https://tortaprint.com/wp-content/uploads/imported/Cialda-per-torta-SUPERMAN-decorazione-alimentare-senza-glutine-personalizzazione-grafica-inclusa-topper-cake-design-for-B07QSB8GJJ.jpg" alt="">
                        <h6 class="unleash position-absolute">UNLEASH<br>HEROIC<br>REWARDS</h6>
                        <a href="#" class="apply-now position-absolute">APPLY NOW</a>
                    </div>
                </div>
                <div class="row details mt-4">
                    <div class="col-6">
                        <h4>Talent</h4>
                        <div class="container-fluid art-details">
                            <div class="row lined">
                                <h5 class="col-3 p-0">Art by:</h5>
                                <div class="col-8 offset-1 p-0">
                                    @foreach ($comic['artists'] as $artist)
                                    @if($loop->last)  {{$artist.'.'}}
                                    @else {{$artist.', '}}
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="row last">
                                <h5 class="col-3 p-0">Written by:</h5>
                                <div class="col-8 offset-1 p-0">
                                    @foreach ($comic['writers'] as $writer)
                                        @if($loop->last)  {{$writer.'.'}}
                                        @else {{$writer.','}}
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <h4>Specs</h4>
                        <div class="container-fluid art-details">
                            <div class="row lined">
                                <h5 class="col-3 p-0">Series:</h5>
                                <div class="col-8 offset-1 p-0" style="text-transform: uppercase">
                                    {{$comic['series']}}
                                </div>
                            </div>
                            <div class="row middle">
                                <h5 class="col-3 p-0">U.S. Price:</h5>
                                <div class="col-8 offset-1 p-0">
                                    {{$comic['price']}}
                                </div>
                            </div>
                            <div class="row lined">
                                <h5 class="col-3 p-0">On Sale Date:</h5>
                                <div class="col-8 offset-1 p-0">
                                    {{$comic['sale_date']}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


