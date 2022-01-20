<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    //////////////////////////////////////////////////////////////////////// MY CUSTOM VALIDATIONS !!!!  /////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	// THESE ARE THE CUSTOM VALIDATION RULES THAT WILL BE USED FOR THE REGISTRATION FORM !!!!!! /////
	public $registration = [

        'fname' => 'required|max_length[20]',
        'lname' => 'required|max_length[20]',
        'password' => 'required|min_length[5]|max_length[20]',
        'pass_confirm' => 'required|matches[password]',
        'email' => 'required|valid_email',
    ];

    // THESE ARE THE CUSTOM VALIDATION RULES THAT WILL BE USED FOR THE Adverts FORM !!!!!! /////
    public $adverts=[
        'jobname'=>'required',
        'category'=>'required',
        'description'=>'required',
    ];

    // THESE ARE THE CUSTOM VALIDATION RULES THAT WILL BE USED FOR THE APPLY ADS FILE VALIDATIONS
    public $applyad = [

        'fname' => 'required|max_length[20]',
        'lname' => 'required|max_length[20]',
        'email' => 'required|valid_email',
        'contact' => 'required|max_length[10]',
        'message' => 'required',
        'file' => 'uploaded[file]|max_size[file,1024]|ext_in[file,docx,pdf]',
    ];


    // THESE ARE THE CUSTOM VALIDATION RULES CREATED FOR CONTACT US PAGE TO PREVENT UNNECESSARY CHARACTERS FROM BEING ENTERED
    public $contactus = [
        'subject ' => 'required|max_length[20]|alpha_numeric_space',
        'name' => 'required|max_length[20]|alpha_numeric_space',
        'contactnumber' => 'required|max_length[10]|alpha_numeric',
        'email' => 'required|valid_email',
        'description' => 'required|alpha_numeric_space',
    ];


	// CUSTOM ERROR MESSAGES FOR THE VALIDATIONS THAT I SET UP !!!!!! /////
	public $registration_errors = [

		'fname' => [ 
            'required' => 'First Name section is required!',
			'max_length' => 'Name cannot go over 20 characters!'
        ],
        'lname' => [ 
            'required' => 'Last Name section is required!',
			'max_length' => 'Name cannot go over 20 characters!'
        ],
        'password' => [ 
            'required' => 'The password section is required!',
			'min_length' => 'The password must be over 5 characters!',
			'max_length' => 'The password must be less than 20 characters!'
        ],
        'pass_conf' => [
            'required' => 'Please confirm your password!',
            'matches[password]' => 'Passwords do not match!'
        ],
		'email' => [ 
			'required' => 'The email section is required!',
			'valid_email' => 'Please enter a valid email address!' 
		]

	];
    
    // ERRORS MESSAGES I CREATED FOR THE APPLY ADD FILE VALIDATIONS !!!!!! /////
    public $applyad_errors = [

        'fname' => [ 
            'required' => 'First Name section is required!',
			'max_length' => 'Name cannot go over 20 characters!'
        ],
        'lname' => [ 
            'required' => 'Last Name section is required!',
			'max_length' => 'Name cannot go over 20 characters!'
        ],
        'email' => [ 
            'required' => 'The email section is required!',
            'valid_email' => 'Please enter a valid email address!'
        ],
        'contact' => [ 
            'required' => 'The contact section is required!',
            'max_length' => 'Contact cannot go over 10 characters!'
        ],
        'message' => [ 
            'required' => 'The message section is required!'
        ],
        'file' => [
            'uploaded' => 'Please upload a file!',
            'max_size' => 'File size cannot exceed 1MB!',
            'ext_in' => 'File type must be .docx or .pdf!'
        ]
    ];

    // ERRORS MESSAGES I CREATED FOR THE CONTACT US PAGE VALIDATIONS 
    public $contactus_errors = [

        'subject' => [ 
            'required' => 'The subject section is required!',
            'max_length' => 'Subject cannot go over 20 characters!',
            'alpha_numeric_space' => 'Subject can only contain letters, numbers and spaces!',
        ],
        'name' => [ 
            'required' => 'The name section is required!',
            'max_length' => 'Name cannot go over 20 characters!',
            'alpha_numeric_space' => 'Name can only contain letters, numbers and spaces!',
        ],
        'contactnumber' => [ 
            'required' => 'The contact number section is required!',
            'max_length' => 'Contact number cannot go over 10 characters!',
            'alpha_numeric_space' => 'Contact number can only contain letters, numbers and spaces!',
        ],
        'email' => [ 
            'required' => 'The email section is required!',
            'valid_email' => 'Please enter a valid email address!',
            'alpha_numeric_space' => 'Email can only contain letters, numbers and spaces!',
        ],
        'description' => [ 
            'required' => 'The description section is required!',
            'alpha_numeric_space' => 'Description can only contain letters, numbers and spaces!'
        ]
    ];
    

    // CUSTOM ERROR MESSAGES FOR THE Adverts VALIDATIONS THAT I SET UP !!!!!! /////

    public $adverts_errors=[
        'jobname' => ['required'=>'Job title section is required!'],
        'category' => ['required'=>'Catergory section is required!'],
        'description' => ['required'=>'Description section is required!']
    ];
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	


    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------
}
