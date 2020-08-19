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
            'speciality' => $this->string()->notNull()->comment('специальность'),
            'email' => $this->string()->notNull()->comment('email'),
            'phone' => $this->string()->notNull()->comment('номер телефона'),
            'local' => $this->string()->notNull()->comment('адресс'),
            'about_me' => $this->string()->notNull()->comment('обо мне'),
        ], $tableOptions);
        $this->addCommentOnTable('{{%profile}}','Профиль');

        $this->insert('{{%profile}}',[
            'first_name'     => 'Алексей',
            'last_name'      => 'Цуркан',
            'speciality'     => 'Full Stack Web Developer Средний (Middle)',
            'email'          => 'alexeitsurkan@gmail.com',
            'phone'          => '+37377726027',
            'local'          => 'Молдова Рыбница',
            'about_me'       => 'Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional SASS stylesheets for easy customization.'
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%profile}}');
    }
}
