<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle">ĐƠN HÀNG CỦA BẠN</div>
            <div class="row boxcontent cart">
                <table border=1>
                    <tr>
                        <th>Mã đơn hàng</th>
                        <th>Ngày đặt</th>
                        <th>Số lượng sản phẩm</th>
                        <th>Tổng giá trị đơn hàng</th>
                        <th>Tình trạng đơn hàng</th>
                    </tr>
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
                </table>
            </div>
        </div>
    </div>
    <div class="boxphai">
        <?php include "view/boxright.php"; ?>
    </div>
</div>