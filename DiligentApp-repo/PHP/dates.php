  <?php
$emp_query = "SELECT * FROM users_table WHERE 1 ";

    // Date filter
    if(isset($_POST['but_search'])){
       $fromDate = $_POST['fromDate'];
       $endDate = $_POST['endDate'];

       if(!empty($fromDate) && !empty($endDate)){
          $emp_query .= " and date_of_join
                       between '".$fromDate."' and '".$endDate."' ";
       }
     }
?>
