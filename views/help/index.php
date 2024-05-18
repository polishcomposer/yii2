<?php

use yii\helpers\Html;

$this->title = 'Help Centre';
$this->params['breadcrumbs'][] = $this->title;

?>


<div class="help-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac maximus quam, in auctor tortor. Duis imperdiet
        dignissim metus, et tincidunt neque pulvinar eget. Quisque ornare vel eros ac volutpat. Nunc euismod eget odio
        nec dapibus. Ut sit amet volutpat turpis. Vivamus accumsan porta ex, non blandit diam sollicitudin in. In hac
        habitasse platea dictumst. Morbi et tempor elit. Nulla venenatis risus nec mattis consequat. Ut auctor mi a
        posuere viverra. Nullam tincidunt efficitur tellus, ut porttitor sapien accumsan a. Quisque cursus ante nibh,
        ultrices aliquet nisl pulvinar eget. Ut at volutpat urna, ut vestibulum justo. Nullam diam arcu, pellentesque
        non odio ut, semper pulvinar sem. Maecenas ac magna vel ex vulputate luctus.
    </p>
    <?= Html::a('Account Settings', ['help/account-settings'], ['class' => 'btn btn-primary']) ?>
    <?= Html::a('Login and Security', ['help/login-and-security'], ['class' => 'btn btn-primary']) ?>
    <?= Html::a('Privacy', ['help/privacy'], ['class' => 'btn btn-primary']) ?>
</div>