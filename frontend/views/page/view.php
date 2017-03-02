<div class="main-container col2-right-layout">
    <div class="main container">
        <div class="row">
            <div class="col-main col-sm-12">
                <div class="postWrapper" style="margin-left: 19px;">
                    <div class="postTitle">
                        <h1><?= $model['title']; ?></h1>                        
                    </div>
                    <div class="postContent">
                        <?= $model['description']; ?>
                    </div>
                    <?php if ($model['url'] == 'kontakty'): ?>
                        <div class="row">                            
                            <div class="col-lg-5">
                                <?php if (Yii::$app->session->getFlash('success')): ?>
                                    <h1>Спасибо!</h1>
                                    <p><?= Yii::$app->session->getFlash('success'); ?></p>
                                <?php else: ?>
                                    <h2>Обратная связь</h2>
                                    <?php $form = \yii\widgets\ActiveForm::begin(['id' => 'contact-form']); ?>

                                    <?= $form->field($feedBack, 'name')->textInput(['autofocus' => true]) ?>

                                    <?= $form->field($feedBack, 'email') ?>

                                    <?= $form->field($feedBack, 'subject') ?>

                                    <?= $form->field($feedBack, 'body')->textArea(['rows' => 6]) ?>

                                    <?=
                                    $form->field($feedBack, 'verifyCode')->widget(yii\captcha\Captcha::className(), [
                                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                                    ])
                                    ?>

                                    <div class="form-group">
                                        <?= yii\bootstrap\Html::submitButton('Отправить сообщение', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                                    </div>

                                    <?php \yii\widgets\ActiveForm::end(); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>                
            </div>
        </div>
    </div>
</div>