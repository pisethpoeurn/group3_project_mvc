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
    if($$delete_data){
        $action = "task/book/view";
    }else{
        echo " Cannot Delete";
    }
    header("Location:index.php?action=$action");
 }
?>