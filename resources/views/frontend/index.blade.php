@extends("frontend.layout.main")

@section('main-container')
    <!----------------------
         Main-Content
        ----------------------->

    <!----------------------
         Main-Serch Box "hostel Finder"
        ----------------------->

    <div id="main-container">
      <!-- serch box and slider -->
      <div>
        <div id="landing-header">
          <h1 class="find-hostsel">Find Hostel</h1>
          <div class="search-container">
            <h2 class="search-heading"></h2>
            <div>
              <div class="search-container">
                <input type="text" id="search-input" placeholder="Search">
                <div class="search-icon">
                 <a href="#"> <i class="fa fa-search"></i></a>
                </div>
                  <!-- filter button -->
              <div class="filter-container">
               <a href="#"> <button class="filter-toggle">Filter</button></a>
                <div class="dropdown">
                  <ul class="dropdown-menu">
                    <li>
                      <button class="dropdown-item">Search by Name</button>
                    </li>
                    <li>
                      <button class="dropdown-item">Search by Location</button>
                    </li>
                    <li class="gender-dropdown">
                      <button class="dropdown-item">Search by Gender</button>
                      <ul class="gender-menu">
                        <li><button class="dropdown-item">Male</button></li>
                        <li><button class="dropdown-item">Female</button></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>


          </div>
          <a href="#"><button class="read-more-button">Read More</button></a>
        </div>

        <ul class="slideshow">
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </div>
    </div>


      <!----------------------
    introduction section
        ----------------------->
        <section class="introduction-section">
          <div class="introduction-container">
            <div class="image-container">
              <img src="{{ ('frontend/images/introduction.png') }}" alt="Image">
            </div>
            <div class="text-container">
              <h2 class="small-heading">Welcome to Hoster</h2>
              <h1 class="main-heading">Introduction to Hosteler</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sagittis mattis urna, et ullamcorper leo consequat a. Fusce luctus purus non dui gravida, at tristique dolor efficitur. Vestibulum a dui a eros iaculis ullamcorper.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat perspiciatis quibusdam doloribus omnis voluptatibus cupiditate magni, officia ipsam libero ipsa. Aliquam hendrerit purus ac lacinia viverra.</p>

              <button class="styled-button">Learn More</button>
            </div>
          </div>
        </section>



        <!----------------------
          Featurd Cards  section
        ----------------------->

      <div id="featured_blog_cards">
        <h2 id="featured_blog-heading">Featured Blogs</h2>
        <p id="featured_blog-para">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit ipsam provident, fuga repellat accusamus hic.</p>

        <div class="featured-blog-card">
          <img  src="{{ ('frontend/images/blog-img1.jpg') }}" alt="Image 1" class="card-image">
          <div class="card-content">
            <h2 class="card-title">Card Title 1</h2>
            <p class="card-paragraph">Lorem ipsum dolor, sit amet consectetur
            adipisicing elit. Minima unde porro est voluptate inventore.</p>
            <button class="styled-button">Read More</button>
          </div>
        </div>

        <div class="featured-blog-card">
          <img  src="{{ ('frontend/images/blog-img1.jpg') }}" alt="Image 1" class="card-image">
          <div class="card-content">
            <h2 class="card-title">Card Title 1</h2>
            <p class="card-paragraph">Lorem ipsum dolor, sit amet consectetur
            adipisicing elit. Minima unde porro est voluptate inventore.</p>
            <button class="styled-button">Read More</button>
          </div>
        </div>

        <div class="featured-blog-card">
          <img  src="{{ ('frontend/images/blog-img1.jpg') }}" alt="Image 1" class="card-image">
          <div class="card-content">
            <h2 class="card-title">Card Title 1</h2>
            <p class="card-paragraph">Lorem ipsum dolor, sit amet consectetur
            adipisicing elit. Minima unde porro est voluptate inventore.</p>
            <button class="styled-button">Read More</button>
          </div>
        </div>
      </div>

 <!-- _________________
  Why Choose Us
__________________________-->
      <section id="why-section-main">
        <div  id="why-choose-us">
        <h2 class="section-heading">Why Choose Us</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at justo ac odio consectetur aliquam. Fusce hendrerit eros a tortor euismod luctus.</p>
        <ul class="choose-us-list">
          <li><i class="fas fa-check"></i> Experienced and Professional Team</li>
          <li><i class="fas fa-check"></i> High-Quality Products and Services</li>
          <li><i class="fas fa-check"></i> Competitive Pricing</li>
          <li><i class="fas fa-check"></i> Excellent Customer Support</li>
        </ul>
      </div>
      </section>



       <!----------------------
      "how to use hosteler"
       ----------------------->
       <section id="how-to-use">
        <div class="container" id="how-to-use_cont">
          <div class="how-to-use-inner" >

            <div class="" id="how-to-use_content">
              <h2 class="how-section-heading">How to Use Hosteler</h2>
              <ol class="how-to-use-list">
                <li>Enter your location in the search box.</li>
                <li>Select your preferred hostel from the search results.</li>
                <li>View detailed information about the hostel, including amenities and reviews.</li>
                <li>Contact the hostel directly to make a reservation.</li>
                <li>Enjoy your stay at the chosen hostel!</li>
              </ol>
            </div>

            <div class="how-to-use-image">
              <img src="{{ ('frontend/images/how-to-use.jpg') }}" alt="Hosteler Image" class="how-to-use-image">
            </div>
          </div>
        </div>
      </section>


        <!----------------------
      What our Client Says start"
       ----------------------->

    <section class="testimonial text-center">
      <div class="container">

          <div class="heading white-heading">
              What Our Client Says
          </div>
          <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">


                <div class="swiper mySwiper">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="{{ ('frontend/images/team.jpg') }}" class="img-circle img-responsive" />
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            <h4>Client 1</h4>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="{{ ('frontend/images/team.jpg') }}" class="img-circle img-responsive" />
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            <h4>Client 1</h4>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="{{ ('frontend/images/team.jpg') }}" class="img-circle img-responsive" />
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            <h4>Client 1</h4>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="{{ ('frontend/images/team.jpg') }}" class="img-circle img-responsive') }}" />
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            <h4>Client 1</h4>
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>

          </div>
      </div>
  </section>

  @endsection
