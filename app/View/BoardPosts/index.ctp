<h1>Board Posts</h1>
<?php echo $this->Html->link('新規投稿', array('controller'=>'BoardPosts', 'action'=>'add')); ?>
<?php echo $this->Html->link('ログアウト', array('controller'=>'BoardPosts', 'action'=>'logout')); ?>
<?php echo $this->Html->link('会員登録', array('controller'=>'BoardMembers', 'action'=>'registration')); ?>
<?php echo $this->Html->link('ログイン', array('controller'=>'BoardPosts', 'action'=>'login')); ?>

<pre>
<?php var_dump($posts[0]); ?>
</pre>

<?php echo $posts[0]['BoardPost']['name']; ?>

<table>
	<tr>
		<th>Id</th>
		<th>name</th>
		<th>Title</th>
		<th>Text</th>
		<th>Created_at</th>
	</tr>
	<?php foreach ($posts as $post): ?>
	<tr>
		<td>
			<?php echo $post['BoardPost']['id']; ?>
		</td>
		<td>
			<!-- <?php echo $post['BoardPost']['name']; ?> -->
		</td>
		<td>
			<?php echo $post['BoardPost']['title']; ?>
		</td>
		<td>
			<?php echo $post['BoardPost']['text']; ?>
		</td>
		<td>
			<?php echo $post['BoardPost']['created_at']; ?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>

