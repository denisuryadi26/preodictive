<!--================Home Banner Area =================-->
<section class="home_banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="banner_content text-center">
                <h3>Belajar Dimana Saja & Kapan Saja <br /> Mudah Dengan Preodictive</h3>
                <p>Dengan Preodictive kemudahan kegiatan belajar mengajar dapat terpenuhi. Para guru dan siswa dapat
                    belajar meski banyak halangan atau rintangan. Pembelajaran Terstruktur dan Efektif hanya di
                    Preodictive! Nikmati kemudahan belajar dan materi terlengkap dari kami! </p>
                <a class="main_btn" href="<?= base_url('user/registration') ?>#registration">Daftar Sekarang</a>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->


<!--================Finance Area =================-->
<section class="finance_area">
    <div class="container">
        <div class="finance_inner row">
            <div class="col-lg-3 col-sm-6">
                <div class="finance_item">
                    <div class="media">
                        <div class="d-flex">
                            <i class="lnr lnr-rocket"></i>
                        </div>
                        <div class="media-body">
                            <h5>Cepat & <br />Mudah</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="finance_item">
                    <div class="media">
                        <div class="d-flex">
                            <i class="lnr lnr-earth"></i>
                        </div>
                        <div class="media-body">
                            <h5>Kompetensi <br />Internasional</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="finance_item">
                    <div class="media">
                        <div class="d-flex">
                            <i class="lnr lnr-smile"></i>
                        </div>
                        <div class="media-body">
                            <h5>User <br /> Friendly</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="finance_item">
                    <div class="media">
                        <div class="d-flex">
                            <i class="lnr lnr-tag"></i>
                        </div>
                        <div class="media-body">
                            <h5>Simple & <br />Tinggal Belajar!</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Finance Area =================-->


