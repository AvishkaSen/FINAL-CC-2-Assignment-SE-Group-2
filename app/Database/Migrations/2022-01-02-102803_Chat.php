<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Chat extends Migration
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
            'from'=>[ 
                'type'=>'VARCHAR',
                'constraint'=>255,
            ],
            'to'=>[ 
                'type'=>'VARCHAR',
                'constraint'=>255,
            ],
            'message'=>[ 
                'type'=>'TEXT',
            ],
            'sent'=>[ 
                'type'=>'DATETIME',
            ],
            
            'rec'=>[ 
                'type'=>'INT',
                'unsigned'=>true,
            ],
                 
            ]);
            
            $this->forge->addPrimaryKey('id');
            $this->forge->createTable('chat');
    }

    public function down()
    {
        $this->forge->dropTable('chat');
    }
}
