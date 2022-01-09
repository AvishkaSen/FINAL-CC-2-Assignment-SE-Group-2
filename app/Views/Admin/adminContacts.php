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
        <!-- <link rel="stylesheet" href="<?php echo base_url('/assets/css/createad.css') ?>">-->
        <link rel="stylesheet" href="<?php echo base_url('/assets/css/footer.css') ?>">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--bootstrap css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>

    <body>

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

        <!-- ADMIN ADS AWAITING APPROVAL -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-3 mb-3">
                    <div class="card border border-dark mb-3 mt-3">

                        <div class="card-header">
                            <h4 class="text-center text-success pt-1">Site Visitor Inquiries (Contact Us)</h4>
                        </div>

                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Subject</th>
                                        <th>Name</th>
                                        <th>Contact Number</th>
                                        <th>Email</th>
                                        <th>Description</th>
                                        <th>Remove</th>
                                    
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <?php

                                        session();

                                        $contactusModel = new \App\Models\contactusModel;

                                        // Runs query to get approved ads of the user
                                        $query = $contactusModel -> query("SELECT * FROM contactus"); 

                                        foreach ($query -> getResult() as $row){

                                    ?>
                                        <tr>
                                            <td><?php echo $row -> subject ?></td>
                                            <td><?php echo $row -> name ?></td>
                                            <td><?php echo $row -> mobile ?></td>
                                            <td><?php echo $row -> email ?></td>
                                            <td><?php echo $row -> description ?></td>
                                            
                                            <td>
                                                <a href="<?php echo base_url('contactUs/deleteInquiry/'.$row -> id)?>" class="btn btn-outline-danger float-end btn-sm">Delete</a>
                                            </td>
                                            
                                        </tr>
                                    <?php 
                                    } 
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Admin ads awaiting approval -->


        <!-- REPLY TO INQUIRY FORM -->
        <div class="container rounded mt-4 col-md-6 border border-dark mb-5"> 
            <div class="row">
                <div class="col-md-12 border-right">
                    <div class="p-5 py-5">

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 id="header1" class="text-center text-success display-6 p-2 font-weight-bold">Reply to Inquiry</h4>
                        </div>

                        <!-- Sends form data to the inquiries funciton in the contactUs controller-->
                        <form action=<?php echo site_url('contactUs/replyInquiry') ?> method="post">


                            <!-- Reply Subject -->
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="labels">Subject:</label>
                                    <input type="text" class="form-control" placeholder="enter reply subject" name="subject required">
                                </div>
                            </div>
                            
                            <!-- Reply Email -->
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <label class="labels">E-mail:</label>
                                    <input type="email" class="form-control" placeholder="user's email address" name="email" required>
                                </div>
                            </div>
                            
                            <!-- Reply Information -->
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <label class="labels">Description:</label>
                                    <textarea type="text" rows="5" class="form-control" placeholder="enter your reply here" name="description" required></textarea>
                                </div>

                            </div>

                            <!-- Inquiry Submit Button -->
                            <div class="text-center pt-5">
                                <input class="btn btn-outline-success profile-button btn-lg" type="submit" value="Reply"> </input>
                            </div> 

                        </form>

                    </div>
                </div>
            </div>

        </div>
        <!-- END OF REPLY TO INQUIRY FORM -->


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
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Career Details</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            </div>
            <p class="copyright"><i class="fa fa-copyright" aria-hidden="true"></i> 2021 Group 2 Avishka . Dilki . Siduja . Yahya </p>
        </footer>
        <!-- End of Footer -->

    </body>
</html>



