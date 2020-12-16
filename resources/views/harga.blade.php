@extends('tema.master')

@section("content") 

    <!-- ======= Harga Section ======= -->
    <section id="harga" class="harga">

        <div class="section-title" data-aos="zoom-out">
          <h2>Harga</h2>
          <p>Berikut adalah harga les :</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="box" data-aos="zoom-in">
              <h3>SD</h3>
              <h4><sup>Rp.</sup>300.000<span> / Bulan</span></h4>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <h3>SMP</h3>
              <h4><sup>Rp.</sup>500.000<span> / Bulan</span></h4>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <h3>SMA</h3>
              <h4><sup>Rp.</sup>800.000<span> / Bulan</span></h4>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box  featured" data-aos="zoom-in" data-aos-delay="300">
              <span class="advanced">Diskon 50%</span>
              <h3>Mahasiswa</h3>
              <h4><sup>Rp.</sup><s>2.000.000</s></h4></s>
              <ul>
                <li>Menjadi</li>
              </ul>
              <h4><sup>Rp.</sup>1.000.000<span> / Bulan</span></h4>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Harga Section -->

@endsection