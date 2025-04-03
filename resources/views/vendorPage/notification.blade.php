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

.w3-sidebar .w3-bar-item:hover {
    border-radius: 5px;
}
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
.w3-sidebar {width: 120px;background: #008000;}
#main {margin-left: 120px}
@media only screen and (max-width: 600px) {#main {margin-left: 0}}

/* Notification Box - Table Design */
.notification-table {
    background-color: white;
    width: 100%;
    margin: 20px 0;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.table-container {
    overflow-x: auto;
}

.table-container table {
    width: 100%;
    border-collapse: collapse;
}

.table-container th, .table-container td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: left;
}

.pagination-controls {
    display: flex;
    align-items: center;
    margin-left: 150px;
    gap: 10px;
    position: absolute;
    bottom: 10px;
    left: 10px;
}

.pagination-controls button {
    background-color: #008000;
    color: white;
    border: none;
    padding: 5px 10px;
    border-radius: 5px;
    cursor: pointer;
}
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
    <p>HISTORY</p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-grey">
    <i class="fa fa-bell w3-xxlarge"></i>
    <p>NOTIFICATION</p>
  </a>
</nav>

<div class="w3-padding-large" id="main">
  <header class="w3-container w3-padding-16 w3-center w3-amber w3-boarder w3-boarder-black" id="home" style="width:900px; height: 900px; margin: auto; border-radius: 10px">
    <div class="notification-table">
      <h2>Notifications</h2>
      <div class="table-container">
        <table>
          <tr>
            <th>Date</th>
            <th>Message</th>
          </tr>
          <tr>
            <td>2024-12-01</td>
            <td>Don't leave me in all this pain</td>
          </tr>
          <tr>
            <td>2024-12-02</td>
            <td>Don't leave me out in the rain</td>
          </tr>
          <tr>
            <td>2024-12-03</td>
            <td>Come back and bring back my smile</td>
          </tr>
          <tr>
            <td>2024-12-04</td>
            <td>Come and take these tears away</td>
          </tr>
        </table>
      </div>
      <div class="pagination-controls">
        <button>&laquo; Prev</button>
        <span>1 / 3</span>
        <button>Next &raquo;</button>
      </div>
    </div>
  </header>
</div>
</body>
</html>
