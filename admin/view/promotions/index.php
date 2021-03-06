
<!-- vendor css -->
<link href=".system/lib/admin/spectrum-colorpicker/spectrum.css" rel="stylesheet">
<link href=".system/lib/admin/select2/css/select2.min.css" rel="stylesheet">
<link href=".system/lib/admin/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet">
<link href=".system/lib/admin/ion-rangeslider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
<link href=".system/lib/admin/amazeui-datetimepicker/css/amazeui.datetimepicker.css" rel="stylesheet">
<link href=".system/lib/admin/jquery-simple-datetimepicker/jquery.simple-dtpicker.css" rel="stylesheet">
<link href=".system/lib/admin/pickerjs/picker.min.css" rel="stylesheet">

<div class="sbs-content pd-y-20 pd-lg-y-30 pd-xl-y-40">
    <div class="container">
    
        <?php
            include_once 'menu.php';
        ?>

        <div class="sbs-content-body pd-lg-l-40 d-flex flex-column">
            <div class="sbs-content-breadcrumb">
                <span><a href="admin.php">Admin</a></span>
                <span>Khuyến mãi</span>
            </div>
            <h2 class="sbs-content-title">Quản lí Khuyến mãi</h2>
            <!-- <div class="sbs-content-label mg-b-5">#1 - Simple Table</div>
            <p class="mg-b-15">admin - 01/01/2001</p> -->

            <div class="table-responsive">
            <table class="table table-striped mg-b-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên</th>
                        <th>Giảm giá</th>
                        <th>Bắt đầu</th>
                        <th>Kết thúc</th>
                        <th>Trạng thái</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                <?php

                    $output = '';
                    foreach($get_promotions as $promotion)
                    {
                        $type = ($promotion['type'] == 1)
                                ? '%' : '₫';
                        $active = ($promotion['active'] > 1)
                                ? '<sub class="tx-success"><em>Hoạt động</em></sub>'
                                : '<sub class="hl-txt"><em>Tạm ẩn</em></sub>';
                        $output .=
                            '<tr>
                                <th scope="row">'.$promotion['id'].'</th>
                                <td>'.$promotion['name'].'</td>
                                <td>'.$promotion['discount'].' '.$type.'</td>
                                <td>'.$promotion['begin'].'</td>
                                <td>'.$promotion['end'].'</td>
                                <td>'.$active.'</td>
                                <td>
                                    <a href="admin.php?ctrl=promotions&act=detail&id='.$promotion['id'].'" class="hl-hv">
                                        Chi tiết<i class="icon-info-circled-1"></i>
                                    </a>
                                </td>
                            </tr>';
                    }
                    echo $output;

                ?>

                </tbody>
            </table>
            </div><!-- table-responsive -->

            <hr class="mg-y-30">

            

            <div class="ht-40"></div>

        </div><!-- sbs-content-body -->
    </div><!-- container -->
</div><!-- sbs-content -->