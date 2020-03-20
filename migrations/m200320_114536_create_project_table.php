<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%project}}`.
 */
class m200320_114536_create_project_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%project}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'title' => $this->string(65),
            'cost' => $this->float(4)->defaultValue(0.0000),
            'date_start' => $this->integer(),
            'date_finish' => $this->integer()
        ]);

        $this->addForeignKey('fk_user_id', '{{%project}}', 'user_id', '{{%user}}', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_user_id', '{{%project}}');

        $this->dropTable('{{%project}}');
    }
}
