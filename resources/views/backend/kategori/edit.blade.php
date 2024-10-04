<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sinvent | Kategori</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <!-- Content area Atas -->
    <!-- awal container -->
    <div class="container">
        <!-- awal header  -->
        <div class="row">
            <!-- Column lebar 12 col, text rata tengah  -->
            <div class="col text-center">
                <h3>Laravel CRUD | Kategori</h3>
            </div>
        </div>    
        <!-- akhir header  -->
        <div class="row">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h4>Edit Kategori</h4>
                        </div>
                    </div>
                    <form action="{{ route('kategori.update', $rsKategori->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-floating mb-4">
                            <input type="text" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" placeholder="Deskripsi" value="{{ old('deskripsi', $rsKategori->deskripsi) }}">
                            <label for="floatingPassword">Deskripsi</label>
                            @error('deskripsi')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <select name="kategori" class="form-select @error('kategori') is-invalid @enderror" aria-label="Default select example">
                                @foreach($listKategori as $key => $val)
                                    <option value="{{ $key }}" {{ $key == $rsKategori->kategori ? 'selected' : '' }}>
                                        {{ $val }}
                                    </option>
                                @endforeach
                            </select>
                            @error('kategori')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="row mt-3">
                        <div class="col">
                        <button type="submit" class="btn btn-primary me-3">UPDATE</button>
                        <a href="{{ route('kategori.index') }}" class="btn btn-secondary">BATAL</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Content area bawah -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
