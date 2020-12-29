
<div class="users form">
<?php echo $this->Form->create('Agency') ?>
    <fieldset>
        <legend><?php echo __('代理店新規登録') ?></legend>
            <?php echo $this->Form->input('agency_name'); ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')) ?>
</div>