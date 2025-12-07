@extends('layouts.app')

@section('content')

    <section id="hero" class="hero section dark-background">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row align-items-center gy-5">
                <div class="col-lg-7">
                    <div class="hero-card shadow-sm" data-aos="fade-right" data-aos-delay="150">
                        <div class="eyebrow d-inline-flex align-items-center mb-3">
                            <i class="bi bi-stars me-2"></i>
                            <span>Layanan Hosting Terbaik</span>
                        </div>
                        <div class="content">
                            <h2 class="display-5 fw-bold mb-3">Setup Server Multi-User Cepat dan Stabil</h2>
                            <p class="lead mb-4">Solusi tepat untuk project kampus dan bisnis Anda. Didukung infrastruktur **GCP/AWS**.</p>
                            
                            <div class="mini-stats d-flex flex-wrap gap-4 mt-4" data-aos="zoom-in" data-aos-delay="250">
                                {{-- <div class="stat d-flex align-items-center">
                                    <i class="bi bi-lightning-charge me-2"></i>
                                    <span>Server Aktif 24/7</span>
                                </div> --}}
                                <div class="stat d-flex align-items-center">
                                    <i class="bi bi-shield-check me-2"></i>
                                    <span>Keamanan Terjamin</span>
                                </div>
                                <div class="stat d-flex align-items-center">
                                    <i class="bi bi-people me-2"></i>
                                    <span>Multi-User Ready</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="media-stack" data-aos="zoom-in" data-aos-delay="200">
                        <figure class="media primary shadow-sm">
                            {{-- Ganti dengan asset yang sudah di-link --}}
                            <img src="{{ asset('assets/img/illustration/illustration-8.webp') }}" class="img-fluid" alt="Hero visual">
                        </figure>
                        <figure class="media secondary shadow-sm">
                            <img src="{{ asset('assets/img/illustration/illustration-15.webp') }}" class="img-fluid" alt="Supporting visual">
                        </figure>
                        <div class="floating-badge d-flex align-items-center shadow-sm" data-aos="fade-down" data-aos-delay="300">
                            <i class="bi bi-award me-2"></i>
                            <span>Dukungan Penuh Webuzo/aaPanel</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    
    <section id="featured-services" class="featured-services section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item">
                        <div class="icon"><i class="bi bi-gear"></i></div>
                        <h3>Setup Cepat</h3>
                        <p>Kami siapkan server multi-user Anda di GCP atau AWS dengan Webuzo/aaPanel dalam hitungan menit.</p>
                        <div class="card-links"><a href="#services" class="link-item">Lihat Paket <i class="bi bi-arrow-right"></i></a></div>
                    </div>
                </div><div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item">
                        <div class="icon"><i class="bi bi-shield-check"></i></div>
                        <h3>Terjamin Aman</h3>
                        <p>Infrastruktur Cloud yang teruji dan pemantauan sistem rutin untuk melindungi data dan project Anda.</p>
                        <div class="card-links"><a href="#contact" class="link-item">Konsultasi Gratis <i class="bi bi-arrow-right"></i></a></div>
                    </div>
                </div><div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item">
                        <div class="icon"><i class="bi bi-people"></i></div>
                        <h3>Akses Berbagi</h3>
                        <p>Sangat ideal untuk proyek kelompok mata kuliah karena server dapat diakses oleh banyak pengguna.</p>
                        <div class="card-links"><a href="#services" class="link-item">Pilih Paket <i class="bi bi-arrow-right"></i></a></div>
                    </div>
                </div></div>

        </div>

    </section>
    
    <section id="services" class="services section">

        <div class="container section-title" data-aos="fade-up">
            <h2>Pilih Paket Kami</h2>
            <p>Dapatkan Server Hosting Multi-User untuk 1 atau 2 bulan sewa</p>
        </div><div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-5 justify-content-center">
                {{-- DI SINI NANTI PERULANGAN @foreach DITEMPATKAN. KARTU DI BAWAH HANYA CONTOH TAMPILAN STATIS --}}
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card featured">
                        <div class="service-number">01</div>
                        <div class="service-icon-wrapper">
                            <div class="service-icon"><i class="bi bi-laptop"></i></div>
                        </div>
                        <div class="service-content">
                            <h4>Paket Scout (Contoh)</h4>
                            <p>Cocok untuk blog, portofolio, dan proyek ringan lainnya.</p>
                            <ul class="service-list">
                                <li>1 GB RAM</li>
                                <li>1 CPU Core</li>
                                <li>5 GB SSD Storage</li>
                                <li>Akses Webuzo/aaPanel</li>
                            </ul>
                            <div class="service-pricing">
                                <span class="price-tag">Rp75.000 / 1 Bln</span>
                                <a href="#" class="service-btn"><span>Order Sekarang</span><i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card">
                        <div class="service-number">02</div>
                        <div class="service-icon-wrapper">
                            <div class="service-icon"><i class="bi bi-globe"></i></div>
                        </div>
                        <div class="service-content">
                            <h4>Paket Hunter (Contoh)</h4>
                            <p>Direkomendasikan untuk web toko online atau project skripsi menengah.</p>
                            <ul class="service-list">
                                <li>2 GB RAM</li>
                                <li>2 CPU Cores</li>
                                <li>10 GB SSD Storage</li>
                                <li>Akses Webuzo/aaPanel</li>
                            </ul>
                            <div class="service-pricing">
                                <span class="price-tag">Rp120.000 / 1 Bln</span>
                                <a href="#" class="service-btn"><span>Order Sekarang</span><i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section><section id="team" class="team section">
        <div class="container section-title " data-aos="fade-up">
            <h2>Tim Kami</h2>
            <p>Para pengembang yang siap membantu proses hosting dan deployment project Anda.</p>
        </div>
        
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-4 align-items-stretch justify-content-center">
                {{-- Anggota Tim 1 --}}
                <div class="col-md-6 col-lg-3">
                    <article class="member-card h-100" data-aos="zoom-in" data-aos-delay="150">
                        <figure class="member-media">
                            <img src="{{ asset('assets/img/Fotoboebaru.jpg') }}" class="img-fluid" alt="Team member portrait">
                        </figure>
                        <div class="member-content">
                            <h3 class="member-name">Aep Saepul Bahri</h3>
                            <p class="member-role">Full Stack Developer</p>
                        </div>
                    </article>
                </div>
                {{-- Anggota Tim 2 --}}
                <div class="col-md-6 col-lg-3">
                    <article class="member-card h-100" data-aos="zoom-in" data-aos-delay="200">
                        <figure class="member-media">
                            <img src="{{ asset('assets/img/person/person-m-7.webp') }}" class="img-fluid" alt="Team member portrait">
                        </figure>
                        <div class="member-content">
                            <h3 class="member-name">Adrian Mustofany</h3>
                            <p class="member-role">Lead UX Designer</p>
                        </div>
                    </article>
                </div>
                {{-- Anggota Tim 3 --}}
                <div class="col-md-6 col-lg-3">
                    <article class="member-card h-100" data-aos="zoom-in" data-aos-delay="250">
                        <figure class="member-media">
                            <img src="{{ asset('assets/img/person/person-f-12.webp') }}" class="img-fluid" alt="Team member portrait">
                        </figure>
                        <div class="member-content">
                            <h3 class="member-name">Trisna Wiharja</h3>
                            <p class="member-role">Server Administrator</p>
                        </div>
                    </article>
                </div>
                {{-- Anggota Tim 4 (Jika ada 4 anggota) --}}
            </div>
        </div>
    </section><section id="contact" class="contact section dark-background">
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p>Punya Pertanyaan? Kami siap membantu 24/7</p>
        </div>
        
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-5">
                    <a href="https://wa.me/6282125338066?text=Halo%20Hantam%20Host,%20saya%20memiliki%20pertanyaan%20mengenai%20layanan%20hosting." target="_blank" style="text-decoration: none; color: inherit;">
                    <div class="info-item d-flex">
                        <i class="bi bi-whatsapp flex-shrink-0"></i>
                        <div>
                            <h3>Hubungi Kami</h3>
                            <p>+62 8212 533 8066</p> {{-- Ganti dengan nomor WhatsApp CS Anda --}}
                        </div>
                    </div>
                    </a>

                    <a href="mailto:support@hantamhost.com?subject=Pertanyaan%20Layanan%20Hosting" style="text-decoration: none; color: inherit;">
                    <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email Kami</h3>
                            <p>support@hantamhost.com</p>
                        </div>
                    </div>
                    </a>

                    <div class="info-item d-flex">
                        <i class="bi bi-clock flex-shrink-0"></i>
                        <div>
                            <h3>Waktu Operasional</h3>
                            <p>Senin - Minggu: 24 Jam</p>
                        </div>
                    </div>

                </div>

                <div class="col-lg-7">
                    <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                        <div class="row gy-4">
                            <div class="col-md-6"><input type="text" name="name" class="form-control" placeholder="Nama Anda" required=""></div>
                            <div class="col-md-6 "><input type="email" class="form-control" name="email" placeholder="Email Anda" required=""></div>
                            <div class="col-md-12"><input type="text" class="form-control" name="subject" placeholder="Subjek" required=""></div>
                            <div class="col-md-12"><textarea class="form-control" name="message" rows="6" placeholder="Pesan" required=""></textarea></div>
                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                                <button type="submit">Kirim Pesan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>@endsection