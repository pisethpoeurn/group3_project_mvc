
<div class="container">
<h2 class="text-danger text-center">View detial all of books</h2>
<hr>
<a href="index.php?action=add_detail" class="btn btn-warning">Add Profile</a>

<table class="table">
  <thead class="table-success">
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Type</th>
      <th>Description</th>
    </tr>
  </thead>
  <?php
  if(isset($data['detail'])) {
    foreach ($data['detail'] as $result) {
      ?>
      <tbody>
        <tr>
          <td><?php echo $result['book_id']; ?></td>
          <td><?php echo $result['title']; ?></td>
          <td><?php echo $result['description']; ?></td>
          <td><?php echo $result['type']; ?></td>

        </tr>
      </tbody>
  <?php
    }
  }
  ?>
</table>
<br><br>
<a href="index.php?action=view" class="btn btn-success">Go Back</a>
</div>

