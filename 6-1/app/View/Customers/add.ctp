<div class="users form">
<?php echo $this->Form->create('Customer') ?>
    <fieldset>

        <legend><?php echo __('新規顧客登録') ?></legend>
        <div>
            <p>顧客氏名</p>
            <?php echo $this->Form->input('name', array('label' => false, 'div' => false)); ?>
        </div>
        <div>
            <p>回線タイプ</p>
            <?php echo $this->Form->select('line_type', array(1 => 'Type-A', 2 => 'Type-D'), array('default' => 1)) ?>
        </div>
        <div>
            <p>契約タイプ</p>
            <?php echo $this->Form->select('contact_type', array(
                1 => 'データのみ3GB',
                2 => 'データのみ6GB',
                3 => 'データのみ10GB',
                4 => 'SMS付き3GB',
                5 => 'SMS付き6GB',
                6 => 'SMS付き10GB',
                7 => '音声通話プラン3GB',
                8 => '音声通話プラン6GB',
                9 => '音声通話プラン10GB'
            ),
                array('default' => 1))
            ?>
        </div>
        <div>
            <p>代理店</p>
            <?php echo $this->Form->select('agency_id', array(
                1 => 'ヒトコム',
                2 => 'ビックカメラ',
                3 => 'ヨドバシカメラ',
                4 => 'ヤマダ電機'
            ),
                array('default' => 1)) 
            ?>
        </div>
        <div>
            <p>ステータス</p>
            <?php echo $this->Form->select('status', array(1 => '契約中', 2 => '解約済み'), array('default' => 1)) ?>
        </div>
        <div>
            <p>契約日</p>
            <?php echo $this->Form->input('contact_day',array(
                'label' => false,
                'type' => 'datetime',
                'dateFormat' => 'YMD',
                'monthNames' => false,
                'maxYear' => date('Y'),
                'minYear' => date('Y') - 10,
                'hour' => date('h'),
                'minute' => date('m'),
                'empty' => '---'
            )); ?>
        </div>

    </fieldset>
<?php echo $this->Form->end(__('登録')) ?>
</div>