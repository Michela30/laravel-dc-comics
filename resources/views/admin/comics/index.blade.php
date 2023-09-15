@extends('layouts.mainpage')

@section('page-title', 'Index Page')


@section('main')

<div class="container">
    <div class="text-center">
        <h2>
            Comics Database
        </h2>
    </div>

    <div class="text-center mb-3">
        <a href="{{ route('comics.create') }}">
            <button class="btn btn-success w-50">
                Add Comic Book
            </button>
        </a>
    </div>

    <table class="table">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Thumb</th>
                <th scope="col">Price</th>
                <th scope="col">Series</th>
                <th scope="col">Sale Date</th>
                <th scope="col">Type</th>
                <th scope="col">Artist</th>
                <th scope="col">Writers</th>
                <th scope="col">Action</th>
              </tr>
        </thead>

        <tbody>
            @foreach ($comics as $singleComic)
                <tr>
                    <th scope="row">
                        {{ $singleComic->id }}
                    </th>
                    <td>
                        {{ $singleComic->title }}
                    </td>
                    <td class="text-break">
                        {{ $singleComic->description }}
                    </td>
                    <td class="text-break">
                        {{ $singleComic->thumb }}
                    </td>
                    <td>
                        {{ $singleComic->price }}€
                    </td>
                    <td>
                        {{ $singleComic->series }}
                    </td>
                    <td>
                        {{ $singleComic->sale_date }}
                    </td>
                    <td>
                        {{ $singleComic->type }}
                    </td>
                    <td>
                        {{ $singleComic->artists }}
                    </td>
                    <td>
                        {{ $singleComic->writers }}
                    </td>
                    <td>
                        <a class="text-decoration-none text-white" href="{{ route('comics.show', ['comic' => $singleComic->id ]) }}">
                            <button class="btn btn-primary">
                                View
                            </button>
                        </a>

                        <a class="text-decoration-none text-white" href="{{ route('comics.edit', ['comic' => $singleComic->id ]) }}">
                            <button class="btn btn-warning">
                                Edit
                            </button>
                        </a>

                        <form action="{{ route('comics.destroy', ['comic' => $singleComic->id]) }}" method="POST"
                            onsubmit="return confirm('Sei sicuro di voler eliminare questo Comic Book?')">
                        @csrf
                        @method('DELETE')

                        <a class="text-decoration-none text-white" href="{{ route('comics.edit', ['comic' => $singleComic->id ]) }}">
                            <button type="sumbit" class="btn btn-danger">
                                Delete
                            </button>
                        </a>

                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
    
@endsection