<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

?>
<div class="row">
    <div class="col-lg-8 mx-auto">
        <?php $form = ActiveForm::begin(['action' => Url::toRoute(['home/contact-form'])]); ?>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Имя</label>
                <input class="form-control" name="name" type="text" placeholder="Имя">
            </div>
        </div>

        <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Email адресс</label>
                <input class="form-control" name="email" type="email" placeholder="Email адресс">
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Номер телефона</label>
                <input class="form-control" name="phone" type="tel" placeholder="Номер телефона">
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Сообщение</label>
                <textarea class="form-control" name="message" rows="5" placeholder="Сообщение"></textarea>
            </div>
        </div>
        <br/>
        <div class="form-group">
            <button class="btn btn-primary btn-xl" type="submit">Отправить</button>
        </div>
        <?php ActiveForm::end() ?>
    </div>
</div>