<!--================Courses Area =================-->
<section class="courses_area p_40">
    <div class="container">
        <div class="main_title">
            <h2>Pelajaran yang tersedia di Preodictive</h2>
            <p>Dibawah ini merupakan mata pelajaran yang tersedia di website Preodictive. Tiap kelas mempunyai
                materi yang berbeda namun dengan mata pelajaran yang sama. Oleh karena itu nikmati materi dan selamat
                belajar! tunggu update selanjutnya untuk penambahan mata pelajaran!</p>
        </div>
        <div class="row about_inner">
            <div class="col-lg-12">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                SD
                                <i class="lnr lnr-chevron-down"></i>
                                <i class="lnr lnr-chevron-up"></i>
                            </button>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                Berikut kelas yang tersedia untuk Tingkat SD :
                            </div>
                            <a class="dropdown-item" href="#">Kelas 1</a>
                            <a class="dropdown-item" href="#">Kelas 2</a>
                            <a class="dropdown-item" href="#">Kelas 3</a>
                            <a class="dropdown-item" href="#">Kelas 4</a>
                            <a class="dropdown-item" href="#">Kelas 5</a>
                            <a class="dropdown-item" href="#">Kelas 6</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                SMP
                                <i class="lnr lnr-chevron-down"></i>
                                <i class="lnr lnr-chevron-up"></i>
                            </button>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                Berikut kelas yang tersedia untuk Tingkat SMP :
                            </div>
                            <a class="dropdown-item" href="#">Kelas 7</a>
                            <a class="dropdown-item" href="#">Kelas 8</a>
                            <a class="dropdown-item" href="#">Kelas 9</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                SMA
                                <i class="lnr lnr-chevron-down"></i>
                                <i class="lnr lnr-chevron-up"></i>
                            </button>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                Berikut kelas yang tersedia untuk Tingkat SMA :
                            </div>
                            <a class="dropdown-item" href="#">Kelas 10</a>
                            <a class="dropdown-item" href="#">Kelas 11</a>
                            <a class="dropdown-item" href="#">Kelas 12</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-6">
                <div class="video_area" id="video">
                    <img class="img-fluid" src="<?=base_url('assets/')?>img/video-1.jpg" alt="" />
                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=FZmbSq2W1hY">
                        <img src="<?=base_url('assets/')?>img/icon/video-icon-1.png" alt="" />
                    </a>
                </div>
            </div> -->
        </div>
        <br>
        <div class="row courses_inner">
            <div class="col-lg-9">
                <div class="grid_inner">
                    <div class="grid_item wd55">
                        <div class="courses_item">
                            <img src="<?= base_url('assets/') ?>img/courses/course-1.jpg" alt="">
                            <div class="hover_text">
                                <a class="cat" href="#">Gratis</a>
                                <a href="javaScript:void(0);">
                                    <h4>Kelas Matematika Gratis</h4>
                                </a>
                                <ul class="list">
                                    <li><a href="#"><i class="lnr lnr-users"></i>54</a></li>
                                    <li><a href="#"><i class="lnr lnr-bubble"></i> 0</a></li>
                                    <li><a href="#"><i class="lnr lnr-user"></i>Guru Matematika SMKN 1 Ciamis</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="grid_item wd44">
                        <div class="courses_item">
                            <img src="<?= base_url('assets/') ?>img/courses/course-2.jpg" alt="">
                            <div class="hover_text">
                                <a class="cat" href="#">Gratis</a>
                                <a href="javaScript:void(0);">
                                    <h4>Kelas IPA Gratis</h4>
                                </a>
                                <ul class="list">
                                    <li><a href="#"><i class="lnr lnr-users"></i> 34</a></li>
                                    <li><a href="#"><i class="lnr lnr-bubble"></i> 0</a></li>
                                    <li><a href="#"><i class="lnr lnr-user"></i> Guru IPA SMKN 1 Ciamis</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="grid_item wd44">
                        <div class="courses_item">
                            <img src="<?= base_url('assets/') ?>img/courses/course-4.jpg" alt="">
                            <div class="hover_text">
                                <a class="cat" href="#">Gratis</a>
                                <a href="javaScript:void(0);">
                                    <h4>Kelas Bahasa Inggris Gratis</h4>
                                </a>
                                <ul class="list">
                                    <li><a href="#"><i class="lnr lnr-users"></i> 63</a></li>
                                    <li><a href="#"><i class="lnr lnr-bubble"></i> 0</a></li>
                                    <li><a href="#"><i class="lnr lnr-user"></i> Guru English SMKN 1 Ciamis</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="grid_item wd55">
                        <div class="courses_item">
                            <img src="<?= base_url('assets/') ?>img/courses/course-5.jpg" alt="">
                            <div class="hover_text">
                                <a class="cat" href="#">Gratis</a>
                                <a href="javaScript:void(0);">
                                    <h4>Kelas Bahasa Indonesia Gratis</h4>
                                </a>
                                <ul class="list">
                                    <li><a href="#"><i class="lnr lnr-users"></i> 24</a></li>
                                    <li><a href="#"><i class="lnr lnr-bubble"></i> 0</a></li>
                                    <li><a href="#"><i class="lnr lnr-user"></i> Guru Indonesia SMKN 1 Ciamis</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="course_item">
                    <img src="<?= base_url('assets/') ?>img/courses/course-3.jpg" alt="">
                    <div class="hover_text">
                        <a class="cat" href="#">Gratis</a>
                        <a href="javaScript:void(0);">
                            <h4>Kelas Pendidikan Agama Islam Gratis</h4>
                        </a>
                        <ul class="list">
                            <li><a href="#"><i class="lnr lnr-users"></i> 35</a></li>
                            <li><a href="#"><i class="lnr lnr-bubble"></i> 0</a></li>
                            <li><a href="#"><i class="lnr lnr-user"></i> Guru Agama SMKN 1 Ciamis</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Courses Area =================-->


