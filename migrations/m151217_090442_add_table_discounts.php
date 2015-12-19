<?php

use yii\db\Schema;
use yii\db\Migration;

class m151217_090442_add_table_discounts extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%discounts}}',[
            'id' => $this->primaryKey()->notNull(),
            'phone' => $this->string()->notNull(),
            'discount' => $this->string()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ],$tableOptions);
    }

    public function safeDown()
    {
        echo "m151217_090442_add_table_discounts cannot be reverted.\n";

        $this->dropTable('{{%discounts}}');
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
