<h1>Register new user</h1>

<div class="errors">
    <? foreach ($this->erros as $error) { ?>
        <p><?=$error?></p>
    <? } ?>
</div>

<form action="" method="post">
    User Name:
    <input type="text" name="userName"> <br>
    Email:
    <input type="text" name="email"> <br>
    Password:
    <input type="text" name="password"> <br>
    Confirm password:
    <input type="text" name="cpassword"> <br>

    <input type="submit" value="Register"> <br>
</form>