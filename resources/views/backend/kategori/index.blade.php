@extends('backend.layouts.adm_template')
@section('content')
        <!-- awal header  -->
        <div class="row">
	<!-- Column lebar 12 col, text rata tengah  -->
     	<div class="col text-center">
        <h3>Laravel CRUD | Kategori</h3>
	</div>
        </div>    
        <!-- akhir header  -->


        <!-- awal content  -->
<div class="row">
<div class="col-lg-12">
    <div class="card border-0 shadow-sm rounded">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col">
                    <a href="{{ route('kategori.create') }}" type="button" class="btn btn-success">ADD</a>
                </div>
                <div class="col">
                    <form action="/kategori" method="GET">
                        @csrf
                        <div class="input-group">
                            <input type="text"
                                   name="search"
                                   class="form-control"
                                   placeholder="Cari kategori"
                                   aria-label="Search for categories"
                                   aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary"
                                    type="submit"
                                    id="button-addon2">
                                Search
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>DESKRIPSI</th>
                        <th>KATEGORI</th>
                        <th>KETERANGAN</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($rsKategori as $row)
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->deskripsi }}</td>
                        <td>{{ $row->kategori }}</td>
                        <td>{{ $row->ket }}</td>
						<td>
                            <!-- Awal tombol aksi -->
						<td class="text-center">
                        <form action="{{ route('kategori.destroy', $row->id) }}" 
                              method="POST" 
                              onsubmit="return confirm('Yakin untuk menghapus?')">
        <!-- Tombol Show -->
                                <a href="{{ route('kategori.show', $row->id) }}" class="btn btn-sm btn-dark">SHOW</a>
        
        <!-- Tombol Edit -->
                                <a href="{{ route('kategori.edit', $row->id) }}" class="btn btn-sm btn-primary">EDIT</a>
        
                        @csrf <!-- Hidden token -->
                        @method('DELETE') <!-- Metode DELETE untuk form -->
        
                                <button type="submit" class="btn btn-sm btn-danger">DELETE</button>
                        </form>
                        </td>

							<!-- Akhir tombol aksi -->
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">Belum ada record data</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            {{$rsKategori->links()}}
        </div>
    </div>
</div>
</div>
<!-- akhir content -->
 @endsection
