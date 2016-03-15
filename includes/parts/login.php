<?php 
$this_page_words = file_get_contents(__DIR__.'/../../components/'.$language.'/pages/login.json');
$var079 = json_decode($this_page_words,TRUE);

?>
<style>
    .loginTitle{
        text-align: center;
        font-size: 24px;
        color:#089de3;
        border-bottom: 1px solid #600080;
        margin: 9px;
    }
    .login-box{
        border: 2px solid #089de3;
        border-radius: 4px;
    }
    html,body{
                padding: 0;
                margin: 0;
            }

            @font-face {
    font-family: dominik;
    src: url('font/dominik/Dominik.ttf');
}
            .login-form{background-color: white;padding: 28px;font-size: 16px;font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;letter-spacing: 1px;}
            @media screen and (min-width:700px){
            .login-box{
                max-width: 30%;
                margin: 0 auto;
                color: #600080;
                margin-top:10%;
            }
            }
            @media screen and (max-width:700px){
            .login-box{
                max-width: 50%;
                margin: 0 auto;
            }
            }
            /* enable absolute positioning */
.inner-addon { 
    position: relative; 
}

/* style icon */
.inner-addon .glyphicon {
  position: absolute;
  padding: 10px;
  pointer-events: none;
}

/* align icon */
.left-addon .glyphicon  { left:  0px;}
.right-addon .glyphicon { right: 0px;}

/* add padding  */
.left-addon input  { padding-left:  30px; }
.right-addon input { padding-right: 30px; }
            .btn-submit{min-width: 100px;}
            .btn-submit:focus{outline: 0;}
            .btn-submit:hover{
                background-color: #FA8B60;
                color: aliceblue;
                
            }
            footer{
                font-family: "Lucida Console", Monaco, monospace;
            }
    </style>
<?php
echo <<<THIS
<div class="login-box" title="login-box">
    <div class="loginTitle">{$var079['login']} {$this_network}</div>
        <form role="form" class="login-form">
            <div id="alert"></div>
            <div class="form-group">
                <label for="username">Username</label>
                <p class="inner-addon left-addon"> <i class="glyphicon glyphicon-user"></i><input class="form-control" type="text" id="uname" placeholder="Username" autofocus/></p>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <p class="inner-addon left-addon"><i class="glyphicon glyphicon-lock"></i><input class="form-control" type="password" id="password" placeholder="********"> </p>
            </div>
            <div class="check-box">
                <label><input type="checkbox">Remember me</label>
            </div>
            <button type="submit" id="login_btn" class="btn btn-default btn-submit">Log in</button>
        </form>
    </div><script src="__DIR__/../../js/login.js"></script>
THIS;
?>