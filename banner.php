<?php
    $sql = "SELECT id, image, categories, cat_details FROM category WHERE id=".$_GET['id'];
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $html = '';
        while($row = $result->fetch_assoc()) {
            $html.='<div class="page_caption">';
            $html.='<h2>'.$row['categories'].'</h2>';
            $html.='<p>'.$row['cat_details'].'</p>';
            $html.='</div>';
            $html.='<div class="full_screen_slider screen_height header" style="background:url(media/front-image/'.$row['image'].');" id="wellcome">';
            $html.='<div class="hide_m heading "><a href="#about"><span class="center bg_down_arr"></span></a></div>';
            $html.='</div>';
        }   
        echo $html;
    } else {
        echo "0 results";
    }
?>