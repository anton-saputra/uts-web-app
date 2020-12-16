  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent bg-dark ">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="#">Uts Twogether</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="nav-link"><a href="{{ route("home") }}">Home</a></li>
          <li class="nav-link"><a href="{{ route("about") }}">About</a></li>
          <li class="nav-link"><a href="{{ route("contact") }}">Contact</a></li>
          <li class="nav-link"><a href="{{ route("team") }}">Team</a></li>
          <li class="nav-link"><a href="{{ route("harga") }}">Harga</a></li>
          <li class="drop-down"><a href="">Form</a>
            <ul>
              <li class="nav-link"><a href="{{ route("ukm") }}">Ukm Bahasa Inggris</a></li>
              <li class="nav-link"><a href="{{ route("les") }}">Les Bahasa Inggris</a></li>
            </ul>
          </li>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary btn-outline btn-lg" type="submit">Search</button>
          </form>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->