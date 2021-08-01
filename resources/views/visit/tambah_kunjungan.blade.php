@extends('visit.layout.app')
@section('title', 'Tambah Kunjungan')

@section('content')


<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3 class="text-2xl mb-4 text-white">Tambah Kunjungan</h3>
        </div>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-body">

                <form action="/addKunjungan" method="post">
                    @csrf

                    <input type="hidden" name="id" value="{{$data->id}}">
                    <input type="hidden" name="email" value="{{$data->email}}">
                    <input type="hidden" name="no_box" value="{{$data->no_box}}">
                    <input type="hidden" name="nama" value="{{$data->nama}}">
                    <div class="mb-3 row">
                        <label for="tgl" class="col-sm-3 col-form-label">Tanggal Kunjungan</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" id="tgl" name="tgl">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                        <div class="col-sm-6">
                            <textarea class="form-control" name="keterangan" id="keterangan" cols="40"
                                rows="5"></textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                </form>
            </div>
        </div>

    </section>
</div>


@endsection