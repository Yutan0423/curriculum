<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('style');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div class="container">
		<div class="header">
			<h1><?php echo $this->Html->link('CakePHP', '/Users',array('class' => 'nav-button')) ?></h1>
			<nav class="header-nav">
				<ul class="nav-list">
					<li class="nav-list__content"><?php echo $this->Html->link('顧客情報', '/Customers/index', array('class' => 'nav-button')) ?></li>
					<li class="nav-list__content"><?php echo $this->Html->link('管理ユーザー', '/Users/index', array('class' => 'nav-button')) ?></li>
					<li class="nav-list__content"><?php echo $this->Html->link('代理店一覧', '/Agencies/index', array('class' => 'nav-button')) ?></li>
					<li class="nav-list__content"><?php echo $this->Html->link('ログアウト', '/Users/logout', array('class' => 'nav-button')) ?></li>
				</ul>
			</nav>
		</div>
		<div class="content">
			<?php echo $this->Flash->render(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
</body>
</html>
