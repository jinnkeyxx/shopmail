<?php
ob_start();
if(!isset($_SESSION['username'])){
 ?>
<div class="container">

    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-dismissible alert-light">
                <h4 class="alert-heading"><i class="fa fa-bullhorn" aria-hidden="true"></i> Thông báo!</h4>
                <p class="mb-0">Chào mừng bạn đến với hệ thống bán clone, mail uy tín nhất Việt Nam</a>.</p>
            </div>
        </div>
        <br><br>
        <div class="col-lg-6" id="login">
            <div class="card border-light mb-3">
                <div class="card-header">
                    <div class="panel-heading text-left">
                        <h5><i class="fas fa-sign-in-alt"></i> ĐĂNG KÍ TÀI KHOẢN</h5>
                    </div>
                    <div class="panel-body">
                        <p class="alert alert-warning">Đã có tài khoản? <a type="button" href="dangnhap"
                                class="btn btn-dark btn-sm">Đăng Nhập Ngay!</a></p>
                        <form id="log_form">
                            <label><i class="fas fa-user-tag"></i> Họ và tên:</label>
                            <input id="fullname" name="fullname" placeholder="Nguyễn Văn A" type="text"
                                class="form-control" required><br>
                            <label><i class="far fa-user"></i></i> Tên tài khoản:</label>
                            <input id="user" name="username" placeholder="nguyenvana" type="text" class="form-control"
                                required><br>
                            <label><i class="fas fa-key"></i> Mật khẩu:</label>
                            <input id="pass" name="password" placeholder="**********" type="password"
                                class="form-control" required><br>
                            <label><i class="fas fa-key"></i> Điền lại mật khẩu:</label>
                            <input id="repassword" name="repassword" placeholder="**********" type="password"
                                class="form-control" required><br>
                            <br>
                            <center><button type="submit" name="submit" class="btn btn-primary" id="btn-dangki"><i
                                        class="fa fa-arrow-circle-right" aria-hidden="true"></i> Đăng Kí</button>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card border-light mb-3">
                <div class="card-header">
                    <div class="panel-heading text-left">
                        <h5><i class="fas fa-check-circle"></i> UY TÍN CỦA SHOP</h5>
                    </div>
                    <center>
                        <div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item"
                                src="https://www.youtube.com/embed/30mVKhSrVAU" allowfullscreen=""></iframe></div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card border-light mb-3">
                <div class="card-header">Vì sao bạn nên sử dụng website? Hệ thống bán clone, mail lớn nhất Việt Nam 2020
                </div>
                <div class="card-body">
                    <div class="panel-body text-center">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="box box-solid box-primary">
                                    <div class="">
                                        <h3 class="box-title">HỆ THỐNG AN TOÀN</h3>
                                    </div>
                                    <div class="box-body">
                                        <i class="fa fa-lock fa-5x"></i><br>
                                        <b>Thông tin của bạn trên website sẽ được bảo mật tuyệt đối và sẽ không có kẻ
                                            xấu lấy cắp thông tin của bạn.</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box box-solid box-primary">
                                    <div class="">
                                        <h3 class="box-title">DỊCH VỤ CHẤT LƯỢNG</h3>
                                    </div>
                                    <div class="box-body">
                                        <i class="fas fa-star fa-5x"></i><br>
                                        <b>Chúng tôi tự hào là một website bán clone, mail cổ giá rẻ nhất Việt Nam 2020
                                            và có nhiều bạn ưa chuộng.</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box box-solid box-primary">
                                    <div class="">
                                        <h3 class="box-title">TỰ ĐỘNG HÓA</h3>
                                    </div>
                                    <div class="box-body">
                                        <i class="fas fa-money-bill-alt fa-5x "></i> <br>
                                        <b>Ở đây bạn có thể trải nghiệm mua hàng tự động cực kì nhanh chóng. Website
                                            tích hợp nạp thẻ cào tự động (hỗ trợ nhiều nhà mạng) và còn cả tích hợp nạp
                                            ví điện tử Momo hoàn toàn tự động hóa.</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="./mvc/view/assets/ajax.js"> </script>
<?php } 
else 
{
    echo "<script> window.location.href = 'home' </script>";
} ?>