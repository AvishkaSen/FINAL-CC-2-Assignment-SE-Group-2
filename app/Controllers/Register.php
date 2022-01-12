<?php

    namespace App\Controllers;

    class Register extends BaseController
    {

        public function index()
        {
            // Redirects the user to the register page when the button is clicked in the home page
            return view('register.php');  
        }

        // For creating an account 
        public function create() {

            $validation =  \Config\Services::validation(); // Validation library is loaded
            $formdata = $this->request->getPost(); // Gets data from the registration form's post method
            $captcha_response = trim($this->request->getPost('g-recaptcha-response')); // Gets the captcha response from the form

            // validates the captcha response 
            if($captcha_response != '') {

                // My Secret key (Avishka)
                $keySecret = '6LdWMwoeAAAAAMYdFbWf-jiHq0G0ZWo1ozv3-3qj';

                // Checking array for curl init
                $check = array(
                    'secret' => $keySecret,
                    'response' => $this->request->getPost('g-recaptcha-response')
                );

                // For checking if the captcha responses are valid
                $startProccess = curl_init();
                curl_setopt($startProccess, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
                curl_setopt($startProccess, CURLOPT_POST, true);
                curl_setopt($startProccess, CURLOPT_POSTFIELDS, http_build_query($check));
                curl_setopt($startProccess, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($startProccess, CURLOPT_RETURNTRANSFER, true);

                $recieveData = curl_exec($startProccess);
                $finalResponse = json_decode($recieveData, true);

                // If the captcha response is valid
                if($finalResponse['success']) {

                    // LOADS AND CHECKS A SET OF CUSTOM FORM VALIDATIONS THAT I HAVE CREATED IN "app/Config/Validation.php" FILE!!
                    if($validation->run($formdata, 'registration')) 
                    { 

                        // get the data from the form
                        $email = $this->request->getPost('email');
                        $model = new \App\Models\userModel;

                        // If the validations are successful
                        $users = new \App\Entities\Users($this -> request ->getPost());
                        $users -> password = password_hash($users->password, PASSWORD_DEFAULT); // Hashes the password

                        // Inserts account registration information into the database
                        $model->insert($users); 

                        
                        ////////   Setting up the company account profile   ////////

                        // get account type
                        $account_type = $this->request->getPost('type');
                        
                        // check if account type is company, creates a blank profile for it
                        if($account_type == "Company") {
                        
                            // gets data on the just entered company
                            $query1 = $model -> query("SELECT * FROM registrations WHERE email = '$email'"); 
                            $row = $query1 -> getRow();

                            $model2 = new \App\Models\companyProfileModel;

                            // Gets and uploads information to the profile database
                            $model2 = $model2 -> save([
                                'company_acc' => $row -> id,
                                'companyname' => '',
                                'companydesc' => '',
                                'jobcategories' => '',
                                'employment_types' => '',
                            ]);

                        }
                        
                        return view('login'); 

                    } else{

                        // if the validations form validations fail
                        // Loads an array of the custom error messages I created in "app/Config/Validation.php" file!!
                        $errorArray = $validation->getErrors();

                        echo '<div class="alert2">
                        <strong> ERROR! </strong>
                        <br>
                        <b>' . implode('<br>', $errorArray) . '</b> 
                        </div>';          

                        return view('register'); 

                    }

                } else {

                    // if the captcha response is empty or wrong
                    echo '<div class="alert2">
                    <strong> ERROR! </strong>
                    <br>
                    <b> CAPTCHA Verification has failed! Please try again. </b> 
                    </div>';      

                    return view('register'); 

                }
        
            } else {

                // if the captcha was not answered 
                echo '<div class="alert2">
                <strong> ERROR! </strong>
                <br>
                <b> You did not answer the CAPTCHA! Please try again. </b> 
                </div>';      

                return view('register'); 

            }

        }

    }
?>

