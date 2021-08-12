@extends('frontend.template.default')

@section('content')
<h4>Detail Buku</h4>
<div class="row">
    
    <div class="col s12 m12">
        
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
                    <p>
                        <i class="material-icons">book</i> : {{ $book->qty}}
                    </p>
                </div>
                <div class="card-action">
                    <form action="{{ route('book.borrow',$book) }}" method="POST">
                        @csrf
                        <a href="" class="btn pink accent-2 waves-effect waves-light right"><input type="submit" value="Pinjam Ya"><i class="material-icons left">send</i></a>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>  
    
</div>

<h5>Buku lainnya dari penulis {{$book->author->name}}....</h5>
<div class="row">
    
    @foreach ($book->author->books->shuffle()->take(4) as $book)
       @include('frontend.template.components.card-book',['book' =>$book])
    @endforeach
</div>
@endsection