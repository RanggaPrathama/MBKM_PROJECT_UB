<!DOCTYPE html>
<html>
  <head>
<<<<<<< Updated upstream
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="{{ asset('css/lengkapidokumen.css') }}" />
=======

    <!-- <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="lengkapidokumen.css" /> -->
>>>>>>> Stashed changes
  </head>
  <body>
    <div class="lengkapi-dokumen">
      <div class="div">
        <div class="overlap">
          <div class="rectangle"></div>
          <div class="text-wrapper">Mahasiswa</div>
          <div class="ellipse"></div>
          <div class="text-wrapper-2">Nama Lengkap</div>
        </div>
        <div class="overlap-group">
          <img class="icon-profile-circled" src="img/profile.png" />
          <img class="icon-check" src="img/check.png" />
          <img class="icon-lock" src="img/lock.png" />
          <img class="icon-log-out" src="img/logout.png" />
          <img class="icon-bookmark-empty" src="img/bookmark.png" />
          <a href="{{ route('profil') }}"><div class="text-wrapper-3">Profil</div></a>
          <a href="{{ route('lengkapidokumen') }}"><div class="text-wrapper-4">Lengkapi Dokumen</div></a>
          <a href="{{ route('itemtersimpan') }}"><div class="text-wrapper-5">Item Tersimpan</div></a>
          <a href="{{ route('gantikatasandi') }}"><div class="text-wrapper-6">Ganti Kata Sandi</div></a>
          <a href= "{{ route('logout') }}"  onclick="event.preventDefault();
          document.getElementById('logout-form').submit();" ><div class="text-wrapper-7">Keluar</div></a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        </div>
        <div class="overlap-2">
          <div class="rectangle-2"></div>
          <div class="text-wrapper-8">Universitas Brawijaya</div>
          <div class="text-wrapper-9">22314071818181</div>
          <p class="p">01 - 01 - 2004</p>
          <div class="text-wrapper-10">Islam</div>
          <div class="text-wrapper-11">Laki - Laki</div>
          <div class="text-wrapper-12">Achmad Dicky Firdaus</div>
          <div class="text-wrapper-13">NIM</div>
          <div class="text-wrapper-14">0000000000001</div>
          <div class="text-wrapper-15">NIK</div>
          <div class="text-wrapper-16">Perguruan Tinggi</div>
          <div class="text-wrapper-17">Agama</div>
          <div class="text-wrapper-18">Informasi Pribadi</div>
          <a href="homepage.html"><div class="kembali">&lt; Kembali</div></a>
          <img class="line" src="img/line-1.svg" />
          <div class="text-wrapper-19">Nama Lengkap</div>
          <div class="text-wrapper-20">Jenis Kelamin</div>
          <div class="text-wrapper-21">Tanggal Lahir</div>
          <div class="text-wrapper-22">Gresik</div>
          <div class="text-wrapper-23">Tempat Kelahiran</div>
          <div class="group">
            <a href="homepage.html"><div class="div-wrapper"><div class="text-wrapper-24">Simpan</div></div></a>
          </div>
        </div>
        <div class="overlap-3">
          <img class="MASTER" src="img/logo Kampus merdeka.png" />
          <img class="img" src="img/LogoUb.png" />
          <img class="removal" src="img/Logo Vokasi.png" />
          <a href="programmagang.html"><div class="text-wrapper-25">Program Magang</div></a>
          <a href="unggahdokumen.html"><div class="text-wrapper-26">Unggah Dokumen</div></a>
          <a href="{{ route('profil') }}"><div class="icon-person-wrapper"><img class="icon-person" src="img/person.png" /></div></a>
        </div>
      </div>
    </div>
  </body>
</html>
