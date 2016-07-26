<?php

use yii\db\Migration;

/**
 * Handles the dropping for table `user`.
 */
class m160726_132233_drop_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->dropTable('{{%user}}');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {

    }
}
