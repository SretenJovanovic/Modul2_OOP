<div class="container w-25 mt-5 bg-dark p-5 text-white">
    <div class="login-form">
        <form action="" method="POST">
            <div class="form-container">
                <h1 class="text-center">Login</span></h1>
                <div class="form-group mt-3">
                <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                <label for="password">Password</label>
                    <input type="password"class="form-control"  name="password" id="password" placeholder="Enter your password">
                </div>

                <button class="btn btn-primary btn-block" type="submit" name="loginSubmit">Login</button>
            </div>
        </form>


    </div>

</div>

<?php

if (isset($_POST['loginSubmit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (!empty($email) && !empty($password)) {
        Controller::login($allUsers, $email, $password);
    } else {

        // TODO header GET pa msg trait za alert
        echo "Please fill out all fields!";
    }
}


?>