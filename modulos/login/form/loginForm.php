<?php if($_POST){ 
    $login->validar();           
} ?>
<div class="container">
    <div class="row" >
        <div style="width: 250px; margin-top: 20%;" class="center-block">
            <h1 class="text-center" style="color: #fff;">Reservas</h1>
            <form id="loginForm" method="POST">
                <div class="input-group form-group">
                    <span class="input-group-addon" id="usuario">Usuario</span>
                    <input name="usuario" type="text" class="form-control" placeholder="" aria-describedby="usuario" required="required" />
                </div>
                <div class="input-group form-group">
                    <span class="input-group-addon" id="password">Contrase&ntilde;a</span>
                    <input name="password" type="password" class="form-control" placeholder="" aria-describedby="password" required="required" />
                </div>
                <button class="btn" >Conectar</button>
            </form>   
        </div>
    </div>
</div>