<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sinvent | Kategori</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <!-- content Area atas  -->
    <!-- membuat container  -->
    <div class="container">
        <!-- membuat row header  -->
         <div class="row">
            <div class="col text-center">
                <h3>Laravel CRUD | Kategori</h3>
            </div>
         </div>
        <!-- akhir row  header -->
  
        <!-- membuat row content  -->
        <div class="row">
    <div class="card border-1 shadow-sm rounded">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <form action="{{ route('kategori.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-floating mb-4">
                            <input type="text" 
                                   name="deskripsi" 
                                   class="form-control @error('deskripsi') is-invalid @enderror" 
                                   placeholder="Deskripsi" 
                                   value="{{old('deskripsi')}}">
                            <label for="floatingPassword">Deskripsi</label>

                            @error('deskripsi')
                                <div class="alert alert-danger mt-2">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        
                        <div>
                            <select name="kategori" class="form-select" aria-label="Default select example">
                                @foreach($listKategori as $key=>$val)
                                <option value="{{ $key }}">{{ $val }}</option>
                                @endforeach
                            </select>
                            @error('kategori')
                                <div class="alert alert-danger mt-2">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>

                        <!-- Move submit and reset buttons inside the form -->
                        <div class="row mt-3">
                            <div class="col">
                                <button type="submit" class="btn btn-md btn-primary me-3">SAVE</button>
                                <button type="reset" class="btn btn-md btn-warning">RESET</button>
                            </div>
                            <div class="col text-end">
                                <a href="{{ route('kategori.index') }}" class="btn btn-md btn-dark mb-3">BACK</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- akhir card --> 
</div>
<!-- akhir row  content -->


         <!-- membuat row footer  -->
         <div class="row">


         </div>
        <!-- akhir row  footer -->
    </div>
    <!-- content area bawah  -->


    <!-- Mengakses JavaScript library  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
