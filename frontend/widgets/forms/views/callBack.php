<!-- modal Start -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-content__in">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h3>Заказать обратный звонок</h3>
                <p>
                    Оставьте свой телефон, и наш юрист свяжется с вами в течение 15 минут для <strong>бесплатной консультации</strong>
                </p>
                <?php

                use yii\helpers\Html;
                use yii\widgets\ActiveForm;
                use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                            'id' => 'feedback-form',
                            'options' => ['class' => 'global-form'],
                            'fieldConfig' => [
                                'template' => '{input}',
                            ],
                        ])
                ?> 
                <fieldset>
                    <?=
                    $form->field($model, 'phone')->widget(MaskedInput::className(), [
                        'name' => 'phone',
                        'mask' => '+7 (999) 999-99-99',
                        'options' => [
                            'placeholder' => 'Ваш телефон'
                        ],
                    ])->label('Номер телефона <span class="required">*</span>')
                    ?>
                </fieldset>
                <fieldset>
                    <?= Html::submitInput('Отправить') ?>
                </fieldset>
                <?php ActiveForm::end() ?>
            </div>
        </div>
    </div>
</div>
<!-- modal end -->