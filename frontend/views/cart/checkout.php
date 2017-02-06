<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;
?>
<div class="main-container col1-layout">
    <div class="main container">
        <div class="col-main">            
            <div class="opc-wrapper-opc design_package_smartwave design_theme_porto">
                <!--                <div class="page-title">
                                    <h1>Checkout</h1>
                                </div>-->
                <div class="clear"></div>
                <div>
                    <div class="opc-col-left">
                        <?php if (Yii::$app->session->getFlash('success')): ?>
                            <h1>Спасибо!</h1>
                            <p>Ваш заказ успешно оформлен.<br>Мы свяжемся с вами в ближайшее время.</p>
                            <p>Номер вашего заказа <b>№<?= $orderID; ?></b>.</p>
                        <?php else: ?>
                            <?php
                            $form = ActiveForm::begin([
                                        'enableClientValidation' => TRUE,
                                        'id' => 'feedback-form',
                                        'options' => ['class' => 'global-form'],
                                        'fieldConfig' => [
                                            'template' => '{input}',
                                        ],
                                    ])
                            ?>
                            <div>	
                                <h3>Контактная информация</h3>
                                <ul class="form-list">
                                    <li id="shipping-new-address-form">
                                        <fieldset>
                                            <input type="hidden" name="user_fname" value="">
                                            <ul>
                                                <li class="fields">
                                                    <div class="fields">
                                                        <label for="checkoutform-name">Ваше имя</label>
                                                        <?= $form->field($model, 'name')->textInput(); ?>                                                      
                                                    </div>
                                                </li>
                                                <div class="clear"></div>
                                                <li class="fields">
                                                    <div class="fields">
                                                        <label for="checkoutform-email" class="required"><em>*</em>E-mail</label>
                                                        <?= $form->field($model, 'email')->input('email'); ?>
                                                    </div>
                                                </li>
                                                <div class="clear"></div>
                                                <li class="wide">
                                                    <label for="checkoutform-phone">Ваш телефон</label>
                                                    <?= $form->field($model, 'phone')->widget(\yii\widgets\MaskedInput::className(), ['mask' => '+7 (999) 999-99-99']); ?>                                                
                                                </li>
                                                <li class="fields">
                                                    <div class="fields">
                                                        <label for="checkoutform-comment" class="required">Комментарий к заказу</label>
                                                        <?= $form->field($model, 'comment')->textarea(['rows' => 2, 'cols' => 5]); ?>
                                                    </div>
                                                </li>
                                            </ul>
                                        </fieldset>
                                        <fieldset>
                                            <?= Html::submitButton('<span><span>Отправить</span></span>', ['class' => 'button btn-checkout opc-btn-checkout']) ?>
                                        </fieldset>
                                    </li>                                
                                </ul>
                            </div>        
                            <?php ActiveForm::end() ?>
                        <?php endif; ?>
                    </div>                   
                </div>
            </div>                
        </div>
    </div>
</div>