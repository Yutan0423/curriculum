<div class="users form">
<?php echo $this->Form->create('Agency') ?>
    <fieldset>
        <legend><?php echo __('代理店登録 編集') ?></legend>
            <!-- valueを書く際にデータベースからどう引っ張ったらいいかわからん -->
            <?php echo $this->Form->input('agency_name'); ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')) ?>
</div>