<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $this->pageTitle; ?></title>
	<?php
        Yii::app()->fontAwesome;
		$cs = Yii::app()->clientScript;
		$cs->registerCoreScript('jquery');
		$cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/script.js');
		$cs->registerCssFile(Yii::app()->theme->baseUrl . '/css/style.css');
        Yii::app()->getComponent('bootstrap')->register();
	?>
</head>
<body>

<div id="wrapper">
	<?php
	$this->widget('bootstrap.widgets.TbNavbar',
	[
		'collapse'				=>	true,
		'brand'					=>	Yii::app()->name,
		'brandUrl'				=>	Yii::app()->homeUrl,
		'htmlOptions'			=>
		[
			'class'				=>	'navbar-inverse',
		],
		'items'					=>
		[
			[
				'class'			=>	'bootstrap.widgets.TbMenu',
				'items'			=>
				[

					[
						'label'				=>	'Управление доступом',
						'url'				=>	['#'],
						'active'			=>	isset(Yii::app()->controller->module->id) && Yii::app()->controller->module->id == 'rights',
						'visible'			=>	Yii::app()->user->checkAccess('manageAccess'),
						'items'				=>
						[
							[
								'label'       => Rights::t('core', 'Assignments'),
								'url'         => ['/rights/assignment/view'],
								'itemOptions' => ['class' => 'item-assignments'],
							],
							'---',
							[
								'label'       => Rights::t('core', 'Permissions'),
								'url'         => ['/rights/authItem/permissions'],
								'itemOptions' => ['class' => 'item-permissions'],
							],
							[
								'label'       => Rights::t('core', 'Roles'),
								'url'         => ['/rights/authItem/roles'],
								'itemOptions' => ['class' => 'item-roles'],
							],
							[
								'label'       => Rights::t('core', 'Tasks'),
								'url'         => ['/rights/authItem/tasks'],
								'itemOptions' => ['class' => 'item-tasks'],
							],
							[
								'label'       => Rights::t('core', 'Operations'),
								'url'         => ['/rights/authItem/operations'],
								'itemOptions' => ['class' => 'item-operations'],
							],
						],
					],
				],
			],
			[
				'class'			=>	'bootstrap.widgets.TbMenu',
				'htmlOptions'	=>	['class' => 'pull-right'],
				'items'			=>
				[

					[
						'label'		=>	'Авторизация',
						'url'		=>	['/auth'],
						'visible'	=>	Yii::app()->user->isGuest
					],
					[
						'label'		=>	'Выход (' . Yii::app()->user->name . ')', 'url' => array('/logout'),
						'visible'	=>	!Yii::app()->user->isGuest,
					],
				],
			],
		],
	]);
	?>

	<div class="main_admin_part">
		<table class="main_table">
            <tr>
                <td class="left">
                    <aside id="sideLeft">
                        <div id="sidebar">
                            <?php
                            $menu = require(dirname(__FILE__).'/_leftMenu.php');

                            $this->widget('ext.sidebarmenu.SidebarMenu', array('menu' => $menu));
                            ?>
                        </div>
                    </aside>
                </td>
                <td class="right">
                    <div class="admin_content">
                        <h3 class="page-title">
                            <?php echo $this->pageTitle ?>
                            <?php
                            if(isset($this->pageDescription) && $this->pageDescription)
                            {
                                ?>
                                <small><?php echo $this->pageDescription?></small>
                            <?php
                            }
                            ?>
                        </h3>
                        <?php
                        $this->widget('bootstrap.widgets.TbBreadcrumbs',
                            [
                                'links'	=> $this->breadcrumbs,
                                'homeLink'	=> CHtml::link('Главная', '/admin/'),
                                'encodeLabel'	=>	false,
                                'separator'	=> ' &rsaquo; '

                            ]);
                        ?>
                        <?php echo $content; ?>
                    </div>
                </td>
            </tr>
		</table>
	</div>
</div>

<footer>
	<div class="container">
		<div class="span-1">
			<p>Copyright &copy; <?php echo date('Y'); ?> by Eyetronic - All Rights Reserved.</p>
		</div>
		<div class="pull-right">
			<p style="text-align:right;">Сделано в <a href="http://art.su/" target="_blank">Eyetronic</a></p>
		</div>
	</div>
</footer>
</body>
</html>