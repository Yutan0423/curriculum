
<!-- <h2>ログインフォーム</h2>
<p>Please enter your username and password</p>
<form action="<?php echo $this->Html->url('/Users/create') ?>" method="post">
    <p>Username</p>
    <input type="text" name="username">
    <p>Password</p>
    <input type="text" name="password">
    <input type="submit" value="ログイン">
</form> -->

<div class="users form">
<?php echo $this->Flash->render('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend>
            <?php echo __('ログインフォーム'); ?>
        </legend>
        <p class="login-text">Please enter your username and password</p>
        <hr>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>