@extends('tema.master')

@section("content")

<!-- form validasi -->
<section id="ukm" class="ukm">

        <div class="section-title" data-aos="zoom-out">
          <h2>Form</h2>
          <p>Ukm Bhs. Inggris</p>
        </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $errors)
                            <li>{{ $errors }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route("proses_ukm") }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama">

                <label for="nim">Nim</label>
                <input type="text" name="nim" class="form-control" placeholder="Masukan Nim">

                <label for="umur">Umur</label>
                <input type="text" name="umur" class="form-control" placeholder="Masukan Umur">

                <label for="prodi">Prodi</label>
                <input type="text" name="prodi" class="form-control" placeholder="Masukan Prodi">

                <label for="foto">Foto</label>
                <input type="file" name="foto" class="form-control" placeholder="Masukan Foto">

                <label for="alasan">Alasan</label>
                <textarea name="alasan" class="form-control" rows="12"></textarea>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
     </div>
</section>

 @endsection