<?php

  namespace App\Controllers;

  class Admin extends BaseController
  {
    
    public function index() 
    {
      // Goes to admin dashboard
      return view('Admin/adminDashboard'); 
    }

    public function users()
    {
      // Goes to admin user management
      return view('Admin/adminuser');
    }
    
    public function ads()
    {
      // Goes to admin job ads management
      return view('Admin/adminads.php');
    }
    

    //////////////////// ADMIN ADVERTISEMENT MANAGEMENT ////////////////////////////////

    // Admin approve ads
    public function approveAd($id)
    {
      // Gets the database
      $model = new \App\Models\adModel;
      $model -> query("UPDATE adverts SET approved = 'Yes' WHERE id = $id"); // Changes approval

      return view('Admin/adminads.php'); // refresh page
    }

    // Admin deletes job advertisements
    public function deleteAd($id)
    {
      $model = new \App\Models\adModel;
      $model->delete($id);

      // Job advert deleted alert message
      echo '<div class="alert2">
      <strong> SUCCESS! </strong> The Advertisement with the ID: "'. $id .'" has been successfully deleted!
      </div>';

      return view('Admin/adminads.php');
    }


    //////////////////// ADMIN USER ACCOUNT MANAGEMENT ////////////////////////////////

    // Admin approves User Accounts
    public function approveUser($id)
    {
      // Gets the database
      $model = new \App\Models\userModel;
      $model -> query("UPDATE registrations SET approved = 'Yes' WHERE id = $id"); // Changes approval

      return view('Admin/adminuser.php'); // refresh page
    }


    // Admin deletes user accounts
    public function deleteUser($id)
    {
      $model = new \App\Models\userModel;
      $model->delete($id);

      return view('Admin/adminuser.php');
    }

    // Admin creates reports 
    public function reports()
    {
        return view('Admin/reports.php');
    }

  }
  
?>

