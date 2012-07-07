<table>
  <tbody>
    <tr>
      <th>Product:</th>
      <td><?php echo $products->getProductId() ?></td>
    </tr>
    <tr>
      <th>Category:</th>
      <td><?php echo $products->getCategoryId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $products->getName() ?></td>
    </tr>
    <tr>
      <th>Image:</th>
      <td><?php echo $products->getImage() ?></td>
    </tr>
    <tr>
      <th>Price:</th>
      <td><?php echo $products->getPrice() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $products->getDescription() ?></td>
    </tr>
    <tr>
      <th>Order number:</th>
      <td><?php echo $products->getOrderNumber() ?></td>
    </tr>
    <tr>
      <th>Featured:</th>
      <td><?php echo $products->getFeatured() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $products->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $products->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('products/edit?product_id='.$products->getProductId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('products/index') ?>">List</a>
