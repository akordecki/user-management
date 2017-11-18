<?php

use Yii;
use webvimark\modules\UserManagement\UserManagementModule;

/**
 * @var yii\web\View $this
 */

$this->title = UserManagementModule::t('back', 'Change own password');
$this->params['breadcrumbs'][] = $this->title;

Yii::$app->session->setFlash('success', UserManagementModule::t('back', 'Password has been changed'));
Yii::$app->response->redirect(Url::to(['/']));
?>
<div class="change-own-password-success">

	<div class="alert alert-success text-center">
		<?= UserManagementModule::t('back', 'Password has been changed') ?>
	</div>

</div>
