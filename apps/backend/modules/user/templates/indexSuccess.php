<h1>Users List</h1>

<table>
  <thead>
    <tr>
      <th>User</th>
      <th>Name</th>
      <th>Email</th>
      <th>Pass</th>
      <th>Mobile</th>
      <th>Address</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($users as $user): ?>
    <tr>
      <td><a href="<?php echo url_for('user/show?user_id='.$user->getUserId()) ?>"><?php echo $user->getUserId() ?></a></td>
      <td><?php echo $user->getName() ?></td>
      <td><?php echo $user->getEmail() ?></td>
      <td><?php echo $user->getPass() ?></td>
      <td><?php echo $user->getMobile() ?></td>
      <td><?php echo $user->getAddress() ?></td>
      <td><?php echo $user->getCreatedAt() ?></td>
      <td><?php echo $user->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('user/new') ?>">New</a>
