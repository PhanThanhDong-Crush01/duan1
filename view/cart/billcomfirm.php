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
    <?php
    if (isset($bill) && (is_array($bill))) {
        extract($bill);
    }
    ?>
    <div style="padding-left: 20px;">
        <h2>Cảm ơn quý khách đã đặt hàng!</h2>
        <div>THÔNG TIN ĐƠN HÀNG</div>
        <?php echo "<pre>" ?>
        <li>Mã đơn hàng: <?= $bill['ma_hd'] ?></li>
        <li>Ngày đặt hàng: <?= $bill['ngay_dat'] ?></li>
        <li>Tổng đơn hàng: <?= $bill['tong_tien'] ?></li>
        <li>Phương thức thanh toán: <?= $bill['pttt'] == 0 ? 'Trả tiền khi nhận hàng' : 'Thanh toán online' ?></li>
    </div>
    <nav>
            <div class="quangcao" id="QC">
                <button onclick="XQC()">❌</button>
                <img src="./img/Tây Phượng Tửu - Awake.png" alt="" id="anhQC">
            </div>
        </nav>
        <style>
            nav{
    position: fixed;
}
.quangcao{
    display: block;
    width: 450px;
    height: 650px;
    position: absolute;
    z-index: 1;
    top: 35px;
    left: 470px;
    right: 470px;

    border: 2px solid red;
    background-color: rgb(254, 245, 235);
}
.quangcao>button{
    float: right;
    width: 1px;
    height: 1px;
    font-size: 30px;
}
.quangcao>img{
    width: 100%;
}
.Tatquangcao{
    display: none;
}
        </style>
        <script>
            function XQC() {
    var backgr = document.getElementById("QC");
    var bodi = document.getElementById("bodi");

    if (backgr.className === "quangcao") {
        backgr.className = "Tatquangcao";
        bodi.style.backgroundColor = 'white';
        return false;
    }
    else{
        backgr.className = "quangcao";
    }

}

function HienQC() {
    var backgr = document.getElementById("QC");
    var bodi = document.getElementById("bodi");

    if (backgr.className === "Tatquangcao") {
        backgr.className = "quangcao";
        bodi.style.backgroundColor = 'gray';
        return false;
    }
    else{
        backgr.className = "Tatquangcao";
    }
}

        </script>
    <table class="table">
        <thead class="thead-primary">
            <tr class="text-center">
                <th>&nbsp;</th>
                <th>Người đặt hàng</th>
                <th>Địa chỉ</th>
                <th>Email</th>
                <th>Điện thoại</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>&nbsp;</td>
                <td><input type="text" name="ho_ten" value="<?= $_SESSION["user"]["ho_ten"] ?>" class="form-control"></td>
                <td><input type=" text" name="dia_chi" value="<?= $bill['dia_chi'] ?>" class="form-control"></td>
                <td><input type="text" name="email" value="<?= $_SESSION["user"]["email"] ?>" class="form-control"></td>
                <td><input type="text" name="sdt" value="<?= $bill['sdt'] ?>" class="form-control"></td>
            </tr>
        </tbody>
    </table>

    <table class="table">
        <?php bill_chi_tiet($billct); ?>
    </table>

    </div>
    </div>