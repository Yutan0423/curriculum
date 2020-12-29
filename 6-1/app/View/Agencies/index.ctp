<div class="content-up">
    <h2>代理店一覧</h2>
    <?php echo $this->Html->link('登録', '/Agencies/add', array('class' => 'button')) ?>
</div>

<table>
    <tr>
        <th>ID</th>
        <th>代理店名</th>
        <th>作成日</th>
        <th>更新日</th>
        <th>操作</th>
        <th></th>
    </tr>
    <?php foreach($agencies_data as $row): ?>
    <tr>
        <td><?php echo h($row['Agency']['id'])?></td>
        <td><?php echo h($row['Agency']['agency_name']) ?></td>
        <td><?php echo h($row['Agency']['created']) ?></td>
        <td><?php echo h($row['Agency']['modified']) ?></td>
        <td><?php echo $this->Html->link('編集', '/Agencies/edit/' . $row['Agency']['id']) ?></td>
        <td><?php echo $this->Html->link('削除', '/Agencies/delete/' . $row['Agency']['id']) ?></td>
    </tr>
    <?php endforeach ?>
</table>