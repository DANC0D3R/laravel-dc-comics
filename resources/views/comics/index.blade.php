@extends('layouts.main')

@section('jumbo')
    <section class="jumbo"></section>
@endsection

@section('content')
<div class="container text-center">
    <div class="row justify-content-between">
        @forelse ($comics as $comic)
        <div class="card dc-cards">
            <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
            <div class="card-body text-center">
                <h4 class="card-title text-primary">{{$comic->title}}</h4>
                <p class="card-text text-secondary">{{$comic->series}}</p>
            </div>
            <div class="card-body button-box d-flex justify-content-evenly">
                <a href="{{route('comics.show', $comic->id)}}" class="btn btn-secondary" title="See details"><i class="bi bi-eye-fill"></i></a>
                <a href="#" class="btn btn-warning" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                <a href="#" class="btn btn-danger" title="Delete"><i class="bi bi-trash-fill"></i></a>
            </div>
        </div>
        @empty
            <h5>Nessuna risorsa trovata</h5>
        @endforelse
        <button class="btn-primary btn w-40 my-5 add-comic d-none">Aggiungi fumetto</button>
    </div>
    <a class="btn-primary btn w-40 my-5 add-comic" href="{{route('comics.create')}}">Aggiungi fumetto <i class="bi bi-plus-circle"></i></a>
</div>

@endsection