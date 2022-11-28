    <div class="hero-wrap hero-bread" style="background-image: url('/web2041/view/images/bg_6.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Bill</span></p>
                    <h1 class="mb-0 bread">Bill</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-cart">
        <div class="container">
            <div style="text-align: center; margin-bottom: 50px; border-bottom: 1px solid black;">
                <h3>Thông tin đơn hàng</h3>
            </div>
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <form action="index.php?act=billcomfirm" method="post">
                        <div class="row mb">
                            <table class="table">
                                <?php
                                if (isset($_SESSION['user'])) {
                                    $name = $_SESSION['user']['ho_ten'];
                                    $address = $_SESSION['user']['dia_chi'];
                                    $email = $_SESSION['user']['email'];
                                    $tel = $_SESSION['user']['sdt'];
                                }
                                ?>
                                <thead class="thead-primary">
                                    <tr class="text-center">
                                        <th>&nbsp;</th>
                                        <th>Người đặt hàng</th>
                                        <th>Địa chỉ</th>
                                        <th>Email</th>
                                        <th>Điện thoại</th>
                                        <th>Tổng đơn hàng</th>
                                        <th colspan="2">Thanh toán</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><input type="text" name="ho_ten" value="<?= $name ?>" class="form-control"></td>
                                        <td><input type=" text" name="dia_chi" value="<?= $address ?>" class="form-control"></td>
                                        <td><input type="text" name="email" value="<?= $email ?>" class="form-control"></td>
                                        <td><input type="text" name="sdt" value="<?= $tel ?>" class="form-control"></td>
                                        <td><input type="text" name="tong" value="<?= $tel ?>" class="form-control"></td>
                                        <td>
                                            <input type="radio" name="pttt" checked value="0" >Trả tiền khi nhận hàng <br>
                                            <input type="radio" name="pttt" value="1" >Thanh toán online
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div  class="No_hienQR" style="margin: 0 auto;"><img src="/upload/ma_QR_BIDV.jpg" alt="QR" width="200px"></div>
                           
                        </div>
                </div>
                
                <div class="cart-list">
                    <table class="table">
                        <?php viewcart(0) ?>
                    </table>
                </div>
                <div class="bill">
                    <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang" class="btn btn-primary py-3 px-4">
                </div>
                </form>
            </div>
        </div>

        </div>
    </section>