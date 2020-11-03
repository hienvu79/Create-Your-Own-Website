<?php session_start();?>
<?php ob_start();?>
<?php
  require_once 'source/dbconnect.php';
  $masp = $_GET['masp'];
  $sql = "SELECT * 
  FROM products AS t1 INNER JOIN product_img AS t2 ON t1.product_id = t2.product_id
  WHERE t1.product_id = '$masp';";
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
    <title><?php echo $products[0]['product_title'];?></title>
    <link rel="icon" href="https://i.imgur.com/AAFRpDU.png">
    <?php require_once 'block/block_head.php';?>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/product.css" rel="stylesheet">
  <body>
  <?php  
    require_once 'block/block_menu.php';
  ?>
  <div class="container"> 
  <div class="row">
    <div class="col-md-7 col-sm-12 col-xs-12">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        <?php
          foreach($products as $key => $item){
              $active_class = $key == 0?"active":"";
           ?> 
          <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $key;?>" class="<?php echo $active_class;?>"></li>
          <?php
          }
        ?>
        </ol>
        <div class="carousel-inner">
        <?php 
          foreach($products as $key => $item){
            $active_class = $key == 0?"active":"";
            $pro_id = $item['product_id'];
            if($masp==$pro_id){
        ?>
        <div class="carousel-item <?php echo $active_class;?>">
            <img class="d-block w-100" src="<?php echo $item['img_url']; ?>" alt="First slide">
          </div>
        <?php
            }
         }
        ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="col-md-5 col-sm-12 col-xs-12">
      <div class="product_title"><h3><?php echo $item['product_title'];?></h3></div>
      <div class="category"><span><a href="category.php?cat_id=<?php echo $item['category_id'];?>"></a></span></div>
      <hr style="border: 1px rotated gray">
      <span class="test" style="background-color: #fff; ">Sale</span>
      <div class="price"><label><h4><?php echo $item['product_price'];?> <?php echo $item['currency'];?></h4></label></div>
      <h3><em><?php echo $item['product_discount'];?> <?php echo $item['currency'];?></em></h3>
      <div class="buttons_added">
        <input class="minus is-form" type="button" value="-">
        <input aria-label="quantity" class="input-qty" max="10" min="1" name="" type="number" value="1">
        <input class="plus is-form" type="button" value="+">
      </div>
      <br><br>
      <div class="cart">
        <button type="button" id="add-to-cart" class="add-to-cart" name="add">
        <span>Thêm vào giỏ</span></button>
        <button type="button" id="buy-now" class="buy-now" name="buy">
        <span>Mua ngay</span></button>
      </div>
      <br>
      <div class="description"><h4>Mô tả</h4></div>
        <p><?php echo $item['product_description'];?></p>
    </div>
</div> 

  <hr  width="100%" align="center" size="20px" />
    <?php
      require_once 'block/block_footer.php';
      require_once 'block/block_foottag.php';
    ?>
  </div>
    </body>
<script>
$('input.input-qty').each(function() {
  var $this = $(this),
    qty = $this.parent().find('.is-form'),
    min = Number($this.attr('min')),
    max = Number($this.attr('max'))
  if (min == 0) {
    var d = 0
  } else d = min
  $(qty).on('click', function() {
    if ($(this).hasClass('minus')) {
      if (d > min) d += -1
    } else if ($(this).hasClass('plus')) {
      var x = Number($this.val()) + 1
      if (x <= max) d += 1
    }
    $this.attr('value', d).val(d)
  })
})
  </script>
</html>