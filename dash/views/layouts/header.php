<?php
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

    NavBar::begin([
                'brandLabel' => Yii::$app->name,
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar navbar-inverse navbar-fixed-top',
                ],
                'innerContainerOptions' => ['class'=>'container-fluid'],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    
                    ['label'=>'Dashboard',
                        'items'=>[
                            ['label' => 'Menu Item', 'url' => ['#']],
                            ['label' => 'Menu Item', 'url' => ['#']],
                            ['label'=>'Menu Item', 'url'=>['#']],
                        ]
                        
                        ],
                    ['label'=>'Settings','url'=>['#']],
                    ['label'=>'Profile','url'=>['#']],
                    ['label'=>'Help','url'=>['#']],
                    
                    
                    Yii::$app->user->isGuest ?
                        ['label' => 'Login', 'url' => ['/site/login']] :
                        ['label' => 'Logout',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']],
                ],
            ]);
            echo "<form class='navbar-form navbar-right' role='search'>
                    <div class='form-group has-feedback'>
                         <input id='searchbox' type='text' placeholder='Search' class='form-control'>
                         <span id='searchicon' class='fa fa-search form-control-feedback'></span>
                     </div>
               </form>";
            NavBar::end();
    ?>