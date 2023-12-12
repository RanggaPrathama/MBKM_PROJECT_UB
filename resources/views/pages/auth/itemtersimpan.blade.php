<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="{{ asset('css/itemtersimpan.css') }}" />
  </head>
  <body>
    <div class="item-tersimpan">
      <div class="div">
        <div class="overlap-group">
          <div class="rectangle"></div>
          <div class="text-wrapper">Mahasiswa</div>
          <div class="ellipse"></div>
          <div class="text-wrapper-2">Nama Lengkap</div>
        </div>
        <div class="overlap">
          <img class="icon-profile-circled" src="img/profile.png" />
          <img class="icon-check" src="img/check.png" />
          <img class="icon-lock" src="img/lock.png" />
          <img class="icon-log-out" src="img/logout.png" />
          <img class="icon-bookmark-empty" src="img/bookmark.png" />
          <a href="{{ route('profil') }}"><div class="text-wrapper-3">Profil</div></a>
          <a href="{{ route("lengkapidokumen") }}"><div class="text-wrapper-4">Lengkapi Dokumen</div></a>
          <a href="{{ route("itemtersimpan") }}"><div class="text-wrapper-5">Item Tersimpan</div></a>
          <a href="{{ route("gantikatasandi") }}"><div class="text-wrapper-6">Ganti Kata Sandi</div></a>
          <a href= "{{ route('logout') }}"  onclick="event.preventDefault();
          document.getElementById('logout-form').submit();" ><div class="text-wrapper-7">Keluar</div></a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        </div>
        <div class="overlap-2">
          <div class="rectangle-2"></div>
          <div class="ellipse-2"></div>
          <div class="ellipse-3"></div>
          <div class="flexcontainer">
            <p class="text">
              <span class="span">Telkom Corporate <br /></span>
            </p>
            <p class="text"><span class="span">University</span></p>
          </div>
          <div class="text-wrapper-8">ITDRI</div>
          <img class="itdri-star" src="img/itdri-star-256 1.png" />
          <div class="text-wrapper-9">Front-End Developer</div>
          <div class="text-wrapper-10">Bandung, Indonesia</div>
          <div class="text-wrapper-11">Indonesia</div>
          <div class="placement-career">Placement & Career Services Intern</div>
          <img class="pngwing" src="img/pngwing 2.png" />
          <div class="text-wrapper-12">Item Tersimpan</div>
          <a href="{{ route('home') }}"><div class="kembali">&lt; Kembali</div></a>
          <img class="line" src="img/Line 2.png" />
          <img class="icon-bookmark" src="img/bookmarkmark.png" />
          <img class="img" src="img/bookmarkmark.png" />
        </div>
        <img class="icon-bookmark-empty-2" src="img/bookmarkmark.png" />
        <img class="icon-bookmark-empty-3" src="img/bookmarkmark.png" />
        <div class="overlap-3">
          <img class="MASTER" src="img/logo Kampus merdeka.png" />
          {{-- <a href="{{ route("home") }}"><img class="img" src="img/LogoUb.png" /></a> --}}
          <img class="removal" src="img/Logo Vokasi.png" />
          <a href="{{ route('programmagang') }}"><div class="text-wrapper-13">Program Magang</div></a>
          <a href="{{ route('viewunggahdokumen') }}"><div class="text-wrapper-14">Unggah Dokumen</div></a>
          <a href="{{ route('profil') }}"><div class="group"><img class="icon-person" src="img/person.png" /></div></a>
        </div>
      </div>
    </div>
  </body>
</html>
