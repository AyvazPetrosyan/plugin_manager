<?php
    require_once "module/frontend/views/public_blocks/top_block.php";
?>
<div class="install-form-block">
    <form action=<?php echo "/".$this->controllerParams['rootDir']."/frontend/Install/install" ?> method="post">
        <ul>
            <li><input required="required" type="text"   name="host"     placeholder="Host name"  value="localhost"                /></li>
            <li><input required="required" type="text"   name="user"     placeholder="user"       value="root"                /></li>
            <li><input                     type="text"   name="password" placeholder="password"   value=""                /></li>
            <li><input required="required" type="text"   name="db"       placeholder="Db name"    value="plugin_manager"                /></li>
            <li><input                     type="submit" name="submit"                            value="Install"   /></li>
        </ul>
    </form>
</div>