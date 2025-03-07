<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Khách Sạn</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f4f4f4;
        }

        .wrapper {
            width: 100%;
            margin: 0 auto;
        }

        /* Header */
        .header {
            width: 100%;
            height: 500px;
            position: relative;
        }

        .header img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-bottom: 5px solid #2c3e50;
        }

        /* Menu */
        .menu {
            background: #2c3e50;
            padding: 15px 0;
        }

        .mucluc ul {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 30px;
        }

        .mucluc ul li {
            display: inline;
        }

        .mucluc ul li a {
            text-decoration: none;
            color: white;
            font-size: 18px;
            font-weight: bold;
            transition: 0.3s;
            padding: 10px 15px;
            border-radius: 5px;
        }

        .mucluc ul li a:hover {
            background: #1abc9c;
        }

        /* Main Content */
        .main {
            width: 80%;
            margin: 20px auto;
            padding: 30px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        /* Footer */
        .footer {
            background: #2c3e50;
            color: white;
            text-align: cNenter;
            padding: 20px 0;
            font-size: 16px;
            margin-top: 20px;
        }
        h2{
        	font-size: 35px;
        	color: #AC8933 ;

        }
        h3{
        	color: #FF1C0B ;
        }
    </style>
</head>
<body>

    <div class="wrapper">
        <!-- Header -->
        <div class="header">
            <img src="images/A25.jpg" alt="Khách Sạn">
        </div>

        <!-- Menu -->
        <div class="menu">
            <div class="mucluc">
                <ul>
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Danh Mục</a></li>
                    <li><a href="#">Tin tức</a></li>
                    <li><a href="#">Ưu đãi</a></li>
                </ul>
            </div>
        </div>

        <!-- Main -->
        <div class="main">

            <h2>Cơ sở Khách sạn</h2>
              <h3>__________</h3>
            <h3>    _____________________  </h3>
            <h3>__________</h3>
           
        </div>
       

        <!-- Footer -->
        <div class="footer">
            <p>&copy; Copyright © A25 Hotel .All Rights Reserved | Design by webhotel.vn</p>
        </div>
    </div>

</body>
</html>
