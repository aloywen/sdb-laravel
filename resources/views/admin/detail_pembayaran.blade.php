@extends('admin.layout.app')
@section('title', 'Detail Pembayaran')

@section('content')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-white">Detail Data Pembayaran</h3>
                <p class="text-white">{{$data->tunggakan == 'Ya' ? '*Kunjungan Sedang Di Blokir' : ''}}</p>
            </div>
        </div>
    </div>




    <section class="section">
        <div class="card">
            <h5 class="mt-3 ml-2">Nama Penyewa : {{$data->nama}}</h5>
            <h5 class="mt-1 ml-2">Nomor Box : {{$data->no_box}}</h5>
            <h5 class="mt-1 ml-2">Lama Sewa : {{$total_hari}}</h5>
            <div class="card-body">

                {{-- <div class="mb-3 row">
                    <div class="col-sm-3 ">
                        
                    </div>
                    
                        
                        
                    
                </div> --}}

                <div class="row mb-3">
                    <div class="col-sm-3">
                        <label class="col-form-label">Tambah Pembayaran</label>
                    </div>
                    <div class="col-sm-3">
                        <form action="/tambah-pembayaran" method="POST">
                            <div>
                                @csrf
                                <input type="text" value="{{$data->id}}" name="tes_id" hidden>
                                <input type="text" class="form-control" name="dibayar" value="@currency($hargabox)"
                                    readonly>
                            </div>
                    </div>
                    <div class="col-sm-2">
                        <div>
                            <button class="btn btn-primary">Tambah</button>
                        </div>
                        </form>
                    </div>

                    <div class="col-sm-2">
                        <form action="{{ route('blokir.visit') }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="id" value="{{$data->id}}">
                            <input type="hidden" name="blokir" value="Ya">
                            <button type="submit" class="btn btn-danger">Blokir Visit</button>
                        </form>
                    </div>
                    <div class="col-sm-2">
                        <form action="{{ route('buka.visit') }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="id" value="{{$data->id}}">
                            <input type="hidden" name="buka" value="Tidak">
                            <button type="submit" class="btn btn-success">Buka Visit</button>
                        </form>
                    </div>
                </div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Tanggal Pembayaran</th>
                            <th>Yang Di Bayar</th>
                            <th>Pembayaran</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no=0 @endphp
                        @foreach ($pembayaran as $p)
                        @php $no++ @endphp
                        <tr>
                            <td>{{$p->created_at}}</td>
                            <td>@currency($p->jumlah)</td>
                            <td>Tahun Ke {{$no}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <footer>
                        <tr>
                            <td>Total Yang Telah Dibayar</td>
                            <td>@currency($dibayar)</td>
                        </tr>
                        <tr>
                            <td>Total Yang Harus Dibayar</td>
                            <td>@currency($data->total_bayar)</td>
                        </tr>

                    </footer>
                </table>
            </div>
        </div>

    </section>


</div>

@endsection