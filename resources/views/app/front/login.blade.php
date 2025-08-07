<x-apartados-layout>
    <!-- Libraries Stylesheet -->
    <link href="/back/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/back/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/back/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="/back/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/back/css/style.css" rel="stylesheet">
    <!-- Quote Start -->
    <div class="container-fluid quote my-5 py-5" data-parallax="scroll"
        data-image-src="{{ asset('back/img/fondologin.jpg') }}">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="bg-white rounded p-4 p-sm-5 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="display-5 text-center mb-5">Sign In</h1>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-light border-0" id="gmail"
                                        placeholder="Email">
                                    <label for="gmail">Your Email</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="password" class="form-control bg-light border-0" id="password"
                                        placeholder="password">
                                    <label for="password">Your Password</label>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn btn-primary py-3 px-4" type="submit">Submit Now</button>
                            </div>
                            <div class="col-12 text-center">
                                <p class="mb-0">Don't have an account? <a href="{{ route('register') }}">Sign
                                        Up</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/back/lib/wow/wow.min.js"></script>
    <script src="/back/lib/easing/easing.min.js"></script>
    <script src="/back/lib/waypoints/waypoints.min.js"></script>
    <script src="/back/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/back/lib/counterup/counterup.min.js"></script>
    <script src="/back/lib/parallax/parallax.min.js"></script>
    <script src="/back/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="/back/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="/back/js/main.js"></script>

</x-apartados-layout>
