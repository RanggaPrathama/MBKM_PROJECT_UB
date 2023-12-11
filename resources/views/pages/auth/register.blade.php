
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
          <div class="text-wrapper-2">Password</div>
          <input class="TanggalLahir" placeholder="Masukkan Password" type="password" name="password"/>
          <div class="text-wrapper-4">Tempat Kelahiran</div>
          <input class="TempatKelahiran" placeholder="Masukkan Tempat Kelahiran" type="text" name="tempat_kelahiran"/>
          <div class="text-wrapper-5">Nama Lengkap</div>
          <input class="NamaLengkap" placeholder="Masukkan Nama Lengkap" type="text" name="name"/>
          <div class="text-wrapper-6">NIM / NIK</div>
          <input class="JenisKelamin" placeholder="Masukkan NIM atau NIK" type="text" name="nim_nik"/>
          <div class="text-wrapper-7">Tanggal Lahir</div>
          <input class="NIK" placeholder="mm/dd/yyyy" type="date" name="tgl_lahir"/>
          <div class="text-wrapper-8">Perguruan Tinggi</div>
          <input class="PerguruanTinggi" placeholder="Masukkan Perguruan Tinggi" type="text" name="perguruan_tinggi"/>
          <div class="text-wrapper-9">Agama</div>
          <input class="Agama" placeholder="Masukkan Agama" type="text" name="agama"/>
          <div class="text-wrapper-10">Jenis Kelamin</div>
          <input class="NIM" placeholder="Masukkan Jenis Kelamin" type="text" name="jenis_kelamin"/>
          <img class="line" src="img/Line 1.png" />
          <a href="{{ route('login') }}"><div class="kembali">&lt; Kembali</div></a>
          <div class="text-wrapper-11">Daftar</div>
        </div>

    </form>
        <div class="overlap-9">
          <img class="MASTER" src="img/logo Kampus merdeka.png" />
          <img class="img" src="img/LogoUb.png" />
          <img class="removal" src="img/Logo Vokasi.png" />
        </div>
      </div>
    </div>
  </body>
</html>
