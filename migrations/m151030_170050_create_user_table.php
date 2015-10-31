<?php

use yii\db\Schema;
use yii\db\Migration;

class m151030_170050_create_user_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%users}}',[
            'id' => $this->primaryKey()->notNull(),
            'phone' => $this->string(255)->notNull(),
            'password' => $this->string(255)->notNull(),
            'role_id' => $this->smallInteger(4)->notNull()->defaultValue(1),
            'auth_key' => $this->string(255)->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ],$tableOptions);
    }

    public function down()
    {
        echo "m151014_181004_create_user_table was reverted.\n";
        $this->dropTable('{{%users}}');
    }
}
