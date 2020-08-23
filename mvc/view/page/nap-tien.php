<?php if(isset($_SESSION['username'])){ ?>
<div class="container">

    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-dismissible alert-light">
                <h4 class="alert-heading"><i class="fa fa-bullhorn" aria-hidden="true"></i> Thông báo</h4>
                <p class="mb-0"><i class="fas fa-arrow-circle-right"></i> Hãy điền đúng thông tin thẻ cào để được cộng 1
                    cách chính xác nhất !</p>
                <p class="mb-0"><i class="fas fa-arrow-circle-right"></i> Spam nạp thẻ sẽ bị khóa tài khoản vĩnh viễn mà
                    không cần báo trước nhé !</p>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card border-light mb-3">
                <div class="card-header">
                    <div class="panel-heading text-left">
                        <h5><i class="fas fa-dollar-sign"></i> Nạp thẻ cào tự động</h5>
                    </div>
                    <hr>
                    <div class="panel-body">

                        <div class="form-group">
                            <label>Loại thẻ :</label>
                            <select id="dCategory" name="dCategory" class="form-control">
                                <option value="1" selected>Viettel (Hoạt động)</option>
                                <option value="2">Mobifone (Hoạt động)</option>
                                <option value="3">Vinaphone (Hoạt động)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Mệnh giá :</label>
                            <select id="dCount" name="dCount" class="form-control">
                                <option value="10000" selected>10.000 (Còn 7.000đ web)</option>
                                <option value="20000">20.000 (Còn 17.000đ web)</option>
                                <option value="30000">30.000 (Còn 20.000đ web)</option>
                                <option value="50000">50.000 (Còn 35.000đ web)</option>
                                <option value="100000">100.000 (Còn 100.000đ web)</option>
                                <option value="200000">200.000 (Còn 200.000đ web)</option>
                                <option value="500000">500.000 (Còn 500.000đ web)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Số Seri :</label>
                            <input type="text" placeholder="Nhập Mã Seri" id="dSeri" name="dSeri" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Mã Thẻ :</label>
                            <input type="text" placeholder="Nhập Mã Thẻ" id="dPin" name="dPin" class="form-control">
                        </div>

                        <br>
                        <center>
                            <button  class="btn btn-primary btn-block btn-nap-tien"
                                data-cf-modified-e1f13dbeded0f1c87113fbfb-=""><i class="fas fa-dollar-sign"></i> Nạp
                                Thẻ</button>
                        </center>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card border-light mb-3">
                <div class="card-header">
                    <div class="panel-heading text-left">
                        <h5><i class="fas fa-wallet"></i> Nạp tiền tự động qua ví Momo</h5>
                    </div>
                    <hr>
                    <div class="panel-body">
                        <h5><a style="color:green;">Số tài khoản</a>: 0346228281 (Quét Mã QR <a data-toggle="modal"
                                data-target="#qr"><i class="fa fa-qrcode" aria-hidden="true"></i></a> )</span>
                        </h5>
                        <h5><a style="color:green;">Chủ tài khoản</a>: NGUYEN ANH NHAT</h5>
                        <h5><a style="color:red;">Lưu ý</a>: Không cần thiết nội dung. Chỉ cần bạn chuyển đúng sđt và
                            điền đúng mã giao dịch thì sẽ được cộng tiền thôi. Chuyển xong chờ 10s rồi nhập mã giao dịch
                            để xác nhận nhé !</h5>
                        <hr>
                        <form method="post" action="">
                            <div class="form-group">
                                <label>Mã Giao Dịch:</label>
                                <input class="form-control" name="tranid" type="text" required
                                    placeholder="Nhập mã giao dịch" required="">
                            </div>
                            <center>
                                <button class="btn btn-primary btn-block" type="submit" name="submit_momo">XÁC
                                    NHẬN</button>
                            </center><br>
                        </form>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card border-light mb-3">
                <div class="card-header">
                    <div class="panel-heading text-left">
                        <h5><i class="far fa-credit-card"></i> Nạp tiền tự động qua Thẻ Siêu Rẻ (TSR)</h5>
                    </div>
                    <hr>
                    <div class="panel-body">

                        <h5>Thẻ Siêu Rẻ: </font>
                            <font color="red">0966142061</font><br /><br /> CHỦ TÀI KHOẢN: </font>
                            <font color="red">Phạm Đức Thanh</font><br /><br />
                        </h5>
                        <p>Vui lòng ck theo nội dung bên dưới.</p>
                        <h5>
                            <p>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" value="abcxyz123 naptien" id="myInput"
                                        readonly>
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"
                                            data-cf-modified-e1f13dbeded0f1c87113fbfb-="">COPY</button>
                                    </div>
                                </div> ( c.k xong vui lòng inbox zalo để được cộng vào tài khoản )
                            </p>
                        </h5>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card border-light mb-3">
                <div class="card-header">
                    <div class="panel-heading text-left">
                        <h5><i class="fas fa-history"></i> Lịch sử nạp thẻ</h5>
                        <hr>
                        <ul class="list-group" style="max-height: 300px; overflow-y: scroll;">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Mệnh giá</th>
                                        <th>Số seri</th>
                                        <th>Mã thẻ</th>
                                        <th>Trạng thái</th>
                                    </tr>
                                </thead>
                                <tbody>
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
<script src="./mvc/view/assets/ajax.js"> </script>
<?php } else {
    echo "<script> window.location.href = 'dangnhap' </script>";
} ?>