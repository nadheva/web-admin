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
                            <h4 class="card-title">Video</h4>
                        </div>
                        <div class="form-group text-left form-button">
                            <a href="{{route('kontenVidio.create')}}" class="btn btn-fill btn-rose">Tambah Video Baru</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div  class="table-responsive">
                            <table id="myTable" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Link</th>
                                        <th>Bab</th>
                                        <th>Kelas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kontenVidio as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->judul }}</td>
                                        <td>{{ $item->deskripsi }}</td>
                                        <td>{{ $item->link }}</td>
                                        <td>{{ $item->bab }}</td>
                                        <td>{{ $item->kelas->nama }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{route('kontenVidio.edit', $item->id)}}" class="btn btn-primary"><i class="material-icons">edit</i></a>
                                                <form action="{{route('kontenVidio.destroy', $item->id)}}" method="POST">
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