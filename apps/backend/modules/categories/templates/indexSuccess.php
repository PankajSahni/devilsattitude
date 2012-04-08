<h1>Categoriess List</h1>

<table>
  <thead>
    <tr>
      <th>Category</th>
      <th>Name</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($categoriess as $categories): ?>
    <tr>
      <td><a href="<?php echo url_for('categories/show?category_id='.$categories->getCategoryId()) ?>"><?php echo $categories->getCategoryId() ?></a></td>
      <td><?php echo $categories->getName() ?></td>
      <td><?php echo $categories->getCreatedAt() ?></td>
      <td><?php echo $categories->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('categories/new') ?>">New</a>
