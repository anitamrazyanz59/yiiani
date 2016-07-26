<?php
use yii\helpers\Html;
?>
    <ul class="nav navbar-nav custom_nav">
        <li><?= Html::a('Home',  ['site/index']) ?></li>
        <?php if($categories): ?>

                <?php foreach($categories as $category): ?>

                    <li ><?= Html::a($category->name,  ['site/'.$category->name]) ?></li>
                <?php endforeach ?>

        <?php endif; ?>
    </ul>
