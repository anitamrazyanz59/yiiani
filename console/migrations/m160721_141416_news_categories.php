<?php

use yii\db\Migration;

class m160721_141416_news_categories extends Migration
{
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('{{%news_categories}}', [
            'id' => $this->primaryKey(),
            'news_id' => $this->integer(),
            'category_id' => $this->integer(),
        ], $tableOptions);

        $this->addForeignKey(
            'news_categories_key',
            '{{%news_categories}}',
            'news_id',
            '{{%news}}',
            'id',
            'CASCADE'
        );
        $this->addForeignKey(
            'categories_key',
            '{{%news_categories}}',
            'category_id',
            '{{%categories}}',
            'id',
            'CASCADE'
        );

    }

    public function down()
    {
        echo "m160721_141416_news_categories cannot be reverted.\n";

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
