<table>
  <tbody>
    <tr>
      <th>Category:</th>
      <td><?php echo $categories->getCategoryId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $categories->getName() ?></td>
    </tr>
    <tr>
      <th>Category image:</th>
      <td><?php echo $categories->getCategoryImage() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $categories->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $categories->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('category/edit?category_id='.$categories->getCategoryId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('category/index') ?>">List</a>