<?php

use yii\db\Migration;

/**
 * Class m200613_144658_create_blog_tables
 */
class m200613_144658_create_blog_tables extends Migration
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

        $this->createTable('{{%xblog}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'summary' => $this->string()->notNull(),
            'article' => $this->text()->notNull(),
            'file' => $this->string()->null(),
            'source' => $this->string()->null(),

            'views' => $this->integer()->notNull()->defaultValue(0),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull()->defaultValue(0),
            'updated_at' => $this->integer()->notNull()->defaultValue(0),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('xblog');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200613_144658_create_blog_tables cannot be reverted.\n";

        return false;
    }
    */
}