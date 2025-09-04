@extends('layouts.app')

@section('title', 'Kontak | Pt. Puspita Utama Raya')

@section('content')
  <!-- Start All Contact Info Area -->
  <div class="trucker__all-contact-area">
    <div class="trucker__container">
      <div class="trucker__all-contact-wrapper">
        <div class="trucker__all-contact-item wow img-custom-anim-left">
          <img src="assets/images/icon/contact-1.png" alt="Trucker - Transport Courier & Logistics Html Template">
          <h5 class="trucker__all-contact-title trucker__fs-24 trucker__fw-600 trucker__deep-sea-blue">Nomor Telephone</h5>
          <a href="tel:866710-5419" class="trucker__contact-text trucker__fs-18 trucker__fw-400 trucker__gray">(+62) 821 3968 9656</a>
          <a href="tel:866710-5419" class="trucker__contact-text trucker__fs-18 trucker__fw-400 trucker__gray">(+62) 813 3569 5850</a>
          {{-- <a href="" class="trucker__contact-text trucker__fs-18 trucker__fw-400 trucker__gray"></a>
          <a href="" class="trucker__contact-text trucker__fs-18 trucker__fw-400 trucker__gray"></a> --}}
        </div>
        <div class="trucker__all-contact-item wow img-custom-anim-top">
          <img src="assets/images/icon/contact-2.png" alt="Trucker - Transport Courier & Logistics Html Template">
          <h5 class="trucker__all-contact-title trucker__fs-24 trucker__fw-600 trucker__deep-sea-blue">Alamat Email
          </h5>
          <a href="mailto:knes2023@gmail.com" class="trucker__contact-text trucker__fs-18 trucker__fw-400 trucker__gray">puspitarayautama@gmail.com</a>

        </div>
        <div class="trucker__all-contact-item wow img-custom-anim-right">
          <img src="assets/images/icon/contact-3.png" alt="Trucker - Transport Courier & Logistics Html Template">
          <h5 class="trucker__all-contact-title trucker__fs-24 trucker__fw-600 trucker__deep-sea-blue">Alamat Kantor
          </h5>
          <span class="trucker__contact-text-adress trucker__fs-18 trucker__fw-400 trucker__gray text-center">Jl. Kutrisari Utara no. 44 Surabaya</span> <br>
          <span class="trucker__contact-text-adress trucker__fs-18 trucker__fw-400 trucker__gray text-center">Sinar Kwangsan, Cluster No. 6 Sidoarjo</span>
        </div>
        <div class="trucker__all-contact-item wow img-custom-anim-top">
          <img src="assets/images/icon/contact-4.png" alt="Trucker - Transport Courier & Logistics Html Template">
          <h5 class="trucker__all-contact-title trucker__fs-24 trucker__fw-600 trucker__deep-sea-blue">Jam Operasional
          </h5>
          <span class="trucker__contact-text-day trucker__fs-18 trucker__fw-400 trucker__gray text-center">Senin
            <span class="trucker__contact-text-time trucker__fs-18 trucker__fw-400 trucker__gray">9:00am-6:30pm</span>
          </span>
          <span class="trucker__contact-text-day trucker__fs-18 trucker__fw-400 trucker__gray text-center">Sabtu
            <span class="trucker__contact-text-time trucker__fs-18 trucker__fw-400 trucker__gray">9:00am-6:30pm</span>
          </span>
        </div>
      </div>
    </div>
  </div>
  <!-- End All Contact Info Area -->

  <!-- Start Contact Form Area -->
  <section class="trucker__contact-form-area">
    <div class="trucker__container">
      <div class="trucker__contact-form-wrapper">
        <div class="trucker__title-wrapper">
          <h2 class="trucker__main-title trucker__align-center wow img-custom-anim-right">Feel free to Contact With Us
          </h2>
          <div class="trucker__contact-form-inner wow img-custom-anim-top">
            <form id="contactForm" action="#" method="POST" autocomplete="on">
              <div class="trucker__input-flexing">
                <div class="trucker__input-flexing-item">
                  <span class="trucker__input-field-name trucker__fs-17 trucker__fw-600 trucker__fm-jost trucker__deep-sea-blue">Name</span>
                  <input type="text" name="name" placeholder="Type your name" required>
                </div>
                <div class="trucker__input-flexing-item">
                  <span class="trucker__input-field-name trucker__fs-17 trucker__fw-600 trucker__fm-jost trucker__deep-sea-blue">Phone</span>
                  <input type="text" name="phone" placeholder="Type your phone number">
                </div>
              </div>

              <div class="trucker__input-flexing">
                <div class="trucker__input-flexing-item">
                  <span class="trucker__input-field-name trucker__fs-17 trucker__fw-600 trucker__fm-jost trucker__deep-sea-blue">Email</span>
                  <input type="email" name="email" placeholder="Type your email" required>
                </div>
                <div class="trucker__input-flexing-item">
                  <span class="trucker__input-field-name trucker__fs-17 trucker__fw-600 trucker__fm-jost trucker__deep-sea-blue">Subject</span>
                  <input type="text" name="subject" placeholder="Type your subject">
                </div>
              </div>

              <div class="trucker__input-textarea">
                <span class="trucker__input-field-name trucker__fs-17 trucker__fw-600 trucker__fm-jost trucker__deep-sea-blue">Requirements</span>
                <textarea name="message" placeholder="Type your requirements" rows="5" required></textarea>
              </div>

              <div class="trucker__input-form-submit text-center">
                <button type="submit" class="trucker__btn-style-1">
                  Submit Now <i class="fa-light fa-arrow-up-right"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Form Area -->

  <br>

  <!-- Start Map Area -->
  <div class="trucker__office-map-area">
    <iframe class="trucker__contact-map"
      src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14602.288851207937!2d90.47855065!3d23.798243149999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1663151706353!5m2!1sen!2sbd"
      style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <!-- End Map Area -->

  <br>

@endsection
