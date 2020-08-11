<?php

use \yii\db\Migration;

/**
 * Class M200811185312AddMessages
 */
class M200811185312AddMessages extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        //---------------------------------------------------------------------------------------------------

        $this->createTable('{{%message}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->comment('имя'),
            'email' => $this->string()->notNull()->comment('email'),
            'phone' => $this->string()->notNull()->comment('телефон'),
            'message' => $this->text()->notNull()->comment('Сообщение'),
        ], $tableOptions);
        $this->addCommentOnTable('{{%message}}','Сообщения контактной формы');
    }

    public function down()
    {
        $this->dropTable('{{%message}}');
    }
}
