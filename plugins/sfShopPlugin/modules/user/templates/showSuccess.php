<table>
  <tbody>
    <tr>
      <th>User:</th>
      <td><?php echo $user->getUserId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $user->getName() ?></td>
    </tr>
    <tr>
      <th>Email:</th>
      <td><?php echo $user->getEmail() ?></td>
    </tr>
    <tr>
      <th>Pass:</th>
      <td><?php echo $user->getPass() ?></td>
    </tr>
    <tr>
      <th>Mobile:</th>
      <td><?php echo $user->getMobile() ?></td>
    </tr>
    <tr>
      <th>Address:</th>
      <td><?php echo $user->getAddress() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $user->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $user->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('user/edit?user_id='.$user->getUserId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('user/index') ?>">List</a>
