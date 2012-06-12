<h1>Categories List</h1>
<?php
	$host = 'http://' . $_SERVER['HTTP_HOST'];
	$uploads_url = public_path('/uploads/');
?>
<table border="1">
  <thead>
    <tr>
      <th>Category</th>
      <th>Name</th>
      <th>Category image</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($categoriess as $categories): ?>
    <tr>
      <td><a href="<?php echo url_for('category/show?category_id='.$categories->getCategoryId()) ?>"><?php echo $categories->getCategoryId() ?></a></td>
      <td><?php echo $categories->getName() ?></td>
      <td><img src="<?php echo $uploads_url;?>category/<?php echo $categories->getCategoryImage(); ?>" width="90px" height="90px"/></td>
      <td><?php echo date("d-m-Y", strtotime($categories->getCreatedAt())) ?></td>
      <td><?php echo date("d-m-Y", strtotime($categories->getUpdatedAt())) ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('category/new') ?>">New</a>
