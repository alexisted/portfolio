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
            'description' => $this->text()->comment('название'),
            'image' => $this->string()->notNull()->comment('адресс изображения'),
            'github' => $this->string()->comment('ссылка на проект'),
        ], $tableOptions);
        $this->addCommentOnTable('{{%portfolio}}','Портфолио');

        $this->insert('{{%portfolio}}',[
            'name'        => 'Электронный журнал',
            'description' => 'Электронный журнал кафедры университета. это сервис хранения, редактирования и синхронизации файлов, разработанный компанией Google. Его функции включают хранение файлов в Интернете, общий доступ к ним и совместное редактирование.',
            'image'       => 'https://camo.githubusercontent.com/a94206b8f1f8a0f4acb160ce4ba36240d6733936/68747470733a2f2f73756e392d35392e757365726170692e636f6d2f633831333032342f763831333032343930342f61386465322f3431476f306d5a766d776f2e6a7067',
            'github'      => 'https://github.com/alexisted/disk',
        ]);

        $this->insert('{{%portfolio}}',[
            'name'        => 'Новостной сайт на Yii2',
            'description' => 'Новостной сайт с регистрацией и оповещением пользователей о событиях. Сайт содержит: страницы регистрации и аутентификации просмотр списка и отдельной новости доступный для всех возможность добавлять, редактировать и удалять новости оповещать пользователя по email: при регистрации и изменении пароля при добавлении или удалении новости другим пользователем возможность выборочно отключать уведомления, например: пользователь хочет получать оповещение только при изменении пароля или при добавлении новости возможность немедленной отправки уведомлений выбранным пользователям возможность легкого добавления новых способов оповещения, например telegram или push',
            'image'       => 'https://camo.githubusercontent.com/9ed971e986e5f9bc521fcfe72f702d24a344c40e/68747470733a2f2f692e6962622e636f2f305a39767967342f323032302d30352d32312d30322d31342d31372e706e67',
            'github'      => 'https://github.com/alexisted/news',
        ]);

        $this->insert('{{%portfolio}}',[
            'name'        => 'Электронный журнал',
            'description' => 'Электронный журнал кафедры университета. это сервис хранения, редактирования и синхронизации файлов, разработанный компанией Google. Его функции включают хранение файлов в Интернете, общий доступ к ним и совместное редактирование.',
            'image'       => 'https://camo.githubusercontent.com/a94206b8f1f8a0f4acb160ce4ba36240d6733936/68747470733a2f2f73756e392d35392e757365726170692e636f6d2f633831333032342f763831333032343930342f61386465322f3431476f306d5a766d776f2e6a7067',
            'github'      => 'https://github.com/alexisted/disk',
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%portfolio}}');
    }
}
