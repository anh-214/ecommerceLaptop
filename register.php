<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <?php include('./views/frontend/layouts/_link.php') ?>
</head>
<body>
    <?php include('./views/frontend/layouts/_header.php') ?>
<section>
    <div class="container-register">
        <div class="form-register">
            <div style="text-align: center; padding-top:25px">
                <h2>Đăng Ký</h2>
            </div>
            <form style="margin-top:20px ">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Nhập email của bạn">
                </div>
                <div class="form-group">
                    <label for="email">Số điện thoại</label>
                    <input type="text" class="form-control" id="email" placeholder="Nhập số điện thoại của bạn">
                </div>
                <div class="form-group">
                    <label for="email">Mật khẩu</label>
                    <input type="text" class="form-control" id="email" placeholder="Nhập mật khẩu của bạn">
                </div>
                <div class="form-group">
                    <label for="email">Nhập lại mật khẩu</label>
                    <input type="text" class="form-control" id="email" placeholder="Nhập lại mật khẩu của bạn">
                </div>
                <div style="text-align: center">
                    <button type="submit" class="btn custom-button-color" style="margin: 10px 0 10px 0; border:1px solid white">Đăng ký</button>
                    <p>Bạn Đã Có Tài Khoản? <a href="{{url('/user/login')}}">Đăng Nhập</a></p>
                </div>
            </form>
        </div>
    </div>
</section>

<?php include('./views/frontend/layouts/_footer.php') ?>
<?php include('./views/frontend/layouts/_script.php') ?>
</body>
</html>

