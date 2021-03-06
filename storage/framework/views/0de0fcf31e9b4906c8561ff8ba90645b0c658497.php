<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;700;800&family=Open+Sans&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/d7b7127037.js" crossorigin="anonymous"></script>
    <title>Sign In</title>
</head>

<body style="background-color:#f6e5e5;">
    <section class="Form my-4 mx-5" style="background-color:#f6e5e5;">
        <div class="container">
            <div class="row row-signup" style="background-color:white;">
                <div class="col-lg-5">
                    <img class="image" src="images/signup1.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <h4>Sign In</h4>
                    <form action="#" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php if(Session::has('success')): ?>
                            <div class="alert alert-success"><?php echo e(Session::get('success')); ?>

                            </div>
                        <?php endif; ?>
                        <?php if(Session::has('fail')): ?>
                            <div class="alert alert-danger"><?php echo e(Session::get('fail')); ?>

                            </div>
                        <?php endif; ?>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <label for="email"></label>
                                <input type="email" class="form-control my-3 p-4" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <label for="password"></label>
                                <input type="password" class="form-control my-3 p-4" name="password"
                                    placeholder="Password">
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="col-lg-7">
                                <a href="#"><button type="submit" class="btn1 mt-4 mb-5">Sign In</button></a>
                            </div>
                        </div>
                        <a style="text-decoration:none;" href="forgot password.html">Forgot Password?</a>
                        <p>Don't have an account?<a style="text-decoration:none;" href="/sign_up">Register Here</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
<?php /**PATH C:\Users\faaiz\athree\resources\views/auth/signin.blade.php ENDPATH**/ ?>