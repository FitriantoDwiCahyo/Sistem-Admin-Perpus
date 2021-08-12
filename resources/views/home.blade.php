@extends('frontend.template.default')

@section('content')
    <div class="row">
        <h3>Buku yang sedang dicolong</h3>

        @foreach ($books as $book)
        <div class="card horizontal hoverable">
            {{-- <div class="card-image"> --}}
                <img src="{{ $book->getCover()}}" height="350">
            {{-- </div> --}}
            <div class="card-stacked">
                <div class="card-content">
                    <h4 class="pink-text accent-2">{{ $book->title }}</h4>
                    <blockquote>{{ $book->description }}</blockquote>
                    <p>
                        <i class="material-icons">person</i> : {{ $book->author->name}}
                    </p>
                    
                </div>
                
            </div>
        </div>
        @endforeach
    </div>
@endsection