<? if(!empty($this->errors)) { ?>
    <div class="errors">
        <? foreach ($this->errors as $error) { ?>
            <p><?=$error?></p>
        <? } ?>
    </div>
<? } ?>

<form action="" method="post">
    <input type="text" name="userName">
    <input type="password" name="password">

    <input type="submit" value="Войти">
</form>