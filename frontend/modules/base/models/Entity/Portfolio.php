<?php namespace frontend\modules\base\models\Entity;

use yii\db\ActiveRecord;

/**
 * Class Portfolio
 * @package frontend\modules\base\models\Entity
 */
class Portfolio extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%portfolio}}';
    }

    public function getPortfolioImages()
    {
        return $this->hasMany(PortfolioImage::class, ['portfolio_id' => 'id']);
    }
}

