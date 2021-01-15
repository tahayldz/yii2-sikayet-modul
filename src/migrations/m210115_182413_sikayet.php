<?php

use yii\db\Migration;

/**
 * Class m210115_182413_sikayet
 */
class m210115_182413_sikayet extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = file_get_contents(__DIR__ . '/sikayetTurleri.sql');
        $command = Yii::$app->db->createCommand($sql);
        $command->execute();

        // Make sure, we fetch all errors
        while ($command->pdoStatement->nextRowSet()) {}

        $sql = file_get_contents(__DIR__ . '/sikayet.sql');
        $command = Yii::$app->db->createCommand($sql);
        $command->execute();

        // Make sure, we fetch all errors
        while ($command->pdoStatement->nextRowSet()) {}
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210115_182413_sikayet cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210115_182413_sikayet cannot be reverted.\n";

        return false;
    }
    */
}
