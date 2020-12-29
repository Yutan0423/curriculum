<?php
$line_types = array('Type-A', 'Type-D');
$contact_types = array('データのみ3GB','データのみ6GB','データのみ10GB','SMS付き3GB','SMS付き6GB','SMS付き10GB','音声通話プラン3GB','音声通話プラン6GB','音声通話プラン10GB');
$agencies = array('ヒトコム', 'ビックカメラ', 'ヨドバシカメラ', 'ヤマダ電機');
$statuses = array('00: 契約中', '10: 解約済み');
?>

<div class="content-up">
    <h2>顧客一覧</h2>
</div>
<div class="customer-content">
    <div class="info-section">
        <h3>各種情報</h3>
        <div class="info-content">
            <p>回線タイプ</p>
            <ul>
            <?php foreach($line_types as $line_type): ?>
                <li><?php echo $line_type ?></li>
            <?php endforeach ?>
            </ul>  
        </div>
        <div class="info-content">
            <p>契約タイプ</p>
            <ul>
            <?php foreach($contact_types as $contact_type): ?>
                <li><?php echo $contact_type ?></li>
            <?php endforeach ?>
            </ul>
        </div>
        <div class="info-content">
            <p>代理店</p>
            <ul>
            <?php foreach($agencies as $agency): ?>
            <li><?php echo $agency ?></li>
            <?php endforeach ?>
            </ul>
        </div>
        <div class="info-content">
            <p>ステータス</p>
            <ul>
            <?php foreach($statuses as $status): ?>
                <li><?php echo $status ?></li>
            <?php endforeach ?>
            </ul>
        </div>
    </div>

    <div class="index-section">
        <?php echo $this->Html->link('登録', '/Customers/add', array('class' => 'button')) ?>
        <p>該当件数: <?php echo $count ?>件</p>
        <table>
            <tr>
                <th>会員ID</th>
                <th>契約者氏名</th>
                <th>回線タイプ</th>
                <th>契約タイプ</th>
                <th>代理店</th>
                <th>ステータス</th>
                <th>契約日</th>
                <th></th>
            </tr>
            <?php foreach($customers_data as $row): ?>
            <tr>
                <td><?php echo h($row['Customer']['id']) ?></td>
                <td><?php echo h($row['Customer']['name']) ?></td>

                <?php if(h($row['Customer']['line_type']) == 1):  ?>
                    <td>Type-A</td>
                <?php else: ?>
                    <td>Type-D</td>
                <?php endif ?>
                
                <?php if(h($row['Customer']['contact_type']) == 1): ?>
                    <td>データのみ3GB</td>
                <?php elseif(h($row['Customer']['contact_type']) == 2): ?>
                    <td>データのみ6GB</td>
                <?php elseif(h($row['Customer']['contact_type']) == 3): ?>
                    <td>データのみ10GB</td>
                <?php elseif(h($row['Customer']['contact_type']) == 4): ?>
                    <td>SMS付き3GB</td>
                <?php elseif(h($row['Customer']['contact_type']) == 5): ?>
                    <td>SMS付き6GB</td>
                <?php elseif(h($row['Customer']['contact_type']) == 6): ?>
                    <td>SMS付き10GB</td>
                <?php elseif(h($row['Customer']['contact_type']) == 7): ?>
                    <td>音声通話プラン3GB</td>
                <?php elseif(h($row['Customer']['contact_type']) == 8): ?>
                    <td>音声通話プラン6GB</td>
                <?php else: ?>
                    <td>音声通話プラン10GB</td>
                <?php endif ?>

                <?php if(h($row['Customer']['agency_id']) == 1): ?>
                    <td>ヒトコム</td>
                <?php elseif(h($row['Customer']['agency_id']) == 2): ?>
                    <td>ビックカメラ</td>
                <?php elseif(h($row['Customer']['agency_id']) == 3): ?>
                    <td>ヨドバシカメラ</td>
                <?php else: ?>
                    <td>ヤマダ電機</td>
                <?php endif ?>

                <?php if(h($row['Customer']['status']) == 1): ?>
                    <td>契約中</td>
                <?php else: ?>
                    <td>解約済み</td>
                <?php endif ?>

                <td><?php echo h($row['Customer']['contact_day']) ?></td>
                <td><?php echo $this->Html->link('編集', '/Customers/edit/' . $row['Customer']['id']) ?></td>
            </tr>
            <?php endforeach ?>
        </table>
        <div class="pagenator">
            <ul class="pagenation">
                <?php echo $this->Paginator->numbers() ?>
            </ul>
        </div>
   </div>


    <div class="search-section">
        <h3>検索フォーム</h3>
        <?php echo $this->Form->create('Customer',array('url' => '/Customers/index')) ?>
        <div>
            <p>キーワード</p>
            <?php echo $this->Form->input('cond_title', array('type' => 'text', 'label' => false)) ?>
        </div>
        <div>
            <?php echo $this->Form->radio('contact_type',
            array(
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
            array('legend' => false)) ?>
        </div>
        <div>
            <?php echo $this->Form->select('agency_id', array(
                0 => '選択してください',
                1 => 'ヒトコム',
                2 => 'ビックカメラ',
                3 => 'ヨドバシカメラ',
                4 => 'ヤマダ電機'
            ),
            array('default' =>  0)) ?>
        </div>
        <div>
            <?php echo $this->Form->radio('status', array(
                1 => '契約中',
                2 => '解約済み'
            ),
            array('legend' => false))?>
        </div>
    <?php echo $this->Form->end(__('検索')) ?>
    </div>
</div>
