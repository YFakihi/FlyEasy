<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>

<style>
@import url('https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700&subset=latin-ext');
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.wrapper {
    width: 1%;
    height: 100vh;
    background: #ededed;
    display: table-cell;
    vertical-align: middle;
    font-family: 'Dosis', sans-serif;
}

.sign-panels {
    width: 650px;
    background: #fff;
    padding: 40px 80px;
    margin: 40px auto;
    border-radius: 20px;
    text-align: center;
}
.login,.signup {
    position: relative;
}


.title {
    color: #9f9f9f;
}

.title span {
    display: block;
    font-size: 46px;
    font-weight: bold;
}

.title p {
    font-size: 20px;
    font-weight: 500;
}

.btn-face,.btn-twitter {
    color: #fff;
    display: inline-block;
    width: 200px;
    font-size: 20px;
    height: 50px;
    border-radius: 50px;
    text-decoration: none;
    padding: 11px 0;
    font-weight: 500;
}

.btn-face .fa,.btn-twitter .fa {
    margin-right: 5px;
}

.btn-face {
    background: #014788;
    margin-right: 25px;
}

.btn-twitter {
    background: #40b9e0;
}

.or {
    margin: 35px 0;
    font-weight: 600;
    color: #9f9f9f;
}

.or:after {
    content: '';
    display: block;
    width: 100%;
    height: 1px;
    background: #cecece;
    position: absolute;
    margin-top: -10px;
    z-index: 0;
}

.or span {
    display: block;
    background: #fff;
    width: 50px;
    margin: auto;
    position: relative;
    z-index: 2;
}

.sign-panels input {
    width: 100%;
    display: block;
    margin-bottom: 15px;
    height: 50px;
    border-radius: 50px;
    border: none;
    background: #ededed;
    text-align: center;
    padding: 10px;
    font-size: 15px;
    color: #7c7c7c;
    font-weight: 500;
}

.sign-panels input:focus {
    outline:none;
}

.sign-panels input[type="checkbox"] {
    display: none;
}

.sign-panels input[type="checkbox"] + label {
    display: block;
    width: 50%;
    text-align: left;
    padding-left: 60px;
    cursor: pointer;
    color: #828282;
    font-weight: 500;
    margin-top: 10px;
    float: left;
    height: 50px;
    padding-top: 15px;
}

.sign-panels input[type="checkbox"] + label:before {
    content: '';
    display: block;
    width: 15px;
    height: 15px;
    background: #dbdbdb;
    position: absolute;
    left: 30px;
    border-radius: 50%;
    border: 2px solid white;
    box-shadow: 0 0 0 5px #ededed;
    -webkit-transition: all .3s ease;
    transition: all .3s ease;
}
.sign-panels input[type="checkbox"]:checked + label:before {
    background: #FF5722;
    box-shadow: 0 0 0 5px #FF5722;
    -webkit-transition: all .3s ease;
    transition: all .3s ease;
}

.btn-signin {
    display: inline-block;
    width: 50%;
    margin-top: 10px;
    height: 50px;
    background: #ec581e;
    border-radius: 50px;
    padding: 11px;
    font-size: 20px;
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    border: none;
    box-shadow: none;
    cursor: pointer;
}

.btn-reset,.btn-member,.btn-fade {
    font-size: 19px;
    font-weight: 500;
    color: #9f9f9f;
    display: block;
    /*width: 210px;*/
    margin: 30px auto 0;
    text-decoration: none;

}
.btn-member {
    margin-top: 15px;
}

.btn-reset .fa,.btn-member .fa {
    margin-left: 6px;
}

.notification p {
    font-size: 20px;
    font-weight: 600;
    color: #9f9f9f;
}

.notification span {
    color: #ec581e;
}

.error {
    display: block;
    color: #ec581e;
    font-size: 20px;
    font-weight: 600;
    margin: 15px 0;
}

@media screen and (max-width: 768px) {
    .sign-panels {
        width: 90%;
        padding: 40px;
    }
}

@media screen and (max-width: 570px) {
    .sign-panels {
        padding: 40px 20px;
    }

    .btn-face, .btn-twitter {
        width: 100%;
    }
    .btn-face {
        margin-right: 0;
        margin-bottom: 25px;
    }
}

@media screen and (max-width: 480px) {
    .sign-panels input[type="checkbox"] + label {
        width: 100%;
    }

    .btn-signin {
        width: 80%;
    }

    .title span {
        font-size: 36px;
    }

}
</style>
<div class="wrapper">
    <div class="sign-panels">
        <div class="login">
            <div class="title">
                <span>Sign up</span>
                <p>Welcome back, please Register to your account. You can login with facebook, twitter or by your regular
                    user login.</p>
            </div>

            <div>
                <a href="#" class="btn-face"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
                <a href="#" class="btn-twitter"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
            </div>

            <div class="or"><span>OR</span></div>
            <?php if($errors->any()): ?>
            <div>
            <div>ERRORR</div>
        <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li style="list-style-type: none; color:red;"><?php echo e($error); ?> </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        </div>
        <?php endif; ?>

            <form method="post" action="<?php echo e(route('register')); ?>" >
            <?php echo csrf_field(); ?>
                <input type="text" placeholder="Username" name="name">
                <input type="text" placeholder="Email" name="email">
                <input type="password" placeholder="Password" name="password">
                <input type="checkbox" id="remember">
                <label for="remember">Keep me sign in</label>
                <button type="submit" name="signup" class="btn btn-primary btn-signin">Sign In</button>
                <a href="" class="btn-reset btn-fade">Recover your password <i class="fa fa-long-arrow-right"
                                                                                aria-hidden="true"></i></a>
                <a href="" class="btn-member btn-fade">Not a member yet? <i class="fa fa-long-arrow-right"
                                                                             aria-hidden="true"></i></a>
            </form>
        </div> <?php /**PATH /var/www/html/resources/views/register.blade.php ENDPATH**/ ?>