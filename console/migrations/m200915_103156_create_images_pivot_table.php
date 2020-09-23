<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%images_pivot}}`.
 */
class m200915_103156_create_images_pivot_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('ximages', [
            'parent_id' => $this->integer()->null(),
            'module' => $this->string()->null(),
            'file' => $this->string()->null(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%ximages}}');
    }
}
