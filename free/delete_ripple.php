<?php
      include "../lib/dbconn.php";

      if(!empty($_GET['num'])){
          $num=$_GET['num'];
      }
      if(!empty($_GET['table'])){
          $table=$_GET['table'];
      }
      if(!empty($_GET['ripple_num'])){
          $ripple_num=$_GET['ripple_num'];
      }
      
      $sql = "delete from free_ripple where num=$ripple_num";
      mysqli_query($con, $sql);
      mysqli_close();

      echo "
	   <script>
	    location.href = 'view.php?table=$table&num=$num';
	   </script>
	  ";
?>
