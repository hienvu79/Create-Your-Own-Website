 ```
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
</div>
  ```