<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="{{ asset('css/unggahdokumen.css') }}" />
  </head>
  <body>
    <div class="profil">
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
          <p class="data-kamu-sedang">
            Data kamu sedang diperiksa oleh admin dalam proses rekomendasi. Mohon<br />menunggu, ya!
          </p>
          <div class="kembali">&lt; Kembali</div>
          <img class="line" src="img/Line 2.png" />
          <div class="rectangle-3"></div>
          <div class="text-wrapper-8">Sedang Diperiksa</div>
        </div>
        <div class="overlap-group-2">
          <img class="MASTER" src="img/logo Kampus merdeka.png" />
          <img class="img" src="img/LogoUb.png" />
          <img class="removal" src="img/Logo Vokasi.png" />
          <a href="programmagang.html"><div class="text-wrapper-9">Program Magang</div></a>
          <a href="unggahdokumen.html"><div class="text-wrapper-10">Unggah Dokumen</div></a>
          <a href="lengkapidokumen.html"><div class="group"><img class="icon-person" src="img/person.png" /></div>
        </div>
      </div>
    </div>
  </body>
</html>
