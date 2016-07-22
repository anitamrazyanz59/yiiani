<?php

use yii\db\Migration;

class m160722_064529_albums_pics extends Migration
{
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable('{{%albums_pics}}', [
            'id' => $this->primaryKey(),
            'album_id' => $this->integer(),
            'pic_id' => $this->integer(),
        ], $tableOptions);

        $this->addForeignKey(
            'albums_key',
            '{{%albums_pics}}',
            'album_id',
            '{{%albums}}',
            'id',
            'CASCADE'
        );
        $this->addForeignKey(
            'apics_key',
            '{{%albums_pics}}',
            'pic_id',
            '{{%pic_table}}',
            'id',
            'CASCADE'
        );

    }

    public function down()
    {
        echo "m160722_064529_albums_pics cannot be reverted.\n";

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
