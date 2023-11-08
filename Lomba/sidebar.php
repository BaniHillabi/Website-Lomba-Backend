<!DOCTYPE html>
<html>

<head>
    <title>Sidebar Example</title>
    <style>
        /* CSS untuk sidebar */
        .sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            top: 0;
            left: -250px;
            /* Mulai dengan posisi tersembunyi */
            background-color: #333;
            padding: 20px;
            transition: 0.5s;
        }

        .sidebar a {
            text-decoration: none;
            font-size: 18px;
            color: #fff;
            display: block;
            margin-bottom: 10px;
        }

        .sidebar a:hover {
            color: #00bcd4;
        }

        .profile {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            color: white;
        }

        .logout {
            position: absolute;
            bottom: 50px;
            left: 20px;
        }

        .profile img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }

        /* CSS untuk tombol yang menampilkan/menyembunyikan sidebar */
        #openSidebar {
            position: fixed;
            top: 20px;
            left: 20px;
            font-size: 30px;
            cursor: pointer;
            color: black;
        }

        /* CSS untuk konten utama */
        .content {
            margin-left: 0;
            padding: 20px;
            transition: 0.5s;
        }

        .brand {
            position: relative;
            top: 0px;
            left: 100px;
            font-size: 30px;
            color: black;
        }
    </style>
</head>

<body>

    <div class="sidebar" id="mySidebar">
        <div class="profile">
            <img src="avatar.jpg" alt="Avatar">
            <div>
                <h3>Ibani Muhammad Hillabi</h3>
                <p>ibanihillabi@gmail.com</p>
            </div>
        </div>
        <a href="#section1">Menu 1</a>
        <a href="#section2">Menu 2</a>
        <a href="#section3">Menu 3</a>
        <a href="#section4">Menu 4</a>

        <a class="logout" href="login.php">
            < Logout</a>
    </div>
    </div>

    <div class="content">
        <div id="openSidebar" onclick="toggleSidebar()" class="toggle">&#9776;</div>
        <div class="brand">Olimpiade</div>

    </div>

    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById('mySidebar');
            var content = document.querySelector('.content');
            if (sidebar.style.width === '0px') {
                sidebar.style.width = '250px';
                sidebar.style.left = '0';
                content.style.marginLeft = '250px';
            } else {
                sidebar.style.width = '0';
                sidebar.style.left = '-250px';
                content.style.marginLeft = '0';
            }
        }
    </script>

</body>

</html>