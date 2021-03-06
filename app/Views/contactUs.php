<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FutureSeekers</title>
        <link rel="stylesheet" href="<?php echo base_url('/assets/css/main.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('/assets/css/background.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('/assets/css/nav.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('/assets/css/home.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('/assets/css/footer.css') ?>">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <style>

        /* For message when contact us info is recieved */
        .alert2 {
            padding: 20px;
            background-color: green;
            color: white;
            text-align: center;
        }

        /* For message echoed when CV file related issue arises */
        .alert3 {
            padding: 20px;
            background-color: red;
            color: white;
            text-align: center;
        }

    </style>


    <body>
    
        <!-- Navbar Section -->
        <?php 

        // Regens session
        session();
        session() -> regenerate(); 
        $user_id = session()->get('UserID'); // Gets the user ID session


        if(!isset($_SESSION['UserID']))
        {
            // If no user is logged in, display the basic navigation bar
        ?>

            <header>
                <h1 class="heading">FutureSeekers</h1>

                <nav>
                    <ul class="nav-links">
                        <li><a href="<?php echo base_url('Home/home')?>">Home</a></li>
                        <li><a href="<?php echo base_url('Jobs/index')?>">Jobs</a></li>
                        <li><a href="<?php echo base_url('Home/aboutUs')?>">About Us</a></li>
                        <li><a href="<?php echo base_url('Home/contactUs')?>">Contact Us</a></li>
                    </ul>
                </nav>

                <a href="<?php echo base_url('Login/index')?>" class="cta">Login</a> <!-- Login here -->

            </header>

        <?php

        // if user is an applicant
        } else if ($_SESSION["Type of User"] == "Applicant") {

        ?>

            <header>
            <h1 class="heading">FutureSeekers</h1>

            <nav>
                <ul class="nav-links">
                    <li><a href="<?php echo base_url('Home/home')?>">Home</a></li>
                    <li><a href="<?php echo base_url('Jobs/index')?>">Jobs</a></li>
                    <li><a href="<?php echo base_url('Home/aboutUs')?>">About Us</a></li>
                    <li><a href="<?php echo base_url('Home/contactUs')?>">Contact Us</a></li>
                    <li><a href="<?php echo base_url('myProfile/index')?>">My Profile</a></li>
                </ul>
            </nav>

            <a href="<?php echo base_url('Logout/logout')?>" class="cta">Logout</a> <!-- Log out here -->

        </header>


        <?php
        } else if ($_SESSION["Type of User"] == "Company") 
        {
        ?>

            <header>
                <h1 class="heading">FutureSeekers</h1>

                <nav>
                    <ul class="nav-links">
                        <li><a href="<?php echo base_url('Home/home')?>">Home</a></li>
                        <li><a href="<?php echo base_url('Postings/index')?>">My Adverts</a></li>
                        <li><a href="<?php echo base_url('Createad/index')?>">Create Job Advert</a></li>
                        <li><a href="<?php echo base_url('Company/Reports')?>">Reports</a></li>
                        <li><a href="<?php echo base_url('Home/aboutUs')?>">About Us</a></li>
                        <li><a href="<?php echo base_url('Home/contactUs')?>">Contact Us</a></li>
                        <li><a href="<?php echo base_url('myProfile/index')?>">My Profile</a></li>
                    </ul>
                </nav>

                <a href="<?php echo base_url('Logout/logout')?>" class="cta">Logout</a> <!-- Log out here -->
            </header>

        <?php
        } else if ($_SESSION["Type of User"] == "Admin") 
        {
        ?>

            <!--Nav -->
            <header>
                <h1 class="heading">FutureSeekers</h1>
                <nav>
                    <ul class="nav-links">
                        <li><a href="<?php echo base_url('Home/home')?>">Home</a></li>
                        <li><a href="<?php echo base_url('Admin/index')?>">Dashboard</a></li>
                        <li><a href="<?php echo base_url('Admin/users')?>">Users</a></li>
                        <li><a href="<?php echo base_url('Admin/ads')?>">Job Adverts</a></li>
                        <li><a href="<?php echo base_url('Admin/reports')?>">Reports</a></li>
                        <li><a href="<?php echo base_url('myProfile/index')?>">My Profile</a></li>
                    </ul>
                </nav>
                <a href="<?php echo base_url('Logout/logout')?>" class="cta">Logout</a> <!-- Log out here -->
            </header>

        <?php
        }
        ?>
        <!-- End of Navbar Section -->


        <!-- CONTACT US FORM -->
        <div class="container rounded mt-4 col-md-5 border border-dark mb-4"> 
            <div class="row">
                <div class="col-md-12 border-right">
                    <div class="d-flex flex-column align-items-center p-3 py-5">

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 id="header1" class="text-right text-success display-6 p-2 font-weight-bold">CONTACT US</h4>
                        </div>

                        <!-- Sends form data to the inquiries funciton in the contactUs controller-->
                        <form action=<?php echo site_url('contactUs/inquiries') ?> method="post">


                            <!-- Subject -->
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="labels">Subject:</label>
                                    <input type="text" class="form-control" placeholder="enter subject" name="subject">
                                </div>
                            </div>
                        
                            <div class="row mt-2">

                                <!-- Name -->
                                <div class="col-md-6">
                                    <label class="labels">Name:</label>
                                    <input type="text" class="form-control" placeholder="name here" name="name">
                                </div>
                                
                                <!-- Contact Number -->
                                <div class="col-md-6">
                                    <label class="labels">Contact Number:</label>
                                    <input type="text" class="form-control" placeholder="+94" name="contactnumber">
                                </div>

                            </div>
                            
                            <!-- Email -->
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <label class="labels">E-mail:</label>
                                    <label id="email">(?)</label>
                                    <input type="text" class="form-control" placeholder="email address" name="email">
                                </div>
                            </div>
                            
                            <!-- Description -->
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <label class="labels">Description:</label>
                                    <label id="description">(?)</label>
                                    <textarea type="text" rows="4" class="form-control" placeholder="describe your inquiry here" name="description"></textarea>
                                </div>

                            </div>

                            <!-- Submit Button -->
                            <div class="text-center pt-5">
                                <input class="btn btn-outline-primary profile-button btn-lg" type="submit" value="Submit"> </input>
                            </div> 

                        </form>

                    </div>
                </div>
            </div>

        </div>
        <!-- END OF CONTACT US FORM -->


        <!-- General information -->
        <div class="container rounded p-4 mt-2 col-md-5 border border-success mb-4">
            <label> Or you can contact us directly through our support line!</label> <br>
            <label> Hotline : +94 0117 675 100 </label> <br>
            <label> Email : futureseekershelp@gmail.com </label>
        </div>

        
        <!-- Start of Tawk.to Script for contact us page -->
        <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
                var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                s1.async=true;
                s1.src='https://embed.tawk.to/61dbe180f7cf527e84d14aac/1fp1eho59';
                s1.charset='UTF-8';
                s1.setAttribute('crossorigin','*');
                s0.parentNode.insertBefore(s1,s0);
            })();
        </script>
        <!-- End of Tawk.to Script for contact us page -->


        <!-- Footer -->
        <footer>

            <div class="row">
            <div class="col desc">
                <h2 class="logo">FutureSeekers</h2>
                <p>Best website to browse and find the perfect job offers suiting your qualifications and career goals</p>
            </div>
            <div class="col location">
                <h3 class="head">Visit us at</h3>
                <p>No. 388 Union Pl,</p>
                <p>Colombo,</p>
                <p>00200.</p>
                <p>0117 675 100</p>
            </div>
            <div class="col socials">
                <h3 class="head">Social Media</h3>
                <ul class="col-s">
                    <li><i class="fa fa-facebook-official" aria-hidden="true"></i></li>
                    <li><i class="fa fa-linkedin-square" aria-hidden="true"></i></li>
                    <li><i class="fa fa-instagram" aria-hidden="true"></i></li>
                    <li><i class="fa fa-twitter-square" aria-hidden="true"></i></li>
                </ul>
            </div>
            <div class="col link">
            <h3 class="head">Links</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="<?php echo base_url('Home/aboutUs')?>">About Us</a></li>
                    <li><a href="#">Career Details</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            </div>
            <p class="copyright"><i class="fa fa-copyright" aria-hidden="true"></i> 2021 Group 2 Avishka . Dilki . Siduja . Yahya </p>

        </footer>
        <!-- End of Footer -->

        <!-- Production -->
        <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js"></script>
        <script src="https://unpkg.com/tippy.js@6/dist/tippy-bundle.umd.js"></script>
        
        <!-- Javascript section for tippy tooltips -->
        <script>

            tippy('#description', {
                content: "Please enter your inquiry in the description box. We will get back to you as soon as possible.",
                placement: 'top',
            });

            tippy('#email', {
                content: "The email you wish for us to reply to. ",
                placement: 'top',
            });

        </script>

    </body>

</html>