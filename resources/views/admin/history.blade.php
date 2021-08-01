@extends('admin.layout.app')
@section('title', 'History')

@section('content')

<div class="page-heading">

    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-2xl mb-4 text-white">History Transaction</h3>
            </div>
        </div>
    </div>




    <section class="section">
        <div class="card">
            <div class="card-body">
                <div class="flex justify-center flex-wrap">

                    @foreach ($box as $box)

                    <a href="/detail-history/{{ $box->id }}">
                        <div
                            class="flex m-6 items-center justify-center text-2xl text-white font-semibold w-36 h-20 rounded-lg shadow-lg bg-blue">
                            {{$box->box}}
                        </div>
                    </a>

                    @endforeach
                </div>
            </div>
        </div>

    </section>

</div>

@endsection