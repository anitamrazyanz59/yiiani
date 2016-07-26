<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap\Dropdown;
use frontend\widgets\MenuWidget;
use frontend\widgets\MagExpress;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>





    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!-- =========================
  //////////////This Theme Design and Developed //////////////////////
  //////////// by www.wpfreeware.com======================-->

<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<!-- End Preloader -->

<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

<div class="container">
    <!-- start header area -->
    <header id="header">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <!-- start header top -->
                <div class="header_top">
                    <div class="header_top_left">
                        <ul class="top_nav nav_nav">

                            <?php
                            $menuItems = [
                                ['label' => 'Home', 'url' => ['/site/index']],
                                ['label' => 'About', 'url' => ['/site/page']],
                                ['label' => 'Contact', 'url' => ['/site/contact']],
                                ['label' => 'ERROR PAGE', 'url' => ['/site/404']],
                            ];
                            echo Nav::widget([
                                'options' => ['class' => 'top_nav'],
                                'items' => $menuItems,
                            ]);
                            $menuItems = [];
                            ?>

                        </ul>
                    </div>
                    <div class="header_top_right">
                        <form class="search_form">
                            <input type="text" placeholder="Text to Search">
                            <input type="submit" value="">
                        </form>
                    </div>
                </div><!-- End header top -->

            </div>
        </div>
    </header><!-- End header area -->
    <?=MagExpress::widget() ?>
    <!-- Static navbar -->


    <div id="navarea">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div id="navbar" class="navbar-collapse collapse">

                        <?=  MenuWidget::widget();   ?>

                </div><!--/.nav-collapse -->

            </div><!--/.container-fluid -->
        </nav>
    </div>
    <!-- start site main content -->
    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <?= Alert::widget() ?>
    <?= $content ?>

</div> <!-- /.container -->


<footer id="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="single_footer_top wow fadeInLeft">
                        <h2>Flicker Images</h2>
                        <ul class="flicker_nav">
                            <li>
                                <a href="#"><img src="img/devhill/75x75.jpg" alt="img"></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/devhill/75x75.jpg" alt="img"></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/devhill/75x75.jpg" alt="img"></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/devhill/75x75.jpg" alt="img"></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/devhill/75x75.jpg" alt="img"></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/devhill/75x75.jpg" alt="img"></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/devhill/75x75.jpg" alt="img"></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/devhill/75x75.jpg" alt="img"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="single_footer_top wow fadeInDown">
                        <h2>Labels</h2>
                        <ul class="labels_nav">
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Games</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Sports</a></li>
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Slider</a></li>
                            <li><a href="#">Life & Style</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="single_footer_top wow fadeInRight">
                        <h2>About Us</h2>
                        <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed nec laoreet orci, eget ullamcorper quam. Phasellus lorem neque, </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="footer_bottom_left">
                        <p>Copyright © 2014 <a href="index.html">Sora Red</a></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="footer_bottom_right">
                        <p>Designed BY <a href="http://wpfreeware.com/">Wpfreeware</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>