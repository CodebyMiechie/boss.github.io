<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miechieee's website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
    /* Basic CSS Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Navbar Styles */
    .navbar {
     
      padding: 10px;
    }

    .navbar ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
    }

    .navbar li {
      margin-right: 20px;
      transition: transform 0.3s ease;
    }

    .navbar li a {
      color: #fff;
      text-decoration: none;
    }

    @media (min-width: 768px) {
      .navbar-nav .nav-link {
      margin-right: 10px;
      transition: transform 0.3s ease;
    }

      .navbar-nav .nav-link:hover {
      transform: scale(1.5);
      color: pink;
  }
}
    .navbar-nav .nav-link:hover {
    color: pink;
  }
    #educitem {
      transition: transform 0.3s ease;
    }
    #educitem:hover {
      transform: scale(1.1);
    }
    #h3{
      border-bottom: 2px solid white;
    }
    #photos{
      transition: transform 0.3s ease;
    }
    #photos:hover {
      transform: scale(1.1);
    }
    #con{
      transition: transform 1s ease;
    }
    #con:hover{
      transform: rotate(360deg);
    }
  </style>
</head>
<body>
<div>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-dark navbar-fixed-top" id="top">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#" >Miechieee</a>
    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <!-- Add a new div with the flex-column class for small screens -->
      <div class="d-flex flex-column flex-lg-row">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#About">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#educ">Education</a></li>
          <li class="nav-item"><a class="nav-link" href="#photo">Photos</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>


<div id="card" class="d-flex align-items-center justify-content-center">
  <div class="pic">

  <div id="carouselExampleFade" class="carousel slide">
  <div class="carousel-inner" style="width: 400px; height: 416px;">
    <div class="carousel-item active">
      <img src="img/zoro2.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/zoro.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/me2.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
 <br>
      <div id="text" class=" fw-bold text-d" style="margin-top: 90px;"><br><br><br> <br> 
     <h5>I am<br> <h3><b>Roronoa Zoro</b></h3></h5>
      <h3 class="text-info" id="h3"><b> BSIT Student</b></h3>
  </div>
    </div>
  </div>


    <!-- <img src="img/akoo.jpg" alt=""> -->
  </div>
  
</div>

<div id="cardDes" class="container">
  <div class="card mb-4">
    <div class="row d-flex align-items-center">
      <div class="col-lg-3 col-md-4 col-sm-6 p-1 d-flex justify-content-center hover-zoom " id="imgdiv">
        <img src="img/bsit.png" class="card-img-left pl-3 p-auto" alt="BSIT" height="80px" id="img" style="width: 200px; height: 200px;">
      </div>
      <div class="card-body col-lg-3 col-md-8 col-sm-6 mt-lg-4">
        <p class="card-text text-center">Greetings! I'm Roronoa Zoro, a 11-year-old IT enthusiast on the path to becoming a skilled professional in the world of technology. Currently pursuing my studies in IT, I am fascinated by the dynamic realm of coding, networking, and problem-solving. Eager to contribute innovative solutions to the tech landscape, I'm here to learn, grow, and connect with fellow enthusiasts. Let's share insights and explore the ever-evolving landscape of information technology!</p>
      </div>
    </div>
  </div>
</div>
<br>

<div id="About"><br>
  <div class="container-fluid mb-5  bg-dark">
    ,<div class="row bg-dark m-3">
      <div class="col-lg-5 col-md-8 mb-4 gap-4">
        <h1 class="mb-3 text-light">About</h1>
            <div class="name">
              <label class="text-info">Name : </label>
              <h2 class="ml-5 text-light">Roronoa Zoro</h2>
            </div>
            <div class="age">
              <label class="text-info">Age : </label>
              <h3 class="text-light">11 years old</h3>
            </div>
            <div class="address">
              <label class="text-info">Address :</label>
              <h3 class="text-light">East blue</h3>
            </div>
            <div class="bdate">
              <label class="text-info">Birth Date :</label>
              <h3 class="text-light">july 44 , 2013</h3>
            </div>
            <div class="bplace">
              <label class="text-info">Birth Place : </label>
              <h3 class="text-light">Tondo Manila</h3>
            </div>
            <div class="status">
              <label class="text-info">Status : </label>
              <h3 class="text-light">Single</h3>
            </div>
      </div>

      <div class="col-lg-5 col-md-8 ">
        <h2 class="text-light">Do you have any message on me?</h2> 
        <form action="https://formsubmit.co/andriecunanan62@gmail.com" method="POST">
        <div class="form-floating mb-3">
          <input type="text" class="form-control" name="name" id="floatingInput" required placeholder="name@example.com">
          <label for="floatingInput" style="color:black;">Name</label>
        </div>
        <div class="form-floating mb-3">
          <input type="email" class="form-control" name="email" id="floatingInput" required placeholder="name@example.com">
          <label for="floatingInput" style="color:black;">Email address</label>
        </div>
        <div class="form-floating mb-3">
          <input type="number" class="form-control" name="number" id="floatingInput" required placeholder="Number">
          <label for="floatingInput" style="color:black;">Contact #</label>
        </div>
        <div class="form-floating mb-3">
          <textarea class="form-control" name="message" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px"></textarea>
          <label for="floatingTextarea" style="color:black;">Message</label>
        </div>
        <input type="hidden" name="_captcha" value="false">
        <input type="hidden" name="_next" value="https://localhost/webPractice/umBel/">
        <div>
        <button class="btn btn-primary" type="submit">Submit message</button>
        </div>
        </form>
      </div>

    </div>
  </div>
