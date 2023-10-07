<?php
    require_once './controladores/formularios.controlador.php';
?>
<style>
    /* Cambia el color del texto a negro */
    label,
    input[type="email"],
    input[type="password"] {
        color: #000;
    }

    /* Cambia la fuente a Times New Roman o una fuente similar */
    label,
    input[type="email"],
    input[type="password"],
    button {
        font-family: 'Times New Roman', Times, serif;
    }
</style>
<div class="d-flex justify-content-center text-center" style="background-image: url('assets/img/banner/bg.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center center; position: relative;">
    <form class="p-5 bg-light" method="post" style="text-align: left; z-index: 1; position: relative;">

        <div class="form-group">
            <label for="email">Correo electrónico:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" placeholder="Enter email" id="email" name="ingresoEmail">
            </div>
        </div>

        <div class="form-group">
            <label for="pwd">Contraseña:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="ingresoPassword">
            </div>
        </div>

        <?php 

            $ingreso = new ControladorFormularios();
            $ingreso -> ctrIngreso();

        ?>
        <button type="submit" class="btn btn-primary">Ingresar</button>

    </form>
</div>