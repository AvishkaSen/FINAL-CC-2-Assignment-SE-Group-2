<?php

    namespace App\Models;

    class contactusModel extends \CodeIgniter\Model 
    {

        public function __construct()
        {
            parent::__construct();
        }

        protected $table = 'contactUs'; // Give the table name

        protected $allowedFields=['name', 'mobile', 'email', 'description']; 
        protected $returnType = 'App\Entities\contactusModel';

    }

?>