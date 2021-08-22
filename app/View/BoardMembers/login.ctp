<h1>ログイン画面</h3>
<?php echo $this->Form->create('User'); ?>
<table>
<tr>
<th>ユーザーID</th>
<td>
</tr>
<tr>
<?php echo $this->Form->input('name', array('label'=>'')); ?>
</td>
<th>パスワード</th>
<td>
<?php echo $this->Form->input('password', array('label'=>'')); ?>
</td>
</tr>
<tr>
<td colspan="2" class="center">
<?php echo $this->Form->end(); ?>
</td>
</tr>
</table>
