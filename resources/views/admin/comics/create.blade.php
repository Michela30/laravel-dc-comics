@extends('layouts.mainpage')

@section('page-title', 'Create Page')


@section('main')

<div class="container">

    <h2 class="text-center">
        Insert a new Comic Book
    </h2>

    <div class="bg-form">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            @if ($errors->any())
            <div class="alert alert-danger">
                <h6>
                    Check this error:
                </h6>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif
            
            <div class="mb-3">
                <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Write here the title..." required>
            </div>

                @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror

            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb<span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" placeholder="Write here a thumb..." required>
            </div>

                @error('thumb')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror

            <div class="mb-3">
                <label for="type" class="form-label">Type<span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" placeholder="Write here the type..." required>
            </div>

                @error('type')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror

            <div class="mb-3">
                <label for="price" class="form-label">Price<span class="text-danger">*</span></label>
                <input type="number" min="2" max="100" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Write here the price..." required>
            </div>

                @error('price')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" placeholder="Write here the series...">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" placeholder="Write here the sale date...">
            </div>
            <div class="mb-3">
                <label for="artists" class="form-label">Artists</label>
                <input type="text" class="form-control @error('artists') is-invalid @enderror" id="artists" name="artists" placeholder="Write here the artists...">
            </div>
            <div class="mb-3">
                <label for="writers" class="form-label">Writers</label>
                <input type="text" class="form-control @error('writers') is-invalid @enderror" id="writers" name="writers" placeholder="Write here the writers...">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description<span class="text-danger">*</span></label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" placeholder="Write here the description..." required></textarea>
            </div>

                @error('description')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror

            <div class="text-center">
                <a href="">
                    <button type="submit" class="btn btn-success w-25">
                        Add
                    </button>
                </a>
            </div>
    
        </form>
    </div>

</div>

@endsection