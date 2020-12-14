<!-- <form action="index.php?ctrl=account&act=signin" method="post">
    <h1>Đăng nhập</h1>
    <table>
        <tr>
            <th colspan="2" width="100%">
                <p>
                    Bạn chưa có tài khoản?&ensp;<a href="index.php?ctrl=account&act=signup">Đăng ký ngay</a>
                </p>
            </th>
        </tr>
        <tr>
            <td>
                <span>Email/ Số điện thoại</span>
            </td>
            <td>
                <input type="text" name="user" id="user" required placeholder>
            </td>
        </tr>
        <tr>
            <td>
                <span>Mật khẩu</span>
            </td>
            <td>
                <input type="password" name="pass" id="pass" required placeholder>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <a href="#">Quên mật khẩu?</a>
            </td>
        </tr>
        <tr>
            <th colspan="2">
                <input width="100%" type="submit" name="signin" value="Đăng nhập">
            </th>
        </tr>
        <tr>
            <th colspan="2">
                <p id="warning"></p>
            </th>
        </tr>
    </table>

</form> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href=".public/css/client/account.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src=".public/js/client/account.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> -->
</head>

    <body>
        <?php
        //session_start();

        if (!empty($_SESSION['current_user'])) {
            $currentUser = $_SESSION['current_user'];
        
            ?>

            <div class="form-lg">
                <div class="wcome">
                    <div class="cover_photo">
                        <img src="images/avatar.jpg" alt="">
                    </div>
                    <div class="profile-photo"> </div>
                    <h1 class="hi_ad"> CHÀO MỪNG , <?= $currentUser['fullname'] ?> </h1>
                    <a class="btn-back" href="./edit.php">Đổi mật khẩu</a><br/>
                    <a class="btn-back" value="Refresh" onClick="window.history.back()">Trở lại</a>
                    <a class="btn-back" href="./logout.php">Đăng xuất</a>
            </div>
        </div>
    
            <?php
        } else {
            include '.system/lib/facebook-google-API/facebook_source.php';
            include '.system/lib/facebook-google-API/google_source.php';
            ?>
            <div id="user_login" class="container">
                <div class="frame">
                    <div class="nav">
                        <ul class="links">                   
                            <li class="signin-active"><a class="btn">Đăng nhập</a></li>
                            <li class="signup-inactive"><a class="btn">Đăng ký </a></li>     
                        </ul>
                        <div class="box_logo"><img src="images/logo.png" alt=""></div>
                    </div>
                <div ng-app ng-init="checked = false">
                <form action="index.php?ctrl=account&act=signin" class="form-signin"  method="post" name="form" autocomplete="off">
                    <label for="username">Tên người dùng</label>
                    <input class="form-styling" type="text" name="username" placeholder="" />
                    <label for="password">Mật khẩu</label>
                    <input class="form-styling" type="password" name="password" placeholder="" />
                    <br>
                    <input type="checkbox" id="checkbox" />
                    <label for="checkbox"><span class="ui"></span>Nhớ lần đăng nhập này </label>
                    <div class="btn-animate">
                        <a class="btn-signin">Đăng nhập</a>
                    </div>
                    <a href= "<?= $loginUrl ?>">
                        <div id='facebook' class='button'>Facebook
                            <div class='cover facebook'>
                                <li style="font-size: 1.5rem;" class="fa fa-facebook fa-2x"></li>
                            </div>
                        </div>
                    </a>

                    <?php if(isset($authUrl)){ ?>

                    <a href="<?= $authUrl ?>">
                        <div id='google' class='button'>Google+
                            <div class='cover google'>
                                <li style="font-size: 1.5rem;" class="fa fa-google-plus fa-2x"></li>
                            </div>
                        </div>
                    </a>
                    <?php } ?>   
                    </form>
            
                
                    <form class="form-signup" action="index.php?ctrl=account&act=signup" method="post" name="form">
                        <label for="fullname">Tên người dùng</label>
                        <input class="form-styling" type="text" name="fullname" id="fullname" placeholder="" />
                        <label for="email">Email</label>
                        <input class="form-styling" type="text" name="email" placeholder="" />
                        <label for="password">Mật khẩu</label>
                        <input class="form-styling" type="text" name="password" placeholder="" />
                        <label for="confirmpassword">Xác nhận mật khẩu</label>
                        <input class="form-styling" type="text" name="confirmpassword" placeholder="" />
                        <a ng-click="checked = !checked" class="btn-signup">Đăng ký</a>
                    
                    </form>
               
           
                <div class="success">
                    <svg width="270" height="270" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" id="check" ng-class="checked ? 'checked' : ''">
                     <path fill="#ffffff" d="M40.61,23.03L26.67,36.97L13.495,23.788c-1.146-1.147-1.359-2.936-0.504-4.314
                            c3.894-6.28,11.169-10.243,19.283-9.348c9.258,1.021,16.694,8.542,17.622,17.81c1.232,12.295-8.683,22.607-20.849,22.042
                            c-9.9-0.46-18.128-8.344-18.972-18.218c-0.292-3.416,0.276-6.673,1.51-9.578" />
                    <div class="successtext">
                        <p> Cảm ơn bạn đã đăng ký <br> Vui lòng kiểm tra gmail.</p>
                    </div>
              </div>
         </div>

            <div class="forgot">
            <a href="#">Quên mật khẩu?</a>
            </div>

            <div>
            <div class="cover-photo"></div>
            <div class="profile-photo"></div>
      
            <h1 class="welcome"> CHÀO MỪNG , S </h1>
            <a href="./edit.php" class="btn-goback" value="Refresh">Đổi mật khẩu</a>
            <a class="btn-goback" value="Refresh" onClick="history.go()">Trở lại</a>
            <a href="./logout.php" class="btn-goback" value="Refresh">Đăng xuất</a>   
            </div>

  </div>

  <a id="refresh" value="Refresh" onClick="history.go()">
    <svg class="refreshicon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 322.447 322.447" style="enable-background:new 0 0 322.447 322.447;" xml:space="preserve">
      <path d="M321.832,230.327c-2.133-6.565-9.184-10.154-15.75-8.025l-16.254,5.281C299.785,206.991,305,184.347,305,161.224
                c0-84.089-68.41-152.5-152.5-152.5C68.411,8.724,0,77.135,0,161.224s68.411,152.5,152.5,152.5c6.903,0,12.5-5.597,12.5-12.5
                c0-6.902-5.597-12.5-12.5-12.5c-70.304,0-127.5-57.195-127.5-127.5c0-70.304,57.196-127.5,127.5-127.5
                c70.305,0,127.5,57.196,127.5,127.5c0,19.372-4.371,38.337-12.723,55.568l-5.553-17.096c-2.133-6.564-9.186-10.156-15.75-8.025
                c-6.566,2.134-10.16,9.186-8.027,15.751l14.74,45.368c1.715,5.283,6.615,8.642,11.885,8.642c1.279,0,2.582-0.198,3.865-0.614
                l45.369-14.738C320.371,243.946,323.965,236.895,321.832,230.327z" />
    </svg>
                    </a>

                    
                    </div>
               <?php } ?>
      
    </body>
</html>