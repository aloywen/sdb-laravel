@extends('admin.layout.app')
@section('title', 'Visitor')

@section('content')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-white">Data Admin</h3>
                <a href="/tambah-admin">
                    <div class="btn btn-warning mb-4">Tambah Admin</div>
                </a>
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
                            <th>Nama Admin</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no=0 @endphp
                        @foreach ($data as $data)
                        @php $no++ @endphp
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
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