<body>
    <?php if(!isset($_SESSION['username'])){ ?>
    <nav class="shadow-sm navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/"><i class="fa fa-home"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <li class="nav-item active">
                    <a class="nav-link" href="//zalo.me/0966142061"><i class="fas fa-phone-square-alt"></i> Liên hệ
                        admin</a>
                </li>
            </ul>
            <a href="/" class="nav-link"><i class="fas fa-sign-in-alt"></i> ĐĂNG NHẬP</a>
        </div>
    </nav>
    <?php } else { ?>
    <nav class="shadow-sm navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/"><i class="fa fa-home"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">

                <li class="nav-item active">
                    <a class="nav-link" href="/payment"><i class="fas fa-money-bill-alt"></i> Nạp tiền</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/transfer-money"><i class="fas fa-wallet"></i> Chuyển tiền</a>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" role="button"
                        aria-haspopup="true" aria-expanded="false"><i class="fas fa-cog"></i> Tiện ích</a>
                    <div class="dropdown-menu" style="">
                        <a class="dropdown-item" href="/2facode"><i class="fas fa-key"></i> Get 2FA Code</a>
                        <a class="dropdown-item" href="/getuid"><i class="fab fa-get-pocket"></i> Find UID FB</a>
                        <a class="dropdown-item" href="//dthanhcoder.ml"><i class="fas fa-check-square"></i> Check live
                            UID FB</a>
                        <a class="dropdown-item" href="/get-token-cookie"><i class="fas fa-flag-checkered"></i> Get
                            cookie - token never checkpoint</a>
                        <a class="dropdown-item" href="/get-token-hang-loat"><i class="fas fa-splotch"></i> Get token
                            full quyền hàng loạt never checkpoint</a>
                        <a class="dropdown-item" href="/generate-email"><i class="far fa-envelope"></i> Generate Email
                            Random</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/account-info"><i class="fas fa-info-circle"></i> Thông tin tài khoản</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="https://forms.gle/3DK2Cjvzpga12akq5" target="_blank"><i
                            class="fas fa-bug"></i> Báo lỗi</a>
                </li>

            </ul>
            <a class="nav-link">Số dư: <span class="badge badge-primary"><strong>0</strong> VNĐ</span></a><img
                src="https://graph.facebook.com/4/picture" style="width: 35px;" class="rounded-circle" alt="">
            <a id="logout" class="nav-link"><i class="fas fa-sign-out-alt"></i> ĐĂNG XUẤT</a>
        </div>
    </nav>
    <?php } ?>
    </div>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="dce833e722648dd985e0f2b9-|49" defer=""></script>
    <?php
    require_once "./mvc/Controller/router.php";
    $router = new router;

     ?>
  