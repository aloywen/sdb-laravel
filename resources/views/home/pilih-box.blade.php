@extends('home.layout.app')
@section('title', 'Pilih Box')

@section('content')

<section class="section">
    <div class="card">
        <div class="card-body py-10">
            <p class="text-2xl font-semibold text-gray-600 text-center">List Box</p>


            <p class="text-xl font-semibold text-gray-600">Box Kecil</p>

            <div class="mt-6">
                <div class="flex flex-wrap sm:justify-center justify-center">

                    @foreach ($kecil as $box)

                    <a href="/formulir/{{ $box->box }}"
                        class="text-center mb-6 sm:ml-8 mr-8 {{ $box->kondisi == 2 ? 'disabled ' : ''}}">
                        <div
                            class="h-20 w-20 {{ $box->kondisi == 2 ? 'bg-danger ' : 'bg-blue '}}rounded shadow-md flex items-center justify-center text-white text-2xl">
                            {{ $box->box }}
                        </div>
                        <p class="text-2xl {{ $box->kondisi == 2 ? 'text-danger ' : 'text-blue '}}font-semibold">
                            {{ $box->kondisi == 2 ? 'Tersewa' : 'Tersedia'}}</p>
                    </a>

                    @endforeach

                </div>
            </div>

            <p class="text-xl font-semibold text-gray-600">Box Sedang</p>

            <div class="mt-6">
                <div class="flex flex-wrap sm:justify-center justify-center">

                    @foreach ($sedang as $box)

                    <a href="formulir/{{ $box->box }}"
                        class="text-center mb-6 sm:ml-8 mr-8 {{ $box->kondisi == 2 ? 'disabled ' : ''}}">
                        <div
                            class="h-20 w-20 {{ $box->kondisi == 2 ? 'bg-danger ' : 'bg-blue '}}rounded shadow-md flex items-center justify-center text-white text-2xl">
                            {{ $box->box }}
                        </div>
                        <p class="text-2xl {{ $box->kondisi == 2 ? 'text-danger ' : 'text-blue '}}font-semibold">
                            {{ $box->kondisi == 2 ? 'Tersewa' : 'Tersedia'}}</p>
                    </a>

                    @endforeach

                </div>
            </div>

            <p class="text-xl font-semibold text-gray-600">Box Besar</p>

            <div class="mt-6">
                <div class="flex flex-wrap sm:justify-center justify-center">

                    @foreach ($besar as $box)

                    <a href="formulir/{{ $box->box }}"
                        class="text-center mb-6 sm:ml-8 mr-8 {{ $box->kondisi == 2 ? 'disabled ' : ''}}">
                        <div
                            class="h-20 w-20 {{ $box->kondisi == 2 ? 'bg-danger ' : 'bg-blue '}}rounded shadow-md flex items-center justify-center text-white text-2xl">
                            {{ $box->box }}
                        </div>
                        <p class="text-2xl {{ $box->kondisi == 2 ? 'text-danger ' : 'text-blue '}}font-semibold">
                            {{ $box->kondisi == 2 ? 'Tersewa' : 'Tersedia'}}</p>
                    </a>

                    @endforeach

                </div>
            </div>
        </div>

    </div>

</section>

@endsection