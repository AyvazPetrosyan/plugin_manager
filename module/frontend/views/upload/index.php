<?php
    require_once "module/frontend/views/public_blocks/top_block.php";
?>
<div class="upload--block container has--border">
    <form method="post" action="">
        <ol>
            <li><span>Has controller</span><br/><input name="name" type="checkbox" value=""></li>
            <li><span>Has model</span><br/><input name="name" type="checkbox" ></li>
            <li><span>Has service</span><br/><input name="name" type="checkbox" ></li>
            <li><span>Has attribute</span><br/><input name="name" type="checkbox" ></li>
            <li><input name="name" type="text" placeholder="Plugin name" ></li>
            <li><input name="file" type="file" placeholder="file" value="" /></li>
            <li><input name="submit" type="submit" value="Check"></li>
        </ol>
    </form>
</div>