<h1>Users List:</h1>
<p>Page <?=$this->page?> of <?=$this->pageCount?></p><br>
<ul>
    <? foreach($this->users as $user) { ?>
        <li>
            <?=$user['UserName']?>
        </li>
    <? } ?>
</ul>
<br>

<? for($i = 1; $i <= $this->pageCount; $i++) { ?>
    <a href="?page=<?=$i?>" class="page <? if($this->page == $i) echo "selected" ?>">
        [ <?=$i?> ]
    </a>
<? } ?>