</div>
<span id="educ"></span>
<div class="container-fluid text-white ">
  <div class="papel pb-4 ">
  <div class="row d-flex align-items-center gap-2"><br>
      <h1 class="mb-3 text-dark" style="padding-left: 40px;"><b>Education </b> </h1>
    <div class="col-lg-3 col-md-6 col-sm-7 mx-auto d-flex justify-content-center" id="educitem">
      <div class="card text-center bg-dark text-light" style=" height: 480px; width:350px; border-radius:25px; ">
        <h2>Elementary</h2><br>
        <p>School Name : Luyos Elementary School</p>
        <p>School Location : Luyos San Antonio N.E</p>
        <p>2009-2015</p><br><br><br><br>
        <img src="img/les.png" alt="" height="170px">
      </div> 
    </div>
    <div class="col-lg-3 col-md-6 col-sm-7 mx-auto d-flex justify-content-center" id="educitem">
      <div class="card text-center bg-dark text-light" style=" height:480px; width:350px; padding:0; border-radius:25px;">
        <h2>Junior / Senior High School</h2>
        <p>School Name : Dr. Jose Lapuz Salonga High School</p>
        <p>School Location : Sto Cristo San Antonio N.E</p>
        <p>SHS Strand : General Academic Strand</p>
        <p>JHS : 2015-2019    SHS : 2019-2021 </p> <br>
        <img src="img/hs (2).png" alt="" height="150px">
      </div> 
    </div>
    <div class="col-lg-3 col-md-6 col-sm-7 mx-auto d-flex justify-content-center" id="educitem">
      <div class="card text-center bg-dark text-light" style=" height:480px; width:350px; padding:0; border-radius:25px;">
        <h2>College</h2>
        <p>School Name : Nueva Ecija University of Science and Technology</p>
        <p>School Location : Poblacion San Antonio N.E</p>
        <p>Course : Bachelor of Science in Information and Technology</p>
        <p>2021-20.. </p> <br> <br>
        <img src="img/cl.webp" alt="" height="150px">
      </div> 
    </div>
  </div>
  </div>
</div> <br>


<!-- photos -->
<div class="contanier bg-dark" id="photo">
  <div class="name">
    <h1 class="text-light pt-5" style="margin-left: 20px; padding-left: 25px;margin-bottom:0;"><b>Photos </b></h1>
  </div>
  <div class="row">
    <a href="school.html"><div class="col p-5 d-flex justify-content-center" id="photos">
      <div class="card" style="width: 350px; height: 400px;">
        <img src="img2/image0_0.jpg" alt="" >
        <center>
          <h2>School Boy</h2>
        </center>
      </div></a>
    </div>
    <div class="col p-5 d-flex justify-content-center" id="photos">
      <a href="friends.html"><div class="card" style="width: 350px; height: 400px;">
        <img src="img2/image1_0.jpg" alt="" >
        <center>
          <h2>With Friends</h2>
        </center>
      </div></a>
    </div>
    <div class="col p-5 d-flex justify-content-center hover-zoom" id="photos">
      <a href="gamer.html"><div class="card" style="width: 350px; height: 400px;">
        <img src="img2/image2_0.jpg" alt="" >
        <center>
          <h2>Gamer</h2>
        </center>
      </div></a>
    </div>
  </div>
</div>

<!-- contact -->
<div class="container mb-4" id="contact">
  <div class="row">
    <h1><b>Contact</b></h1>
    <p>Let's work together, Contact me in</p>

    <div class="container text-center">
  <div class="row align-items-start gap-2">
    <div class="col" id="con">
    <a href="https://www.facebook.com" class="<class="btn btn-lg btn-danger" data-bs-toggle="popover" data-bs-title="Facebook" data-bs-content="">
      <img src="img/facebook.png" alt="" style="width: 100px; height: 100px;"></a>
    </div>
    <div class="col" id="con">
    <a href="https://www.instagram.com"><img src="img/instagram.png" alt="" style="width: 100px; height: 100px;"></a>
    </div>
    <div class="col" id="con">
    <a href="https://x.com/"><img src="img/twitter.png" alt="" style="width: 100px; height: 100px;"></a>
    </div>
    <div class="col" id="con">
    <img src="img/message.png" alt="" style="width: 100px; height: 100px;">
    <p>Zoroit@gmail.com</p>
    </div>
    <div class="col" id="con">
    <img src="img/viber.png" alt="" style="width: 100px; height: 100px;">
    <p>09112234567</p>
    </div>
  </div>
  
</div>
<div class="cv">
  <center>
    Wanna see my <a href="img/">CV?</a>
  </center>
</div>
  </div>
</div>

</div>

<div class="footer text-white" >
  <div class="bg-dark" style="height: 130px; width: 100%; padding-top:10px; padding-bottom:-5px;">
      <center>
        <div style="display: flex; flex-direction:row; justify-content:center;">
        <img src="img/logo.jpg" alt="" style="height:50px; width:50px;">
        <a href="#" style="text-decoration: none; color:white;"><h2 style="padding-top: 10px;">Miechieee</h2></a>
        </div>
        <hr>
        <P>© 2024 Oroz</P>
      </center>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script>
const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
</script>

</body>
</html>

<?php

if(isset($_POST["submit"])){
  $search = $_POST["search"];

  echo `<a href="www.{$search}.com"></a> `;
}

?>