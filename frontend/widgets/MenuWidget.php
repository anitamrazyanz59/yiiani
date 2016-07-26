<?php
namespace frontend\widgets;
use yii;
use yii\base\Widget;
use common\models\Category;

class MenuWidget extends Widget{

    public function init(){

    }

    public function run(){
        $categories =  Category::find()->all();

        return $this->render('menu', compact('categories'));
    }
}