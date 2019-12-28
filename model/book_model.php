  
<?php 
  function model_view(){
    include "connection.php";
    $query = mysqli_query($conn,"SELECT * FROM tbl_book" );
    $result = [];
    if($query && mysqli_num_rows($query) > 0){
      foreach($query as $value){
        $result[] = $value;
      }
    }
    return $result; 
  }
  function m_detail(){
      include "connection.php";
      $id = $_GET['id'];
      $query = mysqli_query($conn, "SELECT * FROM tbl_book WHERE book_id=$id");
      return $query;
  
  }

  
  function m_delete() {
    include "connection.php";
    $id = $_GET['id'];
    $query = " DELETE FROM tbl_book WHERE book_id = '$id'";
    $result = mysqli_query( $conn,$query);
    return $result;
}

function m_add_data($data) {
  include "connection.php";
  $title = $_POST['title'];
  $desp = $_POST['desp'];
  $type = $_POST['type'];

  $query = "INSERT INTO tbl_book(title,description,type)
            VALUES('$title', '$desp', '$type')";
            // var_dump($query);die();
  $result = mysqli_query($conn,$query);
  // var_dump($result);die();
  return $result;
}
?>