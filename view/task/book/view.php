<div class="container mt-5">
  <h2 class="text-danger text-center"><strong>List All Books Name</strong></h2>
  <hr>
</div>

<div class="container mt-5">
  <a href="index.php?action=add" class="btn btn-success mb-3">Add Book</a>

  <div class="fw-container float-right">
    <div class="nav-search">
      <div class="nav-item search">
        <form action="/q/" method="GET">
          <label for="">Search books:</label>
          <input type="text" name="q" placeholder="Search . . ." autocomplete="off">
        </form>
      </div>
    </div>
  </div>

  <table class="table table-bordered">

    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Type</th>
      <th>Description</th>
      <th>Action</th>
      <th></th>
    </tr>

    <?php
    if (isset($data['view'])) {
      foreach ($data['view'] as $result) {
    ?>
        <tr>
          <td><?php echo $result['book_id']; ?></td>
          <td><?php echo $result['title']; ?></td>
          <td><?php echo $result['type']; ?></td>
          <td><?php echo $result['description']; ?></td>
          <td>
            <a href="index.php?action=detail&id=<?php echo $result['book_id']; ?>"><i class="material-icons">remove_red_eye</i></a>
            <a href="index.php?action=edit&id=<?php echo $result['book_id']; ?>"><i class="material-icons text-success">edit</i></a>
            <a href="index.php?action=delete&id=<?php echo $result['book_id']; ?>"><i class="material-icons text-danger">delete</i></a>
          </td>
          <td>
              <button type="button" class="btn border-info text-info">Booking</button>
          </td>
        </tr>

    <?php
      }
    }
    ?>
  </table>

</div>
<div class="container">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</div>