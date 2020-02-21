<?php

use yii\db\Migration;

/**
 * Class m200221_105107_init_user_table
 */
class m200221_105107_init_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => 'pk',
            'username' => 'string UNIQUE',
            'password' => 'string',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200221_105107_init_user_table cannot be reverted.\n";

        return false;
    }
    */
}
