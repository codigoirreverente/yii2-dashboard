<?php

header('X-UA-Compatible: IE=10');
/* @var $this \yii\web\View */
/* @var $content string */


use yii\helpers\Html;

use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link type="text/css" rel="stylesheet" href="/css/bootstrap-toggle.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="/css/main.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="/css/dashboard.css"  media="screen,projection"/>
</head>
<body>
<?php $this->beginBody() ?>
 <?= $this->render('header.php');?>
<!-- Look at sidebar collapsible widget of some sort.  -->
<div class="container-fluid" style="height: auto;">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <?= $this->render('sidebar.php'); ?>
            
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
          <?= $content ?>
        </div>
      </div>
    </div>   

<?php $this->endBody() ?>
    <script type="text/javascript" src="/js/bootstrap-toggle.min.js"></script>
</body>
</html>
<?php $this->endPage() ?>
