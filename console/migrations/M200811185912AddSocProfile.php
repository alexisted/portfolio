<?php

use \yii\db\Migration;

/**
 * Class M200811185912AddSocProfile
 */
class M200811185912AddSocProfile extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        //---------------------------------------------------------------------------------------------------

        $this->createTable('{{%soc}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->comment('навание'),
            'icon' => $this->string()->notNull()->comment('иконка'),
            'url' => $this->string()->notNull()->comment('ссылка'),
            'profile_id' => $this->integer()->comment('id профиля'),
        ], $tableOptions);
        $this->addCommentOnTable('{{%soc}}', 'мои профили в соц сетях');

        $this->addForeignKey(
            'soc_profile_id_fk',
            '{{%soc}}',
            'profile_id',
            'profile',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->insert('soc', [
            'name' => 'skype',
            'icon' => 'fab fa-skype',
            'url' => 'skype:live:f6ea97b9e7e47fcb',
            'profile_id' => 1,
        ]);

        $this->insert('soc', [
            'name' => 'linkedin',
            'icon' => 'fab fa-fw fa-linkedin-in',
            'url' => 'https://www.linkedin.com/in/alexei-turcan-062514197/',
            'profile_id' => 1,
        ]);

        $this->insert('soc', [
            'name' => 'GitHub',
            'icon' => 'fab fa-github-alt',
            'url' => 'https://github.com/alexisted',
            'profile_id' => 1,
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%soc}}');
    }
}
