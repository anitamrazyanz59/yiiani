<?php

use yii\db\Migration;

class m160726_100418_add_new_column_news_img extends Migration
{
    public function up()
    {
        $this->addColumn( '{{%news}}', 'img', 'string(255)' );
    }

    public function down()
    {
        echo "m160726_100418_add_new_column_news_img cannot be reverted.\n";

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
