<?php namespace frontend\modules\base\models\Entity;

use yii\db\ActiveRecord;

/**
 * Class Portfolio
 * @package frontend\modules\base\models\Entity
 */
class Message extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%message}}';
    }
}

