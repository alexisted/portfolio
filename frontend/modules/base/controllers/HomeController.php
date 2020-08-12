<?php namespace frontend\modules\base\controllers;

use frontend\modules\base\models\Entity\Portfolio;
use frontend\modules\base\models\Forms\MessageForm;
use yii\web\Controller;

class HomeController extends Controller
{
    public function actionIndex()
    {
        $portfolio = Portfolio::find()->all();
        return $this->render('index', [
            'portfolio' => $portfolio,
        ]);
    }

    //получение письма из контактной формы
    public function actionContactForm()
    {
        $post = \Yii::$app->request->post();
        $data = ['MessageForm' => $post];
        $model = new MessageForm();
        $model->load($data);
        if($model->addMessage()){
            \Yii::$app->session->setFlash('success', 'Сообщение успешно отправлено!');
        }
        return $this->redirect(['index']);
    }

    public function actionPortfolio($id)
    {
        $data = Portfolio::findOne($id);
        return $this->renderAjax('portfolio',[
            'data' => $data
        ]);
    }
}
