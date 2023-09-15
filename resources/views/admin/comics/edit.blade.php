@extends('layouts.mainpage')
@section('page-title', 'Edit Page')


@section('main')

<div class="container">

    <h2 class="text-center">
        Edit Comic Book
    </h2>

    <div class="bg-edit-form">
        <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Write here..." value="{{ $comic->title }}" required>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Write here..." value="{{ $comic->thumb }}" required>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="type" name="type" placeholder="Write here..." value="{{ $comic->type }}" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price<span class="text-danger">*</span></label>
                <input type="number" min="2" max="100" class="form-control" id="price" name="price" placeholder="Write here..." value="{{ $comic->price }}" required>
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series" placeholder="Write here..." value="{{ $comic->series }}">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Write here..." value="{{ $comic->sale_date }}">
            </div>
            <div class="mb-3">
                <label for="artists" class="form-label">Artists</label>
                <input type="text" class="form-control" id="artists" name="artists" placeholder="Write here..." value="{{ $comic->artists }}">
            </div>
            <div class="mb-3">
                <label for="writers" class="form-label">Writers</label>
                <input type="text" class="form-control" id="writers" name="writers" placeholder="Write here..." value="{{ $comic->writers }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description<span class="text-danger">*</span></label>
                <textarea class="form-control" id="description" name="description" rows="3" value="{{ $comic->description }}" required></textarea>
            </div>

            <div class="text-center">
                <a href="">
                    <button type="submit" class="btn btn-warning w-25">
                        Edit
                    </button>
                </a>
            </div>
    
        </form>
    </div>

</div>

@endsection