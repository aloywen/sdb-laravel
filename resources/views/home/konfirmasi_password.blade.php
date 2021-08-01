@extends('home.layout.app')
@section('title', 'Syarat Dan Ketentuan')

@section('content')

<section class="section">
    <div class="card">
        <div class="card-body py-10">
            <p class="text-2xl font-semibold text-gray-600">Konfirmasi Password</p>

            <form action="/konfirmasi-password" method="post">
                @method('patch')
                @csrf
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" id="nama" name="nama">
                        <small>password digunakan untuk masuk ke visit</small>
                    </div>
                </div>

                <button class="mt-3 py-2 px-6 bg-blue rounded text-white font-semibold">Konfirmasi</button>
            </form>
        </div>
    </div>

    </div>

</section>

@endsection