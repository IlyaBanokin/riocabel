<?php
return [
    [
        'label'	    =>	'Пользователи',
        'url'	    =>	['/user/user/index'],
        'icon'	    =>	'icon-user',
        'active'	=>	Yii::app()->controller->id == 'user',
        'visible'	=>	true
    ],

    [
        'label'	    =>	'Разделы сайта',
        'url'	    =>	['/admin/siteParts/index'],
        'icon'	    =>	'icon-align-justify',
        'active'	=>	Yii::app()->controller->id == 'admin/siteParts',
        'visible'	=>	Yii::app()->user->checkAccess('admin')
    ],
    [
        'label'	    =>	'Каталог',
        'url'	    =>	['/admin/catalog/index'],
        'icon'	    =>	'icon-align-justify',
        'active'	=>	Yii::app()->controller->id == 'admin/catalog',
        'visible'	=>	Yii::app()->user->checkAccess('admin')
    ],

    /*[
        'label'	    =>	'Текстовые разделы',
        'url'	    =>	['/admin/textPages'],
        'icon'	    =>	'icon-text-height',
        'active'	=>	Yii::app()->controller->id == 'admin/textPages',
        'visible'	=>	Yii::app()->user->checkAccess('admin')
    ],*/

    [
        'label'	    =>	'Товары',
        'url'	    =>	['/admin/products/index'],
        'icon'	    =>	'icon-list-alt',
        'active'	=>	Yii::app()->controller->id == 'admin/products',
        'visible'	=>	Yii::app()->user->checkAccess('admin')
    ],
    [
        'label'	    =>	'Новости',
        'url'	    =>	['/admin/news/index'],
        'icon'	    =>	'icon-pencil',
        'active'	=>	Yii::app()->controller->id == 'admin/news',
        'visible'	=>	Yii::app()->user->checkAccess('admin')
    ],
    [
        'label'	    =>	'Фотогалерея',
        'url'	    =>	['/admin/gallery/index'],
        'icon'	    =>	'icon-picture',
        'active'	=>	Yii::app()->controller->id == 'admin/gallery',
        'visible'	=>	Yii::app()->user->checkAccess('admin')
    ],
    [
        'label'	    =>	'Настройки',
        'icon'		=>	'icon-wrench',
        'active'	=>	Yii::app()->controller->id == 'admin/slider',
        'visible'	=>	Yii::app()->user->checkAccess('admin'),
        'items' => [
            [
                'label' => 'Слайдер на главной',
                'visible'	=>	Yii::app()->user->checkAccess('admin'),
                'active'	=>	Yii::app()->controller->id == 'admin/slider'&& $_REQUEST['id'] == 1,
                'url' => ['/xpanel/slider/update?id=1'],
            ],[
                'label' => 'Фон сайта',
                'visible'	=>	Yii::app()->user->checkAccess('admin'),
                'active'	=>	Yii::app()->controller->id == 'admin/slider' && $_REQUEST['id'] == 2,
                'url' => ['/xpanel/slider/update?id=2'],
            ]
        ]
    ],


];