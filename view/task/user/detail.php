div class="container">
<h2 class="text-danger text-center">View detial all of books</h2>
<hr>
<a href="index1.php?action=add_detail" class="btn btn-warning">Add Profile</a>

<table class="table">
  <thead class="table-success">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Gender</th>
      <th>Email</th>
      <th>StartDate</th>
      <th>EndData</th>
    </tr>
  </thead>
  <?php
  if(isset($data['detail'])) {
    foreach ($data['detail'] as $result) {
      ?>
      <tbody>
        <tr>
          <td><?php echo $result['id']; ?></td>
          <td><?php echo $result['name']; ?></td>
          <td><?php echo $result['gender']; ?></td>
          <td><?php echo $result['email']; ?></td>
          <td><?php echo $result['startDate']; ?></td>
          <td><?php echo $result['endDate']; ?></td>

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

