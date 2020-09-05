<!-- ======= Header ======= -->
<header id="header">
    <div class="container d-flex">

        <div class="logo mr-auto">
            <h1 class="text-light"><a href="home">Disdukcapil Desa Sangginora<span>.</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li <?php if ($thisPage == 'HOME') echo "class='active'"; ?>><a href="home">Home</a></li>
                <?php if ($thisPage == 'HOME') { ?>
                    <li><a href="#about">Tentang Kami</a></li>
                <?php } ?>
                <li class="drop-down <?php if ($thisPage == 'FORM') echo "active"; ?>"><a href="#services">Layanan Online</a>
                    <ul>
                        <li><a href="form-pindah">Surat Pindah</a></li>
                        <li><a href="form-datang">Surat Datang</a></li>
                    </ul>
                </li>
                <?php if ($thisPage == 'HOME') { ?>
                    <li><a href="#contact">Kontak Kami</a></li>
                <?php } ?>
            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->