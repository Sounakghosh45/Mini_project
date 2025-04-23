<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SG Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merienda&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/common.css">
<style>
.availability-form{
    margin-top:-40px;
    z-index: 2;
    position: relative;
}
@media screen and(max-width:575px){
    .availability-form{
    margin-top:0px;
    padding:0 35px;
 }
}
        /* Ensure Swiper visibility */
.swiper {
            width: 100%;
            height: 500px;
        }
        .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

    </style>
</head>

<body class="bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-front" href="SGHotel.php">SG HOTEL</a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active me-2" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link me-2" href="#">Rooms</a></li>
                    <li class="nav-item"><a class="nav-link me-2" href="#">Facilities</a></li>
                    <li class="nav-item"><a class="nav-link me-2" href="#">Contact</a></li>
                    <li class="nav-item"><a class="nav-link me-2" href="#">About Us</a></li>
                </ul>
                <div class="d-flex">
                    <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                    <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">Register</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="login.php" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-circle fs-3 me-2"></i> User Login
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" name="email_id" class="form-control shadow-none">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control shadow-none">
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
                            <a href="#" class="text-secondary text-decoration-none">Forgot password!</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Register Modal -->
    <div class="modal fade" id="registerModal" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="register.php" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-lines-fill fs-3 me-2"></i> User Register
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                            Note: Your details must match with your ID (Aadhar card, passport, driving license, etc.)
                            that will be required during check-in.
                        </span>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Phone Number</label>
                                    <input type="number" name="phone" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Picture</label>
                                    <input type="file" name="picture" class="form-control shadow-none">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label">Address</label>
                                    <textarea name="address"class="form-control shadow-none" rows="3"></textarea>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">PIN</label>
                                    <input type="number" name="pin" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Date of birth</label>
                                    <input type="date" name="dob" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" name="confirm_password" class="form-control shadow-none">
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-dark shadow-none my-1">REGISTER</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Swiper -->
    <div class="container-fluid px-lg-2 mt-2">
    <div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/carousel/6.jpg" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/13.jpeg" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/12.jpg" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/14.avif" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/10.webp" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/11.jpg" class="w-100 d-block">
      </div>
    </div>
    
  </div>
    </div>

    <!-- check availability form -->
     <div class="container availability-form">
        <div class="row">
          <div class="col-lg-12 bg-white shadow p-4 rounded">
            <h5 class="mb-4">Check Booking Availability<h5>
                <form>
                 <div class="row align-items-end">
                    <div class="col-lg-3 mb-3">
                    <label class="form-label" style="font-weight: 500; font-size:17px;">Check-in</label>
                        <input type="date" class="form-control shadow-none">
                    </div>
                    <div class="col-lg-3 mb-3">
                    <label class="form-label" style="font-weight: 500; font-size:17px;">Check-out</label>
                        <input type="date" class="form-control shadow-none">
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight:500; font-size:17px">Adult</label>
                        <select class="form-select shadow-none">
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                  </div>
                  <div class="col-lg-2 mb-3">
                        <label class="form-label" style="font-weight:500; font-size:17px">Children</label>
                        <select class="form-select shadow-none">
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                  </div>
                  <div class="col-lg-1 mb-lg-3 mt-2">
                    <button type="submit" class="btn text-white shadow none custom-bg">Submit</button>
                </form>
            </div>
        </div>
    </div>
