<?php

    namespace App\Models;

    class feedbackModel extends \CodeIgniter\Model 
    {

        public function __construct()
        {
            parent::__construct();
        }

        protected $table = 'feedback'; // Give the table name

        protected $allowedFields=['name', 'mobile', 'email', 'description']; 
        protected $returnType = 'App\Entities\feedbackModel';

    }

?>