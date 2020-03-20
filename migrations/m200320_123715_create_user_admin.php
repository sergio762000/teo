<?php

use yii\db\Migration;
use app\models\User;

/**
 * Class m200320_123715_create_user_admin
 */
class m200320_123715_create_user_admin extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $model = new User();
        $model->username = "admin";
        $model->fio = "admin";
        $model->password = $model->setPassword("admin");
        $model->authKey = $model->generateAuthKey();
        if ($model->save(false)) {
            return true;
        } else {
            print_r($model->getErrors());
            return false;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200320_123715_create_user_admin cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200320_123715_create_user_admin cannot be reverted.\n";

        return false;
    }
    */
}
