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

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>


    <body>

        <!-- The pop up -->

            <!-- Applicant account's pop up -->
            <div id="applicantModal" class="modal2">
                <div class="modal2-content">

                    <div class="modal2-header">
                        <span class="close">&times;</span>
                        <h2 class="p-3">WELCOME & HELLO!</h2>
                    </div>

                    <div class="modal2-body">

                        <!-- Applicant modal image -->
                        <img src="<?php echo base_url('/assets/img/applicant_modal.jpg') ?>" alt="applicant image" width="300" height="300">
                        
                        <p> Welcome to FutureSeekers! </p>
                        <p> The prime choice for a meaningful hiring process and the next step in your professional career! Thank you for choosing us!</p>
                        <p> As a job seeker, you can find and apply to any adverts that are approved on the site with your CV and contact information for companies to see.</p>
                        <p> You can also search for job openings by company name, job title, or job location, and remote work. </p>
                        <br>
                        <p> For any FutureSeekers inquiries, please send an email to our support service team </p>
                        <p> <i> futureseekershelp@gmail.com </i> </p>

                    </div>
                </div>
            </div>

            <!-- Company account's pop up --> 
            <div id="companyModal" class="modal2">
                <div class="modal2-content">

                    <div class="modal2-header">
                        <span class="close">&times;</span>
                        <h2 class="p-3">WELCOME & HELLO!</h2>
                    </div>

                    <div class="modal2-body">

                        <!-- Company modal image -->
                        <img src="<?php echo base_url('/assets/img/company_modal.jpg') ?>" alt="applicant image" width="500" height="300">

                        <p> Welcome to FutureSeekers! </p>
                        <p> The prime choice for a meaningful hiring process and the next step in your professional career! Thank you for choosing us!</p>
                        <p> As a company, you can upload job advertisements of your company's job openings.</p>
                        <p> After a payment proccess, and then approved by our site admins, it will be made public for all job seekers to see. </p>
                        <p> And for them to apply to it with their CV. </p>
                        <br>
                        <p> For any FutureSeekers inquiries, please send an email to our support service team </p>
                        <p> <i> futureseekershelp@gmail.com </i> </p>

                    </div>
                </div>
            </div>

        <!-- End of pop up -->


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
            
            
        <?php
            // Checks if the user is a new user
            if(!isset($_SESSION['UserID']))
            {
                // Does nothing. 
                // This is to bypass undefined array key error
            }
            else if($_SESSION["New"] == "Yes" && $_SESSION["Type of User"] == "Applicant")
                // If the user is a new user, display the pop up
            {

                // If the account is new, display this pop up modal
                echo '
                <script>

                    var modalObject = document.getElementById("applicantModal"); // the modal

                    var spanObject = document.getElementsByClassName("close")[0]; // Closing

                    modalObject.style.display = "block"; // Displays the modal

                    // If the X is clicked, close the modal
                    spanObject.onclick = function() {
                        modalObject.style.display = "none";
                    }


                    // Closes the modal if the user presses something anywhere
                    window.onclick = function(event) {

                        if (event.target == modalObject) {
                            modalObject.style.display = "none";
                        }
                    }

                </script>
                ';

                // Changes the session to user is not new anymore
                $_SESSION["New"] = "No";

                // updates the database to User account not new
                $model = new \App\Models\userModel;
                $updateNew = $model -> query("UPDATE registrations SET new = 'No' WHERE id = $user_id");

            } else if ($_SESSION["New"] == "Yes" && $_SESSION["Type of User"] == "Company" ) {


                // If the account is new, display this pop up modal
                echo '
                <script>

                    var modalObject = document.getElementById("companyModal"); // the modal

                    var spanObject = document.getElementsByClassName("close")[0]; // Closing

                    modalObject.style.display = "block"; // Displays the modal

                    // If the X is clicked, close the modal
                    spanObject.onclick = function() {
                        modalObject.style.display = "none";
                    }


                    // Closes the modal if the user presses something anywhere
                    window.onclick = function(event) {

                        if (event.target == modalObject) {
                            modalObject.style.display = "none";
                        }
                    }

                </script>
                ';
                
                // Changes the session to user is not new anymore
                $_SESSION["New"] = "No";

                // updates the database to User account not new
                $model = new \App\Models\userModel;
                $updateNew = $model -> query("UPDATE registrations SET new = 'No' WHERE id = $user_id");

            }

        ?>
        <!-- End of pop up section -->


        <!-- Home page box section-->
        <div class="bx1">
            <div>
                <img src="<?php echo base_url('/assets/img/search.jpg') ?>" alt="search-img">
            </div>
            
            <div class="cnt1">
            
            <?php 

                $userName = session()->get('First Name'); // Gets the User's Name from the session

                // If session is not set, or user is an applicant
                if( !isset($_SESSION['UserID']) || $_SESSION['Type of User'] == 'Applicant')
                {
            ?>
                
                <h1 id="header2" class="p-1" style="color: green"> Welcome <?php echo $userName?>! </h1>

                <!-- Sets details for applicant or non logged in user  -->
                <span class="p-2"> Looking for Jobs?</span>
                <h2 class="p-2"> Search For your <br> Dream Job!</h2>
                <div class="wrapper">
                        <div class="cnt3"> 
                            <button class="button2" type="button" onclick="location.href='<?php echo base_url('Postings/index')?>'">Browse Now!</button>
                        </div>
                    </div>
                </div>

            <?php

                $userName = session()->get('First Name'); // Gets the User's Name from the session
            
                } else if($_SESSION['Type of User'] == 'Company')
                {
            ?>

                <h1 id="header2" class="p-1" style="color: green"> Welcome <?php echo $userName?>! </h1>  

                <!-- Sets details for company -->
                <span class="p-2">Looking to fill company positions?</span>
                <h2 class="p-2">Create your <br> job advert now!</h2>
                <div class="wrapper">
                        <div class="cnt3"> 
                            <button class="button2" type="button" onclick="location.href='<?php echo base_url('Createad/index')?>'">Get Started!</button>
                        </div>
                    </div>
                </div>

            <?php

                $userName = session()->get('First Name'); // Gets the User's Name from the session
                
                } else if($_SESSION['Type of User'] == 'Admin')
                {
            ?>

                <h1 id="header2" class="p-1" style="color: green"> Welcome <?php echo $userName?>! </h1>

                <!-- Sets details for admin -->
                <span class="p-2"> Want to manage FutureSeekers?</span>
                <h2 class="p-2">Go to the <br> Admin Dashboard now!</h2>
                <div class="wrapper">
                        <div class="cnt3"> 
                            <button class="button2" type="button" onclick="location.href='<?php echo base_url('Admin/index')?>'">Get Started!</button>
                        </div>
                    </div>
                </div>

            <?php
                }
            ?>

        </div>
        <!-- End of home page box section -->


        <!-- Popular search section. (Visible only to Applicants and non logged in users)-->
        <?php 
            if( !isset($_SESSION['UserID']) || $_SESSION['Type of User'] == 'Applicant') 
            {
        ?>
            <div class="bx2">
                <h2>Popular Search</h2>

                <div class="cnt2">

                    <ul>

                        <!-- Upon clicking these, redirects the user to the job search page with the specific search details -->
                        <li><i class="fa fa-search"></i><a href="http://localhost/futureseekers/public/Postings/index?search=Business+Analyst">Business Analyst</a></li>
                        <li><i class="fa fa-search"></i><a href="http://localhost/futureseekers/public/Postings/index?search=Software+Engineer">Software Engineer</a></li>
                        <li><i class="fa fa-search"></i><a href="http://localhost/futureseekers/public/Postings/index?search=Part+time">Part-time</a></li>
                        <li><i class="fa fa-search"></i><a href="http://localhost/futureseekers/public/Postings/index?search=Finance">Finance</a></li>
                        <li><i class="fa fa-search"></i><a href="http://localhost/futureseekers/public/Postings/index?location=&experience=&wfh=Yes">Work form home</a></li>
                        <li><i class="fa fa-search"></i><a href="http://localhost/futureseekers/public/Postings/index?search=Administration">Administration</a></li>
                        
                    </ul>
                </div>

            </div>
        <?php
            }
        ?>
        <!-- End of popular search section -->


        <!-- Jobs that might interest you section -->
        <?php
        
            if( !isset($_SESSION['UserID'])) {
                // Does nothing
                // This is to bypass an error message
                
            } else if($_SESSION['Type of User'] == 'Applicant') 
            {
        ?>

            <!-- Job Ads recommendation for Applicant Users -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-3 mb-3">
                        <div class="card border border-dark mb-3 mt-3">

                            <div class="card-header">
                                <h4 class="text-center text-success pt-1">Jobs that might interest you!</h4>
                            </div>

                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>

                                        <tr>
                                            <th>Ad Title</th>
                                            <th>Job Position</th>
                                            <th>Company</th>
                                            <th>Category</th>
                                            <th>Location</th>
                                            <th>Experience</th>
                                            <th>Salary</th>
                                            <th>WFH</th>
                                            <th>View Ad</th>

                                        </tr>

                                    </thead>
                                    
                                    <tbody>
                                        <?php

                                            session();
                                            $adsModel = new \App\Models\adModel;

                                            // gets the preferred job ads from the session 
                                            $preferred = session()->get('Preferred');
                                            
                                            // Runs query to get approved ads and preferred job category
                                            $query = $adsModel -> query("SELECT * FROM adverts WHERE approved = 'Yes' AND category = '$preferred'"); 

                                            foreach ($query -> getResult() as $row){

                                        ?>
                                            <tr>

                                                <td><?php echo $row -> jobname ?></td>
                                                <td><?php echo $row -> position ?></td>
                                                <td><?php echo $row -> company_name ?></td>
                                                <td><?php echo $row -> category ?></td>
                                                <td><?php echo $row -> location ?></td>
                                                <td><?php echo $row -> experience ?></td>
                                                <td><?php echo $row -> salary ?></td>
                                                <td><?php echo $row -> wfh ?></td>
                                                
                                                <td>
                                                    <a href="<?php echo base_url('Postings/jobDetailsPage/'.$row -> id)?>" class="btn btn-outline-success float-end btn-sm">View</a>
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

        <?php
            }
        ?>
        
        <!-- end of the jobs that might interest you section -->


        <!-- Career advices card -->
        <div class="bx3">

            <h2 class="bx3-head">Career Advices</h2>
            <div class="cnt4">

                <div class="cards cards1">
                    <div class="cards-container">
                        <h2 class="cards-title">
                            Self Assesments
                        </h2>
                        <p class="cards-body">
                            Tips for self career assesments
                        </p>
                        <a href="https://www.insidehighered.com/advice/2017/01/23/using-self-assessment-tools-help-you-determine-best-career-yourself-essay" class="button">Learn more</a>
                    </div>
                </div>

                <div class="cards cards2">
                    <div class="cards-container">
                        <h2 class="cards-title">
                            Jobs
                        </h2>
                        <p class="cards-body">
                            Start looking for jobs which suits you
                        </p>
                        <a href="https://www.glassdoor.com/blog/quiz-what-job-best-fits-your-life/" class="button">Learn more</a>
                    </div>
                </div>

                <div class="cards cards3">
                    <div class="cards-container">
                        <h2 class="cards-title">
                            Resume
                        </h2>
                        <p class="cards-body">
                            Resume samples and techniques
                        </p>
                        <a href="https://www.indeed.com/career-advice/resumes-cover-letters/how-to-make-a-resume-with-examples" class="button">Learn more</a>
                    </div>
                </div>

                <div class="cards cards4">
                    <div class="cards-container">
                        <h2 class="cards-title">
                            Interview
                        </h2>
                        <p class="cards-body">
                            100 + Top interview questions
                        </p>
                        <a href="https://www.indeed.com/career-advice/interviewing/interview-questions-and-answer-for-fresher" class="button">Learn more</a>
                    </div>
                </div>

            </div>
            
        </div>
        <!-- end of career advices card -->


        <!--popular companies-->
        <div class="bx3">
            <h2 class="bx3-head">Popular Companies</h2>
            
            <div class="cnt4">

                <div class="cards cards5">
                    <div class="cards-container">
                        <h3 class="cards-title">
                            MAS Holdings
                        </h3>

                        <a href="https://www.masholdings.com/" class="button">Learn more</a>
                    </div>
                </div>

                <div class="cards cards6">
                    <div class="cards-container">
                        <h3 class="cards-title">
                            Virtusa
                        </h3>
                        
                        <a href="https://www.virtusa.com/?utm_source=google&utm_medium=paid&utm_campaign=6756630412&utm_term=virtusa%20sri%20lanka&gclid=CjwKCAiA1aiMBhAUEiwACw25Mc5FxyWV__IzYnqp_IIh4vGB2WcrBtPOv4uyyi1BVdMgHovuoN7yPBoCviYQAvD_BwE" class="button">Learn more</a>
                    </div>
                </div>

                <div class="cards cards7">
                    <div class="cards-container">
                        <h3 class="cards-title">
                        John Keells Holdings
                        </h3>
                        <a href="https://www.keells.com/" class="button">Learn more</a>
                    </div>
                </div>

                <div class="cards cards8">
                    <div class="cards-container">
                        <h3 class="cards-title">
                        Commercial Bank
                        </h3>

                        <a href="https://www.combank.lk/" class="button">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
        <!--end of popular companies section -->

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
        
    </body>
</html>
