<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;
?>
    <?php if (!empty($title)): ?><h2 class="title"><?= $title; ?></h2><?php endif; ?>
<ul class="price-list">
<?php foreach ($rows as $row): ?>
        <li>
            <ul>
                <li class="service-title">
                    <a href="#" data-toggle="modal" data-target="#modal3"><?= $row['title']; ?></a>
                </li>
                <li><?= number_format((int) $row['price'], 0, '.', ' ') . ' ₽'; ?></li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#modal3" class="btn btn-default">заказать</a>
                </li>
            </ul>
        </li>
<?php endforeach; ?>
</ul> 
<?php if ($showModal): ?>
    <!-- modal Start -->
    <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-content__in">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <h3>Заказать услугу</h3>
                    <p>
                    Оставьте свой телефон, и наш юрист свяжется с вами в течение 15 минут для <strong>бесплатной консультации</strong>
                </p>
                    <?php
                    $form = ActiveForm::begin([
                                'id' => 'services-form',
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
                        ])
                        ?>
                    </fieldset>
                    <!--<fieldset>
    <?= $form->field($model, 'msg')->textArea(['placeholder' => 'Текст']) ?>
                    </fieldset>-->
                    <fieldset>
                    <?= Html::submitInput('Отправить') ?>
                    </fieldset>
    <?php ActiveForm::end() ?>
                </div>
            </div>
        </div>
    </div>
    <!-- modal end -->
<?php endif; ?>