<!-- Room -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 my-3">
    <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
        <img src="images/rooms/1.jpg" class ="card-img-top">
      <div class="card-body">
        <h5>Simple Room Name</h5>
        <h6 class="mb-4">₹200 per night</h6>
        <div class="feature mb-4">
            <h6 class="mb-1">Features</h6>
             <span class="badge bg-light text-dark text-wrap lh-base">
                2 Rooms
                </span>
             <span class="badge bg-light text-dark text-wrap lh-base">
                2 Bathrooms
                </span>
             <span class="badge bg-light text-dark text-wrap lh-base">
                1 balcony
                </span>
             <span class="badge bg-light text-dark text-wrap lh-base">
               3 Sofa
                </span>
            </div>
    <div class="facilities mb-4">
     <h6 class="mb-1">Facilities</h6>
        <span class="badge bg-light text-dark text-wrap lh-base">
            Wifi
            </span>
        <span class="badge bg-light text-dark text-wrap lh-base">
            TV
            </span>
        <span class="badge bg-light text-dark text-wrap lh-base">
            AC
            </span>
        <span class="badge bg-light text-dark text-wrap lh-base">
            Room heater
            </span>
        </div>
    <div class="rating mb-4">
     <h6 class="mb-1">Rating</h6>
        <span class="badge rounded-pill bg-light">
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-fill text-warning"></i>
        
    </div>
 <div class="d-flex justify-content-evenly mb-2">
    <a href="#" class="btn btn-sm text-white custom-bg shadow">Book now</a>
    <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
     </div>
    
    </div>
  </div>
</div>
<div class="col-lg-4 col-md-6 my-3">
   <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
        <img src="images/rooms/1.jpg" class ="card-img-top">
      <div class="card-body">
        <h5>Simple Room Name</h5>
        <h6 class="mb-4">₹200 per night</h6>
        <div class="feature mb-4">
            <h6 class="mb-1">Features</h6>
             <span class="badge bg-light text-dark text-wrap lh-base">
                2 Rooms
                </span>
             <span class="badge bg-light text-dark text-wrap lh-base">
                2 Bathrooms
                </span>
             <span class="badge bg-light text-dark text-wrap lh-base">
                1 balcony
                </span>
             <span class="badge bg-light text-dark text-wrap lh-base">
               3 Sofa
                </span>
            </div>
    <div class="facilities mb-4">
     <h6 class="mb-1">Facilities</h6>
   <span class="badge bg-light text-dark text-wrap lh-base">
            Wifi
            </span>
        <span class="badge bg-light text-dark text-wrap lh-base">
            TV
            </span>
        <span class="badge bg-light text-dark text-wrap lh-base">
            AC
            </span>
        <span class="badge bg-light text-dark text-wrap lh-base">
            Room heater
            </span>
        </div>
    <div class="rating mb-4">
     <h6 class="mb-1">Rating</h6>
        <span class="badge rounded-pill bg-light">
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-fill text-warning"></i>
        
    </div>
    <div class="d-flex justify-content-evenly mb-2">
    <a href="#" class="btn btn-sm text-white custom-bg shadow">Book now</a>
    <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
     </div>
    
    </div>
  </div>
   </div>
    <div class="col-lg-4 col-md-6 my-3">
    <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
        <img src="images/rooms/1.jpg" class ="card-img-top">
      <div class="card-body">
        <h5>Simple Room Name</h5>
        <h6 class="mb-4">₹200 per night</h6>
        <div class="feature mb-4">
            <h6 class="mb-1">Features</h6>
             <span class="badge bg-light text-dark text-wrap lh-base">
                2 Rooms
                </span>
             <span class="badge bg-light text-dark text-wrap lh-base">
                2 Bathrooms
                </span>
             <span class="badge bg-light text-dark text-wrap lh-base">
                1 balcony
                </span>
             <span class="badge bg-light text-dark text-wrap lh-base">
               3 Sofa
                </span>
            </div>
    <div class="facilities mb-4">
     <h6 class="mb-1">Facilities</h6>
        <span class="badge bg-light text-dark text-wrap lh-base">
            Wifi
            </span>
        <span class="badge bg-light text-dark text-wrap lh-base">
            TV
            </span>
        <span class="badge bg-light text-dark text-wrap lh-base">
            AC
            </span>
        <span class="badge bg-light text-dark text-wrap lh-base">
            Room heater
            </span>
        </div>
    <div class="rating mb-4">
     <h6 class="mb-1">Rating</h6>
        <span class="badge rounded-pill bg-light">
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-fill text-warning"></i>
        
    </div>
    <div class="d-flex justify-content-evenly mb-2">
    <a href="#" class="btn btn-sm text-white custom-bg shadow">Book now</a>
    <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
     </div>
    
    </div>
  </div>
