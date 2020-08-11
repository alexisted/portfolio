<?php

use \yii\db\Migration;

class M200811185212AddPortfolio extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        //---------------------------------------------------------------------------------------------------

        $this->createTable('{{%portfolio}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->comment('название'),
            'image' => $this->string()->notNull()->comment('адресс изображения'),
            'href' => $this->string()->comment('ссылка на проект'),
        ], $tableOptions);
        $this->addCommentOnTable('{{%portfolio}}','Портфолио');
    }

    public function down()
    {
        $this->dropTable('{{%portfolio}}');
    }
}
