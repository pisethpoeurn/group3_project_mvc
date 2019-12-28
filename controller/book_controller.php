<?php 
 $data = array();
   booking_book($data);
   function booking_book(&$data)
   {
    $function = 'view';
    if(isset($_GET['action'])){
      $function = $_GET['action'];
    }
    $function($data);
  }
   function view(&$data){
           $data['view'] = model_view();
           $data['page'] = "task/book/view";
     }
     function detail(&$data){
      $data['detail'] = m_detail();
      $data['page'] = "task/book/detail";
  }

  function delete(&$data){
    $delete_data = m_delete();
    if($delete_data){
        $action = "view";
    }else{
        echo " Cannot Delete";
    }
    header("Location:index.php?action=$action");
 }
 
 function add(&$data){
  $data['page'] = "task/book/add";
}

function form_data(&$data) {
  $add_data = m_add_data($_POST);
  if($add_data) {
      $action = "view";
  }else {
      $action = "add";
  }
  header("Location: index.php?action=$action");
}
?>