<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Feedback extends Migration
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
            'name'=>[ 
                'type'=>'VARCHAR',
                'constraint'=>100,
            ],
            'mobile'=>[ 
                'type'=>'VARCHAR',
                'constraint'=>100,
            ],
            'email'=>[ 
                'type'=>'VARCHAR',
                'constraint'=>100,
                'unique'=>true
            ],
            
            'description'=>[ 
                'type'=>'VARCHAR',
                'constraint'=>100,
            ],
                 
            ]);
            
            $this->forge->addPrimaryKey('id');
            $this->forge->createTable('feedback'); 
            

           
    }


    public function down()
    {
        $this->forge->dropTable('feedback'); 
    }
}

