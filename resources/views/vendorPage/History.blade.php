<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>W3.CSS Template</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body, h1, h2, h3, h4, h5, h6 {
            font-family: "Montserrat", sans-serif;
        }

        .w3-sidebar {
            width: 120px;
            background: #008000;
            transition: 0.3s;
        }

        /* Responsive Sidebar */
        @media (max-width: 768px) {
            .w3-sidebar {
                width: 120px;
                display: none;
            }
            #main {
                margin-left: 0;
            }
            .menu-toggle {
                display: block;
            }
        }

        /* Notification Table */
        .notification-table {
            background-color: white;
            width: 900px;
            max-width: 100%;
            margin: 20px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            overflow-x: auto; /* Ensures scrollability */
        }

        .table-container table {
            width: 100%;
            min-width: 600px;
            border-collapse: collapse;
        }

        .table-container th, .table-container td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        /* Pagination */
        .pagination-controls {
            display: flex;
            align-items: center;
            gap: 10px;
            justify-content: right;
            margin-top: 10px;
        }

        .pagination-controls button {
            background-color: #008000;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .header-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .history-button {
            background-color: #008000;
            color: white;
            border: none;
            padding: 5px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Main container adjustments */
        #main {
            margin-left: 120px;
            transition: margin-left 0.3s;
        }

        @media only screen and (max-width: 900px) {
            #main {
                margin-left: 0;
                padding: 10px;
            }
        }

        /* Sidebar Toggle Button */
        .menu-toggle {
            font-size: 24px;
            cursor: pointer;
            padding: 10px;
            display: none;
            position: fixed;
            top: 10px;
            left: 10px;
            background: #008000;
            color: white;
            border: none;
            border-radius: 5px;
        }
    </style>
</head>
<body class="w3-grey">

<!-- Sidebar -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center" id="sidebar">
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

<!-- Sidebar Toggle Button -->
<button class="menu-toggle" onclick="toggleSidebar()">☰</button>

<!-- Main Content -->
<div class="w3-padding-large" id="main">
    <header class="w3-container w3-padding-16 w3-center w3-amber" id="home" 
        style="max-width: 900px; margin: auto; border-radius: 10px;">
        <div class="notification-table">
            <div class="header-section">
                <h2 style="text-align: left;">Orders</h2>
                <button class="history-button">History</button>
            </div>
            <div class="table-container">
                <table>
                    <tr>
                        <th>Date</th>
                        <th>Resupply</th>
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

<script>
    function toggleSidebar() {
        var sidebar = document.getElementById("sidebar");
        if (sidebar.style.display === "block") {
            sidebar.style.display = "none";
        } else {
            sidebar.style.display = "block";
        }
    }
</script>

</body>
</html>
