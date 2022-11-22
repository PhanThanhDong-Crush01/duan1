<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Danh Sách Hóa Đơn</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <form action="index.php?act=listbill" method="post">
            <input type="text" name="kyw" placeholder="Nhập mã đơn hàng">
            <!--tìm kiếm -->
            <input type="submit" name="listok" value="Go">
        </form>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Danh sách</h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">KHÁCH HÀNG</th>
                                <th scope="col">SỐ LƯỢNG HÀNG</th>
                                <th scope="col">GIÁ TRỊ ĐƠN HÀNG</th>
                                <th scope="col">NGÀY ĐẶT HÀNG</th>
                                <th scope="col">TRẠNG THÁI</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listbill as $bill) {
                                extract($bill);

                                $sql = "select * from khach_hang where ma_kh = " . $bill["ma_kh"];
                                $kh = pdo_query($sql);

                                $khach_hang = '<li>' . $kh[0]["ho_ten"] . '</li> <br> <li>' . $kh[0]["email"] . '</li> <br> <li>' . $bill["dia_chi"] . '</li> <br> <li>' . $bill["sdt"] . '</li>';
                                $ttdh = get_ttdh($bill["trang_thai"]);
                                $countsp = loadall_cart_count($bill["ma_hd"]);
                                echo '<tr>
                                    <th scope="row">' . $bill['ma_hd'] . '</th>
                                    <td>' . $khach_hang . '</td>
                                    <td>' . $countsp . '</td>
                                    <td>' . $bill['tong_tien'] . '</td>
                                    <td>' . $bill['ngay_dat'] . '</td>
                                    <td>' . $ttdh . '</td>
                                    <td><a href="" class="btn btn-success text-white">Cập nhật
                                            trạng thái</a>
                                    </td>
                                </tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>