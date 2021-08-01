@extends('home.layout.app')
@section('title', 'Formulir')

@section('content')

<section class="section">
    <div class="card">
        <a href="/pilih-box">
            <button class="mt-6 ml-3 py-2 px-6 bg-red-700 rounded text-white font-semibold">KEMBALI</button>
        </a>
        <form action="/formulir/store" method="post">
            @csrf
            <div class="card-body py-10">
                <p class="text-2xl font-semibold text-gray-600">Form Register</p>

                <div class="mt-6">
                    <div class="mt-3">

                        <div class="mb-3 row">
                            <label for="no_box" class="col-sm-4 col-form-label">Nomor Box</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="no_box" name="no_box" value="{{ $box->id }}"
                                    readonly>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="ukuran" class="col-sm-4 col-form-label">Ukuran Box
                            </label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="ukuran" name="ukuran"
                                    value="{{ $box->ukuran }}" readonly>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="ukuran" class="col-sm-4 col-form-label">Harga Box
                            </label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="harga_box" value="@currency($box->harga)"
                                    readonly>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="lama_sewa" class="col-sm-4 col-form-label">Jangka Penyewaan
                            </label>
                            <div class="col-sm-2 d-flex items-center">
                                <input type="number" class="form-control" id="jangka_sewa" name="jangka_sewa"
                                    onkeyup="total()">
                                {{-- <p class="ml-2 mt-2">Tahun</p> --}}
                                @error('jangka_sewa')
                                <div class="text-danger">Tidak Boleh Kosong</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Total Bayar</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="total_bayar" value="Rp. " name="total_bayar"
                                    readonly>
                            </div>
                        </div>

                        <input type="hidden" value="1" class="form-control" name="kondisi_id">
                        <input type="hidden" value="Tidak" class="form-control" name="tunggakan">
                        <input type="hidden" value="0" class="form-control" name="dibayar">
                        <input type="hidden" value="Belum Bayar" class="form-control" name="keterangan_bayar">
                        <input type="hidden" value="Ya" class="form-control" name="status_aktif">

                        <h5 class="my-5">Biodata Diri</h5>

                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-4 col-form-label">Nama Sesuai
                                Identitas</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="email" class="col-sm-4 col-form-label">Email</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="password" class="col-sm-4 col-form-label">Password</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="password" name="password">
                                <small>password digunakan untuk masuk ke visit</small>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Nomor Rekening Aktif</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="no_rek" name="no_rek">
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Tempat</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="tempat" name="tempat">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Jenis
                                Kelamin
                            </label>
                            <div class="col-sm-8">
                                <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                                    @foreach ($kelamin as $kelamin)
                                    <option selected name="jenis_kelamin">{{ $kelamin }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Kewarganegaraan
                            </label>
                            <div class="col-sm-8">
                                <select class="form-select" aria-label="Default select example" name="warganegara">
                                    @foreach ($kewarganegaraan as $kewarganegaraan)
                                    <option selected>{{ $kewarganegaraan }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Jenis
                                Identitas
                            </label>
                            <div class="col-sm-8">
                                <select class="form-select" aria-label="Default select example" name="jenis_identitas">
                                    @foreach ($identitas as
                                    $iden) <option selected>{{ $iden}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="no_identitas" class="col-sm-4 col-form-label">Nomor Identitas</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="no_identitas" name="no_identitas">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="npwp" class="col-sm-4 col-form-label">NPWP</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="npwp" name="npwp">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="alamat_iden" class="col-sm-4 col-form-label">Alamat Sesuai Identitas</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="alamat_iden" name="alamat_identitas">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Alamat Sekarang</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="alamat" name="alamat_sekarang">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Alamat Kantor / Usaha</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="alamat" name="alamat_kantor">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Status Tempat Tinggal</label>
                            <div class="col-sm-8">
                                <select class="form-select" aria-label="Default select example"
                                    name="status_tempat_tinggal">
                                    @foreach ($status_tempat as $status_tempat)
                                    <option selected>{{ $status_tempat }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Nomor
                                Handphone</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="no_hp" name="no_hp">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Pekerjaan</label>
                            <div class="col-sm-8">
                                <select class="form-select" aria-label="Default select example" name="pekerjaan">
                                    @foreach ($pekerjaan as $pekerjaan)
                                    <option selected>{{ $pekerjaan }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        {{-- <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Status Pekerjaan</label>
                            <div class="col-sm-8">
                                <select class="form-select" aria-label="Default select example">
                                    @foreach ($status_kerja as $status_kerja)
                                    <option selected name="status_kerja">{{ $status_kerja }}</option>
                        @endforeach
                        </select>
                    </div>
                </div> --}}

                <h5 class="my-4">Keluarga Dekat Yang Tidak Serumah</h5>

                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama_keluarga" name="nama_keluarga">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Alamat Terakhir</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="alamat_keluarga" name="alamat_keluarga">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Hubungan Dengan Pemohon</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="hubungan" name="hubungan">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Nomor
                        Handphone</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="no_hp_keluarga" name="no_hp_keluarga">
                    </div>
                </div>

                <h5 class="my-4">Data Pekerjaan</h5>

                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Nama Perusahaan</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Jabatan</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="jabatan" name="jabatan">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Status Pekerjaan</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="status_pekerjaan" name="status_pekerjaan">
                    </div>
                </div>

            </div>



            <button type="submit" class="mt-6 py-2 px-6 bg-blue rounded text-white font-semibold" id="lanjut">
                LANJUT
            </button>
        </form>
    </div>





</section>


@endsection

<script>
    function toRp(a,b,c,d,e){e=function(f){return f.split('').reverse().join('')};b=e(parseInt(a,10).toString());for(c=0,d='';c<b.length;c++){d+=b[c];if((c+1)%3===0&&c!==(b.length-1)){d+='.';}}return'Rp.'+e(d)+''}

    function total() {
        let harga_box = document.getElementById("harga_box").value.replace(/,.*|\D/g, "");
        // console.log(harga_box);
        let lama_sewa = document.getElementById("jangka_sewa").value;
        // console.log(lama_sewa);
        
        let total= harga_box * lama_sewa;
        // console.log(total);
        document.getElementById("total_bayar").value = toRp(total);
}

</script>