```
class sanpham
 {
	function input($con,$pro_id,$tensp,$cat_id,$gia,$giakm,$mota,$sphot,$img_url)
	{
		$a = "INSERT INTO products(product_id,product_title,category_id,product_price,product_discount,currency,product_description,popular) values('$pro_id','$tensp','$cat_id','$gia','$giakm','VND','$mota','$sphot')";
		$b = "INSERT INTO product_img(product_id,img_url) values('$pro_id','$img_url')";
		mysqli_query($con,$a);
		mysqli_query($con,$b);
	}
	function checkinput($pro_id,$tensp,$cat_id,$gia,$giakm,$mota,$sphot,$img_url,$con)
	{
		$sql="SELECT product_id FROM products WHERE product_id='$pro_id'";
		$ketqua=mysqli_query($con,$sql);
		$i=mysqli_num_rows($ketqua);
		if ($i>0)
		{
			echo "<script> swal('ID sản phẩm bị trùng','Nhập lại ID','error')</script>";
			return false;
		}
		$sql="SELECT product_title FROM products WHERE product_title='$tensp'";
		$ketqua=mysqli_query($con,$sql);
		$i=mysqli_num_rows($ketqua);
		if ($i>0)
		{
			echo "<script> swal('Tên sản phẩm bị trùng','Nhập tên khác','error')</script>";
			return false;
		}
		
		if(!preg_match("/^[0-9]/",$gia))
		{
			echo "<script> swal('Yêu cầu nhập số','Nhập lại giá sản phẩm','error')</script>";
			return false;
		}
		if(!preg_match("/^[0-9]/",$giakm))
		{
			echo "<script> swal('Yêu cầu nhập số','Nhập lại giá khuyến mãi','error')</script>";
			return false;
		}
		if($gia <= $giakm)
		{
			echo "<script> swal('Giá khuyến mãi phải',' nhỏ hơn giá sản phẩm','error')</script>";
			return false;
		}
		if($tensp == ""||$gia == ""||$mota ==""||$pro_id == ""||$img_url ==""||$cat_id =="")
		{
			echo "<script> swal('Bạn chưa nhập đủ thông tin','Yêu cầu nhập đủ','warning')</script>";
            return false;
		}
		$this->input($con,$pro_id,$tensp,$cat_id,$gia,$giakm,$mota,$sphot,$img_url);
		echo "<script> swal('Oke!','Thêm sản phẩm thành công','success')</script>";
	}
	function xoa($con,$id)
	{
		$a = "DELETE FROM products WHERE product_id = '$id'";
		$b = "DELETE FROM product_img WHERE product_id = '$id'";
		mysqli_query($con,$a);
		mysqli_query($con,$b);
		echo "<script> swal('Oke!','Xóa sản phẩm thành công','success')</script>";
	}
	function sua($con,$pro_id,$tensp,$cat_id,$gia,$giakm,$mota,$sphot,$img_url)
	{
		$a = "UPDATE products 
		SET product_title = '$tensp', category_id = '$cat_id', product_price = '$gia', product_discount = '$giakm', product_description = '$mota', popular = '$sphot'
		WHERE product_id = '$pro_id'";
		$b = "UPDATE product_img 
		SET img_url = '$img_url'
		WHERE product_id = '$pro_id'";
		mysqli_query($con,$a);
		mysqli_query($con,$b);
		echo "<script> swal('Oke!','Sửa sản phẩm thành công','success')</script>";
	}
}
```