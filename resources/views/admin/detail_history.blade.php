@extends('admin.layout.app')
@section('title', 'Detail History')

@section('content')

<div class="page-heading">

    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-2xl mb-4 text-white">History Transaction Box </h3>
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
                            <th>Ukuran Box</th>
                            <th>Lama Sewa</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @php $no=0 @endphp
                        @foreach ($data as $data)
                        @php $no++ @endphp --}}
                        <tr>
                            <td> </td>
                            <td> {{$data->nama ?? ''}} </td>
                            <td> {{$data->created_at ?? ''}} </td>
                            <td> {{$data->ukuran ?? ''}} </td>
                            <td> {{$data->jangka_sewa ?? ''}} </td>
                            <td>
                                @if (count(array($data)) == 0)

                                @else
                                <a href="/detail-box-history/{{ $data->id ?? '' }}">
                                    <span class="badge bg-warning">Detail</span>
                                </a>
                                @endif
                            </td>
                        </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>

    </section>

</div>

@endsection