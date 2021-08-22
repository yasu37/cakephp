<h1>Add Post</h1>

<div class="users form">

<?php
echo $this->Form->create('BoardPost');
echo $this->Form->input('title');
echo $this->Form->input('text');
echo $this->Form->end('Save Post');
?>

