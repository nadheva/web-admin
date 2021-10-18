@extends('layout.master')
@section('app')
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                <form action="{{ route('kelas.store') }}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-text" data-background-color="rose">
                            <h4 class="card-title">Tambah Kursus</h4>
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Nama</label>
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" name="nama" class="form-control">
                                    <span class="material-input"></span></div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Deskripsi</label>
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" name="deskripsi" class="form-control" placeholder="deskripsi">
                                    <span class="material-input"></span></div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <div class="form-group text-left form-button">
                                        <button type="submit" class="btn btn-fill btn-rose">Tambah Kursus</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<div class="col-md-8">
    <div class="card">
        <form method="get" action="#" class="form-horizontal">
            
        </form>
    </div>
</div>
@endsection