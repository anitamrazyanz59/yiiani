<?php

use yii\db\Migration;

class m160722_064411_pic_table extends Migration
{
    public function up()
    { $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable('{{%pic_table}}', [
            'id' => $this->primaryKey(),
            'pic_name' => $this->string(255)->notNull(),
            'src' => $this->string(255)->notNull(),
        ], $tableOptions);

    }

    public function down()
    {
        echo "m160722_064411_pic_table cannot be reverted.\n";

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
