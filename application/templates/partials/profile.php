<?php $this->layout('templates::layout', ['title' => 'User Profile']) ?>

<h1>User Profile</h1>
<p>Hello, <?php echo $this->e($name); ?></p>