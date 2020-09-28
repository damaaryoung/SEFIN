<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SEFIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo base_url('assets/dist/img/favicon1.ico')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/adminlte.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/adminlte.css')?>">
    <style type="text/css">
        html,body{
            height: 100%;
            width: -webkit-fill-available;
            margin: 0;
            /*background: rgb(2,0,36);*/
            background: url(./assets/dist/img/background.jpg) no-repeat center center fixed;
            align-items: center;
            display: flex;
            justify-content: center;
            
        }
   
       .myForm{
            /*background-color: rgba(0, 0, 0, 0.22) !important;*/
            padding: 15px !important;
            border-radius: 15px !important;
            color: black;
        }

        input{
            border-radius:0 15px 15px 0 !important;
        }

        input:focus{
            outline: none;
            box-shadow:none !important;
            border:1px solid #ccc !important;
        }

        .br-15{
            border-radius: 15px 0 0 15px !important;
        }
        .h4{
            margin-bottom: .5rem;
            font-family: inherit;
            font-weight: 500;
            line-height: 1.2;
            color: inherit;
            font-size: 2.0rem;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <div class="login-logo">
            <img style="width: 200px" src="<?php echo base_url('assets/dist/img/logosefin.png')?>">
        </div>
        <div>
            <div class="myForm">
                <div class="card-header">
                    <h4 style="text-align: center;">SEFIN System</h4>
                </div>
                <p class="login-box-msg">PT. BPR Kredit Mandiri Indonesia</p>
                <form class="user frm-login" id="form_login" method="POST">
                    <div class="form-group input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text br-15"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control form-control-user" id="nama" name="user" placeholder="Username">
                    </div>
                    <div class="form-group input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text br-15"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="btn-login">
                        <a href="javascript:void(0)" onclick="login()" class="btn btn-danger btn-user btn-block"><i class="fas fa-arrow-alt-circle-right"></i>Login</a>
                    </div>
                </form>
                <div class="message text-center mt-3 text-danger"></div>
                    <hr>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('assets/dist/js/adminlte.min.js')?>"></script>
    <script src="<?php echo base_url('assets/dist/js/index.js') ?>"></script>
    <script src="<?php echo $this->config->base_url('assets/');?>dist/js/jsrsasign.min.js"></script>
    <script src="<?php echo $this->config->base_url('assets/');?>dist/js/bootbox.min.js"></script>
    <script src="<?php echo $this->config->base_url('assets/');?>dist/nprogress/nprogress.js"></script>
    <script>
        $('input').keypress(function(event) {
            var keycode = (event.keyCode ? event.keyCode : event.which);
            if(keycode == '13'){
                login();
            }
        });
        
        function login(){
            var url_login = '<?php echo $this->config->item('api_url') . "login" ?>';
            var data = $('#form_login').serialize();
            $.ajax({
                type: "post",
                url: url_login,
                data: data,
                dataType: "json",
                beforeSend: function(){
                    var html= '<a href="javascript:void(0)" class="btn btn-secondary btn-user btn-block"><i class="fa fa-spinner fa-spin"></i> Proses</a>'
                    $('.btn-login').html(html);
                },
                success: function (e) {
                    let code = e.code,
                        token = e.token;
                    if(code == 200){
                        $.ajax({
                            type: "post",
                            url: "login/login",
                            data: "token="+token,
                            success: function (response) {
                                localStorage.setItem('token', e.token);
                                window.location='<?php echo base_url('login') ?>';
                            }
                        });
                    }
                }
            }).fail(function(e){
                var html= '<a href="javascript:void(0)" onclick="login()" class="btn btn-danger btn-user btn-block"><i class="fas fa-arrow-alt-circle-right"></i>Login</a>'
                $('.btn-login').html(html);
                $('.message').html(e.responseJSON.message);
            });
        }
    </script>
</body>
</html>