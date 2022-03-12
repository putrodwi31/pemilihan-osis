<?php  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title; ?> - SMKN 2 Kota Bekasi</title>
  <meta content="Pemilihan Ketua OSIS SMKN 2 Kota Bekasi" name="descriptison">
  <meta content="Pilkasis" name="keywords">

  <link href="<?php echo base_url('assets/front/') ?>img/logoo.png" rel="icon">
  <link href="<?php echo base_url('assets/front/') ?>img/logoo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Sweet Alert 2 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/front/') ?>css/sweetalert2.min.css">
  <script src="<?php echo base_url('assets/front/') ?>js/sweetalert2.all.min.js"></script>

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('assets/front/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/front/') ?>vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/front/') ?>vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/front/') ?>vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/front/') ?>vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/front/') ?>vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('assets/front/') ?>css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Scaffold - v2.0.0
  * Template URL: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="<?php echo base_url() ?>"><span>OSIS</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#hero">Home</a></li>
          <li class="drop-down"><a href="#">About</a>
            <ul>
              <li><a href="#about">Latar Belakang</a></li>
              <li><a href="#team">Kandidat</a></li>
              <li><a href="#features">Visi & Misi</a></li>

            </ul>
          </li>
          <li><a href="#services">Features</a></li>
          <li><a href="#faq">FAQ</a></li>
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->



    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
          <div>
            <h1>Pemilihan Ketua OSIS SMKN 2 Kota Bekasi</h1>
            <h2>Masa bakti 2021/2022</h2>
            <a href="<?php echo base_url('auth') ?>" class="btn-get-started scrollto" title="Login disini">Coblos Sekarang!</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
          <img style="width: 300px; height: 300px;" src="<?php echo base_url('assets/front/') ?>img/logoo.png" class="img-fluid " alt="Logo SMK2" title="SMKN 2 Kota Bekasi">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row ">
          <div class="col-lg-6 text-center" data-aos="zoom-in">
            <img src="<?php echo base_url('assets/front/') ?>img/kpo.png" class="img-fluid p-md-5" alt="Logo KPO">
          </div>
          <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
            <div class="content pt-4 pt-lg-0">
              <h3>Latar Belakang</h3>
              <p>
                Organisasi Siswa Intra Sekolah (OSIS) adalah suatu organisasi yang berada di tingkat sekolah di Indonesia. OSIS diurus dan dikelola oleh murid-murid yang terpilih untuk menjadi pengurus OSIS.
              </p><br>
              <p>
                Dalam upaya mengenal, memahami dan mengelola OSIS perlu kejelasan mengenai Pengertian, Tujuan, Fungsi dan Struktur OSIS. hal ini akan membantu pengurus untuk mendayagunakan OSIS sesuai dengan fungsi dan tujuannya.
              </p><br>
              <p>
                Kegiatan pemilihan ketua OSIS adalah kegiatan tahunan yang wajib untuk dilaksanakan guna pembaruan dan peningkatan kegiatan OSIS. Demi kelancaran dan berjalannya segala kegiatan disekolah, maka dari itu diadakanlah kegiatan pemilihan ketua OSIS yang kali ini dilaksanakan secara online maupun daring dirumah masing-masing.
              </p>

            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Kandidat</h2>

        </div>

        <div class="row">
          <?php $i = 1; ?>
          <?php foreach ($paslon as $p) : ?>
            <div class="col-lg-3 col-md-6">
              <div class="member" data-aos="zoom-in">
                <div class="pic"><img src="<?php echo base_url('assets/back/assets/images/') ?><?php echo $p['image'] ?>" class="img-fluid" alt="<?php echo $p['nama'] ?>" title="<?php echo $p['nama'] ?>"></div>
                <div class="member-info">
                  <h4><?= $p['nama']; ?></h4>
                  <span>Kandidat Nomor Urut <?= $i; ?></span>

                  <div class="social">


                    <a href="<?php echo $p['url'] ?>" target=".blank"><i class="icofont-instagram"></i></a>

                  </div>
                </div>
              </div>
            </div>
            <?php $i++; ?>
          <?php endforeach; ?>


        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 mt-2 mb-tg-0 order-2 order-lg-1">
            <ul class="nav nav-tabs flex-column">

              <li class="nav-item" data-aos="fade-up">
                <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                  <h4>Kandidat Nomor Urut 1</h4>
                  <p><?= $paslon1['nama']; ?></p>
                </a>
              </li>
              <?php $i = 2; ?>
              <?php foreach ($paslon as $p) : ?>
                <?php if ($p['id'] != '1') : ?>
                  <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="<?= $i; ?>00">
                    <a class="nav-link" data-toggle="tab" href="#tab-<?= $i; ?>">
                      <h4>Kandidat Nomor Urut <?= $i; ?></h4>
                      <p><?= $p['nama']; ?></p>
                    </a>
                  </li>
                  <?php $i++; ?>
                <?php endif; ?>
              <?php endforeach; ?>
            </ul>
          </div>
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <figure class="text-left">
                  <h5>Visi</h5>
                  <p><?= $paslon1['visi']; ?></p>
                  <br>
                  <h5>Misi</h5>
                  <?= $paslon1['misi']; ?>
                </figure>
              </div>
              <?php $i = 2; ?>
              <?php foreach ($paslon as $p) : ?>
                <?php if ($p['id'] != '1') : ?>
                  <div class="tab-pane" id="tab-<?= $i; ?>">
                    <figure class="text-left">
                      <h5>Visi</h5>
                      <p><?= $p['visi']; ?></p>
                      <br>
                      <h5>Misi</h5>
                      <?= $p['misi']; ?>
                    </figure>
                  </div>
                  <?php $i++; ?>
                <?php endif; ?>
              <?php endforeach; ?>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row" data-aos="zoom-in">
          <div class="col-lg-9 text-center text-lg-left">
            <h3>Partisipasi</h3>
            <p> Marilah bersama-sama ikut berpartisipasi guna mewujudkan kepengurusan OSIS SMKN 2 Kota Bekasi masa bakti 2021/2022 menjadi jauh lebih baik lagi.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="<?php echo base_url('auth') ?>" title="Login disini">Coblos Sekarang!</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->



    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Pilkasis 2021</h2>
          <p>Dengan megikuti kegiatan pemilihan ketua OSIS SMKN 2 Kota Bekasi dan mengindari diri dari golput adalah salah satu cara terbaik untuk saling bekerja sama dan menentukan masa depan kepengurusan OSIS SMKN 2 Kota Bekasi.</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title">Terbuka</h4>
              <p class="description">Pilkasis 2021 terbuka untuk seluruh masyarakat sekolah secara meyeluruh dan tanpa terkecuali</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title">Aman</h4>
              <p class="description">Panitia menjaga semaksmial mungkin dari kebocoran data dan segala macam kecurangan</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title">Akurat</h4>
              <p class="description">Dengan menggunakan sistem yang terautomasi, penghitungan suara akan lebih mudah dan akurat</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title">Digital</h4>
              <p class="description">Digitalisasi adalah kunci utama dalam adaptasi perubahan dimasa pandemi seperi sekarang</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->



    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Tanggapan</h2>
          <p>Pemilihan ketua OSIS secara online memang bukanlah hal yang umum diadakan oleh SMKN 2 Kota Bekasi, berikut adalah pendapat dan tanggapan mengenai Pemilihan Ketua OSIS secara online.</p>
        </div>

        <div class="owl-carousel testimonials-carousel" data-aos="fade-up" data-aos-delay="150">

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Bagus lebih dari yang lain. Perbandingannya daripada offline kebanyakan usaha, pasti tanggapannya juga kurang.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="<?php echo base_url('assets/front/') ?>img/affan.jpg" class="testimonial-img" alt="">
            <h3>Affan Abdillah</h3>
            <h4>Siswa</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Melihat segi kondisi dan keadaan saat ini yang tidak memungkinkan untuk tatap muka, pemilihan online adalah salah satu cara yang paling efektif untuk digunakan. Ini bisa menjadi contoh bahwa kita tetap bisa membangun demokrasi di era new normal dan merupakan ide baru dalam perubahan sosial.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="<?php echo base_url('assets/front/') ?>img/arsita.jpg" class="testimonial-img" alt="">
            <h3>Arsita Anggraini</h3>
            <h4>Siswa</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Sangat setuju, cuma yaa harus diminimalisir kecurangan sama harus bisa dipastiin kalo semua anak butun ikut pemilihan ketua OSIS.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="<?php echo base_url('assets/front/') ?>img/intan.jpg" class="testimonial-img" alt="">
            <h3>Intan Putri Banowati</h3>
            <h4>Siswa</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Saya akui memang kurang terasa feel orasi dan pencoblosan ketua OSIS daripada masa bakti sebelumnya, tetapi terkait dengan keadaan dan kondisi kita yang seperti ini, langkah terbaiknya adalah dengan menerima dan menjalaninya dengan antusias yang sama.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="<?php echo base_url('assets/front/') ?>img/hamdi.jpg" class="testimonial-img" alt="">
            <h3>Hamdi Syalabi</h3>
            <h4>Siswa</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Saya sangat setuju dengan diadakannya Pemilihan Ketua OSIS secara online ini, karena walau bagaimana pun roda kepengurusan OSIS SMKN 2 Kota Bekasi harus dapat berjalan sebagaimana mestinya dengan atau tanpa adanya pandemi, hal ini seharusnya bisa kita manfaatkan sebaik mungkin.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="<?php echo base_url('assets/front/') ?>img/ganden.jpg" class="testimonial-img" alt="">
            <h3>Ganden Dynastina</h3>
            <h4>Siswa</h4>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->



    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Frequently Asked Questions</h2>
        </div>

        <ul class="faq-list">

          <li data-aos="fade-up">
            <a data-toggle="collapse" class="" href="#faq1">Bagaimana cara menyoblos ketua OSIS? <i class="icofont-simple-up"></i></a>
            <div id="faq1" class="collapse show" data-parent=".faq-list">
              <p>
                Login dengan NIS masing masing pada tombol <b>"Coblos Sekarang"</b> yang sudah disediakan pada website ini, setelah login dengan NIS masing-masing, kalian bisa langsung memilih pilihan dari pasangan kandidat ketua dan wakil ketua OSIS yang kalian inginkan.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="500">
            <a data-toggle="collapse" href="#faq8" class="collapsed">Bagaimana cara login? <i class="icofont-simple-up"></i></a>
            <div id="faq8" class="collapse" data-parent=".faq-list">
              <p>
                Untuk login, kalian bisa tekan tombol <b>"Coblos Sekarang"</b>, lalu masukan NIS dan Password kalian.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="500">
            <a data-toggle="collapse" href="#faq7" class="collapsed">Apa password akun saya? <i class="icofont-simple-up"></i></a>
            <div id="faq7" class="collapse" data-parent=".faq-list">
              <p>
                Secara default, password dari setiap akun adalah <b>123</b> tetapi apabila kalian mengganti password, password menyesuaikan.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="500">
            <a data-toggle="collapse" href="#faq99" class="collapsed">Bagaimana jika saya memiliki kendala?<i class="icofont-simple-up"></i></a>
            <div id="faq99" class="collapse" data-parent=".faq-list">
              <p>
                Kalian bisa menghubungi contact person dari pelaksanaan pemilihan ketua OSIS ini kepada <b>Kak Hamdi</b> dengan cara hubungi whatsapp nya (08994385160)
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="100">
            <a data-toggle="collapse" href="#faq2" class="collapsed">Dimana saya bisa melihat Visi dan Misi? <i class="icofont-simple-up"></i></a>
            <div id="faq2" class="collapse" data-parent=".faq-list">
              <p>
                Visi dan Misi bisa dilihat pada menu <b>Visi & Misi</b> lalu kalian bisa klik visi dan misi dari masing pasangan calon untuk membacanya.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="200">
            <a data-toggle="collapse" href="#faq3" class="collapsed">Apakah ada siaran orasi dari masing pasangan calon? <i class="icofont-simple-up"></i></a>
            <div id="faq3" class="collapse" data-parent=".faq-list">
              <p>
                <b>Ada</b>, orasi dari pasangan calon bisa dilihat di Instagram OSIS @osissmkn2bekasi atau klik foto pasangan calon pada website ini lalu tekan logo instagram
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="300">
            <a data-toggle="collapse" href="#faq4" class="collapsed">Berapa lama masa jabatan OSIS? <i class="icofont-simple-up"></i></a>
            <div id="faq4" class="collapse" data-parent=".faq-list">
              <p>
                Umumnya, masa jabatan OSIS per periode adalah selama <b>1 Tahun</b>, tetapi hal ini bisa kurang dan bisa saja lebih tergantung situasi, kondisi, dan ketentuan yang ada pada saat itu.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="400">
            <a data-toggle="collapse" href="#faq5" class="collapsed">Bagaimana dengan siswa yang golput? <i class="icofont-simple-up"></i></a>
            <div id="faq5" class="collapse" data-parent=".faq-list">
              <p>
                Golput bukanlah solusi dari permasalahn yang ada, hal ini diperlu ditingkatkan dari kesadaran masing-masing siswa maupun setiap elemen sekolah dan tentu harus ada kerjasama dari semuanya guna mewujudkan kepengurusan OSIS SMKN 2 Kota Bekasi yang berkualitas.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="500">
            <a data-toggle="collapse" href="#faq6" class="collapsed">Apa saya boleh mengajukan saran? <i class="icofont-simple-up"></i></a>
            <div id="faq6" class="collapse" data-parent=".faq-list">
              <p>
                <b>Boleh</b>, saran bisa diajukan pada menu <b>Contact Us</b>. Setiap masukan yang anda berikan akan sangat berarti bagi kami, terimakasih!.
              </p>
            </div>
          </li>



        </ul>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact Us</h2>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Alamat:</h4>
                <p>Jl. Lap. Bola Rw. Butun, RT.001/RW.006, Ciketing Udik, Bantargebang, Kota Bks, Jawa Barat 17153</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>smknduakotabekasi@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>(021) 82483479</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.295845508763!2d106.98985671476984!3d-6.355736895400768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c22161d4051%3A0x7a0a35b288779341!2sSMK%20Negeri%202%20Kota%20Bekasi!5e0!3m2!1sid!2sid!4v1612922549197!5m2!1sid!2sid" width="400" height="300" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

            </div>

          </div>

          <div class="col-lg" data-aos="fade-left">
            <?= $this->session->flashdata('message'); ?>
            <div class="card">
              <div class="card-body">
                <form action="<?= base_url(''); ?>" method="post">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="name">Nama Lengkap</label>
                      <input type="text" name="name" class="form-control" value="<?php echo set_value('name') ?>" />
                      <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" name="email" id="email" value="<?php echo set_value('email') ?>" />
                      <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="subject">Status</label>
                    <input type="text" class="form-control" name="subject" id="subject" value="<?php echo set_value('subject') ?>" />
                    <?= form_error('subject', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="message">Masukan</label>
                    <textarea class="form-control" name="message" rows="15" value="<?php echo set_value('message') ?>"></textarea>
                    <?= form_error('message', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>

                  <div class="text-center"><button class="btn btn-primary btn-block" type="submit">Kirim</button></div>



                </form>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>SMKN 2 Kota Bekasi</h3>
              <p>
                Jl. Lap. Bola Rw. Butun <br>
                Bantargebang, Kota Bks, Jawa Barat<br><br>
                <strong>Phone:</strong> (021) 82483479<br>
                <strong>Email:</strong> smknduakotabekasi@gmail.com<br>
                <a href="https://wa.me/+628994385160" style="text-decoration: none; color: #555555;"><strong>Contact Person:</strong> 08994385160 (Hamdi Syalabi)</a><br>
              </p>
              <div class="social-links mt-3">
                <a href="https://bkk-smkn2kotabekasi.com/" class="twitter" target=".blank"><i class='bx bx-network-chart'></i></a>
                <a href="https://www.smkn2kotabekasi.sch.id/" class="facebook" target=".blank"><i class='bx bxs-school'></i></a>
                <a href="https://www.instagram.com/osissmkn2bekasi/" class="instagram"><i class="bx bxl-instagram"></i></a>

              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Dibuat Oleh</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.instagram.com/dynastina_/" target=".blank">Ganden Dynastina</a></li>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="https://www.instagram.com/msultanalhakim/" target=".blank">M Sultan Alhakim</a></li> -->
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.instagram.com/putrodwi31/" target=".blank">Putro Dwi Mulyo</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.smkn2kotabekasi.sch.id/" target=".blank">Tim ICT</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Pendukung</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="https://getboostrap.com" target=".blank">Bootstrap</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://jquery.com" target=".blank">Jquery</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://fontawesome.com" target=".blank">Font Awesome</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://codeigniter.com" target=".blank">Code Igniter</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://themewagon.com" target=".blank">Themewagon</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://sweetalert.js.org" target=".blank">Sweet Alert</a></li>

            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Partisipasi</h4>
            <p>Gunakan hak pilih dengan sebaik dan sebijak mungkin</p>
            <a href="<?php echo base_url('auth') ?>" class="btn btn-info" title="Login disini">Coblos Sekarang</a>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>OSIS SMKN 2 Kota Bekasi</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/ -->
        Designed by <a href="https://bootstrapmade.com/" target=".blank">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('assets/front/') ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url('assets/front/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url('assets/front/') ?>vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url('assets/front/') ?>vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url('assets/front/') ?>vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url('assets/front/') ?>vendor/venobox/venobox.min.js"></script>
  <script src="<?php echo base_url('assets/front/') ?>vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url('assets/front/') ?>vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets/front/') ?>js/main.js"></script>

</body>

</html>