@extends('/master')
@section('title', 'Edit Books')
@section('content')
    <h2>Update New Movie</h2>
    <form action="{{ route('books.update', ['book' => $book->id]) }}" method="POST">
        @method('put')
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="title">Judul</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="judul"
                    value="{{ old('judul') ?? $book->judul }}">
                @error('judul')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="genre">Halaman</label>
                <input type="text" class="form-control @error('halaman') is-invalid @enderror" name="halaman"
                    id="halaman" value="{{ old('halaman') ?? $book->halaman }}">
                @error('halaman')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="title">Penerbit</label>
                <input type="text" class="form-control @error('penerbit') is-invalid @enderror" name="penerbit" id="penerbit"
                    value="{{ old('penerbit') ?? $book->penerbit }}">
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="title">Kategori</label>
                <input type="text" class="form-control @error('kategori') is-invalid @enderror" name="kategori" id="kategori"
                    value="{{ old('kategori') ?? $book->kategori }}">
                @error('kategori')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="genre">ID_Authors</label>
                <input type="text" class="form-control @error('authors_id') is-invalid @enderror" name="authors_id"
                    id="authors_id" value="{{ old('authors_id') ?? $book->authors_id }}">
                @error('authors_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-md-6 mb-3">
                <label for="Penerbit"></label>
                <input type="text" class="form-control @error('penerbit') is-invalid @enderror" name="penerbit" id="penerbit"
                    min="1900" max="2099" value="{{ old('penerbit') ?? $book->penerbit }}">
                @error('penerbit')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="Penerbit"></label>
                <input type="text" class="form-control @error('penerbit') is-invalid @enderror" name="penerbit" id="penerbit"
                    min="1900" max="2099" value="{{ old('penerbit') ?? $book->penerbit }}">
                @error('penerbit')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div> --}}
        <button class="btn btn-primary btn-lg btn-block" type="submit">Add</button>
    </form>
    @endsection
