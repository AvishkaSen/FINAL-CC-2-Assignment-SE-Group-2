<?php

    namespace App\Controllers;

    class contactUs extends BaseController
    {

        // Gets the data from the contact us form that the user enters and then, uploads it to the database
        public function inquiries()
        {

            $validation =  \Config\Services::validation(); // Validation library is loaded
            $formdata = $this->request->getPost(); // Gets data from the registration form's post method

            if($validation->run($formdata, 'contactus')) {

                // loads the contact us model
                $model = new \App\Models\contactusModel;

                // Gets info from contact us form 
                $supportSubject = $this->request->getPost('subject');  
                $name = $this->request->getPost('name'); 
                $email = $this->request->getPost('email'); // For sending email to advert owner 
                $description = $this->request->getPost('description'); 

                $queries = new \App\Entities\contactUs($this -> request ->getPost());
                $model->insert($queries);

                // email notifications after user has sent a contact us inquiry ////////////
                $to = $email;
                $subject = 'Your inquiry with the subject of "'. $supportSubject .'" has been received!';
                $emailmessage = 'contact us test';


                $emailmessage = 'Hello '. $name .'! 
                            <br> <br>
                            Your inquiry with the subject of "'. $supportSubject .'" has been received!
                            Our support team will get back to you as soon as possible!
                            <br> <br>

                            Your support description contained the message below:
                            <br>
                            <i>"'. $description .'"</i>
                            <br>
                            <br>

                            Thank you for using Futureseekers.lk!';
                                
                $email = \Config\Services::email(); // loads email instance from config/Email.php

                $email -> setTo($to); // sets the email to the advert owner
                $email -> setFrom('futureseekershelp@gmail.com', 'Support Inquiry'); 
                $email -> setSubject($subject); // sets the subject of the email
                $email -> setMessage($emailmessage); // sets the message of the email
                
                if($email -> send()) // sends the email
                
                // redirect to contactUs
                return redirect()->to(base_url('Home/contactUs'));

            }else {

                // if the validations form validations fail
                // Loads an array of the custom error messages I created in "app/Config/Validation.php" file!!
                $errorArray = $validation->getErrors();

                echo '<div class="alert3">
                <strong> ERROR! </strong>
                <br>
                <b>' . implode('<br>', $errorArray) . '</b> 
                </div>';          

                return view("contactUs");
                
            }
            
        }


        // Deletes the relevant inquiry from the database
        public function deleteInquiry($id) {

            $model = new \App\Models\contactusModel;
            $model->delete($id);
            
            // redirect to contactUs
            return redirect()->to(base_url('Admin/adminContacts'));
        }


        public function replyInquiry() {

            // Gets info from Reply form 
            $supportSubject = $this->request->getPost('subject');  
            $email = $this->request->getPost('email'); // For sending email to advert owner 
            $description = $this->request->getPost('description'); 

            
            // email notification to send after admin team has sent a reply to one of the contact us user inquiries //
            $to = $email;
            $subject = 'Recieved Support reply with title "'. $supportSubject .'"';
            $emailmessage = 'contact us test';


            $emailmessage = 'Hello! <br> 
                        You have recieved a reply from our support team! 
                        <br> <br>
                        The reply is as follows:
                        <br>

                        <i> "'. $description .'" </i>
                        <br> <br> 

                        We hope that helps you with any issues you faced. <br>
                        Please feel free to contact us if you have any further questions!

                        <br><br>
                        Thank you for using Futureseekers.lk!';

                                
            $email = \Config\Services::email(); // loads email instance from config/Email.php

            $email -> setTo($to); // sets the email to the advert owner
            $email -> setFrom('futureseekershelp@gmail.com', 'FutureSeekers Support'); 
            $email -> setSubject($subject); // sets the subject of the email
            $email -> setMessage($emailmessage); // sets the message of the email
            
            if($email -> send()) // sends the email


            // redirect to admin's contact us page
            return redirect()->to(base_url('Admin/adminContacts'));

        }


    }
    
?>

