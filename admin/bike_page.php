<?php 
  include '../header.php';
?>

<div class="container">
<?php
    
$sql = "SELECT id, image, bike_name FROM bikes";
$result = $conn->query($sql);

  if( isset($_GET['deleted'])){
    echo 'Post deleted successfully!';
    echo '<hr>';
  }

  if ($result->num_rows > 0) {
    // output data of each row
    $html = '';

    $html.='<table>';
    $html.='<tr>';
    $html.='<th>Product Image</th>';
    $html.='<th>Product Name</th>';
    $html.='<th>Action</th>';
    $html.='</tr>';
    
    while($row = $result->fetch_assoc()) {
      $html.='<tr>';
      $html.='<td>';
      $html.='<img src="../media/bikes/'.$row['image'].'" alt=""  width=150px>';
      $html.='</td>';
      $html.='<td>'.$row['bike_name'].'</td>';
      $html.='<td>';
      $html.='<a type="button" class="table_button" href="/duranta/admin/edit_bike.php?post_id='.$row['id'].'">EDIT</a>';
      $html.='<a type="button" class="table_button" href="/duranta/admin/delete_bike.php?post_id='.$row['id'].'">DELETE</a>';
      $html.='</td>';
      $html.='</tr>';
      
    }   
    $html.='</table>';
    echo $html;
  } else {
    echo "0 results";
  }

  $conn->close();
?>

</div>

