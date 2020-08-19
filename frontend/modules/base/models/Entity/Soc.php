<?php namespace frontend\modules\base\models\Entity;

use yii\db\ActiveRecord;

/**
 * Class Soc
 * @package frontend\modules\base\models\Entity
 */
class Soc extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%soc}}';
    }

    public function getProfile()
    {
        return $this->hasOne(Profile::className(), ['id' => 'profile_id']);
    }
}

