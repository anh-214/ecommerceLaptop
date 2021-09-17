<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <?php include('./views/frontend/layouts/_link.php') ?>
    
</head>
<body>
    <?php include('./views/frontend/layouts/_header.php') ?>
<section>
    <div class="container-login">
        <div class="form-login">
            <div>
            <div style="text-align: center;padding-top:50px">
                <h2>Đăng Nhập</h2>
            </div>
            <form style="margin-top:20px ">
                <div class="form-group">
                    <label for="email">Số điện thoại</label>
                    <input type="text" class="form-control" id="email" placeholder="Nhập số điện thoại của bạn">
                </div>
                <div class="form-group">
                    <label for="email">Mật khẩu</label>
                    <input type="text" class="form-control" id="email" placeholder="Nhập mật khẩu của bạn">
                </div>
                <p>
                    <a href="#">Quên mật khẩu?</a>
                </p>
                <div style="text-align: center">
                    <button type="submit" class="btn custom-button-color" style="margin: 10px 0 10px 0;border: 1px solid white">Đăng nhập</button>
                    <p>Bạn Chưa Có Tài Khoản? <a href="{{url('user/register')}}">Đăng Ký</a></p>
                </div>
            </form>
        </div>
        </div>
    </div>

</section>
<?php include('./views/frontend/layouts/_footer.php') ?>
<?php include('./views/frontend/layouts/_script.php') ?>
</body>
</html>

