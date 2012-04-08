<h1>Productss List</h1>

<table>
  <thead>
    <tr>
      <th>Product</th>
      <th>Category</th>
      <th>Name</th>
      <th>Image</th>
      <th>Price</th>
      <th>Description</th>
      <th>Order number</th>
      <th>Featured</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($productss as $products): ?>
    <tr>
      <td><a href="<?php echo url_for('products/show?product_id='.$products->getProductId()) ?>"><?php echo $products->getProductId() ?></a></td>
      <td><?php echo $products->getCategoryId() ?></td>
      <td><?php echo $products->getName() ?></td>
      <td><?php echo $products->getImage() ?></td>
      <td><?php echo $products->getPrice() ?></td>
      <td><?php echo $products->getDescription() ?></td>
      <td><?php echo $products->getOrderNumber() ?></td>
      <td><?php echo $products->getFeatured() ?></td>
      <td><?php echo $products->getCreatedAt() ?></td>
      <td><?php echo $products->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('products/new') ?>">New</a>
