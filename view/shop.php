<div class="hero-wrap hero-bread" style="background-image: url('/web2041/view/images/bg_6.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Shop</span></p>
                <h1 class="mb-0 bread">Shop</h1>
            </div>
        </div>
    </div>
</div>
<?php
if (isset($_GET['trang'])) {
    $page = $_GET['trang'];
} else {
    $page = 1;
}
if ($page == '' || $page == 1) {
    $start = 0;
} else {
    $start = ($page) * 8 - 8;
}
$sql = "select * from san_pham where 1 order by ma_sp desc limit $start,8";
$spnew  = pdo_query($sql);

?>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <!-- productS -->
            <div class="col-md-8 col-lg-10 order-md-last">
                <div class="row">
                    <?php
                    $i = 0;
                    foreach ($spnew as $sp) {
                        extract($sp);
                        $linksp = "index.php?act=sanphamct&idsp=" . $ma_sp;
                        $ha = $img_path . $hinh;
                        //<!-- 1 item -->
                        echo '<div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex" >
	                <div class="product d-flex flex-column">
	                    <a href="' . $linksp . '" class="img-prod"><img class="img-fluid" src="' . $ha . '" alt="Colorlib Template">
	                        <div class="overlay"></div>
	                    </a>
	                    <div class="text py-3 pb-4 px-3">
	                        <div class="d-flex">
	                            <div class="cat">
	                                <span>Lifestyle</span>
	                            </div>
	                            <div class="rating">
	                                <p class="text-right mb-0">
	                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
	                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
	                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
	                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
	                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
	                                </p>
	                            </div>
	                        </div>
	                        <h3><a href="' . $linksp . '" style="word-wrap: break-word;white-space: normal;overflow: hidden;display: -webkit-box; text-overflow: ellipsis;-webkit-box-orient: vertical;-webkit-line-clamp: 2;">' . $ten_sp . '</a></h3>
	                        <div class="pricing" >
	                            <p class="price"><span style="color: red;">$' . $don_gia . '</span></p>
	                        </div>
	                        <p class="bottom-area d-flex px-3">
	                            <a href="' . $linksp . '" class="add-to-cart text-center py-2 mr-1"><span>Add to cart<i class="ion-ios-add ml-1"></i>
                                </span></a>
	                            <a href="' . $linksp . '" class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
	                        </p>
	                    </div>
	                </div> 
	            </div>';
                        $i += 1;
                    }
                    ?>
                </div>

                <?php
                $mysqli = new mysqli("localhost", "root", "", "chicor");
                // Check connection
                if ($mysqli->connect_errno) {
                    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
                    exit();
                }
                $sql_trang = mysqli_query($mysqli, "select * from san_pham");
                $row_count = mysqli_num_rows($sql_trang); //đếm số sp 
                $trang = ceil($row_count / 9); //làm tròn lên
                ?>

                <!-- phân trang -->
                <div class="row mt-5">
                    <div class="col text-center">
                        <h6>Trang hiện tại: <a><?php echo $page ?></a></h6>
                        <div class="block-27">
                            <ul>
                                <?php
                                for ($i = 1; $i <= $trang; $i++) {
                                ?>
                                    <li><a href="index.php?act=shop&trang=<?php echo $i ?>"><?php echo $i ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- box right -->
            <div class="col-md-4 col-lg-2">
                <div class="sidebar">
                    <div class="sidebar-box-2">
                        <h2 class="heading">Categories</h2>
                        <div class="fancy-collapse-panel">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <?php
                                $i = 0;
                                foreach ($dsdm as $dm) {
                                    extract($dm);
                                    $linksp = "index.php?act=sanphamct&idsp=" . $ma_sp;
                                    echo '<div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingThree">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">' . $ten_loai . '
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>';
                                    $i += 1;
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <!-- end category -->

                    <!-- start PRICE RANGE -->
                    <div class="sidebar-box-2">
                        <h2 class="heading">Price Range</h2>
                        <form method="post" class="colorlib-form-2">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="guests">Price from:</label>
                                        <div class="form-field">
                                            <i class="icon icon-arrow-down3"></i>
                                            <select name="people" id="people" class="form-control">
                                                <option value="#">1</option>
                                                <option value="#">200</option>
                                                <option value="#">300</option>
                                                <option value="#">400</option>
                                                <option value="#">1000</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="guests">Price to:</label>
                                        <div class="form-field">
                                            <i class="icon icon-arrow-down3"></i>
                                            <select name="people" id="people" class="form-control">
                                                <option value="#">2000</option>
                                                <option value="#">4000</option>
                                                <option value="#">6000</option>
                                                <option value="#">8000</option>
                                                <option value="#">10000</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>