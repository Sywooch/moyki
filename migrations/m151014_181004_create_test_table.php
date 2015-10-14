<?php

use yii\db\Schema;
use yii\db\Migration;

class m151014_181004_create_test_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%test}}',[
            'id' => $this->primaryKey()->notNull(),
            'status' => $this->smallInteger(4)->defaultValue(0),
            'created_at' => $this->integer()->notNull()
        ],$tableOptions);
    }

    public function down()
    {
        echo "m151014_181004_create_test_table was reverted.\n";
        $this->dropTable('{{%test}}');
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
