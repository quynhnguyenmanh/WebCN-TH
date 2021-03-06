<?php
if (!isset($_SESSION)) session_start();
//unset($_SESSION['user']);
?>
<!-- Navbar Area -->
<div class="oneMusic-main-menu">
    <div class="classy-nav-container breakpoint-off">
        <div class="container">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="oneMusicNav">

                <!-- Nav brand -->
                <a href="index.php" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">

                    <!-- Close Button -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="index.php">Trang Chủ</a></li>
                            <li><a href="albums-store.php">Albums</a></li>
                            <li><a href="#">Dowload Source Code</a></li>
                            <li><a href="contact.php">Liên Hệ</a></li>
                        </ul>

                        <!-- Login/Register & Cart Button -->
                        <div class="login-register-cart-button d-flex align-items-center">
                            <!-- Login/Register -->
                            <div class="login-register-btn mr-50">
                                <?php
                                    if (!isset($_SESSION['user']))
                                    {?>
                                        <a href="login.php" id="loginBtn">Login / Register</a>
                                    <?php
                                    }
                                    else{
                                        echo "Hi, ".$_SESSION['user'] ;
                                        ?>
                                            <a href="subfile/login/logout.php">Logout</a>
                                        <?php
                                        
                                    }
                                ?>
                            </div>

                            <!-- Cart Button
                                    <div class="cart-btn">
                                        <p><span class="icon-shopping-cart"></span> <span class="quantity">1</span></p>
                                    </div> -->
                        </div>
                    </div>
                    <!-- Nav End -->

                </div>
            </nav>
        </div>
    </div>
</div>