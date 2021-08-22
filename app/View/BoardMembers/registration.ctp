<h1>Add registration</h1>
<?php
echo $this->Form->create('BoardMember');
echo $this->Form->input('name');
echo $this->Form->input('address');
echo $this->Form->input('pass');
echo $this->Form->end('Save Post');
?>
