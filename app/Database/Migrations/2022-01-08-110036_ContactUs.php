<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ContactUs extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id'=>[
                'type'=>'INT',
                'constraint'=>5,
                'unsigned'=>true,
                'auto_increment'=>true
            ],
            'subject'=>[  // subject of the inquiry
                'type'=>'VARCHAR',
                'constraint'=>100,
            ],
            'name'=>[  // name of the user
                'type'=>'VARCHAR',
                'constraint'=>100,
            ],
            'mobile'=>[  // mobile number of the user
                'type'=>'VARCHAR',
                'constraint'=>100,
            ],
            'email'=>[  // email of the user
                'type'=>'VARCHAR',
                'constraint'=>100,
            ],
            'description'=>[ // description of the inquiry 
                'type'=>'VARCHAR',
                'constraint'=>100,
            ],
                 
        ]);
                     
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('ContactUs'); 
            
    }


    public function down()
    {
        $this->forge->dropTable('ContactUs'); 
    }
}

