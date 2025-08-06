<x-apartados-layout>
    <!-- Libraries Stylesheet -->
    <link href="/back/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/back/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/back/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="/back/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/back/css/style.css" rel="stylesheet">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Quote Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-5">Create Account</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="bg-light rounded p-4 p-sm-5 wow fadeInUp" data-wow-delay="0.1s">
                        <form method="POST" action="{{ route('register.usuario') }}">
                            @csrf
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="fullname"
                                            name="NOMBRE" maxlength="50" placeholder="fullname"
                                            value="{{ old('NOMBRE') }}">
                                        <label for="fullname">Full Name</label>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control border-0" id="email"
                                            name="CORREO" maxlength="75" placeholder="email"
                                            value="{{ old('CORREO') }}">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>

                                <!-- Teléfono y dirección si los usas en el modelo -->
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="tel" class="form-control border-0" id="telephone"
                                            name="TELEFONO" maxlength="15" placeholder="telephone"
                                            value="{{ old('TELEFONO') }}">
                                        <label for="telephone">Your Phone Number</label>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <textarea class="form-control border-0" id="address" name="DIRECCION" maxlength="200" placeholder="Your Address"
                                            style="height: 60px;">{{ old('DIRECCION') }}</textarea>
                                        <label for="address">Your Address</label>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="password" class="form-control border-0" id="password"
                                            name="password" maxlength="15" placeholder="Password">
                                        <label for="password">Your Password</label>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="password" class="form-control border-0" id="password_confirmation"
                                            name="password_confirmation" maxlength="15" placeholder="Confirm Password">
                                        <label for="password_confirmation">Confirm Password</label>
                                    </div>
                                </div>

                                <div class="col-12 text-center">
                                    <button class="btn btn-primary py-3 px-4" type="submit">Create Account</button>
                                </div>
                            </div>
                        </form>
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
