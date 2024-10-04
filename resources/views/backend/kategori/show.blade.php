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
                    <h4>Show Kategori</h4>
                </div>
            </div>
            <div class="row">
            @if($rsKategori->isNotEmpty())
                <div class="col">
                    <table class="table table-striped table-hover">
                        <tr>
                            <td>ID</td>
                            <td>&nbsp;</td>
                            <td>{{ $rsKategori[0]->id }}</td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td>&nbsp;</td>
                            <td>{{ $rsKategori[0]->deskripsi }}</td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td>&nbsp;</td>
                            <td>{{ $rsKategori[0]->kategori }}</td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td>&nbsp;</td>
                            <td>{{ $rsKategori[0]->ket }}</td>
                        </tr>
                    </table>
                </div>
                @else
                <p>Data tidak ditemukan.</p>
                @endif
                    <div class="row">
                        <div class="col text-center"> <!-- Perbaikan di sini -->
                            <a href="{{ route('kategori.index') }}" class="btn btn-md btn-dark mb-3">BACK</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- Content area bawah -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
