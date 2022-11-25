    <div class="hero-wrap hero-bread" style="background-image: url('/web2041/view/images/bg_6.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>My Bill</span></p>
                    <h1 class="mb-0 bread">My Bill</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="cart-list">
        <table border=1 class="table">
            <thead class="thead-primary">
                <tr class="text-center">
                    <th>Mã đơn hàng</th>
                    <th>Ngày đặt</th>
                    <th>Số lượng sản phẩm</th>
                    <th>Tổng giá trị đơn hàng</th>
                    <th>Tình trạng đơn hàng</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (is_array($listbill)) {
                    foreach ($listbill as $bill) {
                        extract($bill);

                        $countsp = loadall_cart_count($bill['ma_hd']);
                        $ttdh = get_ttdh($bill["trang_thai"]);
                        echo '<tr>
                            <td>' . $bill['ma_hd'] . '</td>
                            <td>' . $bill['ngay_dat'] . '</td>
                            <td>' . $countsp . '</td>
                            <td>' . $bill['tong_tien'] . '</td>
                            <td>' . $ttdh . '</td>
                        </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>