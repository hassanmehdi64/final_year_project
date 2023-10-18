@extends("frontend.layout.main")

@section('main-container')
   <!----------------------
         Contact Us Section
        ----------------------->
        <<div class="contact_us_2">
            <div class="responsive-container-block big-container">
              <div class="blueBG">
              </div>
              <div class="responsive-container-block container">
                <form class="form-box">
                  <div class="container-block form-wrapper">
                    <p class="text-blk contactus-head">
                      Get in Touch
                    </p>
                    <p class="text-blk contactus-subhead">
                      Nunc erat cursus tellus gravida.
                    </p>
                    <div class="responsive-container-block">
                      <div class="responsive-cell-block wk-ipadp-6 wk-tab-12 wk-mobile-12 wk-desk-6" id="i10mt">
                        <p class="text-blk input-title">
                          FIRST NAME
                        </p>
                        <input class="input" id="ijowk" name="FirstName" placeholder="Please enter first name...">
                      </div>
                      <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                        <p class="text-blk input-title">
                          LAST NAME
                        </p>
                        <input class="input" id="indfi" name="Last Name" placeholder="Please enter last name...">
                      </div>
                      <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                        <p class="text-blk input-title">
                          EMAIL
                        </p>
                        <input class="input" id="ipmgh" name="Email" placeholder="Please enter email...">
                      </div>
                      <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                        <p class="text-blk input-title">
                          PHONE NUMBER
                        </p>
                        <input class="input" id="imgis" name="PhoneNumber" placeholder="Please enter phone number...">
                      </div>
                      <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i634i">
                        <p class="text-blk input-title">
                          WHAT DO YOU HAVE IN MIND
                        </p>

                        <textarea class="textinput" id="text-area" placeholder="Please enter query..."></textarea>
                      </div>
                    </div>
                    <button class="submit-btn">
                      Submit
                    </button>
                  </div>
                  <div class="social-media-links">

                      <a href="#" id="ix94i-2">
                        <i class="fa-brands fa-facebook"></i>
                    </a>

                    <a href="#" id="ix94i-2">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="#" id="ix94i-2">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>

                  </div>
                </form>
              </div>
            </div>
          </div>

    @endsection
