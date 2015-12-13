<?php

use yii\db\Schema;
use yii\db\Migration;

class m151213_125707_add_column_service_type extends Migration
{
    public function safeUp()
    {
        $this->addColumn('service', 'service_type', 'VARCHAR(255) AFTER `type` ');
    }

    public function safeDown()
    {
        echo "m151213_125707_add_column_service_type cannot be reverted.\n";

        $this->dropColumn('service', 'service_type');
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
