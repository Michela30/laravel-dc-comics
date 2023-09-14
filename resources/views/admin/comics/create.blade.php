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
            
            <div class="mb-3">
                <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Write here..." required>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Write here..." required>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="type" name="type" placeholder="Write here..." required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price<span class="text-danger">*</span></label>
                <input type="number" min="2" max="100" class="form-control" id="price" name="price" placeholder="Write here..." required>
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series" placeholder="Write here...">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Write here...">
            </div>
            <div class="mb-3">
                <label for="artists" class="form-label">Artists</label>
                <input type="text" class="form-control" id="artists" name="artists" placeholder="Write here...">
            </div>
            <div class="mb-3">
                <label for="writers" class="form-label">Writers</label>
                <input type="text" class="form-control" id="writers" name="writers" placeholder="Write here...">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description<span class="text-danger">*</span></label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>

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