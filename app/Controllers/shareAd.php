<?php

    namespace App\Controllers;

    class shareAd extends BaseController
    {

        public function shareAdvert() {

            // Gets the advertisement id
            $advertid = $this->request->getPost('advertid'); 

            // Gets info from Reply form 
            $shareSubject = $this->request->getPost('subject');  
            $name= $this->request->getPost('name');  
            $email = $this->request->getPost('email'); // For sending email to the person the user wants to share the advert with
            $message = $this->request->getPost('message'); 

            // email notifications after user has applied ////////////
            $to = $email;
            $subject = 'A Futureseekers User has shared an advertisement with you with the subject of "'. $shareSubject .'"';
            $emailmessage = 'Hello '. $name .'! 
                        <br> <br>
                        A user has shared an advertisment on our site with you with the advert id of: "' . $advertid . '"
                        <br> <br>
                        The user has sent the following message:
                        <br>
                        <i> "'. $message . '" </i>
                        <br> <br>
                        You can view the advert at:
                        <br>
                        <a href="http://localhost/futureseekers/public/Postings/jobDetailsPage/'.$advertid.'"> Click me! </a>
                        <br> <br>
                        
                        Be sure to create or login to your account to view the advert and apply to it if it interests you!
                        <br> 
                        Thank you for using Futureseekers.lk!';
                        
                        
            $email = \Config\Services::email(); // loads email instance from config/Email.php

            $email -> setTo($to); // sets the email to the advert owner
            $email -> setFrom('futureseekershelp@gmail.com', 'Shared Job Advert'); 
            $email -> setSubject($subject); // sets the subject of the email
            $email -> setMessage($emailmessage); // sets the message of the email
            
            if($email -> send()) // sends the email

            // Redirects to the job details page of the specific advertisement
            return redirect()->to(base_url('/Postings/jobDetailsPage/'.$advertid));

        }

    }
?>

