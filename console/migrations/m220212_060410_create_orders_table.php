<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%orders}}`.
 */
class m220212_060410_create_orders_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%orders}}', [
            'id' => $this->primaryKey(),
            'order_number' => $this->integer(),
            'order_amount' => $this->float(),
            'order_description' => $this->string(255),
            'customer_id' => $this->integer()->notNull(),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp()->defaultValue(null)->append('ON UPDATE CURRENT_TIMESTAMP')
        ]);

          // creates index for column `customer_id`
          $this->createIndex(
            '{{%idx-orders-customer_id}}',
            '{{%orders}}',
            'customer_id'
        );

        // add foreign key for table `{{%customers}}`
        $this->addForeignKey(
            '{{%fk-orders-customer_id}}',
            '{{%orders}}',
            'customer_id',
            '{{%customers}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
         // drops foreign key for table `{{%customers}}`
         $this->dropForeignKey(
            '{{%fk-orders-customer_id}}',
            '{{%orders}}'
        );

        // drops index for column `customer_id`
        $this->dropIndex(
            '{{%idx-orders-customer_id}}',
            '{{%orders}}'
        );

        $this->dropTable('{{%orders}}');
    }
}
