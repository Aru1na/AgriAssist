<!DOCTYPE html>
<html lang="en">
<head>
<title>Responsive Sidebar with Icons</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
/* Sidebar styles */
.sidebar {
    width: 120px;
    background: #008000;
    height: 100vh;
    position: fixed;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-top: 20px;
    transition: all 0.3s ease-in-out;
}
.sidebar a {
    text-align: center;
    padding: 16px;
    width: 100%;
    color: white;
    transition: all 0.3s ease-in-out;
}
.sidebar a:hover {
    background-color: rgba(255, 255, 255, 0.2);
    border-radius: 5px;
}
.sidebar i {
    font-size: 24px;
    display: block;
    margin-bottom: 5px;
}

/* Mobile Menu */
.mobile-menu {
    display: none;
    background: #008000;
    position: fixed;
    width: 100%;
    height: 100vh;
    top: 0;
    left: 0;
    flex-direction: column;
    align-items: center;
    padding-top: 40px;
}
.mobile-menu a {
    padding: 16px;
    color: white;
    text-align: center;
    display: block;
    width: 100%;
}
.mobile-menu a:hover {
    background: rgba(255, 255, 255, 0.2);
}
@media (max-width: 768px) {
    .sidebar { display: none; }
    .mobile-menu { display: flex; }
}
</style>
</head>
<body class="bg-gray-200">

<!-- Sidebar (History-Style) -->
<nav class="sidebar hidden md:flex">
  <img src="https://via.placeholder.com/100" class="rounded-full mb-4">
  <a href="#"><i class="fa fa-shopping-cart"></i><p>RESUPPLY</p></a>
  <a href="#"><i class="fa fa-wpforms"></i><p>ORDERS</p></a>
  <a href="#"><i class="fa fa-history"></i><p>ABOUT</p></a>
  <a href="#"><i class="fa fa-bell"></i><p>NOTIFICATIONS</p></a>
</nav>

<!-- Mobile Sidebar Button -->
<button id="menuBtn" class="fixed top-4 left-4 md:hidden bg-green-700 text-white px-4 py-2 rounded-lg">
  ☰ Menu
</button>

<!-- Mobile Sidebar -->
<div id="mobileMenu" class="mobile-menu hidden">
  <button id="closeMenu" class="absolute top-4 right-4 text-white text-lg font-bold">✖</button>
  <a href="#"><i class="fa fa-shopping-cart"></i> RESUPPLY</a>
  <a href="#"><i class="fa fa-wpforms"></i> ORDERS</a>
  <a href="#"><i class="fa fa-history"></i> ABOUT</a>
  <a href="#"><i class="fa fa-bell"></i> NOTIFICATIONS</a>
</div>

<!-- Main Content -->
<div class="flex-1 md:ml-[120px] flex justify-center items-center min-h-screen">
  <div class="w-full md:w-[600px] bg-white shadow-lg rounded-lg p-6">
    <h2 class="text-center text-xl font-bold mb-4">Content Area</h2>
    <p class="text-gray-600 text-center">This is the main content section.</p>
  </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const menuBtn = document.getElementById("menuBtn");
    const mobileMenu = document.getElementById("mobileMenu");
    const closeMenu = document.getElementById("closeMenu");

    menuBtn.addEventListener("click", () => mobileMenu.classList.toggle("hidden"));
    closeMenu.addEventListener("click", () => mobileMenu.classList.add("hidden"));
});
</script>

</body>
</html>
