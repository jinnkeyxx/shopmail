<?php if(isset($_SESSION['username'])){ ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-dismissible alert-light">
                <h4 class="alert-heading"><i class="fa fa-bullhorn" aria-hidden="true"></i> Thông báo!</h4>
                <p class="mb-0">Admin thêm mail vô nhé</p>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card border-light mb-3">
                <div class="card-header">
                    <div class="panel-heading text-left">
                        <h5><i class="fas fa-shopping-basket"></i>THÊM LOẠI MAIL</h5>
                        <hr>
                        <div class="form-group">
                            <label><i class="fas fa-calculator"></i>Loại mail</label>
                            <input type="text" class="form-control"  id="type-mail"  data-toggle="maxlength" placeholder="Yahoo Cổ Việt">
                        </div>
                        
                        <div class="form-group">
                            <label><i class="fas fa-calculator"></i>Giá Tiền</label>
                            <input type="text" class="form-control"  id="tien-type-mail"  data-toggle="maxlength" placeholder="500">
                        </div>
                        <center><button class="btn btn-primary btn-block btn-type-mail"  type="submit" data-cf-modified-dce833e722648dd985e0f2b9-=""><i class="fas fa-shopping-cart"></i> Thanh toán</button></center>
                    </div>
                    <center>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card border-light mb-4">
                <div class="card-header">
                    <div class="panel-heading text-left">
                        <h5><i class="fas fa-trophy"></i> TOP 10 THÁCH ĐẤU NẠP TIỀN</h5>
                        <ul class="list-group" style="max-height: 300px; overflow-y: scroll;">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Thứ Hạng</th>
                                        <th>Tên tài khoản</th>
                                        <th>Tổng tiền nạp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>
                                            <h3>1</h3>
                                        </th>
                                        <td>
                                            <span class="badge badge-success">Tindeptrai</span>
                                        </td>
                                        <td>
                                            <span class="badge badge-primary">65.660 VNĐ</span>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </ul>
                        <hr>
                    </div>
                    <center>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3"><i class="fas fa-history"></i> Lịch Sử Thêm Loại Mail <b style="color:red;"></h4>
                    <div class="panel-body">
                        <div id="tableExample3_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="dataTables_length" id="tableExample3_length"></div>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <div class="dt-buttons btn-group"></div>
                                </div>
                            </div>
                        </div>
                            <table id="tableExample3" class="table table-striped table-hover table-responsive-sm dataTable no-footer" role="grid">
                                <thead>
                            <tr>
                                
                                <th class="text-center">Ngày thêm</th>
                                <th class="text-center">Tài Khoản</th>
                                <th class="text-center">Loại Thêm</th>
                                <th class="text-center">Giá Tiền</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $db = new Database;
                            $lichsu = $db->query("SELECT * FROM `type_mail` ORDER BY `id` DESC");
                            while ($row = @mysqli_fetch_array($lichsu)):
                        ?>
                            <tr>
                            <td  class="text-center">
                            <p><?= $row['date'];?></p>
                            </td>
                            <td  class="text-center">
                            <p><?= $row['user'];?></p>
                            </td>
                            <td  class="text-center">
                            <p><?= $row['type'];?></p>
                            </td>
                            <td  class="text-center">
                            <p><?= $row['giatien'];?></p>
                            </td>
                            </tr>
                        <?php endwhile; ?>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="./mvc/view/assets/ajax.js"> </script>
<?php } else {
    echo "<script> window.location.href = 'dangnhap' </script>";
} ?>