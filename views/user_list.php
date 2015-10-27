<h1>Users List:</h1>
<ul>
    <? foreach($this->users as $user) { ?>
        <li>
            <?=$user['UserName']?>
        </li>
    <? } ?>
</ul>