<!DOCTYPE html>
<html>
    <head>
        <title>Đăng nhập</title>
        <meta charset="UTF-8">
        <link rel="icon" type="" href="<?php echo APP_URL?>public/image/favicon.jpg">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            * {
                margin: 0;
                padding: 0;
                font-family: Arial, Helvetica, sans-serif;
                box-sizing: border-box;
            }

            body {
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
                min-height: 80vh;
            }

            .container {
                padding: 40px;
                background-color: #f1f4f5;
                border: 1px solid #333;
                border-radius: 25px;
            }



            .container .form h2 {
                font-weight: 500;
                color: #333;
                font-size: 30px;
            }

            .container .form .inputBox {
                width: 300px;
                justify-content: center;
                align-items: center;
                position: relative;
            }

            .container .form .inputBox input {
                margin-top: 25px;
                width: 100%;
                background-color: #f1f4f5;
                border: 1px solid #333;
                height: 50px;
                border-radius: 25px;
                padding: 12px 10px 12px 49.5px;
                font-size: 20px;
                font-weight: 550;
            }

            .container .form .inputBox i {
                position: absolute;
                top: 37px;
                left: 16px;
                padding-right: 7.5px;
                border-right: 1px solid;
                font-size: 20px;
                font-weight: 600;
                color: #333;
            }

            .container .form .inputBox span {
                position: absolute;
                top: 36px;
                left: 50px;
                font-size: 20px;
                font-weight: 600;
                color: #333;
                pointer-events: none;
                transition: 0.5s;
            }

            .container .form .inputBox input:valid ~ span,
            .container .form .inputBox input:focus ~ span {
                font-size: 15px;
                border: 1px solid #333;
                color: #333;
                font-weight: 500;
                border-radius: 20px;
                padding: 0px 8px 2px 8px;
                transform: translateY(-34px);
            }

            .container .form .inputBox a input {
                font-weight: 600;
                color: #333;
                padding: 0 10px;
                transition: 0.4s ease;
                cursor: pointer;
            }

            .container .form .inputBox a input:hover {
                opacity: 0.5;
            }

            .container .form p {
                margin-top: 20px;
                color: #333;
                font-size: 15px;
            }

            .container .form p a {
                font-weight: 600;
                color: #333;
                text-decoration: none;
            }

            .container .form p a:hover {
                text-decoration: underline;
            }


        </style>
    </head>
    <body>
        <form autocomplete="off" action="<?php echo APP_URL?>login/authentication" class="container" method="post">
            <div class="form">
                <h2>Đăng nhập</h2>
                <div class="inputBox">
                    <input name="username" type="text" required="required">
                    <i class="fa-regular fa-user"></i>
                    <span>tên tài khoản</span>
                </div>
                <div class="inputBox">
                    <input name="password" type="password" required="required">
                    <i class="fa-solid fa-lock"></i>
                    <span>mật khẩu</span>
                </div>
                <div class="inputBox">
                    <a href=""><input type="submit" value="Đăng nhập"></a>
                </div>
                <?php if(isset($msg)){ ?>
                    <div class="thongbao" role="alert" style="color: red; font-size: 18px; margin-top: 10px;
                     text-align: center;">
                        <?php echo $msg?>
                    </div>
                <?php } ?>
                
                <p>Về lại <a href="<?php echo APP_URL?>">Trang chủ</a></p>
            </div>
        </form>
        
    </body>
</html>
</form>