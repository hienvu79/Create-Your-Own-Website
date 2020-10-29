 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Liên hệ</title>
  <?php require_once 'block/block_head.php';?>
</head>
<style>
.col-sm-6,.col-sm-12 .form-control{
    float: left;
    width: 100%;
    height: 40px;
    margin-bottom: 20px;
}
</style>
<body>
<?php
  require_once 'block/block_menu.php';
?> 
<br/>
<div class="container">
    <div class="jumbotron py-3" style="margin-bottom:0;">
        <h2 style="margin-left:-20px;">Turtle's Shop</h2>
        <p><i class="fas fa-map-marker fa-fw"></i>VietNam</p>
        <p><i class="fas fa-phone"></i>+8408022605</p>
        <p><i class="fas fa-envelope fa-fw"></i><a href="mailto:turtle@gmail.com">turtle@gmail.com</a></p>
    </div>
    <br/>
    <div class="row">
        <div class="col-sm-4">
            <form action="/action_page.php">
                <div class="form-group">
                  <div class="col-sm-14">
                    <div class="card bg-light">
                      <div class="card-header"><i class="fas fa-edit"></i>Leave your note</div>
                      <div class="card-body text-center">  
                        <div class="col-sm-6"><input type="text" class="form-control" placeholder="*Name" id="name"></div>
                        <div class="col-sm-6"><input type="text" class="form-control" placeholder="*Phone" id="phone"></div>    
                        <div class="col-sm-12"><input type="text" class="form-control" placeholder="Email" id="email"></div>
                        <div class="col-sm-12"><input type="text" class="form-control" placeholder="Address" id="address"></div>
                        <div class="col-sm-12"><textarea class="form-control" placeholder="*Leave your note here" rows="5"></textarea></div>
                        <div class="col-sm-2"><button type="button" class="btn btn-success">Send</button></div>
                      </div>
                    </div>
                  </div> 
                </div>
            </form>
        </div>
        <div class="col-sm-8">
          <div class="card bg-light">
            <div class="card-header"><i class="fas fa-map"></i>Map to us</div>
            <div class="card-body1">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.8575610708003!2d106.68530841411678!3d10.82221066130785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174deb3ef536f31%3A0x8b7bb8b7c956157b!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2hp4buHcCBUUC5IQ00!5e0!3m2!1svi!2s!4v1589526128038!5m2!1svi!2s" width="100%" height="357" frameborder="0"  allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
          </div>
        </div>
    </div>
    <hr  width="100%" align="center" size="20px" />
    <?php
      require_once 'block/block_footer.php';
      require_once 'block/block_foottag.php';
    ?>
    </div>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0&appId=645664486229446&autoLogAppEvents=1"></script>
</body>
</html>