<!--================Team Area =================-->
<section class="team_area p_20">
    <div class="container">
        <div class="main_title">
            <h2>Testimonial Para Siswa Preodictive</h2>
            <p>Berikut kesan dan pesan para siswa yang sudah menggunakan layanan website Preodictive. Pastikan kamu
                juga mencoba layanan kami ya! di Preodictive semoga kamu menikmati semua materi dan pelajaran yang guru
                guru kami buat! Selamat Belajar! </p>
        </div>
        <section class="testimonials_area p_20">
            <div class="container">
                <div class="testi_slider owl-carousel">
                    <div class="item">
                        <div class="testi_item">
                            <img src="<?= base_url('assets/') ?>img/testimonials/testi-3.png" alt="">
                            <h4>Syaauqi Zaaidan</h4>
                            <ul class="list">
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                            <p>Materi nya lengkap, Gurunya keren keren semua dan dapat mudah dimengerti materinya.
                                Pokoknya Semangat Preodictive! Tetap jadi yang terbaik untuk SMKN 1 Ciamis. Semoga
                                dengan adanya website Preodictive yang saya kembangkan ini ,siswa SMKN 1
                                Ciamis dapat belajar dengan mudah dan para siswa dapat mencetak prestrasi untuk
                                sekolah kita tercinta ini. Made with <span class="text-danger"> &#10084;</span> by
                                syaauqi</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testi_item">
                            <img src="<?= base_url('assets/') ?>img/testimonials/testi-2.png" alt="">
                            <h4>Taupik Hidayat</h4>
                            <ul class="list">
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                            <p>Gurunya baik baik, materinya terstruktur dan materi nya terus update. Meski Guru
                                tidak ada, kita masih bisa melihat materi yang dibuat guru di Website Preodictive.
                                Terima kasih Preodictive!. Semoga dengan adanya Preodictive ini kita para siswa lebih
                                produktif dan dapat meningkatkan kualitas SDM untuk negara kita tercinta ini yaitu
                                negara Indonesia</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testi_item">
                            <img src="<?= base_url('assets/') ?>img/testimonials/testi-1.png" alt="">
                            <h4>Diki Ramdani</h4>
                            <ul class="list">
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                            <p>Website yang sangat berguna untuk para siswa millenial. Karena dengan Preodictive ini
                                kalian bisa belajar dimana saja dan kapan saja! . Meski guru tidak bisa hadir atau
                                kita tidak masuk sekolah karena sakit kita masih bisa belajar di website Preodictive
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
<!--================End Team Area =================-->

<!--================Price List Area =================-->
<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

<section class="pricing py-5">
    <div class="container">
        <div class="row">
        <!-- Free Tier -->
        <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
            <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Free</h5>
                <h6 class="card-price text-center">$0<span class="period">/month</span></h6>
                <hr>
                <ul class="fa-ul">
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Single User</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>5GB Storage</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Unlimited Private Projects</li>
                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Dedicated Phone Support</li>
                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Free Subdomain</li>
                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Monthly Status Reports</li>
                </ul>
                <a href="#" class="btn btn-block btn-primary text-uppercase">Button</a>
            </div>
            </div>
        </div>
        <!-- Plus Tier -->
        <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
            <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Plus</h5>
                <h6 class="card-price text-center">$9<span class="period">/month</span></h6>
                <hr>
                <ul class="fa-ul">
                <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>5 Users</strong></li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>50GB Storage</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Private Projects</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Dedicated Phone Support</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Free Subdomain</li>
                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Monthly Status Reports</li>
                </ul>
                <a href="#" class="btn btn-block btn-primary text-uppercase">Button</a>
            </div>
            </div>
        </div>
        <!-- Pro Tier -->
        <div class="col-lg-4">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Pro</h5>
                <h6 class="card-price text-center">$49<span class="period">/month</span></h6>
                <hr>
                <ul class="fa-ul">
                <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Unlimited Users</strong></li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>150GB Storage</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Private Projects</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Dedicated Phone Support</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Unlimited</strong> Free Subdomains</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Monthly Status Reports</li>
                </ul>
                <a href="#" class="btn btn-block btn-primary text-uppercase">Button</a>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>


<!--================Price List Area =================-->

<!--================Impress Area =================-->
<section class="impress_area p_120">
    <div class="container">
        <div class="impress_inner text-center">
            <h2>JADILAH PENGAJAR DAN MENGAJAR DI PREODICTIVE</h2>
            <p>Jika anda adalah seorang guru, anda dapat mendaftar dan masuk untuk mengajar para siswa di Preodictive.
                Tidak dikenakan biaya dan anda dapat segera mengajar setelah disetujui oleh pihak sekolah.
            </p>
            <a class="main_btn2" href="<?= base_url('welcome/guru') ?>">Login sebagai Guru</a>
        </div>
    </div>
</section>
<!--================End Impress Area =================-->