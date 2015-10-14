<?php

use yii\db\Schema;
use yii\db\Migration;

class m151014_185407_add_colmn_update_test_table extends Migration
{
    public function saveUp()
    {
    $this->addColumn('{{%test}}', 'updated_add', $this->integer(11)->notNull());

    }

    public function saveDown()
    {
        echo "m151014_185407_add_colmn_update_test_table was reverted.\n";

        $this->dropColumn('{{%test}}', 'updated_add');
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
