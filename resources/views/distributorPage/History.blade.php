<!DOCTYPE html>
<html lang="en">
<head>
<title>Tailwind CSS Orders Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bg-gray-300 flex justify-center items-center min-h-screen">

<!-- Sidebar -->
<nav class="fixed top-0 left-0 w-20 md:w-32 h-full bg-green-600 flex flex-col items-center py-4">
  <img src="/w3images/avatar_smoke.jpg" class="w-full mb-4">
  <a href="#" class="text-white text-center py-4 w-full hover:bg-gray-700 rounded"> 
    <i class="fa fa-shopping-cart text-2xl"></i>
    <p class="hidden md:block">RESUPPLY</p>
  </a>
  <a href="#about" class="text-white text-center py-4 w-full hover:bg-gray-700 rounded">
    <i class="fa fa-wpforms text-2xl"></i>
    <p class="hidden md:block">ORDERS</p>
  </a>
  <a href="#photos" class="text-white text-center py-4 w-full hover:bg-gray-700 rounded">
    <i class="fa fa-history text-2xl"></i>
    <p class="hidden md:block">ABOUT</p>
  </a>
  <a href="#contact" class="text-white text-center py-4 w-full hover:bg-gray-700 rounded">
    <i class="fa fa-bell text-2xl"></i>
    <p class="hidden md:block">NOTIFICATION</p>
  </a>
</nav>

<!-- Main Content (Centered) -->
<div class="flex flex-col items-center w-full md:w-[600px] bg-white shadow-lg rounded-lg p-6 ml-20 md:ml-32">
  <!-- Header Section -->
  <div class="flex justify-between w-full items-center mb-4">
    <h2 class="text-xl font-bold text-gray-700">Orders</h2>
    <button class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">History</button>
  </div>

  <!-- Order Feed -->
  <div class="w-full space-y-4">
    <div class="p-4 bg-gray-100 rounded-lg shadow">
      <p class="text-sm text-gray-500">2024-12-01</p>
      <p class="text-gray-800">Don't leave me in all this pain</p>
    </div>
    <div class="p-4 bg-gray-100 rounded-lg shadow">
      <p class="text-sm text-gray-500">2024-12-02</p>
      <p class="text-gray-800">Don't leave me out in the rain</p>
    </div>
    <div class="p-4 bg-gray-100 rounded-lg shadow">
      <p class="text-sm text-gray-500">2024-12-03</p>
      <p class="text-gray-800">Come back and bring back my smile</p>
    </div>
    <div class="p-4 bg-gray-100 rounded-lg shadow">
      <p class="text-sm text-gray-500">2024-12-04</p>
      <p class="text-gray-800">Come and take these tears away</p>
    </div>
  </div>

  <!-- Pagination Controls -->
  <div class="flex justify-center gap-4 mt-4">
    <button class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Prev</button>
    <span class="text-gray-600">1 / 3</span>
    <button class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Next</button>
  </div>
</div>

</body>
</html>
