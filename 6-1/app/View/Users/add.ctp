
<!-- <h2>管理ユーザー登録</h2>
<p>Username</p>
<input type="text" name="name">
<p>Password</p>
<input type="text" name="password">
<p>Role</p>
<select name="" id="">
    <option value=""></option>
</select> -->

<div class="users form">
<?php echo $this->Form->create('User') ?>
    <fieldset>
        <legend><?php echo __('管理ユーザー登録') ?></legend>
            <?php
                echo $this->Form->input('username');
                echo $this->Form->input('password');
                echo $this->Form->input('role', array(
                    'options' => array(
                        'admin' => 'Admin',
                        'author' => 'Author'
                    )
                ));
            ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')) ?>
</div>