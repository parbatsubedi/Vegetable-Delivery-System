<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== BOX ICONS ===== -->
        <!-- <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'> -->

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="./dashboard.css">

        <title>Sidebar menu responsive</title>
    </head>
    <body id="body-pd"> 
        <header class="header" id="header">
            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>
            <div class="header__img">
                <img src="img/p-1.jpg">
            </div>
        </header> 

        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                    
                    <!-- <a href="#welcome" class="active">
                        <li> <span class="menu">Home</span> </li>
                    </a><br /> -->
                    
                    <div class="nav__list">
                        <a href="#" class="nav__link active">
                            <span class="nav__name">Dashboard</span>
                        </a>
                        <a href="./category.php" class="nav__link">
                            <span class="nav__name">Users</span>
                        </a>
                        <a href="#" class="nav__link">
                            <span class="nav__name">categories</span>
                        </a>
                        <a href="#" class="nav__link">
                            <span class="nav__name">products</span>
                        </a>
                        <a href="#" class="nav__link">
                            <span class="nav__name">Analytics</span>
                        </a>
                        <a href="#" class="nav__link">
                            <span class="nav__name">Support</span>
                        </a>
                    </div>
                </div>
                <a href="#" class="nav__link">
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>
        <div class="nav-left">
            <p> welcome to admin panel </p>
     

<?php
    // include_once('functions.php');
    session_start();

    ?>

    <h1>Welcome Parbat</h1>
    <a href = "../../components/login.php"><input type="submit" name="signout" value="signout">
    </a>  

    </div>

        <!-- <h1>Responsive Sidebar Menu</h1>
        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
         -->
        <!--===== MAIN JS =====-->
        <script src="js/main.js"></script>
    </body>
</html>

