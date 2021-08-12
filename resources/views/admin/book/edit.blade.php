@extends('admin.template.default')

@section('content')
    <div class="box m-3">
        <div class="box-header">
            <h4 class="box-title">Update Data Buku</h4>
        </div>

        <div class="box-body">
            <form action="{{ route('admin.book.update', $book )}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <!-- Form Judul Buku-->

                <div class="form-group">
                    <label for="">Judul Buku</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Masukan Judul Buku" value="{{ $book->title ?? old('title') }}">
                    <div class="invalid-feedback">
                        @error('title')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <!-- Form Deskripsi Buku-->

                <div class="form-group">
                    <label for="">Deskripsi Buku</label>
                    <textarea name="description" rows="3" class="form-control @error('description') is-invalid @enderror" placeholder="Tuliskan deskripsi buku">{{ $book->description ??  old('description')}}</textarea>
                    <div class="invalid-feedback">
                        @error('description')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                 <!-- Form Penulis Buku-->

                 <div class="form-group">
                    <label for="">Penulis Buku</label>
                    <select name="author_id" class="form-control select2">
                        @foreach ($authors as $author)
                            <option value="{{ $author->id }}" 
                                @if ($author->id === $book->author_id )
                                    selected
                                @endif
                                >
                                {{ $author->name }}
                            </option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">
                        @error('author_id')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                 <!-- Form Cover Buku-->

                <div class="form-group">
                    <label for="">Cover</label>
                    <input type="file" name="cover" class="form-control @error('cover') is-invalid @enderror">
                    <div class="invalid-feedback">
                        @error('cover')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                 <!-- Form Qty Buku-->

                 <div class="form-group">
                    <label for="">Jumlah Buku</label>
                    <input type="text" name="qty" class="form-control @error('qty') is-invalid @enderror" placeholder="Masukan Jumlah Buku" value="{{ $book->qty ??  old('qty') }}">
                    <div class="invalid-feedback">
                        @error('qty')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" value="Simpan" class="btn btn-primary">
                </div>

            </form>
        </div>
    </div>
@endsection

@push('select2css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
@endpush

@push('jsnya')

    <script src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>
    
    <script>
        $('.select2').select2();
    </script>
@endpush