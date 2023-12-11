
<!DOCTYPE html>
<html>
  <head>
    {{-- <link rel="stylesheet" href="globals.css" /> --}}
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
  </head>
  <body>
    <div class="daftar">
      <div class="div">
        <div class="overlap">
            <form action="" method="POST">
                @csrf
          <div class="group">

            <button type="submit"><div class="overlap-group"><div class="text-wrapper">Simpan</div></div></button>
          </div>
          <div class="text-wrapper-2">Tanggal Lahir</div>
          <input class="TanggalLahir" placeholder="mm/dd/yyyy" type="date" name="TanggalLahir"/>
          <div class="text-wrapper-4">Tempat Kelahiran</div>
          <input class="TempatKelahiran" placeholder="Masukkan Tempat Kelahiran" type="text" name="TempatKelahiran"/>
          <div class="text-wrapper-5">Nama Lengkap</div>
          <input class="NamaLengkap" placeholder="Masukkan Nama Lengkap" type="text" name="NamaLengkap"/>
          <div class="text-wrapper-6">Jenis Kelamin</div>
          <input class="JenisKelamin" placeholder="Masukkan Jenis Kelamin" type="text" name="JenisKelamin"/>
          <div class="text-wrapper-7">NIK</div>
          <input class="NIK" placeholder="Masukkan NIK" type="text" name="NIK"/>
          <div class="text-wrapper-8">Perguruan Tinggi</div>
          <input class="PerguruanTinggi" placeholder="Masukkan Perguruan Tinggi" type="text" name="PerguruanTinggi"/>
          <div class="text-wrapper-9">Agama</div>
          <input class="Agama" placeholder="Masukkan Agama" type="text" name="Agama"/>
          <div class="text-wrapper-10">NIM</div>
          <input class="NIM" placeholder="Masukkan NIM" type="text" name="NIM"/>
          <img class="line" src="img/Line 1.png" />
          <a href="{{ route('login') }}"><div class="kembali">&lt; Kembali</div></a>
          <div class="text-wrapper-11">Daftar</div>
        </div>

    </form>
        <div class="overlap-9">
          <img class="MASTER" src="img/logo Kampus merdeka.png" />
          <img class="img" src="img/Logo UB.png" />
          <img class="removal" src="img/Logo Vokasi.png" />
        </div>
      </div>
    </div>
  </body>
</html>
