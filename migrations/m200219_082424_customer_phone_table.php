<?php

use yii\db\Migration;

/**
 * Class m200219_082424_customer_phone_table
 */
class m200219_082424_customer_phone_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('phone', [
            'id' => 'pk',
            'customer_id' => 'int unique',
            'number' => 'string',
        ], 'ENGINE=InnoDB');

        $this->addForeignKey('customer_phone_numbers', 'phone', 'customer_id',
                                                        'customer', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('customer_phone_numbers', 'phone');
        $this->dropTable('phone');
    }

}
