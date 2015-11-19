<?php

use yii\db\Schema;
use yii\db\Migration;

class m151115_141947_create_admin_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%admin}}',[
            'id' => $this->primaryKey()->notNull(),
            'image_1' => $this->string(255)->notNull(),
            'image_2' => $this->string(255)->notNull(),
            'title' => $this->text()->notNull(),
            'description' => $this->integer(255)->notNull(),
            'type' => $this->string(255)->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ],$tableOptions);
    }

    public function down()
    {
        echo "m151115_141947_create_admin_table cannot be reverted.\n";

        $this->dropTable('{{%admin}}');
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
