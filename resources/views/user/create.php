<?php

$this->layout('template', ['title' => 'User Create']); ?>

<h1>User Create</h1>

<?php echo $form->start(action: '/user', attributes: ['class="mt-3"', "enctype='multipart/form-data'"]); ?>
<?php echo $input->create(type: 'text', name: 'name', attributes: ['placeholder="My Name"', 'class="mt-4 form-control"', 'required']) ?>
<?php echo $input->create(type: 'email', name: 'email', attributes: ['placeholder="My Email"', 'class="mt-4 form-control"', 'required']) ?>
<?php echo $input->create(type: 'password', name: 'password', attributes: ['placeholder="My Password"', 'class="mt-4 form-control"', 'required']) ?>
<?php foreach ($users as $user) {
  $select->addOption([$user['id'] => $user['name']]);
} ?>
<?php
echo $select->create(name: 'user', attributes: ['class="mt-2 form-select"'])
?>
<?php echo $button->create(type: 'submit', label: 'Create User', attributes: ['class="mt-2 btn btn-primary btn-sm"']) ?>
<?php echo $form->end(); ?>

<!--
<form action="/user" method="post">
  <input type="text" name="name" class="form-control mt-2" required placeholder="Your name">
  <input type="email" name="email" class="form-control mt-2" required placeholder="Your email">
  <button type="submit">Create User</button>
</form>
-->