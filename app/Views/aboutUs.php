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


    <body>
    
    <?php 


session();
session() -> regenerate(); 
$user_id = session()->get('UserID'); 


if(!isset($_SESSION['UserID']))
{
    
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

        <a href="<?php echo base_url('Login/index')?>" class="cta">Login</a> 

    </header>

<?php


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

    <a href="<?php echo base_url('Logout/logout')?>" class="cta">Logout</a>

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
                <li><a href="<?php echo base_url('Company/company_reports')?>">Reports</a></li>
                <li><a href="<?php echo base_url('Home/aboutUs')?>">About Us</a></li>
                <li><a href="<?php echo base_url('Home/contactUs')?>">Contact Us</a></li>
                <li><a href="<?php echo base_url('myProfile/index')?>">My Profile</a></li>
            </ul>
        </nav>

        <a href="<?php echo base_url('Logout/logout')?>" class="cta">Logout</a> 
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
                <li><a href="#">Reports</a></li>
                <li><a href="<?php echo base_url('myProfile/index')?>">My Profile</a></li>
            </ul>
        </nav>
        <a href="<?php echo base_url('Logout/logout')?>" class="cta">Logout</a> 
    </header>

<?php
}
?>

<div class="bx1">
            <div>
                <img src="<?php echo base_url('/assets/img/aboutus.jpg') ?>" alt="search-img">
            </div>
            
            <div class="cnt1">
                
                <span><h3> Welcome to FutureSeekers!</h3> </span>
                    <p> The prime choice for a meaningful hiring process and the next step in your professional careeer! Thank you for choosing us!</p>
                    <p> On this website, you can upload job advertisements of your company's job openings.</p>
                    <p> Once approved by our site admins, it will be on display for all users to see. </p>
                    <p> For applicants, you can see and apply to any adverts that are approved on the site with your CV and basic information. </p>
                    <p> You can also search for job openings by company name, job title, or job location, and remote work. </p>
                
                <div class="wrapper">
                        
                    </div>
                </div>
</div>

<div class="bx1">
            <div>
                <img src="<?php echo base_url('/assets/img/search.jpg') ?>" alt="search-img">
            </div>
            
            <div class="cnt1">
                
                <span><h2>Get to know Us !<h2></span>
                <h4>EMAIL: futureseekershelp@gmail.com</h4>
                <h4>PHONE: +94 0117 675 100</h4>
                <h4>ADDRESS: No.388 Union Pl,Colombo 2</h4>
                
                <div class="wrapper">
                        
                    </div>
                </div>
</div>
        
            

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