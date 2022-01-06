<?php

namespace App\Controllers;

class Chat extends BaseController {

    //Global variable to holds the output data for each view 
    public $outputData;        
    public $loggedInUser;
    
    
    function Chat()
    {
        //parent::BaseController();
        session();
            
        $userModel = new \App\Models\userModel;

        //Get Config Details From Db
        $this->config->db_config_fetch();
        
       //Manage site Status 
        if($this->config->item('site_status') == 1)
        redirect('offline');        
        
        $this->load->$userModel;
        
        //load Helpers
        //$this->load->helpers('users');
                
        //Load the session library
        $this->load->library('session');        
    }
    
    
    }  // End of the class
?>