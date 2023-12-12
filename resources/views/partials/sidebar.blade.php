  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <div class="d-flex m-1 mb-4 justify-content-center text-white">
    <img src="{{ asset('img/adminsite.png') }}" alt="" style="margin-right: 20px; width:40px; height:40px">
    <h2> <strong>ADMISI UB</strong></h2>

</div>
    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link active" href="{{ route('homeAdmin') }}">

          <span>Data Mahasiswa</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('dataAdmin') }}">

          <span>Data Admin</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.html">

          <span>Status Verifikasi </span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.html">

          <span>Laporan Magang</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('logout') }}"  onclick="event.preventDefault();
        document.getElementById('logout-form').submit();" >

          <span>Keluar</span>
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      </li><!-- End Dashboard Nav -->



    </ul>

  </aside><!-- End Sidebar-->
