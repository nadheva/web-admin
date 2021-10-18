@extends('layout.master')
@section('app')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-header card-header-text" data-background-color="rose">
                            <h4 class="card-title">Dokumen</h4>
                        </div>
                        <div class="form-group text-left form-button">
                            <a href="{{route('kontenDokumen.create')}}" class="btn btn-fill btn-rose">Tambah Dokumen Baru</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="myTable" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>File</th>
                                        <th>Bab</th>
                                        <th>Nama Kelas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kontenDokumen as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->judul }}</td>
                                        <td>{{ $item->deskripsi }}</td>
                                        <td>{{ $item->file }}</td>
                                        <td>{{ $item->bab }}</td>
                                        <td>{{ $item->kelas->nama }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{route('kontenDokumen.edit', $item->id)}}" class="btn btn-primary"><i class="material-icons">edit</i></i></a>
                                                <form action="{{route('kontenDokumen.destroy', $item->id)}}" method="POST">
                                                    @csrf
                                                    @method("DELETE")
                                                    <button type="submit" class="btn btn-danger"><i class="material-icons">delete</i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@push('scripts')
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
@endpush
@endsection