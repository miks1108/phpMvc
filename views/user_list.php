<h1>Users List:</h1>
<ul>
    <? foreach($this->users as $user) { ?>
        <li>
            <?=$user['UserName']?>
        </li>
    <? } ?>
</ul>

<a href="?page=1">1</a>
<a href="?page=2">2</a>
<a href="?page=3">3</a>
<a href="?page=4">4</a>
<a href="?page=5">5</a>