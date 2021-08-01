@extends('admin.layout.app')
@section('title', 'Tambah Admin')

@section('content')


<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3 class="text-2xl mb-4 text-white">Tambah Admin</h3>
        </div>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-body">

                <form action="/addAdmin" method="post">
                    @csrf

                    <div class="mb-3 row">
                        <label for="name" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="name" name="name">
                            @error('name')
                            <div class="text-danger">Tidak Boleh Kosong</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-4">
                            <input type="email" class="form-control" id="email" name="email">
                            @error('email')
                            <div class="text-danger">Tidak Boleh Kosong</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-4">
                            <input type="password" class="form-control" id="password" name="password">
                            @error('password')
                            <div class="text-danger">Tidak Boleh Kosong</div>
                            @enderror
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                </form>
            </div>
        </div>

    </section>
</div>


@endsection