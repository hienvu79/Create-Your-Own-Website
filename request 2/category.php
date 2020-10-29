<?php session_start();?>
<?php ob_start();?>
  <?php
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    require_once 'source/dbconnect.php';
    $cat_id = $_GET['cat_id'];
    $sql = "SELECT t1.*, MIN(t2.product_id), t2.img_url
    FROM products as t1 INNER JOIN product_img as t2 ON t1.product_id = t2.product_id 
    WHERE category_id ='$cat_id' 
    GROUP BY t2.product_id
    LIMIT 0,10;
    ";
    $result = mysqli_query($conn, $sql);
  
  if (mysqli_num_rows($result) > 0) {
    $products = [];
  
    while ($row = mysqli_fetch_assoc($result)) {
      array_push($products, $row);
  }
  
  } else {
    echo "0 results";
  }
  mysqli_close($conn);

  ?>

  <!doctype html>
  <html lang="en">
  <head>
    <title>Sản Phẩm</title>
    <?php require_once 'block/block_head.php';?>
    <link href="css/category.css" rel="stylesheet">
  </head>
  <body>
    <?php
      require_once 'block/block_menu.php'; 
    ?>
    <div class="container">
      <h1 align="center">Sản Phẩm</h1>
      <hr class="hr">
      <div class="row">
      <?php 
            foreach($products as $item){
               $id = $item['category_id'];
               $cat_id = $_GET['cat_id'];
              if($id==$cat_id){
          ?>
        <div class="bg-dark col-sm-4 text-center text-white overflow-hidden">  
          <div class="my-3 py-3">
            <h3 class="display-5"><a href="product.php?masp=<?php echo $item['product_id'];?>"><?php echo $item['product_title'];?></a></h3>
            <span class="test">Sale</span><br>
            <p class="lead"><label><?php echo $item['product_price'];?></label><em><?php echo $item['product_discount'];?> 
            <?php echo $item['currency'];?></em></p>
            <br>
          </div>
          <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
            <img src="<?php echo $item['img_url'];?>" style="width: 100%; height: 300px; border-radius: 21px 21px 0 0;"/>
          </div>
      </div>
      <?php 
              }
            }
      ?> 
  </div>
  <hr  width="100%" align="center" size="20px" />
      <?php
        require_once 'block/block_footer.php';
        require_once 'block/block_foottag.php';
      ?>
  </div>
    </body>
  </html>
