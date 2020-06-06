<?php

use yii\db\Migration;

/**
 * Class m200606_105605_create_events_tables
 */
class m200606_105605_create_events_tables extends Migration
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

        $this->createTable('{{%xevents}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'summary' => $this->string()->notNull(),
            'article' => $this->text()->null(),

            'views' => $this->integer()->notNull()->defaultValue(0),
            'featured' => $this->smallInteger()->notNull()->defaultValue(0),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createTable('xevents_images', [
            'id' => $this->primaryKey(),
            'event_id' => $this->integer()->null(),
            'file' => $this->string()->null(),
            'cover' => $this->smallInteger()->notNull()->defaultValue(0),
            'uploaded_at' => $this->integer()->notNull()->defaultValue(0),
        ], $tableOptions);

        $this->createIndex(
            'idx-xevents_images-event_id',
            'xevents_images',
            'event_id'
        );

        $this->addForeignKey(
            'fk-xevents_images-event_id',
            'xevents_images',
            'event_id',
            'xevents',
            'id',
            'SET NULL'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-xevents_images-event_id',
            'xevents_images'
        );

        $this->dropIndex(
            'idx-xevents_images-event_id',
            'xevents_images',
        );

        $this->dropTable('xevents_images');
        $this->dropTable('xevents');
    }
}
