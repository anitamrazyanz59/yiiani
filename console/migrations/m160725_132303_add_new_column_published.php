<?php

use yii\db\Migration;

class m160725_132303_add_new_column_published extends Migration
{
    public function up()
    {
        $this->addColumn( '{{%news}}', 'published', 'timestamp' );
    }

    public function down()
    {
        echo "m160725_132303_add_new_column_published cannot be reverted.\n";

        return false;
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
