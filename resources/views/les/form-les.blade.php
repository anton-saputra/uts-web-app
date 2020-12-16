@extends('tema.master')

@section("content")

<!-- form validasi -->
<section id="les" class="les">

        <div class="section-title" data-aos="zoom-out">
          <h2>Form</h2>
          <p>Les Bhs. Inggris</p>
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

            <form action="{{ route("proses_les") }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama">

                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Masukan alamat">

                <label for="no_hp">No Hp</label>
                <input type="text" name="no_hp" class="form-control" placeholder="Masukan No Hp">

                <label for="umur">Umur</label>
                <input type="text" name="umur" class="form-control" placeholder="Masukan Umur">

                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Masukan Email">

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
     </div>
</section>

 @endsection