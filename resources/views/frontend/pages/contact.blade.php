@extends('frontend.layouts.frontend')

@section('content') 


<!-- ============================= Contact Top Section Start ======================= -->
<section class="contact-top padding-y-120">
    <div class="container container-two">
        <div class="section-heading">
            <span class="section-heading__subtitle bg-gray-100"> 
                <span class="text-gradient fw-semibold">Contact</span> 
            </span>
            <h2 class="section-heading__title">Contact Us!</h2>
        </div>
        <div class="row gy-4">
            <div class="col-lg-4 col-sm-6">
                <div class="contact-card">
                    <span class="contact-card__icon"><i class="fas fa-paper-plane"></i></span>
                    <h5 class="contact-card__title">Email</h5>
                    <p class="contact-card__text font-18">
                        <a href="mailto:" class="link">michelle.rivera@example.com</a>
                    </p>
                    <p class="contact-card__text font-18">
                        <a href="mailto:" class="link">michelle.rivera@example.com</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="contact-card">
                    <span class="contact-card__icon"><i class="fas fa-map-marker-alt"></i></span>
                    <h5 class="contact-card__title">Location</h5>
                    <p class="contact-card__text font-18">
                        8502 Preston Rd. Inglewood, Maine 98380
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="contact-card">
                    <span class="contact-card__icon"><i class="fas fa-phone"></i></span>
                    <h5 class="contact-card__title">Contacts </h5>
                    <p class="contact-card__text font-18">
                        <a href="mailto:" class="link"> (270) 555-0117</a>
                    </p>
                    <p class="contact-card__text font-18">
                        <a href="mailto:" class="link"> (704) 555-0127  </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============================= Contact Top Section End ======================= -->
<div class="contact-map address-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1150112.1628856962!2d44.64619029447154!3d23.086651461779507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43348a67e24b%3A0xff45e502e1ceb7e2!2sBurj%20Khalifa!5e0!3m2!1sen!2sbd!4v1707037970965!5m2!1sen!2sbd" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>


@endsection