<?php

    namespace App\Controllers;

    class contactUs extends BaseController
    {

        // Gets the data from the contact us form that the user enters and then, uploads it to the database
        public function inquiries()
        {
            $model = new \App\Models\contactusModel;

            $queries = new \App\Entities\contactUs($this -> request ->getPost());
            $model->insert($queries);

            // redirect to contactUs
            return redirect()->to(base_url('Home/contactUs'));
            
        }

    }
    
?>

