<?php

use yii\db\Migration;

/**
 * Class m200219_112307_init_services_table
 */
class m200219_112307_init_services_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('service', [
            'id' => 'pk',
            'name' => 'string unique',
            'hourly_rate' => 'integer'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('service');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200219_112307_init_services_table cannot be reverted.\n";

        return false;
    }
    */
}
