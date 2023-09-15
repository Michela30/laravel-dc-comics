@extends('layouts.mainpage')

@section('page-title', 'Show Page')


@section('main')

<div class="container">
    <div>
        <h2>
            Comics Database
        </h2>
    </div>

    <div class="row">

        <div class="card col-6">
            <div class="img-box">
                <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
            </div>
        </div>
        
        <div class="card col-6">
            <div class="card-body">
    
                <h5 class="card-title">
                    {{ $comic->title }}
                </h5>
                <span class="card-text">
                    <strong>
                        Description:
                    </strong> 
                    {{ $comic->description }}
                </span>
                <br>
                <span>
                    <strong>
                        Series:
                    </strong>
                    {{ $comic->series }}
                </span>
                <br>
                <span>
                    <strong>
                        Price:
                    </strong>
                    {{ $comic->price }}€
                </span>
                <br>
                <span>
                    <strong>
                        Artists:
                    </strong>
                    {{ $comic->artists }}
                </span>
                <br>
                <span>
                    <strong>
                        Writers:
                    </strong>
                    {{ $comic->writers }}
                </span>
                
            </div>
        </div>

    </div>

    <div class="text-center mt-3">
        <a href="{{ route('comics.index') }}" class="text-white text-decoration-none">
            <button class="btn btn-success">
                View all Comics
            </button>
        </a>
    </div>

</div>
    
@endsection