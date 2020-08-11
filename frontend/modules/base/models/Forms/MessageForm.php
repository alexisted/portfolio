<?php namespace frontend\modules\base\models\Forms;

use frontend\modules\base\models\Entity\Message;
use yii\base\Model;

/**
 * Class MessageForm
 * @package frontend\modules\base\models\Forms
 */
class MessageForm extends Model
{
    public $name;
    public $email;
    public $phone;
    public $message;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [

            ['name',  'trim'],
            ['name',  'required', 'message' => 'Заполните поле имя'],
            ['name',  'match',    'pattern' => '/[а-яёa-z-]*/i'],
            ['name',  'string',    'length' => [3, 24]],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],

            ['phone', 'trim'],
            ['phone', 'required'],
            ['phone',  'match',    'pattern' => '/[+0-9]{10,15}/i'],

            ['message',  'trim'],
            ['message',  'required', 'message' => 'Заполните поле "Сообщение"'],
            ['message',  'match',    'pattern' => '/[а-яёa-z-]*/i'],
            ['message',  'string',    'length' => [3, 2000]],
        ];
    }

    //добавляем сообщение
    public function addMessage()
    {
        if (!$this->validate()) return null;
        $Message = new Message();
        $Message->name = $this->name;
        $Message->email = $this->email;
        $Message->phone = $this->phone;
        $Message->message = $this->message;
        return $Message->save();
    }
}

