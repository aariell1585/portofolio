<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('content')

<!-- Section Home -->
<section id="home-section">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Aril</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <nav class="navbar">
            <h1>ARIL MULYAWAN</h1>
            <ul>
            <li><a href="#home-section">Home</a></li>
            <li><a href="#about-section">Tentang</a></li>
            <li><a href="#resume-section">Resume</a></li>
            <li><a href="#skills-section">Keahlian</a></li>
            <li><a href="#project-section">Proyek</a></li>
            <li><a href="#contact-section">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <main>
    <section class="home">
        <section id="home">
        <div class="intro-text">
            <h3>HALO!</h3>
            <h2>Nama Saya</h2>
            <h1>Aril Mulyawan</h1>
            <p>Web Developer</p>
            <div class="skills">
                <span class="skill-badge">PHP</span>
                <span class="skill-badge">Laravel</span>
                <span class="skill-badge">Hosting</span>
                <span class="skill-badge">MySQL</span>
            </div>
            <div class="btn-group">
                 <a href="#" class="btn btn-primary">Rekrut Saya</a>
                 <a href="#" class="btn btn-secondary">Pekerjaan Saya</a>
            </div>
        </div>
        </section>
    </section>

    </main>
    <script>
    let lastScrollTop = 0;
    const navbar = document.querySelector('.navbar');

    window.addEventListener('scroll', function() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > lastScrollTop) {
            // Scroll ke bawah - sembunyikan navbar
            navbar.classList.remove('navbar-show');
        } else {
            // Scroll ke atas - tampilkan navbar
            navbar.classList.add('navbar-show');
        }

        lastScrollTop = scrollTop;
    });
</script>
</body>
</html>
</section>

<!-- Section Tentang -->
<section id="about-section">
<div class="about-section">
            <div class="about img">
                <img src="{{ asset('images/profile.jpg') }}" alt="Profile Picture">
            </div>
            <div class="about-content">
                <h2>Tentang Saya</h2>
                <p class="subheading">Biodata Pribadi:</p>
                <p><strong>Nama:</strong> Aril Mulyawan</p>
                <p><strong>Alamat:</strong> Desa Sayang Sedayu, Kec Teluk Keramat, Kab Sambas</p>
                <p><strong>Email:</strong> aariell1585@gmail.com</p>
                <p><strong>Deskripsi:</strong> Mahasiswa dari Politeknik Negeri Sambas, Prodi D3 Manajemen Informatika. Merupakan Alumni dari SMK Negeri 1 Paloh jurusan Teknik Komputer dan Jaringan. Saya merupakan pribadi yang tertarik pada bidang pengembang web terkhusus pengembangan web dengan framework Laravel. Berbekal latar belakang pengalaman sebelumnya dan kemampuan yang saya miliki, saya siap menyumbangkan waktu dan kompetensi yang saya miliki.</p>
            </div>
</div>
</section>

<!-- Section Resume -->
<section id="resume-section">
        <h2 class="section-title">Pendidikan</h2>
        <div class="row mt-5">
            <!-- SMK Negeri 1 Paloh -->
            <div class="col-md-6">
                <div class="education-card">
                    <img src="{{ asset('images/smk-logo.png') }}" alt="SMK Negeri 1 Paloh" class="education-logo">
                    <p class="education-duration">2021-2023</p>
                    <h3 class="education-name">SMK Negeri 1 Paloh</h3>
                    <p class="education-major">Teknik Komputer Dan Jaringan</p>
                </div>
            </div>
            <!-- Politeknik Negeri Sambas -->
            <div class="col-md-6">
                <div class="education-card">
                    <img src="{{ asset('images/poltesa-logo.jpg') }}" alt="Politeknik Negeri Sambas" class="education-logo">
                    <p class="education-duration">2023-2026</p>
                    <h3 class="education-name">Politeknik Negeri Sambas</h3>
                    <p class="education-major">Manajemen Informatika</p>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <a href="#" class="btn-download-cv">Download CV</a>
        </div>
</section>

