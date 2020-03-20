<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m200320_113219_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'status' => $this->boolean()->defaultValue(true),
            'fio' => $this->string(255)->notNull(),
            'username' => $this->string(65)->notNull()->unique(),
            'password' => $this->string(65)->notNull(),
            'authKey' => $this->string(255)->notNull()->defaultValue('test'),
            'accessToken' => $this->string(255)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
