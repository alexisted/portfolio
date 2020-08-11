<?php

use \yii\db\Migration;

/**
 * Class M200811185112AddProfile
 */
class M200811185112AddProfile extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        //---------------------------------------------------------------------------------------------------

        $this->createTable('{{%profile}}', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string()->notNull()->comment('имя'),
            'last_name' => $this->string()->notNull()->comment('фамилия'),
            'email' => $this->string()->notNull()->comment('email'),
            'phone' => $this->string()->notNull()->comment('номер телефона'),
            'local' => $this->string()->notNull()->comment('адресс'),
            'user_id' => $this->integer()->comment('id пользователя'),
        ], $tableOptions);
        $this->addCommentOnTable('{{%profile}}','Профиль');

        $this->addForeignKey(
            'profile_user_id_fk',
            'profile',
            'user_id',
            'user',
            'id',
            'CASCADE',
            'CASCADE'
        );
    }

    public function down()
    {
        $this->dropTable('{{%profile}}');
    }
}
