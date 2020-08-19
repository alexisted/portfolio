<?php namespace frontend\modules\base\models\Entity;

use yii\db\ActiveRecord;

/**
 * Class PortfolioImage
 * @package frontend\modules\base\models\Entity
 */
class PortfolioImage extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%portfolio_image}}';
    }

    public function getPortfolio()
    {
        return $this->hasOne(Portfolio::className(), ['id' => 'portfolio_id']);
    }
}

