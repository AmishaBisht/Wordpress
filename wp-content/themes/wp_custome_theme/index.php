<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="description" content="HTML/CSS">
  <meta name="author" content="Anil">
  <title>Website -Template</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />

</head>
<body>
  <div class="header" id="topheader">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container text-uppercase p-2">
        <a class="navbar-brand font-weight-bold text-white" href="#">AniWeb</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#servicediv">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#pricingdiv">Price</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#newsletterdiv">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contactdiv">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <section class="header-section">
      <div class="center-div">
        <h1 class="font-weight-bold">We are the web developers</h1>
        <p>We creates the world best websites</p>
        <div class="header-buttons">
          <a href="#newsletterdiv">AboutUs</a>
          <a href="#contactdiv">ContactUs</a>
        </div>
      </div>
    </section>
  </div>

  <!-- ***************** header part end ************************** -->

  <!-- ********************* three extra header div starts ******************** -->

  <section class="header-extradiv">
    <div class="container">
      <div class="row">
        <div class="extradiv col-lg-4 col-md-4 col-12">
          <a href="#"><i class="fa-3x fa fa-desktop"></i></a>
          <h2>EASY TO USE</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        </div>
        <div class="extradiv col-lg-4 col-md-4 col-12">
          <a href="#"><i class="fa-3x fa fa-trophy"></i></a>
          <h2>AWESOME DESIGN</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        </div>
        <div class="extradiv col-lg-4 col-md-4 col-12">
          <a href="#"><i class="fa-3x fa fa-magic"></i></a>
          <h2>EASY TO CUSTOMIZE</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ********************* three extra header div starts ******************** -->

  <!-- ********************* offer section starts ****************************** -->

  <section class="serviceoffers" id="servicediv">
    <div class="container headings text-center">
      <h1 class="text-center font-weight-bold">WHAT DO WE OFFER</h1>
      <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-10 offset-lg-0 offset-1">
          <div class="names my-3">
            <h1>HTML</h1>
            <div class="progress w-75">
              <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">100%</div>
            </div>
          </div>
          <div class="names my-3">
            <h1>CSS</h1>
            <div class="progress w-75">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">90%</div>
            </div>
          </div>
          <div class="names my-3">
            <h1>JAVASCRIPT</h1>
            <div class="progress w-75">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">80%</div>
            </div>
          </div>
          <div class="names my-3">
            <h1>REACTJS</h1>
            <div class="progress w-75">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">50%</div>
            </div>
          </div>
          <div class="names my-3">
            <h1>NODEJS</h1>
            <div class="progress w-75">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">40%</div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-12 servicediv">
          <div class="row">
            <div class="col-lg-2 col-2 service-icons">
              <i class="fa-3x fa fa-desktop"></i>
            </div>
            <div class="col-lg-10 col-10">
              <h2>Website Development</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. sed do eiusmod tempor incididunt.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-2 col-2 service-icons">
              <i class="fa-3x fa fa-wifi"></i>
            </div>
            <div class="col-lg-10 col-10">
              <h2>Digital Marketing</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. sed do eiusmod tempor incididunt.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-2 col-2 service-icons">
              <i class="fa-3x fa fa-phone"></i>
            </div>
            <div class="col-lg-10 col-10">
              <h2>Support 24/7</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. sed do eiusmod tempor incididunt.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ********************* offer section ends ****************************** -->

  <!-- ********************* project (completed) starts ****************************** -->

  <section class="project-work">
    <div class="container headings text-center">
      <p class="text-center font-weight-bold">MORE THAN 2,000 WEBSITES CREATED</p>
    </div>
    <div class="container d-flex justify-content-around align-items-center text-center">
      <div>
        <h1 class="count">1500</h1>
        <p>CMS Installation</p>
      </div>

      <div>
        <h1 class="count">2500</h1>
        <p>Awards Won</p>
      </div>

      <div>
        <h1 class="count">700</h1>
        <p>Happy Clients</p>
      </div>

      <div>
        <h1 class="count">500</h1>
        <p>Working On</p>
      </div>
    </div>
  </section>
  <!-- ********************* project (completed) ends ****************************** -->


  <!-- ********************* our pricing start ****************************** -->

  <section class="pricing" id="pricingdiv">
    <div class="container headings text-center">
      <h1 class="text-center font-weight-bold text-white">OUR BEST PRICING</h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-12">
          <div class="card text-center">
            <div class="card-header">BASIC</div>
            <div class="card-body">
              <li>$<span class="money">20</span>/website</li>
              <li>Responsive Websites</li>
              <li>Domain Name Free</li>
              <li>Mobile Friendly</li>
              <li>Webmail Support</li>
              <li>Customer Support 24/7</li>
            </div>
            <div class="card-footer">
              <a href="#">Purchase</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12 card-second">
          <div class="card text-center">
            <div class="card-header">STANDARD</div>
            <div class="card-body">
              <li>$<span class="money">40</span>/website</li>
              <li>Responsive Websites</li>
              <li>Domain Name Free</li>
              <li>Mobile Friendly</li>
              <li>Webmail Support</li>
              <li>Customer Support 24/7</li>
            </div>
            <div class="card-footer">
              <a href="#">Purchase</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="card text-center">
            <div class="card-header">UNLIMITED</div>
            <div class="card-body">
              <li>$<span class="money">60</span>/website</li>
              <li>Responsive Websites</li>
              <li>Domain Name Free</li>
              <li>Mobile Friendly</li>
              <li>Webmail Support</li>
              <li>Customer Support 24/7</li>
            </div>
            <div class="card-footer">
              <a href="#">Purchase</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ********************* our pricing end ****************************** -->

  <!-- ********************* our happy clients starts ****************************** -->

  <section class="happyclients">
    <div class="container headings text-center">
      <h1 class="text-center font-weight-bold">OUR HAPPY CLIENTS</h1>
      <p class="text-center text-captalize pt-1">Our Satisfied Customer Says</p>
    </div>
    <div id="demo" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul>

      <!-- The slideshow -->
      <div class="carousel-inner container">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
              <div class="box">
                <a href="#"><img src="image/clients-thumb.jpg" class="img-fluid img-thumbnail"></a>
                <p class="m-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <h1>Anil Swami</h1>
                <h2>Web Developer</h2>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
              <div class="box">
                <a href="#"><img src="image/clients-thumb.jpg" class="img-fluid img-thumbnail"></a>
                <p class="m-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <h1>Anil Swami</h1>
                <h2>Web Developer</h2>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
              <div class="box">
                <a href="#"><img src="image/clients-thumb.jpg" class="img-fluid img-thumbnail"></a>
                <p class="m-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <h1>Anil Swami</h1>
                <h2>Web Developer</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
              <div class="box">
                <a href="#"><img src="image/clients-thumb.jpg" class="img-fluid img-thumbnail"></a>
                <p class="m-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <h1>Anil Swami</h1>
                <h2>Web Developer</h2>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
              <div class="box">
                <a href="#"><img src="image/clients-thumb.jpg" class="img-fluid img-thumbnail"></a>
                <p class="m-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <h1>Anil Swami</h1>
                <h2>Web Developer</h2>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
              <div class="box">
                <a href="#"><img src="image/clients-thumb.jpg" class="img-fluid img-thumbnail"></a>
                <p class="m-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <h1>Anil Swami</h1>
                <h2>Web Developer</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
              <div class="box">
                <a href="#"><img src="image/clients-thumb.jpg" class="img-fluid img-thumbnail"></a>
                <p class="m-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <h1>Anil Swami</h1>
                <h2>Web Developer</h2>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
              <div class="box">
                <a href="#"><img src="image/clients-thumb.jpg" class="img-fluid img-thumbnail"></a>
                <p class="m-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <h1>Anil Swami</h1>
                <h2>Web Developer</h2>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
              <div class="box">
                <a href="#"><img src="image/clients-thumb.jpg" class="img-fluid img-thumbnail"></a>
                <p class="m-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <h1>Anil Swami</h1>
                <h2>Web Developer</h2>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>

    </div>
  </section>


  <!-- ********************* our happy clients end ****************************** -->

  <!-- ********************* contact us starts ****************************** -->

  <section class="contactus" id="contactdiv">
    <div class="container headings text-center">
      <h1 class="text-center font-weight-bold">CONTACT US</h1>
      <p class="text-center text-captalize pt-1">We're here to help and answer any question you might have. we look forward to hearing from you.</p>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-10 offset-lg-2 offset-md-2 offset-1">

          <form action="/action_page.php">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Enter Your Name" id="username" autocomplete="off" required>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Enter Email" id="email" autocomplete="off" required>
            </div>
            <div class="form-group">
              <input type="number" class="form-control" placeholder="Enter Mobile Number" id="mobile" autocomplete="off" required>
            </div>
            <div class="form-group">
              <textarea class="form-control" rows="4" placeholder="Enter Your Message" id="comment"></textarea>
            </div>
            <div class="d-flex justify-content-center form-button">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>

    </div>
  </section>

  <!-- ********************* contact us ends ****************************** -->

  <!-- ********************* newsletter starts ****************************** -->

  <section class="newsletter" id="newsletterdiv">
    <div class="container headings text-center">
      <h1 class="text-center font-weight-bold">SUBSCRIBE TO OUR NEWS LETTER</h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 col-12 ">
          <div class="input-group mb-3">
            <input type="text" class="form-control newsletter-input" placeholder="Your Email">
            <div class="input-group-append">
              <span class="input-group-text">Subscribe</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ********************* newsletter ends ****************************** -->


  <!-- ********************* foter starts ****************************** -->

  <footer class="footersection" id="footerdiv">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-12 footer-div">
          <div>
            <h3>ABOUT ANIWEB</h3>
            <p>The world has become so fast paced that people don't want to stand by reading a page of information to be they would much rather look at a presentstion and understand the message.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 footer-div">
          <div class="footer-navlinks">
            <h3>NAVIGATION LINKS</h3>
            <li><a href="#">Home</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Price</a></li>
            <li><a href="#">About</a></li>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 col-12 footer-div">
          <div>
            <h3>NEWSLETTER</h3>
            <p>For business professionals caught between high OEM price and mediocre print and graphic output.</p>
            <div class="container newsletter-main">
              <div class="row">
                <div class="col-lg-12 col-12 ">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control newsletter-input" placeholder="Your Email">
                    <div class="input-group-append">
                      <span class="input-group-text">Subscribe</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-5 text-center">
        <p>Copyright &copy;2020 All rights reserved | This template is made with love by Anil Swami (www.aniweb.in)</p>
      </div>
      <div class="scrolltop float-right">
        <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
      </div>
    </div>
  </footer>

  <!-- ********************* footer ends ****************************** -->

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha256-JtQPj/3xub8oapVMaIijPNoM0DHoAtgh/gwFYuN5rik=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script type="text/javascript">
  $('.count').counterUp({
    delay:10,
    time:300
  })
  // Get the button:
  mybutton = document.getElementById("myBtn");

  //When the user scrolls down 20px from the top of the document, show the buttons
  window.onscroll = function() {scrollFunction()};

  function scrollFunction(){
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }
  //When the user clicks on the button, scroll to the top of the document
  function topFunction(){
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
  }
  </script>
</body>
</html>
