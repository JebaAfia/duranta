<?php 
  include '../header.php';
?>

<div class="container">
<?php
    
$sql = "SELECT id, categories FROM category";
$result = $conn->query($sql);

  if( isset($_GET['deleted'])){
    echo 'Post deleted successfully!';
    echo '<hr>';
  }

  if ($result->num_rows > 0) {
    $html = '';

    $html.='<table>';
    $html.='<tr>';
    $html.='<th>Product ID</th>';
    $html.='<th>Product Category</th>';
    $html.='<th>Action</th>';
    $html.='</tr>';
    
    while($row = $result->fetch_assoc()) {
      $html.='<tr>';
      $html.='<td>'.$row['id'].'</td>';
      $html.='<td>'.$row['categories'].'</td>';
      $html.='<td>';
      $html.='<a type="button" class="table_button" href="'. url('admin/insert_product_categories.php?edit='.$row['id']) .'">EDIT</a>';
      $html.='<a type="button" class="table_button" href="'. url('admin/delete_categories.php?deleted='.$row['id']) .'">DELETE</a>';
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

