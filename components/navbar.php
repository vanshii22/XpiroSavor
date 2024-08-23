<?php include_once 'components/head.php'; ?>

<body>
    <!-- Navbar start -->
    <nav id="navbar" class="navbar navbar-light navbar-expand-lg ">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="assets/logo.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto  mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="work.php">How it Works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="benefit.php">Benefits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
                <form class="d-flex navbar-form" action="partnership.php">
                    <button class="primary-btn" type="submit">NGO Partnership</button>
                </form>
                <button id="show-login" class="secondary-btn  text-center " type="submit">Login
                    Now</button>
            </div>
        </div>
    </nav>
    <div class="popup">
        <div class="close-btn">&times;</div>
        <div class="form">
            <h2 class="sub-heading text-center">Login Form</h2>
            <div class="form-element">
                <label for="email">Email</label>
                <input type="text" placeholder="Enter Your Email" id="email" required>
            </div>
            <div class="form-element">
                <label for="password">Password</label>
                <input type="password" placeholder="Enter Your Password" id="password" required>
            </div>
            <div class="form-element">
                <input type="checkbox" id="remember-me" >
                <label for="remember-me">Remember me</label>
            </div>
            <div class="form-element">
                <p id="message">Currently this service is not available</p>
            </div>
            <div class="form-element">
                <button id="signin">Sign In</button>
            </div>
            <div class="form-element">
                <a href="#">Forgot Password ?</a>
            </div>
        </div>
    </div>
    <!-- Navbar end -->
    