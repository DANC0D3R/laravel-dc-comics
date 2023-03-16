@extends('layouts.main')

@section('jumbo')
    <section class="jumbo"></section>
@endsection

@section('content')
<div class="conainer p-5 dc-cont-spec">
    <h1 class="text-primary">Aggiungi un nuovo fumetto</h1>
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Batman Adventures" name="title" value="{{ old('title') }}">
            @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3" name="description">{{ old('description') }}</textarea>
            @error('description')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Thumb Image</label>
            <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Insert a valid url" name="thumb" value="{{ old('thumb') }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Sale date</label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="exampleFormControlInput3" placeholder="Insert a valid date in format YYYY-MM-DD" name="sale_date" value="{{ old('sale_date') }}">
            @error('sale_date')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput4" class="form-label">Price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="exampleFormControlInput4" placeholder="$ 19.99" name="price" value="{{ old('price') }}">
            @error('price')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput5" class="form-label">Series</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="exampleFormControlInput5" placeholder="Series" name="series" value="{{ old('series') }}">
            @error('series')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput6" class="form-label">Type</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="exampleFormControlInput6" placeholder="Type" name="type" value="{{ old('type') }}">
            @error('type')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea2" class="form-label">Artists</label>
            <textarea class="form-control" id="exampleFormControlTextarea2" rows="2" name="artists">{{ old('artists') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea3" class="form-label">Writers</label>
            <textarea class="form-control" id="exampleFormControlTextarea3" rows="2" name="writers">{{ old('writers') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Conferma</button>
    </form>
</div>
@endsection