

<div class="content-up">
    <h2>管理ユーザー一覧</h2>
    <?php echo $this->Html->link('登録', '/Users/add', array('class' => 'button')) ?>
</div>

<table>
    <tr>
        <th>ID</th>
        <th>ユーザー名</th>
        <th>パスワード</th>
        <th>権限</th>
        <th>作成日</th>
        <th>更新日</th>
        <th>操作</th>
        <th></th>
    </tr>
    <?php foreach($users_data as $row): ?>
    <tr>
        <td><?php echo $this->Html->link($row['User']['id'], '/Users/view/' . $row['User']['id']) ?></td>
        <td><?php echo h($row['User']['username']) ?></td>
        <td><?php echo h($row['User']['password']) ?></td>
        <td><?php echo h($row['User']['role']) ?></td>
        <td><?php echo h($row['User']['created']) ?></td>
        <td><?php echo h($row['User']['modified']) ?></td>
        <td><?php echo $this->Html->link('編集', '/Users/edit') ?></td>
        <td><?php echo $this->Html->link('削除', 'Users/delete') ?></td>
    </tr>
    <?php endforeach ?>
</table>