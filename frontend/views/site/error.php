<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = 'Страница не найдено';
?>
<div class="container">
    <div class="page__in">             
        <section class="main-content">
            <div class="content">
                <h1>Страница не найдено</h1>
                <?php echo '<pre>'; print_r($exception); echo '</pre>'; ?>
            </div>                     
        </section>
    </div>
</div>