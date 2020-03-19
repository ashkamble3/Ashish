<?php ob_start('ob_gzhandler'); ?>
<?php
	define("BASEPATH", "ramyatra");
    require_once __DIR__.'/function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Shri Ram Sanskritik Shodh Sansthan Nyas</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="myimg/fav.png" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/materialize.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/styleab.css" rel="stylesheet">
	<link href="css/astyle.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="css/responsive.css" rel="stylesheet">
	
</head>

<body>
	
	<?php include 'header.php'; ?>
    <section class="listb">
        <div class="container">
            <div class="row">
                <div class="dir-alp-tit">
                    <h1>Our Product</h1>
                    <ol class="breadcrumb">
                        <li><a href="<?= LINK; ?>">Home</a> </li>
                        <li><a href="#">Our Product</a> </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    
	<section class="p-about pt-30">
		<div class="container">
			<div class="row">
			<?php
				$order = "where prd_active='1' order by prd_id desc";
				$cates = selectQuery($edb, "product", "", $order);
				$k = 1;
				while($r = mysqli_fetch_array($cates)){
				?>
					<div class="col-md-3 col-xs-6 mb-30">
						<div class="productbox clearfix" data-id="<?= $r['prd_spcy']; ?>">
							<div class="productabc">
								<img class="hereImg" src="<?= MEDIA_URL.''.$r['prd_img']; ?>">
							</div>
							<div class="content ">
								<p class="mt-10 hereName"><?= $r['prd_name']; ?></p>
								<div class="price">&#8377; <span class="herePrice"><?= $r['prd_price']; ?></span></div>
								<span class="hereDetail"><?= $r['prd_desc']; ?></span>
								<div class="price"><a class="viewDetail" href="#desicr"><i class="fa fa-shopping-bag"></i> BUY NOW</a></div>
							</div>
						</div>
					</div>
				<?php
				}
				?>
             </div>
         </div>
	</section>

	<section class="msabi">
		<div class="container">
			<div onclick="window.history.back();" class="close"><i class="fa fa-times"></i></div>
			<div class="bamt clearfix">
				<div onclick="window.history.back();" class="arpow"><i class="fa fa-long-arrow-left"></i></div>
			</div>
			<div class="row center-block">
				<div class="col-md-4 col-xs-12">
					<img class="showImg" src="#" class="img-responsive d-block">
				</div>
				<div class="col-md-8 col-xs-12 discription">
					<h1 class="showName"></h1><br>
					<h3>&#8377; <span class="showPrice"></span></h3><br>
					<div class="bannw">
						<button onclick="window.location.href='#bannw';" class="btn btnorder">Order Now</button><br>
					</div>
					<h3>Discription</h3>
					<div>
						<p  class="showDesc"></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="consabi">
		<div class="container text-center">
			<div class="bamt1 clearfix">
				<a href="javascript:history.back();" class="arpow1"><i class="fa fa-long-arrow-left"></i></a>
			</div>
			<a href="javascript:history.back()" class="close"><i class="fa fa-times"></i></a>
			<h3>Fill Details To Order</h3><br>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<form class="myfroms" action="oder.php" method="POST">
                        <input type="hidden" name="prdId" vali="yes">
						<div class="col-md-6 col-xs-12">
	                        <div class="md-form mb-10">
	                            <input type="text" id="name" name="name" vali="yes" placeholder= "Enter your Name" class="form-control">
	                        </div>
	                    </div>
	                    <div class="col-md-6 col-xs-12">
	                        <div class="md-form">
	                            <input type="email" id="email" name="email" vali="yes" placeholder="Enter Your Mail " class="form-control">
	                        </div>
	                    </div>
	                    
	                     <div class="col-md-6 col-xs-12">
	                        <div class="md-form">
	                            <input type="number" id="quantity" name="quantity" min="1" value="1" vali="yes" placeholder="Quantity " class="form-control">
	                        </div>
	                    </div>

	                    <div class="col-md-6 col-xs-12">
	                        <div class="md-form">
	                            <input type="number" id="number" name="phone" vali="yes" placeholder="Enter Your Number " class="form-control">
	                        </div>
	                    </div>
	                     <div class="col-md-12 col-xs-12">
	                        <div class="md-form">
	                           <textarea rows="5" type="text" id="message" vali="yes" name="message" placeholder="Enter Address..." class="form-control md-textarea"></textarea>
	                        </div>
						<div class="clearfix"></div>

	                    </div>
						<div class="clearfix"></div>
						<div class="formrst"></div>
	                    <div class="col-md-12 col-xs-12">
	                        <div class="md-form mb-0">
	                           <button class="btn btnorder">Order Now</button>
	                        </div>
	                    </div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<?php include 'footer.php'; ?>
	<!--SCRIPT FILES-->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<script src="js/materialize.min.js" type="text/javascript"></script>
	<script src="js/custom.js"></script>
	<script src="js/product.js"></script>
</body>
</html>