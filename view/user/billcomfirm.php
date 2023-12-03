
<main>
    <section class="container">
        <section class="cart_list">

            <section class="form-user">
                <section class="congratulations">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <g id="check--check-form-validation-checkmark-success-add-addition-tick">
                            <path id="Vector (Stroke)" fill="#186f65" fill-rule="evenodd" d="M13.637 1.198a1 1 0 0 1 .134 1.408l-8.04 9.73-.003.002a1.922 1.922 0 0 1-1.5.693 1.923 1.923 0 0 1-1.499-.748l-.001-.002L.21 9.045a1 1 0 1 1 1.578-1.228l2.464 3.167 7.976-9.652a1 1 0 0 1 1.408-.134Z" clip-rule="evenodd"></path>
                        </g>
                    </svg> <span>Cảm ơn bạn đã đặt phòng</span>
                </section>
                <section class="information_content">
                    <section class="infomation">
                        <span class="infomation_title">
                            Thông tin hàng đã đặt
                        </span>
                        <table class="infomation_detail">
                            <tr>
                                <td>Mã đơn hàng</td>
                                <td>
                                    BND-<?php echo isset($bill["id"]) ? $bill["id"] : "" ?>
                                </td>

                            </tr>
                            <tr>
                                <td>Tên phòng</td>
                                <td>
                                    <?php echo isset($room["ten_Phong"]) ? $room["ten_Phong"] : "" ?>
                                </td>

                            </tr>
                            <tr>
                                <td>Ngày nhận phòng</td>
                                <td>
                                    <?php echo isset($bill["check_in"]) ? $bill["check_in"] : "" ?>
                                </td>

                            </tr>
                            <tr>
                                <td>Ngày trả phòng</td>
                                <td>
                                    <?php echo isset($bill["check_out"]) ? $bill["check_out"] : "" ?>
                                </td>

                            </tr>
                            <tr>
                                <td>Tổng tiền </td>
                                <td><?php echo isset($bill["price"]) ? number_format($bill["price"], 0, ',', ',') : "" ?> VND</td>
                            </tr>
                            <tr>
                                <td>Ngày đặt phòng</td>
                                <td>
                                    <?php
                                    echo date("h:i:s d-m-Y", time()) ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Trạng thái</td>
                                <td>
                                    <?php
                                    if (isset($bill["status"]) == 1) {
                                        echo "Chờ xác nhận";
                                    } else if (isset($bill["status"]) == 2) {
                                        echo "Xác nhận đặt phòng";
                                    } else {
                                        echo "Xác nhận thanh toán";
                                    }
                                    ?>
                                </td>
                            </tr>


                        </table>
                    </section>
                    <section class="infomation">
                        <span class="infomation_title">
                            Thông tin người đặt hàng
                        </span>
                        <table class="infomation_detail">
                            <tr>
                                <td>Tên:</td>
                                <td>
                                    <?php echo isset($bill["book_name"]) ? $bill["book_name"] : "" ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Số điện thoại:</td>
                                <td>
                                    <?php echo isset($bill["sdt"]) ? $bill["sdt"] : "" ?>
                                </td>
                            </tr>
                        </table>
                    </section>

                </section>





            </section>

        </section>

</main>