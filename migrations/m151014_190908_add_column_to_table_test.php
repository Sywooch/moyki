<?php

use yii\db\Schema;
use yii\db\Migration;

class m151014_190908_add_column_to_table_test extends Migration
{
    public function safeUp()
    {
        $this->addColumn('{{%test}}', 'updated_at', $this->integer(11)->notNull());

    }

    public function safeDown()
    {
        echo "add_column_update_test_table was reverted.\n";

        $this->dropColumn('{{%test}}', 'updated_at');
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
