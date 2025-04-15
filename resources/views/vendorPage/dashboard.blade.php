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

/* Hover effect: Add border-radius */
.w3-sidebar .w3-bar-item:hover {
    border-radius: 5px;
}
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #008000;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
</head>
<body class="w3-grey">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
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


<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
    <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-16 w3-center w3-amber w3-boarder w3-boarder-black" id="home" style="width:900px; height: 900px; margin: auto; border-radius: 10px">
  <div style="display: flex; justify-content: center; gap: 30px; margin-top: 5px; align-items:center">
   <!-- Container for structured rectangles -->
   <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 60px; justify-items: auto; margin-top: 30px; margin-left: 25px;">
    
    <!-- First Rectangle (Column 1) -->
    <div style="position: relative; display: inline-block; width: 300px;">
  <label for="productInput" class="w3-text-black" style="margin-bottom: 5px; text-align: left; font-weight: bold; display: block;">
    Select a product
  </label>
  
  <input list="productList" id="productInput" class="w3-input w3-border" placeholder="Type or select a product..." 
         style="padding: 10px; width: 100%; height: 40px; border-radius: 5px; padding-right: 30px;">
  
  <datalist id="productList">
    <option value="Product 1"></option>
    <option value="Product 2"></option>
    <option value="Product 3"></option>
  </datalist>

  <!-- Dropdown Icon -->
  <div style="position: absolute; right: 35px; top: 76%; transform: translateY(-45%); pointer-events: none;">
    ▼
  </div>
</div>

    <!-- Second Rectangle with Label -->
    <div style="grid-column: 3; display: flex; flex-direction: column; align-items: flex-start;">

      <label for="field2" class="w3-text-black" style="margin-bottom: 5px; text-align: left; font-weight: bold;">Price</label>
      <input type="text" id="field2" class="w3-input w3-border" placeholder="Enter text here..." 
             style="padding: 10px; width: 300px; height: 40px; border-radius: 5px;">
    </div>
    
    <!-- Third Rectangle with Label (Below First One, 3 Spaces Apart) -->
    <div style="grid-column: 1; grid-row: 2;display: flex; flex-direction: column; align-items: flex-start;">
      <label for="field3" class="w3-text-black" style="margin-bottom: 5px; text-align: left; font-weight: bold;">Amount</label>
      <input type="text" id="field3" class="w3-input w3-border" placeholder="Enter text here..." 
             style="padding: 10px; width: 100px; height: 40px; border-radius: 5px;">
    </div>   

        <!-- Third Rectangle with Label (Below First One, 3 Spaces Apart) -->
        <div style="grid-column: 1; grid-row: 3;display: flex; flex-direction: column; align-items: flex-start;">
      <label for="field3" class="w3-text-black" style="margin-bottom: 5px; text-align: left; font-weight: bold;">Order Confirmation:</label>
      <input type="text" id="field3" class="w3-input w3-border" placeholder="Enter text here..." 
             style="padding: 10px; width: 400px; height: 100px; border-radius: 5px;">
    </div>   
    
    <!-- Fourth Rectangle with Label (Below First One, 3 Spaces Apart) -->
    <div style="grid-column: 3; grid-row: 3;display: flex; flex-direction: column; align-items: flex-start;">
      <label for="field3" class="w3-text-black" style="margin-bottom: 5px; text-align: left; font-weight: bold;">Estimated Total:</label>
      <input type="text" id="field3" class="w3-input w3-border" placeholder="Enter text here..." 
             style="padding: 10px; width: 200px; height: 40px; border-radius: 5px;">
    </div>
    
    <!-- Note to Distributor (Positioned Between Estimated Total & Additional Notes) -->
<div style="position: absolute; left: 50%; transform: translateX(-50%); top: 500px; 
            display: flex; flex-direction: column; align-items: flex-start; margin: 30px; ">
  <label for="noteDistributor" class="w3-text-black" 
         style="margin-bottom: 5px; text-align: left; font-weight: bold;">Note to Distributor:</label>
  <input type="text" id="noteDistributor" class="w3-input w3-border" placeholder="Enter text here..." 
         style="padding: 10px; width: 800px; height: 200px; border-radius: 5px;">
</div>


    <!-- Sixth Rectangle (Now a Clickable Button) -->
<div style="grid-column: 3; grid-row: 9; display: flex; flex-direction: column; align-items: flex-start;">

  <button id="additionalNotesBtn" class="w3-button w3-border w3-hover-light-grey" 
          style="padding: 10px; width: 300px; height: 40px; border-radius: 5px; background-color: #ffcc00; font-weight: bold;">
    Place Order
  </button>
</div>

  </div>

  


          
          
          
          
             
  </header>

  
  
    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">w3.css</a></p>
  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>