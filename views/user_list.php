<h1>Users List:</h1>
<ul>
    <? foreach($this->users as $user) { ?>
        <li>
            <?=$user['firstName']?>
            <?=$user['lastName']?>
        </li>
    <? } ?>
</ul>