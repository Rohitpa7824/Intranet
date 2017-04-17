<?php

$cont = <<<EOT

<link rel="stylesheet" type="text/css" href="css/login.css">
<div class="wrapper">
    <form class="form-signin" id="loginform" method="POST" autocomplete="off">
        <h2 class="form-signin-heading">Login</h2>
        <input type="text" class="form-control" name="uname" placeholder="Username" required="" autofocus=""  autocomplete="off" value=""/>
        <input type="password" class="form-control" name="pwd" placeholder="Password" style="margin-top:10px; margin-bottom:10px" required="" autocomplete="off"/>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
    </form>
</div>
<script>
document.getElementById("loginform").reset();
</script>
EOT;

print($cont);

?>