<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-dismissible alert-light">
                <h4 class="alert-heading"><i class="fa fa-bullhorn" aria-hidden="true"></i> Thông báo!</h4>
                <p class="mb-0">Đã có mail ! Chúc ae mua sắm vv</p>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card border-light mb-3">
                <div class="card-header">
                    <div class="panel-heading text-left">
                        <h5><i class="fas fa-shopping-basket"></i> PANEL MUA HÀNG</h5>
                        <hr>
                        <label><i class="fas fa-filter"></i> Chọn Sản Phẩm:</label>
                        <div class="form-group has-error has-feedback">
                            <select id="loai" class="form-control">
                            <option value="1">Yahoo Cổ Việt Random (Full TT) | 180 VNĐ | Còn : 0</option>
                            <option value="2">Yahoo Cổ Tây Random (Full TT) | 450 VNĐ | Còn : 35</option>
                            <option value="3">Yahoo Cổ Bangladesh Random (Full TT) | 700 VNĐ | Còn : 68</option>
                            <option value="4">Clone Noveri | 400 VNĐ | Còn : 28</option>
    
                            </select>
                        </div>
                        <div class="form-group">
                            <label><i class="fas fa-sort-numeric-up-alt"></i> Nhập Số Lượng:</label>
                            <input type="number" class="form-control" maxlength="25" id="soluong" data-toggle="maxlength">
                        </div>
                        <div class="form-group">
                            <label><i class="fas fa-calculator"></i> Tổng Thanh Toán</label>
                            <b type="text" class="form-control" maxlength="25" id="tongthanhtoan" disabled="sdadasdsa" data-toggle="maxlength">VNĐ</b>
                        </div>
                        <center><button class="btn btn-primary btn-block" onclick="if (!window.__cfRLUnblockHandlers) return false; mua();" id="mua" type="submit" data-cf-modified-dce833e722648dd985e0f2b9-=""><i class="fas fa-shopping-cart"></i> Thanh toán</button></center>
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
                    <h4 class="header-title mb-3"><i class="fas fa-history"></i> Lịch Sử Mua |<b style="color:red;"> HỆ THỐNG CHỈ HIỂN THỊ 10 GIAO DỊCH GẦN NHẤT</b></h4>
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
                            <table id="tableExample3" class="table table-striped table-hover table-responsive-sm dataTable no-footer" role="grid">
                                <thead>
                                    <tr>
                                        <th>
                        </div>
                        </th>
                        <th>Ngày mua</th>
                        <th>Tài Khoản</th>
                        <th> Ip người mua </th>
                        <th></th>
                        <th>Số Lượng Mua</th>
                        <th>Link Tài khoản</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="8" class="text-center">
                                    <p>Chưa mua tài khoản nào cả </p>
                                </td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="./mvc/view/assets/ajax.js"> </script>