@extends('admin.layout.app')
@section('title', 'Detail Pending')

@section('content')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-white">Detail Pending</h3>
            </div>
        </div>
    </div>




    <section class="section">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('pending.update', $data->no_box) }}" method="post">
                    @csrf
                    @method('PATCH')

                    <div class="mb-3 row">
                        <label for="no_box" class="col-sm-4 col-form-label">Tanggal Booking</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="booking" name="booking"
                                value="{{$data->created_at}}" readonly>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="no_box" class="col-sm-4 col-form-label">Nama Penyewa</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="nama" name="nama" value="{{$data->nama}}"
                                readonly>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="no_box" class="col-sm-4 col-form-label">Nomor Box</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="no_box" name="no_box" value="{{$data->no_box}}"
                                readonly>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="no_box" class="col-sm-4 col-form-label">Ukuran Box</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="ukuran" name="ukuran" value="{{$data->ukuran}}"
                                readonly>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="no_box" class="col-sm-4 col-form-label">Lama Sewa</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="lama_sewa" name="lama_sewa"
                                value="{{$total_hari}}" readonly>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="no_box" class="col-sm-4 col-form-label">Total Yang Harus Dibayar</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" value="@currency($data->total_bayar)" readonly>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="no_box" class="col-sm-4 col-form-label">Keterangan</label>
                        <div class="col-sm-2">
                            <span class="badge bg-danger mt-2">{{$data->keterangan_bayar}}</span></td>
                            <input type="hidden" name="keterangan" id="keterangan" value="Sudah Bayar">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-4">Konfirmasi</button>
                </form>
            </div>
        </div>

    </section>


</div>

@endsection