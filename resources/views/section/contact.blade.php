

    <!-- Start Get in touch today
    ================================================== -->
    <section id="contact" class="section bg-grey">
        <div class="container">
            <div class="row justify-content-center text-center mb-60 wow animated slideInDown">
                <div class="col-lg-12">
                    <h2 class="text-black fw-3">Get in <strong class="fw-7">touch</strong> <span class="text-orange">today</span></h2>
                </div>
                <div class="col-lg-6">
                    <p>It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. One may speculate</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 wow animated slideInLeft">
                    <div class="media mb-5">
                        <span class="ti-mobile h2 align-self-center"></span>
                        <div class="media-body pl-3">
                            <h6 class="mb-1 text-black fw-6">Customer care:</h6>
                            <p>+001 234 567 890</p>
                        </div>
                    </div>
                    <div class="media mb-5">
                        <span class="ti-email h2 align-self-center"></span>
                        <div class="media-body pl-3">
                            <h6 class="mb-1 text-black fw-6">Email Address:</h6>
                            <p>support@website.com</p>
                        </div>
                    </div>
                    <div class="media mb-5">
                        <span class="ti-location-pin h2 align-self-center"></span>
                        <div class="media-body pl-3">
                            <h6 class="mb-1 text-black fw-6">Office Address:</h6>
                            <p>4461 Cedar Street Moro, AR 72368</p>
                        </div>
                    </div>
                    <div class="media mb-5">
                        <span class="ti-calendar h2 align-self-center"></span>
                        <div class="media-body pl-3">
                            <h6 class="mb-1 text-black fw-6">Office Time:</h6>
                            <p>Mon - Fri 08:00 - 19:00</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 wow animated slideInRight">
                    <form class="needs-validation" method="POST" action="">
                        @csrf
                        @if (session ('success'))
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="alert alert-primary" role="alert">
                                    {{ session('success')}}
                                  </div>
                                
                            </div>
                        </div>
                        @endif
                       
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <div class="position-relative">
                                        <input type="text" name="nom" id="nom" class="form-control" required="required" data-error="Name is required.">
                                        <label for="nom">Nom<span class="text-danger">*</span></label>
                                        <span class="focus-border bg-blue"></span>
                                    </div>
                                    <div class="help-block with-errors text-danger"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <div class="position-relative">
                                        <input type="email" name="email" id="email" class="form-control" required="required" data-error="Valid email is required.">
                                        <label for="email">Email<span class="text-danger">*</span></label>
                                        <span class="focus-border bg-blue"></span>
                                    </div>
                                    <div class="help-block with-errors text-danger"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <div class="position-relative">
                                        <input type="tel" name="phone" id="phone" class="form-control">
                                        <label for="phone">Phone</label>
                                        <span class="focus-border bg-blue"></span>
                                    </div>
                                    <div class="help-block with-errors text-danger"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <div class="position-relative">
                                        <input type="text" name="subject" id="subject" class="form-control" required="required" data-error="Subject is required.">
                                        <label for="subject">Subject<span class="text-danger">*</span></label>
                                        <span class="focus-border bg-blue"></span>
                                    </div>
                                    <div class="help-block with-errors text-danger"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <div class="position-relative">
                                        <textarea name="message" id="message" class="form-control" rows="8" required="required" data-error="Please,leave us a message."></textarea>
                                        <label for="message">Message<span class="text-danger">*</span></label>
                                        <span class="focus-border bg-blue"></span>
                                    </div>
                                    <div class="help-block with-errors text-danger"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-send btn-blue">Send message<i class="far fa-paper-plane pl-3"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Get in touch today
    ================================================== -->

