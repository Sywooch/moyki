<?php

use yii\db\Schema;
use yii\db\Migration;

class m151117_154526_create_table_vehicle extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%vehicle}}',[
            'id' => $this->primaryKey()->notNull(),
            'image_1' => $this->string(255),
            'image_2' => $this->string(255),
            'image_3' => $this->string(255),
            'title' => $this->string(255)->notNull(),
            'description' => $this->string(255)->defaultValue('Description'),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ],$tableOptions);
    }

    public function safeDown()
    {
        echo "m151117_154526_create_table_vehicle was reverted.\n";
        $this->dropTable('{{%vehicle}}');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
