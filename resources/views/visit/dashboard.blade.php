@extends('visit.layout.app')
@section('title', 'Dashboard User')

@section('content')


<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3 class="text-2xl mb-4 text-white">Dashboard Informasi</h3>
        </div>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-body">
                <div class="mb-3 row">
                    <label for="tgl" class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" value="{{$data->nama}}" readonly>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tgl" class="col-sm-3 col-form-label">Nomor Box Yang Disewa</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" value="{{$data->no_box}}" readonly>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tgl" class="col-sm-3 col-form-label">Lama Sewa</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" value="{{$data->jangka_sewa}} Tahun" readonly>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tgl" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" value="{{$data->email}}" readonly>
                    </div>
                </div>
            </div>
        </div>

        <p class="text-2xl pl-5 mt-4 text-white">Kunjungan</p>
        <a href="/tambah-kunjungan/{{$data->id}}" class="{{ $data->tunggakan == 'Ya' ? 'disabled ' : ''}}"><button
                class="btn btn-warning mb-3">Buat Kunjungan</button></a>
        <p class="text-white">{{ $data->tunggakan === 'Ya' ? 'Anda Sedang Dalam Tunggakan ' : ''}}</p>
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Kunjungan</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no=0 @endphp
                        @foreach ($visit as $v)
                        @php $no++ @endphp
                        <tr>
                            {{-- <td> {{$no}} </td> --}}
                            <td>
                                <p>Kunjungan Ke {{$no}} </p>
                            </td>
                            <td>
                                <p>{{$v->created_at}} </p>
                            </td>
                            <td>
                                <p>{{$v->keterangan}} </p>
                            </td>

                        </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>
        </div>

    </section>
</div>


@endsection