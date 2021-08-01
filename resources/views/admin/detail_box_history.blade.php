@extends('admin.layout.app')
@section('title', 'Detail Box History')

@section('content')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-white">Detail User</h3>
            </div>
        </div>
    </div>




    <section class="section">
        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col sm-6">
                        <div class="mb-3 row">
                            <label for="no_box" class="col-sm-4 col-form-label">Tanggal Booking</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="booking" name="booking"
                                    value="{{$data->created_at}}" readonly>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="no_box" class="col-sm-4 col-form-label">Nama Penyewa</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="nama" name="nama" value="{{$data->nama}}"
                                    readonly>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="no_box" class="col-sm-4 col-form-label">Nomor Box</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="no_box" name="no_box"
                                    value="{{$data->no_box}}" readonly>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="no_box" class="col-sm-4 col-form-label">Ukuran Box</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="ukuran" name="ukuran"
                                    value="{{$data->ukuran}}" readonly>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="no_box" class="col-sm-4 col-form-label">Lama Sewa</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="lama_sewa" name="lama_sewa"
                                    value="{{$data->jangka_sewa}} Tahun" readonly>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="no_box" class="col-sm-4 col-form-label">Keterangan</label>
                            <div class="col-sm-4">
                                <span class="badge bg-success mt-2">{{$data->keterangan_bayar}}</span></td>
                                <input type="hidden" name="keterangan" id="keterangan" value="Sudah Bayar">
                            </div>
                        </div>
                    </div>

                    <div class="col sm-6">
                        <div class="mb-3 row">
                            <label for="no_box" class="col-sm-4 col-form-label">Email</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="ukuran" name="ukuran"
                                    value="{{$data->email}}" readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="no_box" class="col-sm-4 col-form-label">Nomor Rekening</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="ukuran" name="ukuran"
                                    value="{{$data->no_rek}}" readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="no_box" class="col-sm-4 col-form-label">Tempat, Tanggal Lahir</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="ukuran" name="ukuran"
                                    value="{{$data->tempat}}, {{$data->tgl_lahir}}" readonly>
                            </div>
                        </div>
                    </div>
                </div>


                <a href="/detail-history/{{$data->no_box}}"> <button type="button"
                        class="btn btn-success mt-4">Kembali</button> </a>
            </div>
        </div>

    </section>


</div>

@endsection