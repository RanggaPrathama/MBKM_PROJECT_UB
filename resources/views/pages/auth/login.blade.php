<!DOCTYPE html>
<html>

<head>
    {{-- <link rel="stylesheet" href="globals.css" /> --}}
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="login-user">


        <div class="div">

            <div class="overlap">
                {{-- @if (session('success')) --}}

                {{-- @endif --}}


                <div class="group" style="margin-top:20px">

                    <div>
                        <input class="email" placeholder="username" type="text" name="email"/>
                        <input class="password" placeholder="password" type="password" name="password"/>
                        </div>

                        <div>
                            <a href="homepage.html"><button class="sign-in" type="submit">Login</button></a>
                            </div>



                </div>

                <img class="removal" src="img/Logo Vokasi.png" style="margin-top: 10px">

                <div class="admisi-vokasi">
                    <a href="{{ route('register') }}"><div class="overlap-group"></div>
                        <div class="text-wrapper">Register</div>
                        <img class="icon-lock" src="img/kunci.png" />
                    </div>
                </div>
            </div>

            <img class="img" src="img/Logo UB.png" />
            <img class="MASTER" src="img/logo Kampus merdeka.png" />
            <div class="overlap-2">
                <img class="removal-2" src="img/Logo user.png" />
                <p class="kampus-merdeka">
                    Kampus Merdeka adalah bagian dari kebijakan Merdeka Belajar oleh Kementerian <br />Pendidikan, Kebudayaan,
                    Riset, dan Teknologi (Kemendikbudristek) yang<br />memberikan seluruh mahasiswa kesempatan untuk mengasah
                    <br />kemampuan sesuai bakat dan minat dengan terjun langsung ke <br />dunia kerja sebagai langkah persiapan
                    karier.
                </p>
            </div>
            <div class="overlap-3">
                <div class="text-wrapper-2">Kampus Merdeka</div>
                <p class="program-persiapan">
                    Program persiapan karier yang komprehensif <br />untuk mempersiapkan generasi terbaik Indonesia
                </p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
