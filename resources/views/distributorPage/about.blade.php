<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.w3-sidebar .w3-bar-item {
    transition: all 0.3s ease-in-out;
}
.w3-sidebar .w3-bar-item:hover { border-radius: 5px; }
body, h1, h2, h3, h4, h5, h6 { font-family: "Montserrat", sans-serif; }
.w3-row-padding img { margin-bottom: 12px; }
.w3-sidebar { width: 120px; background: #008000; }
#main { margin-left: 120px; }
@media only screen and (max-width: 600px) { #main { margin-left: 0; } }

/* Image Carousel */
.carousel-container {
    background-color: white;
    width: 100%;
    max-width: 600px;
    margin: 20px auto;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    position: relative;
}
.carousel-images img {
    width: 100%;
    display: none;
}
.carousel-images img.active { display: block; }
.carousel-dots {
    text-align: center;
    margin-top: 10px;
}
.carousel-dots .dot {
    height: 10px;
    width: 10px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    margin: 0 5px;
    cursor: pointer;
}
.carousel-dots .dot.active { background-color: #008000; }
</style>
</head>
<body class="w3-grey">

<!-- Sidebar -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <img src="/w3images/avatar_smoke.jpg" style="width:100%">
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-grey">
    <i class="fa fa-shopping-cart w3-xxlarge"></i>
    <p>RESUPPLY</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-grey">
    <i class="fa fa-wpforms w3-xxlarge"></i>
    <p>ORDERS</p>
  </a>
  <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-grey">
    <i class="fa fa-history w3-xxlarge"></i>
    <p>ABOUT</p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-grey">
    <i class="fa fa-bell w3-xxlarge"></i>
    <p>NOTIFICATION</p>
  </a>
</nav>

<div class="w3-padding-large" id="main">
  <header class="w3-container w3-padding-16 w3-center w3-amber w3-border w3-border-black" id="home" style="width:900px; height: 900px; margin: auto; border-radius: 10px">
    <div class="carousel-container">
      <div class="carousel-images">
        <img src="Image+1" class="active">
        <img src="Image+2">
        <img src="Image+3">
      </div>
      <div class="carousel-dots">
        <span class="dot active" onclick="showImage(0)"></span>
        <span class="dot" onclick="showImage(1)"></span>
        <span class="dot" onclick="showImage(2)"></span>
      </div>
    </div>
  </header>
</div>

<script>
let currentIndex = 0;
const images = document.querySelectorAll(".carousel-images img");
const dots = document.querySelectorAll(".carousel-dots .dot");

function showImage(index) {
    images[currentIndex].classList.remove("active");
    dots[currentIndex].classList.remove("active");
    currentIndex = index;
    images[currentIndex].classList.add("active");
    dots[currentIndex].classList.add("active");
}

setInterval(() => {
    const nextIndex = (currentIndex + 1) % images.length;
    showImage(nextIndex);
}, 3000); // Auto slide every 3 seconds
</script>

</body>
</html>
