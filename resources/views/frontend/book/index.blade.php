@extends('frontend.template.default')

@section('content')
    <h2>List Buku</h2>
    <blockquote>
        <p class="flow-text">List buku yang kamu colong</p>
    </blockquote>
    <div class="row">
        @foreach ($books as $book)
            @include('frontend.template.components.card-book',['book' =>$book])
             
        @endforeach
    </div>

{{-- pagination --}}
{{$books->links('vendor.pagination.custompagination')}}

@endsection
