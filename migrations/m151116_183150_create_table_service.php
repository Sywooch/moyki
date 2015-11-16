<?php

use yii\db\Schema;
use yii\db\Migration;

class m151116_183150_create_table_service extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%service}}',[
            'id' => $this->primaryKey()->notNull(),
            'image_1' => $this->string(255)->notNull(),
            'image_2' => $this->string(255)->notNull(),
            'title' => $this->text()->notNull(),
            'description' => $this->string(255)->defaultValue('Description'),
            'type' => $this->string(255)->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ],$tableOptions);
    }

    public function safeDown()
    {
        echo "m151116_183150_create_table_service cannot be reverted.\n";

        $this->dropTable('{{%service}}');
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
