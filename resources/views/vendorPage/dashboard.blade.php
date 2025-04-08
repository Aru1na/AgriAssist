<!DOCTYPE html>
<html lang="en" x-data="{ sidebarOpen: true }">
<head>
  <meta charset="UTF-8">
  <title>Collapsible Sidebar with Topbar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.tailwindcss.com"></script>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bg-stone-100 text-gray-800" x-data="{ sidebarOpen: true }">

<!-- Topbar -->
<div class="fixed top-0 left-0 right-0 h-14 bg-white shadow z-50 flex items-center px-4">
  <button @click="sidebarOpen = !sidebarOpen" class="text-gray-700 text-2xl focus:outline-none">
    <i class="fa fa-bars"></i>
  </button>
  <h1 class="ml-4 text-lg font-semibold">Dashboard</h1>
</div>

<!-- Sidebar -->
<div :class="sidebarOpen ? 'w-64' : 'w-20'" class="fixed top-14 left-0 h-full bg-white border-r shadow transition-all duration-300 z-40 flex flex-col">
  <!-- User Info (Positioned at the top inside the sidebar) -->
  <div class="flex items-center space-x-3 p-4 border-b">
    <div class="bg-gray-300 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold text-sm">BD</div>
    <div x-show="sidebarOpen">
      <div class="font-medium text-sm">Bryan de Alday</div>
      <div class="text-xs text-gray-500">bryan@localhost</div>
    </div>
    <!-- Settings Icon -->
    <i class="fa fa-cog text-gray-500 ml-auto hover:text-gray-700 cursor-pointer" x-show="sidebarOpen"></i>
  </div>

  <!-- Sidebar Content (Navigation) -->
  <div class="p-4 flex-grow overflow-y-auto">
    <nav class="space-y-2">
      <a href="#" class="flex items-center text-gray-700 hover:bg-gray-100 px-3 py-2 rounded">
        <i class="fa fa-truck text-xl" :class="sidebarOpen ? 'mr-3' : 'mx-auto'"></i>
        <span x-show="sidebarOpen">Resupply</span>
      </a>
      <a href="#" class="flex items-center text-gray-700 hover:bg-gray-100 px-3 py-2 rounded">
        <i class="fa fa-file-text text-xl" :class="sidebarOpen ? 'mr-3' : 'mx-auto'"></i>
        <span x-show="sidebarOpen">Orders</span>
      </a>
      <a href="#" class="flex items-center text-gray-700 hover:bg-gray-100 px-3 py-2 rounded">
        <i class="fa fa-history text-xl" :class="sidebarOpen ? 'mr-3' : 'mx-auto'"></i>
        <span x-show="sidebarOpen">History</span>
      </a>
      <a href="#" class="flex items-center text-gray-700 hover:bg-gray-100 px-3 py-2 rounded">
        <i class="fa fa-info-circle text-xl" :class="sidebarOpen ? 'mr-3' : 'mx-auto'"></i>
        <span x-show="sidebarOpen">About</span>
      </a>
      <a href="#" class="flex items-center text-gray-700 hover:bg-gray-100 px-3 py-2 rounded">
        <i class="fa fa-bell text-xl" :class="sidebarOpen ? 'mr-3' : 'mx-auto'"></i>
        <span x-show="sidebarOpen">Notification</span>
      </a>
    </nav>
  </div>
</div>

<!-- Main Content -->
<div :class="sidebarOpen ? 'md:ml-64 ml-20' : 'ml-20'" class="pt-20 transition-all duration-300 p-6">
  <header class="bg-white border border-gray-300 rounded-lg max-w-3xl mx-auto p-6 shadow">
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
      <div>
        <label for="productInput" class="block font-bold mb-2">Select a product</label>
        <input list="productList" id="productInput" placeholder="Type or select a product..." class="w-full h-10 px-3 border rounded">
        <datalist id="productList">
          <option value="Coconut"></option>
          <option value="Rice"></option>
          <option value="Corn"></option>
        </datalist>
      </div>
      <div>
        <label for="price" class="block font-bold mb-2">Price (per kilogram)</label>
        <input type="text" id="price" placeholder="₱15" class="w-full h-10 px-3 border rounded">
      </div>
    </div>
    <div class="mt-6">
      <label for="amount" class="block font-bold mb-2">Amount (in kilogram)</label>
      <input type="text" id="amount" placeholder="1000" class="w-full h-10 px-3 border rounded">
    </div>

    <!-- Order Confirmation & Estimated Total Side-by-Side -->
    <div class="mt-6 flex gap-6">
      <!-- Order Confirmation Box -->
      <div class="p-4 bg-gray-100 rounded-lg w-1/2">
        <h2 class="font-bold text-lg mb-2">Order Confirmation:</h2>
        <p> <br></p>
      </div>

      <!-- Estimated Total Box -->
      <div class="p-4 bg-gray-100 rounded-lg w-1/2">
        <h2 class="font-bold mb-2">EstimaTed Total:</h2>
        <div class="font-semibold text-lg"></div>
      </div>
    </div>

    <!-- Note to Distributor (Full Width) -->
    <div class="mt-6">
      <label for="noteDistributor" class="block font-bold mb-2">Note to Distributor:</label>
      <textarea id="noteDistributor" class="w-full h-32 px-3 border rounded resize-none" placeholder="Enter note here..."></textarea>
    </div>

    <div class="mt-6 text-right">
      <button class="px-6 py-2 bg-green-500 hover:bg-green-600 text-white font-bold rounded">Confirm Order</button>
    </div>
  </header>
</div>

</body>
</html>
