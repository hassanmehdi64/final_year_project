@extends("frontend.layout.main")

@section('main-container')


    <!----------------------
        About section start"
       ----------------------->

       <div class="about-section">
        <h2>About Us</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur, dolorum necessitatibus ullam, nihil voluptatibus libero illo praesentium optio ea labore tempore atque totam architecto eveniet, consectetur quos! Laudantium ab sit eum! Delectus praesentium quam dolorem. Facilis laborum vitae illo id, reprehenderit impedit vero eaque, voluptates iusto distinctio laboriosam, accusamus molestias dignissimos doloribus itaque reiciendis error pariatur.</p>
    </div>

    <!-- hostel cads start-->
    <div class="hostel-by-location">
        <h2>Find Hostels By Location</h2>

        <div class="container">
            <div class="list">
              <h2>Filter List</h2>
              <ul id="location-list">
                <li data-filter="all" class="active">All</li>
                <li data-filter="gilgit">Gilgit</li>
                <li data-filter="danyore">Danyore</li>
                <li data-filter="jutial">Jutial</li>
                <li data-filter="kashrote">Kashrote</li>
                <li data-filter="baltistan">Baltistan</li>
              </ul>
            </div>

            <div class="hostel-container">
                <div class="hostel-card">
                  <img src="https://visitgilgitbaltistan.gov.pk/assets/hotels/1673343480JPG" alt="Hostel Image 1">
                  <div class="hostel-details">
                    <h2>Hostel Name 1</h2>
                    <a href="view-hostel-1.html">View Hostel</a>
                  </div>
                </div>
                <div class="hostel-card">
                  <img src="https://image-tc.galaxy.tf/wijpeg-5q6nogd3jvrho4kpqv79syf0o/dsc-0026.jpg?width=1600&height=1066" alt="Hostel Image 1">
                  <div class="hostel-details">
                    <h2>Hostel Name 1</h2>
                    <a href="view-hostel-1.html">View Hostel</a>
                  </div>
                </div>
                <div class="hostel-card">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9h1EuXH2qm8iyfzQPDUnz_9vpL6XWWJcHFhWSXp7GDWkSW-swBBNynKn4mKZeu4zAO4w&usqp=CAU" alt="Hostel Image 1">
                  <div class="hostel-details">
                    <h2>Hostel Name 1</h2>
                    <a href="view-hostel-1.html">View Hostel</a>
                  </div>
                </div>
                <div class="hostel-card">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9h1EuXH2qm8iyfzQPDUnz_9vpL6XWWJcHFhWSXp7GDWkSW-swBBNynKn4mKZeu4zAO4w&usqp=CAU" alt="Hostel Image 1">
                  <div class="hostel-details">
                    <h2>Hostel Name 1</h2>
                    <a href="view-hostel-1.html">View Hostel</a>
                  </div>
                </div>
                <div class="hostel-card">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9h1EuXH2qm8iyfzQPDUnz_9vpL6XWWJcHFhWSXp7GDWkSW-swBBNynKn4mKZeu4zAO4w&usqp=CAU" alt="Hostel Image 1">
                  <div class="hostel-details">
                    <h2>Hostel Name 1</h2>
                    <a href="view-hostel-1.html">View Hostel</a>
                  </div>
                </div>
                <div class="hostel-card">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9h1EuXH2qm8iyfzQPDUnz_9vpL6XWWJcHFhWSXp7GDWkSW-swBBNynKn4mKZeu4zAO4w&usqp=CAU" alt="Hostel Image 1">
                  <div class="hostel-details">
                    <h2>Hostel Name 1</h2>
                    <a href="view-hostel-1.html">View Hostel</a>
                  </div>
                </div>


          </div>
         </div>

         <!-- latest Blog Section -->


<div class="latest-blog-cards">
    <div class="blog-section">
        <h2>Our Latest Blogs</h2>
       <p id="blog-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis possimus minima aut culpa amet consequatur sit beatae repudiandae nisi optio?</p>
       <div class="container">

        <div class="blog-container">
            <div class="blog-card">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRIji5tMS6R_Q_TZmqBX7udL1r3kj_xEWQAA&usqp=CAU" alt="Blog Image 1">
              <div class="blog-details">
                <h2>Blog Title 1</h2>
                <p>Posted on: Date 1</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod libero vel laoreet facilisis.</p>
                <a href="blog-link-1.html">Read More</a>
              </div>
            </div>
            <div class="blog-card">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRIji5tMS6R_Q_TZmqBX7udL1r3kj_xEWQAA&usqp=CAU" alt="Blog Image 1">
              <div class="blog-details">
                <h2>Blog Title 1</h2>
                <p>Posted on: Date 1</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod libero vel laoreet facilisis.</p>
                <a href="blog-link-1.html">Read More</a>
              </div>
            </div>
            <div class="blog-card">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRIji5tMS6R_Q_TZmqBX7udL1r3kj_xEWQAA&usqp=CAU" alt="Blog Image 1">
              <div class="blog-details">
                <h2>Blog Title 1</h2>
                <p>Posted on: Date 1</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod libero vel laoreet facilisis.</p>
                <a href="blog-link-1.html">Read More</a>
              </div>
            </div>

    </div>
</div>

     <!----------------------
          Frequently Asked Questions section start"
           ----------------------->

           <div class="faq-section">
            <h2>Frequently Asked Questions</h2>
            <div class="faq-container">
              <div class="faq">
                <h3 class="question">How does the hostel finder work? </h3>
                <p class="answer"> Our hostel finder website utilizes a user-friendly search interface where you can enter your desired location, dates, and other preferences. It then provides you with a list of available hostels that match your criteria.            </p>
              </div>
              <div class="faq">
                <h3 class="question">Is the information about the hostels accurate and up-to-date?</h3>
                <p class="answer">bsolutely! We strive to provide accurate and up-to-date information about the hostels listed on our website. Our team regularly verifies and updates the hostel details to ensure the information is reliable.</p>
              </div>
              <div class="faq">
                <h3 class="question">Can I see photos of the hostels before making a reservation?</h3>
                <p class="answer">Yes, each hostel listing includes a gallery of photos that showcase the hostel's rooms, common areas, and facilities. You can get a visual representation of the hostels to make an informed decision.</p>
              </div>
              <div class="faq">
                <h3 class="question">How can I make a reservation through the hostel finder website?</h3>
                <p class="answer">Once you have selected a hostel, our website provides a seamless booking experience. Simply follow the instructions to enter your details, choose your room type, and make a secure reservation.</p>
              </div>
              <div class="faq">
                <h3 class="question">Are there user reviews and ratings available for the hostels?</h3>
                <p class="answer"> Yes, we encourage users to leave reviews and ratings for the hostels they have stayed at. You can read these reviews to gain insights from other travelers and make an informed choice.</p>
              </div>
              <div class="faq">
                <h3 class="question">What if I need assistance or have questions regarding a specific hostel?</h3>
                <p class="answer"> If you have any questions or need assistance regarding a particular hostel, our website offers a contact or support feature. You can reach out to our team, and we'll be happy to assist you.</p>
              </div>
              <!-- Add more FAQs as needed -->
            </div>
            </div>

   @endsection







