<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;
use kartik\datetime\DateTimePicker;
/* @var $this yii\web\View */
/* @var $model common\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'basic'
    ]) ?>
    <?php
        $a= ['1' => 'published', '0' => 'unpublished'];
        echo $form->field($model, 'status')->dropDownList($a);
    ?>
    <?php
    DateTimePicker::widget([
        'name' => 'datetime_10',
        'options' => ['placeholder' => 'Select operating time ...'],
        'convertFormat' => true,
        'pluginOptions' => [
            'format' => 'Y-m-d H:i:s',
            'todayHighlight' => true
        ]
    ]);
    ?>

    <?= $form->field($model, 'published')->widget(DateTimePicker::classname(), [
        'options' => ['placeholder' => 'Select issue date ...'],
        'value' => date('Y-m-d H:i:s')
    ]) ?>
        <?php $src = '/uploads/'.$model->id.'.jpg';
            if(isset($src)):?>
            <img class="update_img" src="<?= $src?>"/>
        <?php endif?>
    <?= $form->field($model, 'img')->fileInput() ?>

    <div class="categories_list">
           <?= $form->field($model, 'categories')->checkboxList($categories)?>
    </div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
