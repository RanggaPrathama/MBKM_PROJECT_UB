<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="{{ asset('css/ganti_katasandi.css') }}" />
  </head>
  <body>
    <div class="ganti-kata-sandi">
      <div class="div">
        <div class="overlap">
          <img class="MASTER" src="img/logo Kampus merdeka.png" />
          <a href="{{ route("home") }}"><img class="img" src="img/LogoUb.png" /></a>
          <img class="removal" src="img/Logo Vokasi.png" />
        </div>
        <div class="overlap-group">
          <div class="rectangle"></div>
          <div class="text-wrapper">Mahasiswa</div>
          <div class="ellipse"></div>
          <div class="text-wrapper-2">Nama Lengkap</div>
        </div>
        <div class="overlap-2">
          <img class="icon-profile-circled" src="img/profile.png" />
          <img class="icon-check" src="img/check.png" />
          <img class="icon-lock" src="img/lock.png" />
          <img class="icon-log-out" src="img/logout.png" />
          <img class="icon-bookmark-empty" src="img/bookmark.png" />
          <a href="{{ route('profil') }}"><div class="text-wrapper-3">Profil</div></a>
          <a href="{{ route('lengkapidokumen') }}"><div class="text-wrapper-4">Lengkapi Dokumen</div></a>
          <a href="{{ route('itemtersimpan') }}"><div class="text-wrapper-5">Item Tersimpan</div></a>
          <a href="{{ route("gantikatasandi") }}"><div class="text-wrapper-6">Ganti Kata Sandi</div></a>
          <a href= "{{ route('logout') }}"  onclick="event.preventDefault();
          document.getElementById('logout-form').submit();" ><div class="text-wrapper-7">Keluar</div></a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        </div>
        <div class="overlap-3">
          <div class="rectangle-2"></div>
          <div class="group">
            <a href="{{ route('home') }}"><div class="div-wrapper"><div class="text-wrapper-8">Simpan</div></div></a>
          </div>
          <div class="text-wrapper-9">Kata Sandi Sekarang</div>
          <input class="ganti_katasandi" placeholder="Kata Sandi Sekarang" type="password" name="ganti_katasandi"/>
          <div class="text-wrapper-10">Kata Sandi Baru</div>
          <input class="Katasandi_baru" placeholder="Kata Sandi Baru" type="password" name="Katasandi_baru"/>
          <div class="p">Ketik Ulang Kata Sandi Baru</div>
          <input class="Katasandi_ulang" placeholder="Ketik Ulang Kata Sandi Baru" type="password" name="Katasandi_ulang"/>
          <div class="text-wrapper-11">Ganti Kata Sandi</div>
          <a href="homepage.html"><div class="kembali">&lt; Kembali</div></a>
          <img class="line" src="img/Line 2.png" />
          <img class="line-2" src="img/Line 2.png" />
          <p class="text-wrapper-12">Silahkan Ubah Kata Sandi Baru</p>
        </div>
      </div>
    </div>
  </body>
</html>
