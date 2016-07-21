<?php
/**
 * Created by PhpStorm.
 * User: aaz
 * Date: 21.07.16
 * Time: 15:52
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Test';
?>

<?php $form = ActiveForm::begin() ?>
<div class="row">
    <div class="col-lg-8">

        <?= $form->field($model, 'mode')->label(false)->inline(true)->radioList([
            '0' => 'Сложение',
            '1' => 'Вычитание',
            '2' => 'Умножение',
            '3' => 'Деление',
        ]); ?>
    </div>
    <div class="col-lg-4"></div>
    </div>

<div class="row">
    <div class="col-lg-2">
        <?= $form->field($model, 'x')->textInput(['maxlength' => 3, ]) ?>
    </div>
    <div class="col-lg-2">
        <?= $form->field($model, 'y')->textInput(['maxlength' => 3]) ?>
    </div>
    <div class="col-lg-3">
        <B class="big">=</B>
        <B class="big" id="results">0</B>
    </div>
</div>
    <div class="form-group">
        <?= Html::submitButton('GO', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>