<!-- Section Keahlian -->
<section id="skills-section">
<h2 class="section-title">Keahlian</h2>
        <div class="skills-card">
            <img src="{{ asset('images/web-developer.jpg') }}" alt="Web Developer" class="skills-image">
            <div class="skills-content">
                <h3>Web Developer (Fullstack)</h3>
                <p>Memiliki pengalaman 1 tahun dalam pengembangan website berbasis PHP, dibuktikan dengan proyek freelance dan pengalaman kerja yang saya miliki.</p>
                <div class="skills-tags">
                    <span>PHP</span>
                    <span>LARAVEL</span>
                    <span>MYSQL</span>
                </div>
            </div>
        </div>
</section>

<!-- Section Proyek -->
<section id="project-section">
<h2 class="section-title">Proyek</h2>
    <div class="projects-container">
        <!-- Project 1: YouTube Video -->
        <div class="project-gallery">
        <div class="project-item">
        <div class="project-item">
            <a href="https://youtu.be/X6ToQyYWJsc?si=YqMydXgMW_oTveyy" target="_blank">
            <img src="{{ asset('images/project1.jpg') }}" alt="Project 1" width="300">
            </a>
            <p>CRUD Reservasi Tiket Pesawat</p>
        </div>
        
        <!-- Project 2: YouTube Video -->
        <div class="project-item">
            <a href="https://youtu.be/9iyUzzWagS4?si=aBZI7S6a8d7r-Onz" target="_blank">
            <img src="{{ asset('images/project2.jpg') }}" alt="Project 2" width="300">
            </a>
            <p>Aplikasi Input Data Infrastruktur</p>
        </div>
    </div>
</section>

<!-- Section Kontak -->
<section id="contact-section">
<h2 class="section-title">Kontak Saya</h2>
        
        <div class="row">
            <div class="col-md-3 col-sm-6 contact-box">
                <div class="icon">
                    <i class="fas fa-map-marker-alt" style="color: #F1C40F;"></i>
                </div>
                <h4>ALAMAT</h4>
                <p>Desa Sayang Sedayu, Kec Teluk Keramat, Kab Sambas</p>
            </div>

            <div class="col-md-3 col-sm-6 contact-box">
                <div class="icon">
                    <i class="fas fa-phone-alt" style="color: #F1C40F;"></i>
                </div>
                <h4>KONTAK</h4>
                <p>+62-823-5106-4480</p>
            </div>

            <div class="col-md-3 col-sm-6 contact-box">
                <div class="icon">
                    <i class="fas fa-envelope" style="color: #F1C40F;"></i>
                </div>
                <h4>EMAIL</h4>
                <p>aariell1585@gmail.com</p>
            </div>

            <div class="col-md-3 col-sm-6 contact-box">
                <div class="icon">
                    <i class="fas fa-globe" style="color: #F1C40F;"></i>
                </div>
                <h4>WEBSITE</h4>
                <p>aariell.my.id</p>
            </div>
        </div>
</section>

<!-- Footer -->
<footer>
    <div class="footer-section">
        <div class="footer-column">
            <h3>Tentang</h3>
            <p>Mahasiswa dari Politeknik Negeri Sambas, Prodi D3 Manajemen Informatika. Merupakan Alumni dari SMK Negeri 1 Paloh jurusan Teknik Komputer dan Jaringan. Saya merupakan pribadi yang tertarik pada bidang pengembang web terkhusus pengembangan web dengan framework Laravel. Berbekal latar belakang pengalaman sebelumnya dan kemampuan yang saya miliki, saya siap menyumbangkan waktu dan kompetensi yang saya miliki.</p>
        </div>
        <div class="footer-column">
            <h3>Links</h3>
            <ul>
                <li><a href="#home-section">Home</a></li>
                <li><a href="#about-section">Tentang</a></li>
                <li><a href="#project-section">Proyek</a></li>
                <li><a href="#contact-section">Kontak</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Punya Pertanyaan?</h3>
            <p>Alamat: Jln Pasanda Bhakti No.73</p>
            <p>Email: aariell1585@gmail.com</p>
        </div>
    </div>
    <p class="copyright">Copyright ©2024 Website ini dibuat oleh Aril Mulyawan</p>
</footer>

@endsection
