
<!DOCTYPE html>
<html lang="en-US">   
    <?php include 'header.php';?>
    <body>
        <div id="wrapper">
            <?php include 'navbar.php';?>
            <div class="row mt-100 product-spec">
                <div class="columns sixteen">
                    <div class="product_show" id="wellcome">
                        <div class="product_header">
                            <div class="download_image fl">
                                <?php 
                                    $sql= "SELECT * FROM products WHERE id=".$_GET['id'];
                                    $products= $conn->query($sql)->fetch_assoc();
                                ?>
                                <a href="<?php echo url('media/products/'.$products['image'])?>">download this image</a>
                            </div>
                            <div class="product_title fr">
                                <div class="product_name"><?php echo $products['product_name']?></div>
                                <?php 
                                    $sql= "SELECT * FROM category WHERE id=".$products['product_category'];
                                    $category= $conn->query($sql)->fetch_assoc();
                                ?>
                                <div class="product_catagory"><?php echo $category['categories']?></div>
                            </div>
                        </div>
                        <div class="product slider">
                            <img src="<?php echo url('media/products/'.$products['image'])?>" alt="">                            
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 "  style="overflow: hidden; margin-bottom: 50px;">
                            <div class="specification">
                            <div>
                                <div class="tabs"><span class="tab-links" >Product Details</span></div>
                                <div class="product-info">
                                    <div id="tab1" class="tab">
                                        <?php echo $products['product_details']?>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php include 'footer.php';?>
    </body>
</html>
