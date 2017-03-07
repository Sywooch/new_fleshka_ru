<style>
    #rc-imageselect, .g-recaptcha {transform:scale(0.9);-webkit-transform:scale(0.9);transform-origin:0 0;-webkit-transform-origin:0 0;}
</style>
<div id="call-w" class="fade modal" role="dialog" tabindex="-1" style="display: none;">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <button style="float: right;" type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4>Заказать званок</h4>
            </div>
            <div class="modal-body">
                <div class="_order">
                    <?php
                    use yii\helpers\Html;
                    use yii\widgets\ActiveForm;
                    use yii\widgets\MaskedInput;
                    use richweber\recaptcha\Captcha;

$form = ActiveForm::begin([
                                'id' => 'callback-form',
                                'options' => ['class' => 'global-form'],
                                'fieldConfig' => [
                                    'template' => '{input}',
                                ],
                            ])
                    ?> 
                    <input type="hidden" name="user_fname" value="">
                    <div class="input-group field-contactform-name required">       
                        <?= $form->field($model, 'name')->textInput(['placeholder' => 'Ваше имя', 'class' => 'form-control'])->label('Ваше имя') ?>                         
                    </div>
                    <div class="input-group field-contactform-subject required">                        
                        <?=
                        $form->field($model, 'phone')->widget(MaskedInput::className(), [
                            'name' => 'phone',
                            'mask' => '+7 (999) 999-99-99',
                            'options' => [
                                'placeholder' => 'Ваш телефон',
                                'class' => 'form-control'
                            ],
                        ])->label('Номер телефона <span class="required">*</span>')
                        ?>
                    </div>
                    <div class="form-group">
                        <?= Html::submitButton('<span><span><i class="icon-send"></i>Отправить</span></span>', ['class' => 'button btn-cart']) ?>
                    </div>
                    <?php ActiveForm::end() ?>
                </div>
            </div>
        </div>
    </div>
</div>
