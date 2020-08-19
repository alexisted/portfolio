<?php

use \yii\db\Migration;

/**
 * Class M200811190112PortfolioImage
 */
class M200811190112PortfolioImage extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        //---------------------------------------------------------------------------------------------------

        $this->createTable('{{%portfolio_image}}', [
            'id' => $this->primaryKey(),
            'src'=> $this->string(),
            'name'=> $this->string(),
            'description'=> $this->string(),
            'portfolio_id'=> $this->integer(),
        ], $tableOptions);
        $this->addCommentOnTable('{{%portfolio_image}}', 'фото из портфолио с описанием');

        $this->addForeignKey(
            'portfolio_image_portfolio_id_fk',
            '{{%portfolio_image}}',
            'portfolio_id',
            'portfolio',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->insert('{{%portfolio_image}}',[
            'src'=> 'https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLVUpEems2ZXpHYVk',
            'name'=> 'название',
            'description'=> 'описание',
            'portfolio_id'=> 1,
        ]);

        $this->insert('{{%portfolio_image}}',[
            'src'=> 'https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLVUpEems2ZXpHYVk',
            'name'=> 'название2',
            'description'=> 'описание2',
            'portfolio_id'=> 1,
        ]);

        $this->insert('{{%portfolio_image}}',[
            'src'=> 'https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLVUpEems2ZXpHYVk',
            'name'=> 'название3',
            'description'=> 'описание3',
            'portfolio_id'=> 1,
        ]);

        $this->insert('{{%portfolio_image}}',[
            'src'=> 'https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLVUpEems2ZXpHYVk',
            'name'=> 'название4',
            'description'=> 'описание4',
            'portfolio_id'=> 1,
        ]);

    }

    public function down()
    {
        $this->dropTable('{{%portfolio_image}}');
    }
}
