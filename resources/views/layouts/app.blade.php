<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Dashboard | Puspita Utama Raya')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Start css files-->
    <link rel="stylesheet preload" href="assets/css/font-awesome-pro.css" as="style">
    <link rel="stylesheet preload" href="assets/css/bootstrap.min.css" as="style">
    <link rel="stylesheet preload" href="assets/css/swiper.css" as="style">
    <link rel="stylesheet preload" href="assets/css/nice-select.css" as="style">
    <link rel="stylesheet preload" href="assets/css/animate.css" as="style">
    <link rel="stylesheet preload" href="assets/css/odometer-theme-default.min.css" as="style">
    <link rel="stylesheet preload" href="assets/css/magnific-popup.css" as="style">
    <link rel="stylesheet preload" href="assets/css/style.css" as="style">
    <!-- End Css File -->

    <!-- Start Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo_pur.png">
    <!-- End Favicon -->

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

</head>
<body >
    
    <!-- Start Site Preloader -->
    <div id="trucker__preloader">
        <div id="trucker__circle_loader"></div>
        <div class="trucker__loader_logo"><img src="assets/images/logo_pur.png" alt="Preload"></div>
    </div>
    <!-- End Site Preloader -->

    <!-- Sentinel: ketika keluar dari viewport -->
    <div id="nav-sentinel" style="height:1px;"></div>

    <!-- Start Header Area -->
    <header id="navbar" class="trucker__header-area-home-1 fixed top-0 left-0 w-full z-50 bg-transparent transition-all duration-300">
      <div class="trucker__header-menu">
        <div class="trucker__container">
          <div class="trucker__menu-wrapper">

            <!-- LOGO + TEXT -->
            <div class="trucker__logo">
              <a href="/" class="flex items-center gap-2">
                <img
                  src="assets/images/logo/logo_pur.svg"
                  alt="Logo PT. Puspita Utama Raya"
                  class="h-8 w-auto md:h-9"
                  fetchpriority="high"
                  decoding="async"
                />
                <span class="brand-title text-xl font-bold">PT. PUSPITA UTAMA RAYA</span>
              </a>
            </div>

            <!-- spacer (biarkan kosong, menjaga layout template) -->
            <div class="trucker__menu__inner"></div>

            <!-- NAV Desktop -->
            <div class="trucker__header-menu-right">
              <nav class="nav-desktop space-x-4 text-l font-medium">
                <a href="/" class="hover:text-green-300">Home</a>
                <a href="/about" class="hover:text-green-300">Tentang</a>
                <a href="/services" class="hover:text-green-300">Layanan</a>
                <a href="/contact" class="hover:text-green-300">Kontak</a>
                <a href="https://wa.me/6281703367870?text=Halo%20Admin%20PT.PUR%2C%20saya%20ingin%20bertanya%20lebih%20lanjut%20tentang%20layanan%20logistik%20Anda."
                  class="trucker__btn-style-2">Call Us! <i class="fa-light fa-phone"></i></a>
              </nav>

              <!-- Tombol Hamburger (mobile) -->
              <button class="trucker__mobile-toggle" aria-label="Open menu" aria-expanded="false" aria-controls="mobileMenu">
                <!-- icon burger -->
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <path d="M3 6h18M3 12h18M3 18h18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
              </button>
            </div>

          </div>
        </div>
      </div>

      <!-- Drawer Mobile -->
      <div class="trucker__mobile-backdrop"></div>
      <aside id="mobileMenu" class="trucker__mobile-menu" aria-hidden="true">
        <button class="trucker__mobile-close" aria-label="Close menu">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M6 6l12 12M18 6l-12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
          </svg>
        </button>
        <nav class="trucker__mobile-nav">
          <a href="/">Home</a>
          <a href="/about">Tentang</a>
          <a href="/services">Layanan</a>
          <a href="/contact">Kontak</a>
          <a href="https://wa.me/6281703367870?text=Halo%20Admin%20PT.PUR%2C%20saya%20ingin%20bertanya%20lebih%20lanjut%20tentang%20layanan%20logistik%20Anda."
            class="trucker__btn-style-2 block text-center mt-3">Call Us! <i class="fa-light fa-phone"></i></a>
        </nav>
      </aside>
    </header>
    <!-- End Header Area -->


    <!-- Konten -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Star Footer Area -->
    <section class="trucker__footer-area-home-2" data-background="assets/images/inner/footer-bg.png">
      <div class="trucker__container">
        <div class="trucker__footer-wrapper">

          <div class="trucker__footer-logo wow fadeInLeft">
            <div class="trucker__brand-row">
              <a href="#" class="trucker__footer-logo">
                <img class="brand-logo" src="assets/images/logo/logo_pur.svg" alt="PT. Puspita Utama Raya">
              </a>
              <h4 class="trucker__brand-title">PT. Puspita Utama Raya</h4>
            </div>
            <p class="trucker__footer-logo-bottom-text">PT. Puspita Utama Raya Solusi Transportasi Limbah Industri (B3 & Non-B3) <br> 
              dengan Perizinan Lengkap.</p>
            <div class="trucker__footer-location">
              <span class="trucker__footer-location-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="24" viewBox="0 0 22 24" fill="none">
                  <g clip-path="url(#clip0_1_4999)">
                    <path
                      d="M11.3641 0.303711C6.97117 0.303711 3.39868 4.17202 3.39868 8.92871C3.39868 14.9073 10.5888 22.7618 10.8941 23.0938C11.0242 23.2333 11.1942 23.3037 11.3641 23.3037C11.534 23.3037 11.704 23.2333 11.8341 23.0938C12.1394 22.7618 19.3295 14.9073 19.3295 8.92871C19.3295 4.17202 15.757 0.303711 11.3641 0.303711ZM11.3641 21.5456C9.77898 19.7085 4.72625 13.4956 4.72625 8.92871C4.72625 4.96552 7.70399 1.74121 11.3641 1.74121C15.0242 1.74121 18.002 4.96552 18.002 8.92871C18.002 13.4913 12.9492 19.7085 11.3641 21.5456Z"
                      fill="#2A9D8F" />
                    <path
                      d="M11.3638 4.61621C9.16801 4.61621 7.3811 6.55109 7.3811 8.92871C7.3811 11.3063 9.16801 13.2412 11.3638 13.2412C13.5596 13.2412 15.3465 11.3063 15.3465 8.92871C15.3465 6.55109 13.5596 4.61621 11.3638 4.61621ZM11.3638 11.8037C9.8995 11.8037 8.70867 10.5143 8.70867 8.92871C8.70867 7.34315 9.8995 6.05371 11.3638 6.05371C12.8281 6.05371 14.019 7.34315 14.019 8.92871C14.019 10.5143 12.8281 11.8037 11.3638 11.8037Z"
                      fill="#2A9D8F" />
                  </g>
                  <defs>
                    <clipPath id="clip0_1_4999">
                      <rect width="21.2411" height="23" fill="white" transform="translate(0 0.303711)" />
                    </clipPath>
                  </defs>
                </svg>
              </span>
              <span class="trucker__footer-location-text">
                Jl. Kutrisari Utara no. 44 <br> Surabaya
              </span>
            </div>
            <div class="trucker__footer-location">
              <span class="trucker__footer-location-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="24" viewBox="0 0 22 24" fill="none">
                  <g clip-path="url(#clip0_1_4999)">
                    <path
                      d="M11.3641 0.303711C6.97117 0.303711 3.39868 4.17202 3.39868 8.92871C3.39868 14.9073 10.5888 22.7618 10.8941 23.0938C11.0242 23.2333 11.1942 23.3037 11.3641 23.3037C11.534 23.3037 11.704 23.2333 11.8341 23.0938C12.1394 22.7618 19.3295 14.9073 19.3295 8.92871C19.3295 4.17202 15.757 0.303711 11.3641 0.303711ZM11.3641 21.5456C9.77898 19.7085 4.72625 13.4956 4.72625 8.92871C4.72625 4.96552 7.70399 1.74121 11.3641 1.74121C15.0242 1.74121 18.002 4.96552 18.002 8.92871C18.002 13.4913 12.9492 19.7085 11.3641 21.5456Z"
                      fill="#2A9D8F" />
                    <path
                      d="M11.3638 4.61621C9.16801 4.61621 7.3811 6.55109 7.3811 8.92871C7.3811 11.3063 9.16801 13.2412 11.3638 13.2412C13.5596 13.2412 15.3465 11.3063 15.3465 8.92871C15.3465 6.55109 13.5596 4.61621 11.3638 4.61621ZM11.3638 11.8037C9.8995 11.8037 8.70867 10.5143 8.70867 8.92871C8.70867 7.34315 9.8995 6.05371 11.3638 6.05371C12.8281 6.05371 14.019 7.34315 14.019 8.92871C14.019 10.5143 12.8281 11.8037 11.3638 11.8037Z"
                      fill="#2A9D8F" />
                  </g>
                  <defs>
                    <clipPath id="clip0_1_4999">
                      <rect width="21.2411" height="23" fill="white" transform="translate(0 0.303711)" />
                    </clipPath>
                  </defs>
                </svg>
              </span>
              <span class="trucker__footer-location-text">
                Sinar Kwangsan, Cluster No. 6, Jl. Malik Ibrahim <br> Kwangsan,Sedati, Sidoarjo
              </span>
            </div>
            <div class="trucker__footer-email-phone">
              <span class="trucker__footer-email-phone-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="23" viewBox="0 0 22 23" fill="none">
                  <path
                    d="M2.51812 19.939C2.20374 19.9371 1.90271 19.8011 1.68041 19.5604C1.45811 19.3197 1.33248 18.9937 1.33081 18.6533V8.07957C1.33249 7.37449 1.5919 6.6988 2.05235 6.20023C2.51279 5.70166 3.13681 5.42076 3.78797 5.41895H15.3753C16.0276 5.41894 16.6533 5.69904 17.1151 6.19781C17.5769 6.69657 17.8372 7.3733 17.8389 8.07957V15.1265C17.8389 15.8327 17.5802 16.5102 17.1196 17.0102C16.6589 17.5103 16.034 17.7921 15.3817 17.794H5.71814C5.60838 17.7949 5.50172 17.8334 5.41338 17.904L3.23558 19.6846C3.02793 19.8507 2.77632 19.9399 2.51812 19.939ZM3.78797 6.79395C3.47359 6.79575 3.17256 6.93178 2.95026 7.17249C2.72795 7.4132 2.60233 7.73916 2.60066 8.07957V18.4815L4.65147 16.804C4.96004 16.5558 5.33378 16.4209 5.71814 16.419H15.3753C15.6919 16.419 15.9955 16.2828 16.2194 16.0404C16.4432 15.798 16.569 15.4692 16.569 15.1265V8.07957C16.5673 7.73916 16.4417 7.4132 16.2194 7.17249C15.9971 6.93178 15.6961 6.79575 15.3817 6.79395H3.78797Z"
                    fill="#2A9D8F" />
                  <path
                    d="M12.0865 12.3555C12.437 12.3555 12.7211 12.0477 12.7211 11.668C12.7211 11.2883 12.437 10.9805 12.0865 10.9805C11.736 10.9805 11.4519 11.2883 11.4519 11.668C11.4519 12.0477 11.736 12.3555 12.0865 12.3555Z"
                    fill="#2A9D8F" />
                  <path
                    d="M9.62265 12.3555C9.97314 12.3555 10.2573 12.0477 10.2573 11.668C10.2573 11.2883 9.97314 10.9805 9.62265 10.9805C9.27216 10.9805 8.98804 11.2883 8.98804 11.668C8.98804 12.0477 9.27216 12.3555 9.62265 12.3555Z"
                    fill="#2A9D8F" />
                  <path
                    d="M7.08261 12.3555C7.4331 12.3555 7.71723 12.0477 7.71723 11.668C7.71723 11.2883 7.4331 10.9805 7.08261 10.9805C6.73213 10.9805 6.448 11.2883 6.448 11.668C6.448 12.0477 6.73213 12.3555 7.08261 12.3555Z"
                    fill="#2A9D8F" />
                  <path
                    d="M19.7438 12.9814C19.5754 12.9814 19.4139 12.909 19.2949 12.7801C19.1758 12.6511 19.1089 12.4763 19.1089 12.2939V5.32957C19.1072 4.98916 18.9816 4.6632 18.7593 4.42249C18.537 4.18178 18.236 4.04575 17.9216 4.04395H5.14054C4.97215 4.04395 4.81065 3.97151 4.69158 3.84258C4.57251 3.71365 4.50562 3.53878 4.50562 3.35645C4.50562 3.17411 4.57251 2.99924 4.69158 2.87031C4.81065 2.74138 4.97215 2.66895 5.14054 2.66895H17.9216C18.5727 2.67076 19.1968 2.95166 19.6572 3.45023C20.1176 3.9488 20.3771 4.62449 20.3787 5.32957V12.2939C20.3787 12.4763 20.3118 12.6511 20.1928 12.7801C20.0737 12.909 19.9122 12.9814 19.7438 12.9814Z"
                    fill="#2A9D8F" />
                </svg>
              </span>
              <div class="trucker__footer-email-phone-text">
                <a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=puspitarayautama@gmail.com&amp;su=Permintaan%20Informasi%20Layanan%20PT.%20Puspita%20Utama%20Raya&amp;body=Halo%20Admin%20PT.%20Puspita%20Utama%20Raya,%0A%0ASaya%20ingin%20bertanya%20lebih%20lanjut%20tentang%20layanan%20logistik%2Ftransportasi%20limbah%20B3%20%26%20Non-B3.%0AMohon%20informasi%20terkait:%0A-%20Jenis%20layanan%20%26%20cakupan%20area%0A-%20Estimasi%20biaya%20%26%20waktu%20penjemputan%0A-%20Persyaratan%20dokumen%0A%0AData%20saya:%0ANama:%20...%0APerusahaan:%20...%0ANo.%20Telp:%20...%0A%0ATerima%20kasih."
                   target="_blank"
                   rel="noopener"
                   class="trucker__footer-email-text">puspitarayautama@gmail.com | </a>
                <a href="https://wa.me/6281703367870?text=Halo%20Admin%20PT.PUR%2C%20saya%20ingin%20bertanya%20lebih%20lanjut%20tentang%20layanan%20logistik%20Anda." 
                    class="trucker__footer-phone-text">+62 821 3968 9656</a>
              </div>
            </div>
          </div>
          <div class="trucker__footer-menu-wrapper wow fadeInUp">
              <ul class="trucker__footer-menu-list">
                <div class="trucker__footer-menu">        
                  <!-- Kolom 1: Contact Info -->
                  <div class="w-full md:w-1/2">
                    <h5 class="trucker__footer-menu-title">Navigation Page</h5>
                    <ul class="trucker__footer-menu-list space-y-2">
                      <li><a href="/" class="hover:text-green-600">Dashboard</a></li>
                      <li><a href="/about" class="hover:text-green-600">Tentang</a></li>
                      <li><a href="/services" class="hover:text-green-600">Layanan</a></li>
                      <li><a href="/contact" class="hover:text-green-600">Kontak</a></li>
                    </ul>
                  </div>
                </div>
              </ul>
              <ul>
                <div class="trucker__footer-menu">        
                    <!-- Kolom 2: Maps Info -->
                    <div class="w-full md:w-1/2">
                      <h5 class="trucker__footer-menu-title">Maps Info</h5>
                      <div class="rounded-2xl overflow-hidden shadow-sm border border-slate-200 bg-white">
                        <iframe
                          src="https://www.google.com/maps?q=Jl.+Kutrisari+Utara+No.+44,+Surabaya&output=embed"
                          class="w-full h-48 md:h-56 border-0"
                          loading="lazy"
                          referrerpolicy="no-referrer-when-downgrade"
                          allowfullscreen>
                        </iframe>
                        <div class="p-3 flex items-center justify-between">
                          <span class="text-sm text-gray-700">Jl. Kutrisari Utara No. 44, Surabaya</span>
                          <a href="https://www.google.com/maps?q=Jl.+Kutrisari+Utara+No.+44,+Surabaya"
                            target="_blank" rel="noopener"
                            class="text-green-600 text-sm font-medium hover:underline">
                            Buka Peta
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </ul>
          </div>   
            
        <div class="trucker__footer-copyright-text-wrapper wow fadeInRight">
          <p class="trucker__footer-copyright-text"> <span class="trucker__copyright-text-highlight">© 2023</span>
            website_stock . All Rights Reserved.</p>
          <div class="trucker__footer-copyright-menu">
            <p class="trucker__footer-copyright-text">
              Crafted With <i class="fa-solid fa-heart" style="color:#ef4444;margin:0 6px"></i> By <span class="trucker__copyright-text-highlight">Helmi</span>
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- End Footer Area -->

    <!--Start Js Files-->
    <script defer src="assets/js/jquery.min.js"></script>
    <script defer src="assets/js/bootstrap.min.js"></script>
    <script defer src="assets/js/wow.js"></script>
    <script defer src="assets/js/magnific-popup.js"></script>
    <script defer src="assets/js/nice-select.js"></script>
    <script defer src="assets/js/swiper.js"></script>
    <script defer src="assets/js/odometer.min.js"></script>
    <script defer src="assets/js/jarallax.min.js"></script>
    <script defer src="assets/js/imagesloaded-pkgd.js"></script>
    <script defer src="assets/js/script.js"></script>
    <!-- End Js File -->

    <!-- Add Script for Header CSS -->
    <script>
      (function(){
        const navbar   = document.getElementById('navbar');
        const toggle   = navbar?.querySelector('.trucker__mobile-toggle');
        let   backdrop = document.querySelector('.trucker__mobile-backdrop');
        let   drawer   = document.getElementById('mobileMenu');

        if (!backdrop){
          backdrop = document.createElement('div');
          backdrop.className = 'trucker__mobile-backdrop';
          document.body.appendChild(backdrop);
        }
        if (!drawer){
          drawer = document.createElement('aside');
          drawer.id = 'mobileMenu';
          drawer.className = 'trucker__mobile-menu';
          drawer.setAttribute('aria-hidden','true');
          drawer.innerHTML = `
            <button class="trucker__mobile-close" aria-label="Close menu">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M6 6l12 12M18 6l-12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              </svg>
            </button>
            <nav class="trucker__mobile-nav"></nav>`;
          document.body.appendChild(drawer);
        }

        const mobileNav = drawer.querySelector('.trucker__mobile-nav');
        if (mobileNav && mobileNav.childElementCount === 0){
          const desktopNav = navbar?.querySelector('.trucker__header-menu-right nav');
          desktopNav?.querySelectorAll('a').forEach(a => {
            const c = a.cloneNode(true);
            mobileNav.appendChild(c);
          });
        }

        function setOpen(open){
          document.body.classList.toggle('nav-open', open);   
          navbar?.classList.toggle('mobile-open', open);      
          toggle?.setAttribute('aria-expanded', open ? 'true' : 'false');
          document.body.style.overflow = open ? 'hidden' : '';
        }

        toggle?.addEventListener('click', () => setOpen(true));
        drawer.querySelector('.trucker__mobile-close')?.addEventListener('click', () => setOpen(false));
        backdrop.addEventListener('click', () => setOpen(false));
        mobileNav?.querySelectorAll('a').forEach(a => a.addEventListener('click', () => setOpen(false)));

        // Debug cepat
        window.__debugDrawer = () => console.log(drawer.getBoundingClientRect());
      })();
    </script>

    <!-- Add Script for Gmail Connect -->
    <script>
      (function(){
        const form = document.getElementById('contactForm');
        const TO_EMAIL = 'puspitarayautama@gmail.com';

        form.addEventListener('submit', function(e){
          e.preventDefault();

          const fd = new FormData(form);
          const name    = (fd.get('name')    || '').trim();
          const phone   = (fd.get('phone')   || '').trim();
          const email   = (fd.get('email')   || '').trim();
          const subject = (fd.get('subject') || '').trim() || 'Permintaan Informasi Layanan PT. Puspita Utama Raya';
          const message = (fd.get('message') || '').trim();

          // Susun body email dari input
          const body =
      `Halo Admin PT. Puspita Utama Raya,

      ${message}

      Data saya:
      Nama   : ${name}
      Email  : ${email}
      Telepon: ${phone || '-'}

      Terima kasih.`;

          // Bangun URL Gmail Compose
          const gmailUrl =
            'https://mail.google.com/mail/?view=cm&fs=1'
            + '&to='   + encodeURIComponent(TO_EMAIL)
            + '&su='   + encodeURIComponent(subject)
            + '&body=' + encodeURIComponent(body);

          // Buka Gmail di tab baru
          window.open(gmailUrl, '_blank', 'noopener');

          // (opsional) reset form
          // form.reset();
        });
      })();
    </script>

</body>
</html>
