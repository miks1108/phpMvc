<h1>Register new user</h1>

<? if(!empty($this->errors)) { ?>
    <div class="errors">
        <? foreach ($this->errors as $error) { ?>
            <p><?=$error?></p>
        <? } ?>
    </div>
<? } ?>

<form action="" method="post">
    User Name:
    <input type="text" name="userName" value="<?=$_POST['userName']?>"> <br>
    Email:
    <input type="text" name="email" value="<?=$_POST['email']?>"> <br>
    Password:
    <input type="text" name="password" value="<?=$_POST['password']?>"> <br>
    Confirm password:
    <input type="text" name="cpassword" value="<?=$_POST['cpassword']?>"> <br>

    <input type="submit" value="Register"> <br>
</form>