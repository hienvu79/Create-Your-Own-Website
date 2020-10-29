
<?php
ob_start();

?>
<?php 
	if(isset($_GET['value']))
	{
		unset($_SESSION['user']);
	}
?>
<style>
.btn-secondary {
    color: #fff;
    background-color: #aea79f;
    border-color: #aea79f;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0; 
}
.form-inline .form-control {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;    
}
.bg-danger {background-color: #772953!important;}
    header img{width:100%;display: block;}
    h1{margin-top:-17px;color:red; text-shadow:3px 5px 6px orange;}
</style>
<?php

$menus = [
  [
    'name' => 'Trang Chủ',
    'icon' => 'fas fa-home',
    'href' => 'index.php'
  ],
  [
    'name' => 'Áo',
    'icon' => 'fas fa-tshirt',
    'href' => 'category.php?cat_id=1',
  ],
  [
    'name' => 'Quần',
    'icon' => 'fas fa-socks',
    'href' => 'category.php?cat_id=2'
  ],
  [
    'name' => 'Phụ Kiện',
    'icon' => 'fas fa-user-secret',
    'href' => 'category.php?cat_id=3'
  ],
  [
    'name' => 'Liên Hệ',
    'icon' => 'fas fa-fw fa-address-card',
    'href' => 'contact.php'
  ],
];

?>

<nav class="navbar fixed-top navbar-expand-sm bg-danger navbar-dark">
  <a class="navbar-brand" href="#">
    <img src="https://i.imgur.com/AAFRpDU.png" width="40" height="40" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <?php 
        foreach($menus as $menu){
      ?>
      <li class="nav-item dropdown">
        <a class="nav-link" href="<?php echo $menu['href'];?>"><i class="<?php echo  $menu['icon'];?>"></i><?php echo $menu['name'];?></a>
      </li>
        <?php }?>
        <?php
					if(isset($_SESSION["user"]))
					{
						?><li class="nav-item dropdown"><a class="nav-link">Xin chào,<?php echo $_SESSION['user'];?></a></li>
              <li class="nav-item dropdown"><a class="nav-link" href='index.php?value=logout'><i class="fas fa-user-secret"></i>Đăng Xuất</a></li><?php
						
					}
					else
					{
						echo"
						<li class='nav-item dropdown'><a class='nav-link' href='login.php'><i class='fas fa-user-secret'></i>Đăng Nhập</a></li>
						<li class='nav-item dropdown'><a class='nav-link' href='register.php'><i class='fas fa-user-secret'></i>Đăng ký</a></li>
					";
					}
				?>
    </ul>
    <div class="nav navbar-nav navbar-right">
    <form class="form-inline my-2 my-lg-0">
      <div class="input-group mb-3">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-secondary" type="button"><i class="fas fa-fw fa-search"></i></button>
        </div>
      </div>
    </form>
    </div>
  </div>  
</nav>
<br><br><br><br><br><br>

<div class="container">
    <div class="col-sm-12">
        <header>
            <img id="imgur" src="https://i.pinimg.com/originals/31/12/c4/3112c469fcfa2c0bc874802c69a496b0.gif">
        </header>   
    </div>
</div>
<br><br>
 
