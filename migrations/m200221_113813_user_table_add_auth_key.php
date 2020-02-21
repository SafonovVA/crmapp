<?php

use yii\db\Migration;

/**
 * Class m200221_113813_user_table_add_auth_key
 */
class m200221_113813_user_table_add_auth_key extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user', 'auth_key', 'string UNIQUE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('user', 'auth_key');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200221_113813_user_table_add_auth_key cannot be reverted.\n";

        return false;
    }
    */
}
