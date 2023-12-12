<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="{{ asset('css/profi.css') }}" />
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
          <a href="{{ route("profil") }}"><div class="text-wrapper-3">Profil</div></a>
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
          <div class="text-wrapper-8">Curriculum Vitae (Wajib)</div>
          <div class="text-wrapper-9">KTP (Wajib)</div>
          <div class="text-wrapper-10">Kartu Keluarga (Wajib)</div>
          <div class="text-wrapper-11">Surat Pengantar Magang</div>
          <p class="p">Unggah CV kamu dalam format PDF dengan ukuran maksimal 2MB</p>
          <div class="text-wrapper-12">Lengkapi Dokumen</div>
          <a href="homepage.html"><div class="kembali">&lt; Kembali</div></a>
          <div class="rectangle-3"></div>
          <div class="rectangle-4"></div>
          <div class="rectangle-5"></div>
          <img class="line" src="img/Line 2.png" />
          <div class="rectangle-6"></div>
          <div class="flexcontainer">
            <p class="text">
              <span class="span">Pastikan kamu mengumpulkan dokumen sesuai ketentuan,ya!
              Kesalahan Data pada dokumen berakibat penolakan
              Pemalsuan Dokumen berakibat masuk ke daftar blacklist<br /></span>
            </p>
            <p class="text">
              <span class="span"><br /></span>
            </p>
            <p class="text"><span class="span"></span></p>
          </div>
          <form action="{{ route('unggahdokumen',auth()->user()->id_user) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="group">
            <input class="Pilihfile" type="file" placeholder="Pilih File" name="" />
          </div>
          <div class="overlap-wrapper">
            <input class="Pilihfile" type="file" placeholder="Pilih File" name="file_ktp" />
          </div>
          <div class="overlap-group-wrapper">
            <input class="Pilihfile" type="file" placeholder="Pilih File" name="file_kk" />
          </div>
          <div class="rectangle-7"></div>
          <div class="group-2">
            <input class="Pilihfile" type="file" placeholder="Pilih File" name="surat_pengantar" />
          </div>
          <div class="group-3">
            <div class="div-wrapper"><div class="text-wrapper-14"><a href=""> <button>DownloadSurat</button></a></div></div>
          </div>
          <div class="group-4">
            <div class="overlap-3">
              <div class="rectangle-8"></div>
              <button type="submit"><div class="text-wrapper-15">Simpan</div></button>
            </div>
          </div>
        </div>
    </form>
        <div class="overlap-4">
          <img class="MASTER" src="img/logo Kampus merdeka.png" />
          <a href="{{ route("home") }}"><img class="img" src="img/LogoUb.png" /></a>
          <img class="removal" src="img/Logo Vokasi.png" />
          <a href="{{ route('programmagang') }}"><div class="text-wrapper-16">Program Magang</div></a>
          <a href="{{ route("viewunggahdokumen") }}"><div class="text-wrapper-17">Unggah Dokumen</div></a>
          <a href="{{ route('profil') }}"><div class="icon-person-wrapper"><img class="icon-person" src="img/person.png" /></div></a>
        </div>
      </div>
    </div>
  </body>
</html>
