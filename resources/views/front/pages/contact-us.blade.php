@extends('front.fmaster')
@section('page_title')
    <title>Contact Us :: More X - IT Solutions and Services Company</title>
@endsection
@section('front_layout')
<div class="row justify-content-center">
    <div class="col-xl-6 col-lg-7 col-md-9">
        <div class="section-title text-center">
            <h5 class="sub-title double-line">Contact Us</h5>
        </div>
    </div>
</div>
<!-- contact info area start -->
<div class="team-area info-box-two pd-top-15 pd-bottom-20">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-9">
                <div class="section-title text-center">
                    <h5 class="sub-title double-line">Contact</h5>
                    <h2 class="title">Get in touch</h2>
                    <p class="content">Dcidunt eget semper nec quam. Sed hendrerit. acfelis Nunc egestas augue
                        atpellentesque laoreet</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="single-contact-inner text-center">
                    <div class="icon-box">
                        <i class="icomoon-pin"></i>
                    </div>
                    <div class="details-wrap">
                        <div class="details-inner">
                            <h3>Office address</h3>
                            <p>7895 Piermont, Albuquerque, NM 198866, USA</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-contact-inner text-center">
                    <div class="icon-box">
                        <i class=" icomoon-email"></i>
                    </div>
                    <div class="details-wrap">
                        <div class="details-inner">
                            <h3>Email Address</h3>
                            <p>support@gmail.com <br> www.infomar.net</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-contact-inner text-center">
                    <div class="icon-box">
                        <i class=" icomoon-telephone"></i>
                    </div>
                    <div class="details-wrap">
                        <div class="details-inner">
                            <h3>Phone Number</h3>
                            <p>+012 (345) 678 99 <br> +12345678</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact info area end -->

<div class="g-map-inner">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14604.929175165831!2d90.36542960000001!3d23.774741049999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1639502123533!5m2!1sen!2sbd"></iframe>
</div>
<div class="g-map-contact">
    <div class="row justify-content-end">
        <div class="col-lg-5 col-md-7">
            <form class="contact-form-wrap" action="https://solverwp.com/demo/html/itechie/mail.php" method="post" id="contact-form">
                <div class="consulting-contact-form mx-4">
                    <h3 class="mb-3">Free consulting </h3>
                    <div class="single-input-inner style-bg">
                        <input type="text" name="name" placeholder="Full Name">
                    </div>
                    <div class="single-input-inner style-bg">
                        <input type="text" name="email" placeholder="Email Address">
                    </div>
                    <div class="single-input-inner style-bg">
                        <textarea name="message" placeholder="Message"></textarea>
                    </div>
                    <div class="btn-wrap pb-3">
                        <button type="submit" class="btn btn-base">Submit Now </button>
                    </div>
                    <p class="form-messege mb-0 mt-10 text-center"></p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection