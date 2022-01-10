<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FutureSeekers</title>
        <link rel="stylesheet" href="<?php echo base_url('/assets/css/main.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('/assets/css/background.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('/assets/css/register.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('/assets/css/nav.css') ?>">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>

    <style>

        /* error alert message */
        .alert2 {
            padding: 20px;
            background-color: red;
            color: white;
            text-align: center;
        }

    </style>
        
    <body> 

        <!--header-->
        <header>
            <h1 class="heading">FutureSeekers</h1>
        </header>

        <br><br><br>

        <!-- For preferred job adverts -->
        <script type="text/javascript">

            function applicantorCompany() {

                if (document.getElementById('applicant').checked) {
                    document.getElementById('ifApplicant').style.display = 'block';
                }
                else document.getElementById('ifApplicant').style.display = 'none';

            }

        </script>


        <!-- Register Account -->
        <div class="container rounded bg-white mt-4 mb-1 col-md-5 border border-dark"> 
            <div class="row">
                <div class="col-md-12 border-right">
                    <div class="d-flex flex-column align-items-center p-3 py-5">

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 id="header1" class="text-right text-success display-6 p-2">REGISTER ACCOUNT</h4>
                        </div>

                        <form action=<?php echo site_url('Register/Create') ?> method="post">
                           
                            <div class="row mt-2">

                                <!--- First Name -->
                                <div class="col-md-6">
                                    <label class="labels">First Name:</label>
                                    <input type="text" class="form-control" placeholder="first name" name="fname">
                                </div>
                                
                                <!--- Last Name -->
                                <div class="col-md-6">
                                    <label class="labels">Last Name:</label>
                                    <input type="text" class="form-control"placeholder="last name" name="lname">
                                </div>

                            </div>
                            
                            <!--- Email -->
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <label class="labels">E-mail:</label>
                                    <input type="email" class="form-control" placeholder="email address" name="email" required>
                                </div>
                            </div>
                            
                            <div class="row mt-2">

                                <!--- Password -->
                                <div class="col-md-6">
                                    <label class="labels">Password:</label>
                                    <input type="password" class="form-control" placeholder="password" name="password">
                                </div>

                                <!--- Confirm Password -->
                                <div class="col-md-6">
                                    <label class="labels">Confirm Password:</label>
                                    <input type="password" class="form-control"placeholder="confirm password" name="pass_confirm">
                                </div>

                            </div>

                            <br>

                            <label class="labels">Account Type:</label>

                            <!--Choice of account type-->
                            <div class="choice p-2 row mt-2">
                             <div class="col-md-6"> <input type="radio" name="type" id= "company" value="Company" onclick="javascript:applicantorCompany();" required> <span>Company</span> </div>
                             <div class="col-md-6"> <input type="radio" name="type" id= "applicant" value="Applicant" onclick="javascript:applicantorCompany();"> <span>Applicant</span> </div>
                            </div>

                            <!--- For preferred job adverts section -->
                            <div id="ifApplicant" style="display:none">

                                <div class="col-md-12 p-2">
                                    <div class="form-group mb-2">
                                        <label>Preferred Job:</label>
                                        <select class="form-select" required name="preferred"> <!-- preferred -->
                                            <option selected>Select your preferred job category</option>
                                            <option value="Administration, business and management">Administration, business and management</option>
                                            <option value="Alternative therapies">Alternative therapies</option>
                                            <option value="Animals, land and environment">Animals, land and environment</option>
                                            <option value="Computing and ICT">Computing and ICT</option>
                                            <option value="Construction and building">Construction and building</option>
                                            <option value="Design, arts and crafts">Design, arts and crafts</option>
                                            <option value="Education and training">Education and training</option>
                                            <option value="Engineering">Engineering</option>
                                            <option value="Facilities and property services">Facilities and property services</option>
                                            <option value="Financial services">Financial services</option>
                                            <option value="Garage services">Garage services</option>
                                            <option value="Hairdressing and beauty">Hairdressing and beauty</option>
                                            <option value="Healthcare">Healthcare</option>
                                            <option value="Heritage, culture and libraries">Heritage, culture and libraries</option>
                                            <option value="Hospitality, catering and tourism">Hospitality, catering and tourism</option>
                                            <option value="Languages">Languages</option>
                                            <option value="Legal and court services">Legal and court services</option>
                                            <option value="Manufacturing and production">Manufacturing and production</option>
                                            <option value="Performing arts and media">Performing arts and media</option>
                                            <option value="Print and publishing, marketing and advertising">Print and publishing, marketing and advertising</option>
                                            <option value="Retail and customer services">Retail and customer services</option>
                                            <option value="Science, mathematics and statistics">Science, mathematics and statistics</option>
                                            <option value="Security, uniformed and protective services">Security, uniformed and protective services</option>
                                            <option value="Social sciences and religion">Social sciences and religion</option>
                                            <option value="Social work and caring services">Social work and caring services</option>
                                            <option value="Sport and leisure">Sport and leisure</option>
                                            <option value="Transport, distribution and logistics">Transport, distribution and logistics</option>
                                        </select>
                                    </div> 
                                </div>
                            </div>

                            <!-- Sets data automatically -->
                            <input type="hidden" name="new" value="Yes"> 
                            <input type="hidden" name="approved" value="No">

                            <br>

                            <!--- Submit Button -->
                            <div class="text-center p-2">
                                <input class="btn btn-outline-success profile-button btn-lg" type="submit" value="Register"> </input>
                            </div> 

                        </form>

                        <!-- Login if you have an account button -->
                        <label class="p-1"> Already have an account?</label> 
                        <a href='<?php echo base_url('Login/index')?>' class="link-primary">Login here!</a>

                    </div>
                </div>
            </div>

        </div>
        <!-- End of registration form -->

    </body>
</html>

