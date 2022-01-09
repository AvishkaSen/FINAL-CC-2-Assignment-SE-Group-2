<?php

namespace App\Controllers;

class Company extends BaseController
{
    public function Reports()
    {
        return view('Company/companyReports.php');
    }

}
?>