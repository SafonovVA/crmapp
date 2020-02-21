<?php

use yii\helpers\Html;
//\yii\bootstrap\BootstrapAsset::register($this);
//\yii\web\YiiAsset::register($this);

app\assets\ApplicationUiAssetBundle::register($this);


?>

<?php $this->beginPage(); ?>
    <!doctype html>
    <html lang="<?= Yii::$app->language; ?>">
    <head>
        <meta charset="<?= Yii::$app->charset; ?>">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?= Html::encode($this->title); ?></title>
        <?php $this->head(); ?>
        <?= Html::csrfMetaTags(); ?>
    </head>
    <body>
        <?php $this->beginBody(); ?>
        <div class="authorization-indicator">
            <?php if (Yii::$app->user->isGuest):?>
                <?= Html::tag('span', 'guest');?>
                <?= Html::a('login', '/site/login');?>
            <?php else:?>
                <?= Html::tag('span', Yii::$app->user->identity->username);?>
                <?= Html::a('logout', '/site/logout');?>
            <?php endif;?>
        </div>
        <div class="container">
            <?= $content; ?>
            <footer class="footer"><?= Yii::powered(); ?></footer>
        </div>
        <?php $this->endBody(); ?>
    </body>
    </html>
<?php $this->endPage(); ?>
