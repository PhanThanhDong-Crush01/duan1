<div class="hero-wrap hero-bread" style="background-image: url('/web2041/view/images/bg_6.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="../index.php">Home</a></span> <span>Shop</span></p>
                <h1 class="mb-0 bread">Shop</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <?php
    extract($onesp);
    $img = $img_path . $hinh;
    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 ftco-animate">
                <a href="<?= $img ?>" class="image-popup prod-img-bg"><img src="<?= $img ?>" class="img-fluid" alt="Colorlib Template"></a>
            </div>
            <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                <h3><?= $ten_sp ?></h3>
                <div class="rating d-flex">
                    <p class="text-left mr-4">
                        <a href="#" class="mr-2">5.0</a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                    </p>
                    <p class="text-left mr-4">
                        <a href="#" class="mr-2" style="color: #000;">Số lượng: <span style="color: blue;"><?php echo $soluong[0]["so_luong_tong"];?></span></a>
                    </p>
                </div>
                <p class="price"><span style="color: red;"><?= $don_gia ?>.000 VNĐ</span></p>
                <p><?= $mo_ta ?></p>
                </p>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="form-group d-flex">
                            <div class="select-wrap">
                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                <select name="mau_size" id="mau_size" class="form-control" onchange="so_luong_theo_mau_size()">
                                    <?php foreach($list_mau_size as $mz): ?>
                                        <option value="<?= $mz["mau_size"]?>"><?= $mz["mau_size"]?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                    </div> 
                    <h1 id="so_luong_sp"></h1>
                    <div class="w-100"></div>
                    <div class="input-group col-md-6 d-flex mb-3">
	             	<span class="input-group-btn mr-2">
	                	<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="" onclick="quantity_left_minus()">
	                   <i class="ion-ios-remove"></i>
	                	</button>
	            		</span>
	             	<input type="text" id="quantity" name="quantity" class="quantity form-control input-number" value="1">
	             	<span class="input-group-btn ml-2">
	                	<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="" onclick="quantity_right_plus()">
	                     <i class="ion-ios-add"></i>
	                 </button>
	             	</span>
	          	</div>
                    <div class="w-100"></div>
                    <div class="col-md-12">
                        <p style="color: #000;"></p>
                    </div>
                </div>
                <p>
                    <a href="index.php?act=addtocart&ma_sp=<?= $ma_sp ?>" class="btn btn-black py-3 px-5 mr-2">Add to Cart</a>
                    <a href="index.php?act=addtocart&ma_sp=<?= $ma_sp ?>" class="btn btn-primary py-3 px-5">Buy now</a>
                </p>
            </div>
        </div>




        <div class="row mt-5">
            <div class="col-md-12 nav-link-wrap">
                <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Bình Luận</a>

                    <a class="nav-link ftco-animate active mr-lg-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Mô Tả</a>

                    <a class="nav-link ftco-animate mr-lg-1" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Sản Xuất</a>
                </div>
            </div>
            <div class="col-md-12 tab-wrap">

                <div class="tab-content bg-light" id="v-pills-tabContent">

                    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
                        <div class="p-4">
                            <h3 class="mb-4"><?= $ten_sp ?></h3>
                            <p><?= $mo_ta ?></p>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
                        <div class="p-4">
                            <h3 class="mb-4"><?= $ten_sp ?></h3>
                            <p><?= $mo_ta ?></p>
                        </div>
                    </div>

                    <!-- bình luận -->
                    <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
                        <div class="row p-4">
                            <div class="col-md-7">
                                <h3 class="mb-4">23 Reviews</h3>
                                <?php
                                foreach ($dsbl as $bl) {
                                    extract($bl);
                                    $sql = "SELECT ho_ten, hinh FROM `khach_hang` WHERE ma_kh = '$iduser';";
                                    $ho_ten_kh = pdo_query($sql);

                                    $image = $img_path . $ho_ten_kh[0]["hinh"];
                                    echo '
                                <div class="review">
                                    <div class="user-img" style="background-image: url(src="' . $image . '")"></div>
                                    <div class="desc">
                                        <h4>
                                            <span class="text-left">' . $ho_ten_kh[0]["ho_ten"] . '</span>
                                            <span class="text-right">' . $ngay_bl . '</span>
                                        </h4>
                                        <p class="star">
                                            <span>
                                                <i class="ion-ios-star-outline"></i>
                                                <i class="ion-ios-star-outline"></i>
                                                <i class="ion-ios-star-outline"></i>
                                                <i class="ion-ios-star-outline"></i>
                                                <i class="ion-ios-star-outline"></i>
                                            </span>
                                            <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                        </p>
                                        <p>' . $noi_dung . '</p>
                                    </div>
                                </div>';
                                }
                                ?>
                                <form action="" method="post">
                                    <input type="hidden" name="idpro" value="<?= $idpro ?>">
                                    <input type="text" name="noi_dung">
                                    <input type="submit" name="guibinhluan" value="Gửi bình luận">
                                </form>
                                <?php
                                if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
                                    $noi_dung = $_POST['noi_dung'];
                                    $idpro = $_POST['idpro'];
                                    $iduser = $_SESSION['user']['ma_kh'];
                                    $ngay_bl = date('d/m/Y');
                                    insert_binhluan($noi_dung, $iduser, $idpro, $ngay_bl);
                                }
                                ?>
                            </div>

                            <!-- đánh giá sao -->
                            <div class="col-md-4">
                                <div class="rating-wrap">
                                    <h3 class="mb-4">Give a Review</h3>
                                    <p class="star">
                                        <span>
                                            <i class="ion-ios-star-outline"></i>
                                            <i class="ion-ios-star-outline"></i>
                                            <i class="ion-ios-star-outline"></i>
                                            <i class="ion-ios-star-outline"></i>
                                            <i class="ion-ios-star-outline"></i>
                                            (98%)
                                        </span>
                                        <span>20 Reviews</span>
                                    </p>
                                    <p class="star">
                                        <span>
                                            <i class="ion-ios-star-outline"></i>
                                            <i class="ion-ios-star-outline"></i>
                                            <i class="ion-ios-star-outline"></i>
                                            <i class="ion-ios-star-outline"></i>
                                            <i class="ion-ios-star-outline"></i>
                                            (85%)
                                        </span>
                                        <span>10 Reviews</span>
                                    </p>
                                    <p class="star">
                                        <span>
                                            <i class="ion-ios-star-outline"></i>
                                            <i class="ion-ios-star-outline"></i>
                                            <i class="ion-ios-star-outline"></i>
                                            <i class="ion-ios-star-outline"></i>
                                            <i class="ion-ios-star-outline"></i>
                                            (98%)
                                        </span>
                                        <span>5 Reviews</span>
                                    </p>
                                    <p class="star">
                                        <span>
                                            <i class="ion-ios-star-outline"></i>
                                            <i class="ion-ios-star-outline"></i>
                                            <i class="ion-ios-star-outline"></i>
                                            <i class="ion-ios-star-outline"></i>
                                            <i class="ion-ios-star-outline"></i>
                                            (98%)
                                        </span>
                                        <span>0 Reviews</span>
                                    </p>
                                    <p class="star">
                                        <span>
                                            <i class="ion-ios-star-outline"></i>
                                            <i class="ion-ios-star-outline"></i>
                                            <i class="ion-ios-star-outline"></i>
                                            <i class="ion-ios-star-outline"></i>
                                            <i class="ion-ios-star-outline"></i>
                                            (98%)
                                        </span>
                                        <span>0 Reviews</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
        function so_luong_theo_mau_size(){
            const mau_size = document.querySelector("#mau_size").value;
            const so_luong = document.querySelector("#so_luong_sp");
            so_luong.innerHTML = mau_size;
        }
        
		const quantity = document.querySelector(".quantity");

        function quantity_left_minus(){
            quantity.value -= 1;
            if(quantity.value < 1){
                quantity.value = 1;
                return false;
            }
        }
        function quantity_right_plus(){
            quantity.value -= -1;
            if(quantity.value >= <?php echo $soluong[0]["so_luong_tong"];?>){
                quantity.value = <?php echo $soluong[0]["so_luong_tong"];?>;
                return false;
            }
        }
</script>