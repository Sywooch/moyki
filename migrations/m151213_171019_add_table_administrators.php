<?php

use yii\db\Schema;
use yii\db\Migration;

class m151213_171019_add_table_administrators extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%administrator}}',[
            'id' => $this->primaryKey()->notNull(),
            'name' => $this->string()->notNull(),
            'phone' => $this->string()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ],$tableOptions);
    }

    public function safeDown()
    {
        echo "m151213_171019_add_table_administrators cannot be reverted.\n";

        $this->dropTable('{{%administrator}}');
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
