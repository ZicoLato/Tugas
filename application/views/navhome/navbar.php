<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie database</title>
    <style>
       nav {
        background-color: #333;
        }

        nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
        }

        nav ul li {
        margin:0 10px;
        }

        nav ul li a {
        display: block;
        color: #fff;
        text-decoration: none;
        padding: 15px 20px;
        border-radius: 5px;
        transition: background-color 0.3 ease;
        }

        nav ul li a:hover {
        background-color: #555;
        }
    </style>
</head>
<body>
  <nav>
    <ul>
        <li><a href="<?php echo site_url("welcome"); ?>">Home</a></li>
        <li><a href="<?php echo site_url("api"); ?>">Movie</a></li>
        <li><a href="<?php echo site_url("belajar"); ?>">Database</a></li>
    </ul>
  </nav>
</body>
</html>

