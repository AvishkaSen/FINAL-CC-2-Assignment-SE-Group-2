<?php

    namespace App\Controllers;

    class contactUs extends BaseController
    {

        // Gets the data from the contact us form that the user enters and then, uploads it to the database
        public function inquiries()
        {

            // loads the contact us model
            $model = new \App\Models\contactusModel;

            $email = $this->request->getPost('email'); // For sending email to advert owner

            // Gets info from contact us form 
            $supportSubject = $this->request->getPost('subject');  
            $name = $this->request->getPost('name'); 
            $email = $this->request->getPost('email'); // For sending email to advert owner 
            $description = $this->request->getPost('description'); 

            $queries = new \App\Entities\contactUs($this -> request ->getPost());
            $model->insert($queries);

            // email notifications after user has applied ////////////
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
                        <i>'. $description .'</i>
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
            return redirect()->to(base_url('Home/contactUs'))->with('success', 'Your inquiry has been received! Our support team will get back to you as soon as possible!');
            
        }


        // Deletes the relevant inquiry from the database
        public function deleteInquiry($id) {

            $model = new \App\Models\contactusModel;
            $model->delete($id);
            
            // redirect to contactUs
            return redirect()->to(base_url('Admin/adminContacts'));
        }


    }
    
?>

