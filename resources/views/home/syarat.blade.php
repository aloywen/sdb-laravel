@extends('home.layout.app')
@section('title', 'Syarat Dan Ketentuan')

@section('content')

<section class="section">
    <div class="card">
        <div class="card-body py-10">
            <p class="text-2xl font-semibold text-gray-600">Syarat Dan Ketentuan</p>

            <div class="overflow-y-auto h-96 mt-8">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, natus. Quia quo placeat
                quasi eveniet cum iusto laudantium necessitatibus ducimus aliquid accusamus beatae sunt
                eligendi dicta explicabo enim consectetur facere nisi non cupiditate, a, consequuntur
                molestiae debitis? Vero quod vitae, amet, sunt veritatis, dolor voluptas deserunt esse
                sapiente laborum dicta? Veritatis nobis reiciendis architecto praesentium in asperiores
                a voluptatem, repudiandae deserunt sequi obcaecati nihil voluptates itaque, qui voluptas
                culpa id? Ullam est dolores repellat beatae iusto necessitatibus dolor, molestias animi
                nisi unde quam totam itaque odio nobis optio tenetur numquam, quisquam dolore debitis
                sequi voluptas veritatis temporibus sit magni. Dolore?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, natus. Quia quo placeat
                quasi eveniet cum iusto laudantium necessitatibus ducimus aliquid accusamus beatae sunt
                eligendi dicta explicabo enim consectetur facere nisi non cupiditate, a, consequuntur
                molestiae debitis? Vero quod vitae, amet, sunt veritatis, dolor voluptas deserunt esse
                sapiente laborum dicta? Veritatis nobis reiciendis architecto praesentium in asperiores
                a voluptatem, repudiandae deserunt sequi obcaecati nihil voluptates itaque, qui voluptas
                culpa id? Ullam est dolores repellat beatae iusto necessitatibus dolor, molestias animi
                nisi unde quam totam itaque odio nobis optio tenetur numquam, quisquam dolore debitis
                sequi voluptas veritatis temporibus sit magni. Dolore?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, natus. Quia quo placeat
                quasi eveniet cum iusto laudantium necessitatibus ducimus aliquid accusamus beatae sunt
                eligendi dicta explicabo enim consectetur facere nisi non cupiditate, a, consequuntur
                molestiae debitis? Vero quod vitae, amet, sunt veritatis, dolor voluptas deserunt esse
                sapiente laborum dicta? Veritatis nobis reiciendis architecto praesentium in asperiores
                a voluptatem, repudiandae deserunt sequi obcaecati nihil voluptates itaque, qui voluptas
                culpa id? Ullam est dolores repellat beatae iusto necessitatibus dolor, molestias animi
                nisi unde quam totam itaque odio nobis optio tenetur numquam, quisquam dolore debitis
                sequi voluptas veritatis temporibus sit magni. Dolore?
            </div>

            <div class="mt-6">
                <div class="flex">
                    <input type="checkbox" class="w-5 h-5" id="1" onclick="myFunction()">
                    <p class="ml-2">Menyetujui Syarat dan ketentuan Mandiri E-Form</p>
                </div>
                <div class="flex">
                    <input type="checkbox" class="w-5 h-5" id="2" onclick="myFunction()">
                    <p class="ml-2">Menyetujui Syarat umum pembukaan rekening serta ketentuan dan syarat
                        khusus</p>
                </div>

                <a href="/">
                    <button class="mt-6 py-2 px-6 bg-red-700 rounded text-white font-semibold">KEMBALI</button>
                </a>

                <a href="pilih-box">
                    <button style="display:none" class="mt-3 py-2 px-6 bg-blue rounded text-white font-semibold"
                        id="button">SETUJU</button>
                </a>

                <button class="mt-3 py-2 px-6 rounded text-white font-semibold">SETUJU</button>
            </div>
        </div>

    </div>

</section>

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