<?php

namespace App\Controllers;

class contact extends BaseController
{
    public function feedback()
    {
        $model = new \App\Models\feedbackModel;
        $formdata = $this->request->getPost(); // Gets data from the feedback form's post method
        $feedback = new \App\Entities\feedback($this -> request ->getPost());
        $model->insert($feedback);

        return view('contactUs');
    }

}
?>

