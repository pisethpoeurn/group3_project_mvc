<?php
    $data = array();
        myFunction($data);
        function myFunction(&$data){
            $function = "view";
            if(isset($_GET['action'])){
                $function = $_GET['action'];
            }
            $function($data);
        }
        function view(&$data){
            $data['view']= m_view();
            $data['page']="task/user/view";
        }
        
        function add_form(&$data){
            $data['page'] = "task/user/add";
        }

        function add(&$data) {
            $add_data = m_add($_POST);
            if($add_data) {
                $action = "view";
            }else {
                $action = "add";
            }
            header("Location: index.php?action=$action");
        }

        function delete(&$data){
            $delete_data = m_delete();
            if($$delete_data){
                $action = "book/view";
            }else{
                echo " Cannot Delete";
            }
            header("Location:index.php?action=$action");
         }
         function detail(&$data){
            $data['detail'] = m_detail();
            $data['page'] = "task/user/detail";
        }
?>