<x-apartados-layout>
    <!-- Quote Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-5">Create Account</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="bg-light rounded p-4 p-sm-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="fullname" maxlength="50"
                                        placeholder="fullname">
                                    <label for="fullname">Full Name</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control border-0" id="email" maxlength="200"
                                        placeholder="email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>  
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="telephone" maxlength="12"
                                        placeholder="telephone">
                                    <label for="telephone">Your Phone Number</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <textarea class="form-control border-0" id="address" maxlength="200" placeholder="Your Address"
                                        style="height: 60px;">
                                    </textarea>
                                    <label for="address">Your Address</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="password" class="form-control border-0" id="password" maxlength="15"
                                        placeholder="Password">
                                    <label for="password">Your Password</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="password" class="form-control border-0" id="password_confirmation" maxlength="15"
                                        placeholder="password_confirmation">
                                    <label for="password_confirmation"></label>
                                </div>
                            </div>

                            <div class="col-12 text-center">
                                <button class="btn btn-primary py-3 px-4" type="submit">Create Account</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->

</x-apartados-layout>
