<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?> data-spy="scroll" data-target="#navigation" data-offset="100">

  <!--[if lt IE 7]><div class="alert"><?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?></div><![endif]-->

  <nav id="navigation" class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li><a href="#about-me">Tentang saya</a></li>
          <li><a href="#expertise">Keahlian</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#experience">Pengalaman</a></li>
          <li><a href="#education">Pendidikan</a></li> 
          <li><a href="#contact-me">Hubungi saya</a></li>  
        </ul>
      </div><!-- /.navbar-collapse -->
    </div>
  </nav>

  <div class="wrap container" role="document">
    <div class="row">
      <div class="col-lg-12">
        
      </div>
    </div>
    <div class="jumbotron">
      <h1 class="text-center">Moh Hasbi Assidiqi</h1>
      <p class="text-center">Pengrajin Web</p>
      <h2 class="text-center">
        <small>Membuat Indonesia lebih baik melalui web yang sederhana dan mudah digunakan.</small>
      </h2>
    </div>
    <hr>
    <section id="about-me" class="row">
      <aside class="section-title col-lg-3">
        <h2 class="text-right">Tentang saya</h2>
      </aside>
      <article class="section-content col-lg-6">
        <div class="pull-left col-lg-3">
          <img class="img-circle" src="/wordpress/assets/img/manten-square.jpg" width=110 alt="profile-picture"/>
        </div>
        <p>Saya suka membuat sesuatu. Saya menikmati proses pembuatan sesuatu. Memberikan perhatian lebih untuk setiap detilnya. Amat sangat menyenangkan bagi saya.</p>
      </article>
      <div class="contact-info col-lg-3">
        <ul class="list-inline">
          <li id="facebook_link">
            <a href="http://www.facebook.com/mohhasbias">
              <span class="icon-stack">
                <i class="icon-circle icon-facebook-color icon-stack-base"></i>
                <i class="icon-facebook icon-light"></i>
              </span>
            </a>
          </li>
          <li id="twitter_link">
            <a href="http://www.twitter.com/m_hasbi_as">
              <span class="icon-stack">
                <i class="icon-circle icon-twitter-color icon-stack-base"></i>
                <i class="icon-twitter icon-light"></i>
              </span>
            </a>
          </li>
          <li id="linkedin_link">
            <a href="http://www.linkedin.com/pub/moh-hasbi-assidiqi/29/a3/995">
              <span class="icon-stack">
                <i class="icon-circle icon-linkedin-color icon-stack-base"></i>
                <i class="icon-linkedin icon-light"></i>
              </span>
            </a>
          </li>
          <li id="googleplus_link">
            <a href="#">
              <span class="icon-stack">
                <i class="icon-circle icon-google-plus-color icon-stack-base"></i>
                <i class="icon-google-plus icon-light"></i>
              </span>
            </a>
          </li>
          <li id="rss_link">
            <a href="#">
              <span class="icon-stack">
                <i class="icon-circle icon-rss-color icon-stack-base"></i>
                <i class="icon-rss icon-light"></i>
              </span>
            </a></li>
        </ul>
        <ul class="icons-ul contact-info">
          <li>
            <i class="icon-li icon-comments-alt icon-2x pull-left"></i>
            <p class="text-muted">+628 969 499 1125</p>
          </li>
          <li>
            <i class="icon-li icon-map-marker icon-2x pull-left"></i>
            <p class="text-muted">Surabaya, Indonesia</p>
          </li>
          <li>
            <i class="icon-li icon-envelope icon-2x pull-left"></i>
            <p class="text-muted">mohhasbias@gmail.com</p>
          </li>
        </ul>
      </div>
    </section>
    <br/>
    <section id="expertise" class="row">
      <aside class="section-title col-lg-3">
        <h2 class="text-right">Keahlian</h2>
      </aside>
      <div class="section-content col-lg-9">
        <article class="row">
          <p class="col-lg-6">
            Saya sudah membuat tema wordpress selama 1 tahun. Selama waktu tersebut, saya belajar banyak tentang pembuatan tema wordpress meliputi pembuatan widget-nya. Saya juga belajar tentang implementasi AJAX pada tema wordpress yang digunakan untuk mereduksi ukuran situs sehingga lebih cepat dibuka oleh user. Saya juga menggunakan banyak plugin JQuery untuk mempercepat proses pembuatan dimana saya tidak perlu membuat semuanya dari nol.
          </p>
          <div class="col-lg-6">
            <p class="text-right pull-left col-lg-6">Wordpress Theme</p>
            <ul class="list-inline">
              <li><i class="icon-star icon-large"></i></li>
              <li><i class="icon-star icon-large"></i></li>
              <li><i class="icon-star icon-large"></i></li>
              <li><i class="icon-star icon-large"></i></li>
              <li><i class="icon-star-empty icon-large"></i></li>
            </ul>
            <p class="text-right pull-left col-lg-6">JQuery Plugin</p>
            <ul class="list-inline">
              <li><i class="icon-star icon-large"></i></li>
              <li><i class="icon-star icon-large"></i></li>
              <li><i class="icon-star icon-large"></i></li>
              <li><i class="icon-star icon-large"></i></li>
              <li><i class="icon-star-empty icon-large"></i></li>
            </ul>
            <p class="text-right pull-left col-lg-6">AJAX</p>
            <ul class="list-inline">
              <li><i class="icon-star icon-large"></i></li>
              <li><i class="icon-star icon-large"></i></li>
              <li><i class="icon-star icon-large"></i></li>
              <li><i class="icon-star-empty icon-large"></i></li>
              <li><i class="icon-star-empty icon-large"></i></li>
            </ul>
            <p class="text-right pull-left col-lg-6">Mobile / Responsive</p>
            <ul class="list-inline">
              <li><i class="icon-star icon-large"></i></li>
              <li><i class="icon-star icon-large"></i></li>
              <li><i class="icon-star-empty icon-large"></i></li>
              <li><i class="icon-star-empty icon-large"></i></li>
              <li><i class="icon-star-empty icon-large"></i></li>
            </ul>
          </div>
        </article>
      </div>
    </section>
    <br/>
    <section id="portfolio" class="row">
      <aside class="section-title col-lg-3">
        <h2 class="text-right">Portfolio</h2>
      </aside>
      <article class="section-content col-lg-3">
        <a href="http://rr.id1945.com/wp" class="thumbnail">
          <img src="/wordpress/assets/img/murahgrosir.png" alt="murahgrosir" width=100%>
          <div class="caption text-center">
            <p>Toko Online</p>
          </div>
        </a>
      </article>      
    </section>
    <br/>
    <section id="experience" class="row">
      <aside class="section-title col-lg-3">
        <h2 class="text-right">Pengalaman</h2>
      </aside>
      <div class="section-content col-lg-9">
        <article class="row">
          <div class="col-lg-2">
            <p><span class="label label-primary">2012 - Sekarang</span></p>
          </div>
          <header class="col-lg-10">
            <p>
              Pengajar Pelatihan Dosen Akademi Komunitas<br/>
              <span class="text-muted">Politeknik Elektronika Negeri Surabaya</span>
            </p>
          </header>
        </article>
        <article class="row">
          <div class="col-lg-2">
            <p><span class="label label-primary">November 2012</span></p>
          </div>
          <header class="col-lg-10">
            <p>
              Pembuatan Game Edukasi untuk Anak-Anak Berjudul "Citrik" sebagai Kerjasama dengan PLN<br/>
              <span class="text-muted">Politeknik Elektronika Negeri Surabaya</span>
            </p>
          </header>
        </article>
        <article class="row">
          <div class="col-lg-2">
            <p><span class="label label-primary">September 2012</span></p>
          </div>
          <header class="col-lg-10">
            <p>
              Pengajar pada Pelatihan International untuk Negara Ketiga sebagai Kerjasama dengan JICA<br/>
              <span class="text-muted">Politeknik Elektronika Negeri Surabaya</span>
            </p>
          </header>
        </article>
        <article class="row">
          <div class="col-lg-2">
            <p><span class="label label-primary">2011 - Sekarang</span></p>
          </div>
          <header class="col-lg-10">
            <p>
              Pengajar pada Pelatihan untuk Guru SMK<br/>
              <span class="text-muted">Politeknik Elektronika Negeri Surabaya</span>
            </p>
          </header>
        </article>
        <article class="row">
          <div class="col-lg-2">
            <p><span class="label label-primary">2008 - Sekarang</span></p>
          </div>
          <header class="col-lg-10">
            <p>
              Dosen Program Studi Teknologi Multimedia Broadcasting<br/>
              <span class="text-muted">Politeknik Elektronika Negeri Surabaya</span>
            </p>
          </header>
        </article>
      </div>
    </section>
    <br/>
    <section id="education" class="row">
      <aside class="section-title col-lg-3">
        <h2 class="text-right">Pendidikan</h2>
      </aside>
      <div class="section-content col-lg-9">
        <article class="row">
          <div class="col-lg-2">
            <p><span class="label label-primary">2008 - 2011</span></p>
          </div>
          <header class="col-lg-10">
            <p>
              Institut Teknologi Sepuluh Nopember<br/>
              <span class="text-muted">Teknik Elektro - Telematika</span>
            </p>
          </header>
        </article>
        <article class="row">
          <div class="col-lg-2">
            <p><span class="label label-primary">2003 - 2008</span></p>
          </div>
          <header class="col-lg-10">
            <p>
              Institut Teknologi Sepuluh Nopember<br/>
              <span class="text-muted">Teknik Informatika</span>
            </p>
          </header>
        </article>
        <article class="row">
          <div class="col-lg-2">
            <p><span class="label label-primary">2000 - 2003</span></p>
          </div>
          <header class="col-lg-10">
            <p>
              SMU Negeri 1 Jember<br/>
              <span class="text-muted">Jurusan IPA</span>
            </p>
          </header>
        </article>
      </div>
    </section>
    <hr>
    <section id="contact-me" class="row">
      <aside class="section-title col-lg-3">
        <h2 class="text-right">Hubungi saya</h2>
      </aside>
      <div class="col-lg-6">
        <form role="form">
          <input type="text" class="form-control" name="name" placeholder="Nama">
          <br/>
          <input type="email" class="form-control" name="email" placeholder="Email">
          <br/>
          <textarea rows="8" class="form-control" name="message" placeholder="Pesan"></textarea>
          <input type="hidden" name="recipient_mail" value="mohhasbias@gmail.com">
          </br>
          <input class="btn btn-primary" name="submit" type="submit" value="KIRIM PESAN">
        </form>
      </div>
    </section>
    <br/>
  </div><!-- /.wrap -->

  <?php get_template_part('templates/footer'); ?>

</body>
</html>
