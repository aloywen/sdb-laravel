@extends('visit.layout.app')
@section('title', 'Akhir Sewa')

@section('content')


<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3 class="text-2xl mb-4 text-white">Akhir Sewa</h3>
        </div>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-body">

                <form action="{{ route('selesai') }}" method="post">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" value="{{$box->box}}" name="box">
                    <input type="hidden" value="{{$user->id}}" name="id">
                    <div class="mb-3 row">
                        <label for="tgl" class="col-sm-5 col-form-label">Apakah anda ingin menyeselesaikan sewa?</label>
                        <div class="col-sm-2">
                            <input type="checkbox" width="9" class="w-5 h-5 mt-2" height="9" name="tgl" id="1"
                                onclick="myFunction()">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tgl" class="col-sm-5 col-form-label">Apakah semua item di box sudah diambil?</label>
                        <div class="col-sm-2">
                            <input type="checkbox" width="9" class="w-5 h-5 mt-2" height="9" name="tgl" id="2"
                                onclick="myFunction()">
                        </div>
                    </div>

                    <button style="display:none" class="mt-3 py-2 px-6 bg-blue rounded text-white font-semibold"
                        id="button">SELESAI</button>
                </form>

            </div>
        </div>

    </section>
</div>


@endsection

<script>
    function myFunction() {
        let checkBox1 = document.getElementById("1");
        let checkBox = document.getElementById("2");
        let text = document.getElementById("button");

        if (checkBox1.checked && checkBox.checked == true){
            text.style.display = "block";
        } else {
            text.style.display = "none";
        }
    }
</script>