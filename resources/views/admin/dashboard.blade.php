@extends('admin.layout.app')
@section('title', 'Dashboard')

@section('content')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-white">Request Pending</h3>
            </div>
        </div>
    </div>




    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Penyewa</th>
                            <th>Tanggal Booking</th>
                            <th>Nomor Box</th>
                            <th>Ukuran</th>
                            <th>Keterangan</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no=0 @endphp
                        @foreach ($data as $data)
                        @php $no++ @endphp
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$data->nama}}</td>
                            <td>{{$data->created_at}}</td>
                            <td>{{$data->no_box}}</td>
                            <td>{{$data->ukuran}}</td>
                            <td> <span class="badge bg-danger">{{$data->keterangan_bayar}}</span></td>
                            <td>
                                <a href="/detail-pending/{{ $data->id }}">
                                    <span class="badge bg-warning">Detail</span>
                                </a>
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