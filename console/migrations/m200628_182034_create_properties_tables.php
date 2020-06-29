<?php

use yii\db\Migration;

/**
 * Class m200628_182034_create_properties_tables
 */
class m200628_182034_create_properties_tables extends Migration
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

        $this->createTable('xproperties_properties', [
            'id' => $this->primaryKey(),
            'type_id' => $this->integer()->notNull()->defaultValue(0),
            'contract_id' => $this->integer()->notNull()->defaultValue(0),
            'title' => $this->string()->notNull(),
            'summary' => $this->string()->null(),
            'description' => $this->text()->null(),
            'city' => $this->string()->null(),
            'commune' => $this->string()->null(),
            'price' => $this->float()->null(),
            'featured' => $this->smallInteger()->notNull()->defaultValue(0),
            'area' => $this->float()->null(),
            'rooms' => $this->integer()->null(),
            'toilets' => $this->integer()->null(),
            'garage' => $this->integer()->null(),
            'address' => $this->string()->null(),
            'views' => $this->integer()->notNull()->defaultValue(0),
    		    'taken' => $this->smallInteger()->notNull()->defaultValue(0),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull()->defaultValue(0),
            'updated_at' => $this->integer()->notNull()->defaultValue(0),
        ], $tableOptions);

        $this->createTable('xproperties_images', [
            'id' => $this->primaryKey(),
            'property_id' => $this->integer()->notNull()->defaultValue(0),
            'file' => $this->string()->notNull(),
            'cover' => $this->smallInteger()->notNull()->defaultValue(0),
            'created_at' => $this->integer()->notNull()->defaultValue(0),
            'updated_at' => $this->integer()->notNull()->defaultValue(0),
        ], $tableOptions);

        $this->createIndex('idx-xproperties_images-property_id', 'xproperties_images', 'property_id');
        $this->addForeignKey('fk-xproperties_images-xproperties_properties', 'xproperties_images', 'property_id', 'xproperties_properties', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-xproperties_images-xproperties_properties', 'xproperties_images');
        $this->dropIndex('idx-xproperties_images-property_id', 'xproperties_images');

        $this->dropTable('xproperties_images');
        $this->dropTable('xproperties_properties');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200628_182034_create_properties_tables cannot be reverted.\n";

        return false;
    }
    */
}
