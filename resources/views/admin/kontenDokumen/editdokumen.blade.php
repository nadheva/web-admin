@extends('layout.master')
@section('app')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="rose">
                <i class="material-icons">mail_outline</i>
            </div>
            <div class="card-content">
                <h4 class="card-title">Tambah Dokumen</h4>
                <form method="post" action="{{route('kontenDokumen.update',$kontenDokumen->id)}}"  enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group label-floating">
                        <label class="control-label">Judul</label>
                        <input type="text" name="judul" class="form-control" value="{{$kontenDokumen->judul}}">
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" value="{{$kontenDokumen->deskripsi}}">
                    </div>
                    <div class=" label-floating">
                        <label class="control-label">File</label>
                        <input type="file" name="file" class="" value="{{$kontenDokumen->file}}">
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">Bab</label>
                        <input type="number" name="bab" class="form-control" value="{{$kontenDokumen->bab}}">
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">Kelas</label>
                        <div class="col-lg-3 col-md-6 col-sm-3">
                            <select class="selectpicker" data-style="btn btn-info" name="kelas_id" value="{{$kontenDokumen->kelas->nama}}" data-size="7" >
                                @foreach ($kelas as $item)
                                    <option value="{{$item->id}}">{{$item->nama}}</option>
                                @endforeach                             
                            </select>
                        </div>
                    </div>
                    <div class="text-right form-group mt-5">
                        <button type="submit" class="btn btn-fill mt-5 btn-rose">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection