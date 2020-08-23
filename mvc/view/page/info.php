<?php
if(isset($_SESSION['username'])){ $db = new Database; $user = $db->total("SELECT * FROM `users` WHERE `username` = '{$_SESSION['username']}'");?>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="card border-light mb-3">
                <div class="card-header">
                    <div class="panel-heading text-left">
                        <h5><i class="fas fa-user-edit"></i> Thông tin tài khoản</h5>
                        <hr>
                        <div class="form-group">
                            <label>Tên đăng nhập:</label>
                            <input class="form-control mr-sm-2" value="<?php echo $user['name']; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Số dư khả dụng:</label>
                            <input class="form-control mr-sm-2" value="<?php echo number_format($user['sodu']); ?> VNĐ" readonly>
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ IP:</label>
                            <input class="form-control mr-sm-2" value="<?php echo get_client_ip(); ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Bạn là thành viên thứ:</label>
                            <input class="form-control mr-sm-2" value="<?php echo $user['id']; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Tài khoản của bạn được tạo vào ngày:</label>
                            <input class="form-control mr-sm-2" value="<?php echo $user['date']; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Tổng giao dịch:</label>
                            <input class="form-control mr-sm-2" value="0 lần" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card border-light mb-3">
                <div class="card-header">
                    <div class="panel-heading text-left">
                        <h5><i class="fas fa-lock"></i> Đổi mật khẩu</h5>
                        <hr>
                        <div class="form-group">
                            <label>Mật khẩu cũ:</label>
                            <input type="password" id="password" class="form-control mr-sm-2"
                                placeholder="**************">
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu mới:</label>
                            <input type="password" id="passwordnew" class="form-control mr-sm-2"
                                placeholder="**************">
                        </div>
                        <div class="form-group">
                            <label>Điền lại mật khẩu:</label>
                            <input type="password" id="repasswordnew" class="form-control mr-sm-2"
                                placeholder="**************">
                        </div>
                        <div class="form-group">
                            <center>
                                <button type="submit" class="btn btn-primary" id="change_password">
                                    LƯU THAY ĐỔI
                                </button>
                            </center>
                        </div>
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