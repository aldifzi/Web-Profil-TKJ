<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">smeanbtl@yahoo.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> 0274-367156
        <i class="bi bi-clock-history"><span class="ml-3" id="jam" style="font-size:24"></span></i>
      </div>

     
      
      <div class="social-links d-none d-md-block">
        <a href="https://twitter.com/skansaba_id" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://id-id.facebook.com/smknegeri1bantul/" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/smkn1bantul/" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.youtube.com/channel/UCQgXA3YAufCRhmBVXjNZisw" target="_blank" class="youtube"><i class="bi bi-youtube"></i></i></a>
        <a href="https://www.tiktok.com/@skansaba.id" target="_blank" class="linkedin"><i class="bi bi-tiktok"></i></i></a>
      </div>
    </div>
  </section>

<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
        <a class="navbar-brand logo me-auto flex" href="index">
            <img src="assets/img/Logo-removebg-preview.png" alt="" class="h-10 mr-3" width="51" height="70">
            <span class="self-center text-base font-semibold whitespace-nowrap" id="tkj">TEKNIK KOMPUTER JARINGAN <p class="text-xs font-light" id="tkj">SMK 1 BANTUL</p></span>
        </a>
        <!-- Uncomment below if you prefer to use an image logo -->


        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="<?php if ($page == 'home') {
                         echo 'active';    } ?>" href="index">Home</a></li>
                <li class="dropdown"><a class="<?php if ($page == 'prestasi') {
                         echo 'active';    } if ($page == 'visimisi') {
                            echo 'active';    } if ($page == 'galeri') {
                                echo 'active';    } ?>" href="#"><span><?= $lang['profil'] ?></span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a class="<?php if ($page == 'visimisi') {
                         echo 'active';    } ?>" href="visiMisi"><?=$lang['visi']?></a></li>
                        <li><a class="<?php if ($page == 'prestasi') {
                         echo 'active';    } ?>" href="Prestasi"><?= $lang['prestasi'] ?></a></li>
                        <li><a class="<?php if ($page == 'galeri') {
                         echo 'active';    } ?>" href="galeri"><?= $lang['galeri'] ?></a></li>
                    </ul>
                <li class="dropdown"><a href="#" class="<?php if ($page == 'datasiswa') {
                         echo 'active';    } if ($page == 'dataguru') {
                            echo 'active';    } ?>"><span>Data TKJ</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a class="<?php if ($page == 'datasiswa') {
                         echo 'active';    } ?>" href="datasiswa"><?=$lang['siswa']?></a></li>
                        <li><a class="<?php if ($page == 'dataguru') {
                         echo 'active';    } ?>" href="dataguru"><?=$lang['guru']?></a></li>
                    </ul>
                <li><a class="<?php if ($page == 'berita') {
                         echo 'active';    } if ($page == 'detailberita') {
                          echo 'active';    } if ($page == 'search') {
                            echo 'active';    } ?>" href="berita.php"><?=$lang['berita']?></a></li>
                <li><a class="<?php if ($page == 'contact') {
                         echo 'active';    } ?>" href="contact"><?=$lang['kontak']?></a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
            
            <div class="flex justify-center">
  <div>
    <div class="dropdown relative">
      <button
        class="
          dropdown-toggle
          px-3
          py-2
          bg-red-600
          text-white
          font-medium
          text-xs
          leading-tight
          uppercase
          rounded
          shadow-md
          hover:bg-red-800 hover:shadow-lg
          focus:bg-red-900 focus:shadow-lg focus:outline-none focus:ring-0
          active:bg-red-800 active:shadow-lg active:text-white
          transition
          duration-150
          ease-in-out
          flex
          items-center
          whitespace-nowrap
        "
        type="button"
        id="dropdownMenuButton1"
        data-bs-toggle="dropdown"
        aria-expanded="false"
      >
        Bahasa:
        <svg
          aria-hidden="true"
          focusable="false"
          data-prefix="fas"
          data-icon="caret-down"
          class="w-2 ml-2"
          role="img"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 320 512"
        >
          <path
            fill="currentColor"
            d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"
          ></path>
        </svg>
      </button>
      <ul
        class="
          dropdown-menu
          min-w-max
          absolute
          hidden
          bg-white
          text-base
          z-50
          float-left
          py-2
          list-none
          text-left
          rounded-lg
          shadow-lg
          mt-1
          hidden
          m-0
          bg-clip-padding
          border-none
        "
        aria-labelledby="dropdownMenuButton1"
      >
        <li>
          <a
            class="
              dropdown-item
              text-sm
              py-2
              px-4
              font-normal
              block
              w-full
              whitespace-nowrap
              bg-transparent
              text-gray-700
              hover:bg-gray-100
            "
            href="index?lang=id"
            >Indonesia</a
          >
        </li>
       
        <li>
          <a
            class="
              dropdown-item
              text-sm
              py-2
              px-4
              font-normal
              block
              w-full
              whitespace-nowrap
              bg-transparent
              text-gray-700
              hover:bg-gray-100
            "
            href="index?lang=en"
            >English</a
          >
        </li>
      </ul>
    </div>
  </div>
</div>

        </nav><!-- .navbar -->

    </div>
</header>