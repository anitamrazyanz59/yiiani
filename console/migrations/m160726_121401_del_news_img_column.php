<?php

use yii\db\Migration;

class m160726_121401_del_news_img_column extends Migration
{
    public function up()
    {
        $this->dropColumn('{{%news}}','img');
    }

    public function down()
    {
        echo "m160726_121401_del_news_img_column cannot be reverted.\n";

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
