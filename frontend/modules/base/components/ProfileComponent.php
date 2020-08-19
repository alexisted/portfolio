<?php namespace frontend\modules\base\components;

use frontend\modules\base\models\Entity\Profile;
use frontend\modules\base\models\Entity\Soc;
use yii\base\Component;

/**
 * Class ProfileComponent
 * @package frontend\modules\base\components
 * @property $first_name
 * @property $last_name
 * @property $speciality
 * @property $email
 * @property $phone
 * @property $local
 * @property $about_me
 * @property $soc
 */
class ProfileComponent extends Component
{
    public $first_name;
    public $last_name;
    public $speciality;
    public $email;
    public $phone;
    public $local;
    public $about_me;
    public $soc;

    public function init() {
        $p = Profile::findOne(1);
        $this->first_name = $p->first_name;
        $this->last_name = $p->last_name;
        $this->speciality = $p->speciality;
        $this->email = $p->email;
        $this->phone = $p->phone;
        $this->local = $p->local;
        $this->about_me = $p->about_me;
        $this->soc = Soc::find()->where(['profile_id'=>1])->all();

        parent::init();
    }
}