</div>
<!-- Facilities -->
    <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >></a>
        </div>
    </div>
    <!-- Facilities -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/wifi.svg" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/ac.png" width="80px">
                <h5 class="mt-3">AC</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/shower.svg" width="80px">
                <h5 class="mt-3">Water Supply</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/pool.svg" width="80px">
                <h5 class="mt-3">Swimming Pool</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/hospital.svg" width="80px">
                <h5 class="mt-3">24*7 medical service</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
             <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities>></a>
            </div>
        </div>
</div>

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reviews</h2>
 <div class="container">
    <div class="swiper swiper-Reviews">
    <div class="swiper-wrapper">

      <div class="swiper-slide bg-white p-2">
        <div class="profile d-flex align-items-center mb-3">
            <!-- <img src="images/features/star.svg" width="30px"> -->
        <h6 class="m-0 ms-2">Random User 1</h6>
      </div>
      <p>
      Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
      Quod quaerat omnis cum delectus illo, accusantium molestias alias, ad temporibus vitae voluptatum iure?
       Voluptatum distinctio ad facilis reiciendis rem quod id.
      </p>
      <div class="rating">
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
      </div>
      </div>
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
            <!-- <img src="images/features/star.svg" width="30px" > -->
        <h6 class="m-0 ms-2">Random User 1</h6>
      </div>
      <p>
      Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
      Quod quaerat omnis cum delectus illo, accusantium molestias alias, ad temporibus vitae voluptatum iure?
       Voluptatum distinctio ad facilis reiciendis rem quod id.
      </p>
      <div class="rating">
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
      </div>
      </div>
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
            <!-- <img src="images/features/star.svg" width="30px" > -->
        <h6 class="m-0 ms-2">Random User 1</h6>
      </div>
      <p>
      Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
      Quod quaerat omnis cum delectus illo, accusantium molestias alias, ad temporibus vitae voluptatum iure?
       Voluptatum distinctio ad facilis reiciendis rem quod id.
      </p>
      <div class="rating">
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
      </div>
      </div>

    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>

<br><br><br>
<br><br><br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".swiper-container", {
spaceBetween: 30, // Space between slides
effect: "fade", // Smooth sliding instead of fade
loop: true, // Infinite looping
autoplay: {
    delay: 3000, // Auto-slide every 3 seconds
    disableOnInteraction: false
},
    
});
var swiper = new Swiper(".swiper-Reviews", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView:"3",
      loop:true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints:{
        320:{
        slidesPerView:1,
      },
      640:{
        slidesPerView:1,
      },
      768:{
        slidesPerView:1,
      },
      1024:{
        slidesPerView:3,
      },
    }
    });

    </script>
            <!-- PandaBot Chat Icon + Panel -->
<div class="panda-icon" onclick="toggleChat()">
  <img src="panda.png" alt="PandaBot">
</div>

<div class="chat-panel" id="chatPanel">
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <!-- FAQs -->
      <div class="swiper-slide">
        <h3>FAQs</h3>
        <ul>
          <li>Check-in time: 12 PM</li>
          <li>Wi-Fi password: Ask at reception</li>
          <li>Pool timing: 7 AM - 9 PM</li>
        </ul>
      </div>

      <!-- Complaint Form -->
      <div class="swiper-slide">
        <h3>Submit Complaint</h3>
        <form method="POST" action="panda_chatbot.php">
          <input type="text" name="complaint_user" placeholder="Your Name" required>
          <textarea name="complaint_msg" placeholder="Your Complaint" required></textarea>
          <button type="submit" name="submit_complaint">Submit</button>
        </form>
      </div>

      <!-- Food Order Form -->
      <div class="swiper-slide">
        <h3>Order Food</h3>
        <form method="POST" action="panda_chatbot.php">
          <input type="text" name="food_user" placeholder="Your Name" required>
          <input type="text" name="food_order" placeholder="Food Items" required>
          <button type="submit" name="submit_food">Order</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
  function toggleChat() {
    document.getElementById("chatPanel").classList.toggle("open");
  }

  new Swiper(".mySwiper", {
    direction: "horizontal",
    loop: true,
    grabCursor: true,
    effect: "slide",
  });
</script>
</body>
</html>
