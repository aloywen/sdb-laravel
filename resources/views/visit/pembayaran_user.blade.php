@extends('visit.layout.app')
@section('title', 'Pembayaran User')

@section('content')


<div class="page-heading">

    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-2xl mb-4 text-white">History Pembayaran</h3>
            </div>
        </div>
    </div>




    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            {{-- <th>No</th> --}}
                            <th>Pembayaran</th>
                            <th>Tanggal</th>
                            <th>Jumlah</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no=0 @endphp
                        @foreach ($pembayaran as $p)
                        @php $no++ @endphp
                        <tr>
                            {{-- <td> {{$no}} </td> --}}
                            <td>
                                <p>Tahun Ke {{$no}} </p>
                            </td>
                            <td>
                                <p>{{$p->created_at}} </p>
                            </td>
                            <td>
                                <p>@currency($p->jumlah)</p>
                            </td>
                            <td>
                                <span class="badge bg-success">Sudah Bayar </span>
                            </td>

                        </tr>
                        @endforeach

                    </tbody>
                    <tr>
                        <td>Total Yang Telah Dibayar</td>
                        <td>@currency($dibayar)</td>
                    </tr>
                    <tr>
                        <td>Total Yang Harus Di Bayar :</td>
                        <td>@currency($data->total_bayar)</td>
                    </tr>
                </table>

            </div>
        </div>

    </section>

</div>


@endsection