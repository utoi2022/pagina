<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y registro</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <br>
    <div>
        <h1 class="titulo">Porfavor ingrese sus datos para el logeo o registro</h1>
        <br>
        <div class="contenedor">
           <div class="caja1">
                <div class="login">
                    <h1 class="subtit">Iniciar Sesion</h1>
               <form action="validacion.php" method="POST"> 
                    <span class="deta"><h4>Usuario</h4></span>
                    <input type="text" class="usu" name="Usuario" >
                    <br>
                    <span class="deta"><h4>Contraseña</h4></span>
                    <input type="password" class="usu" name="Contraseña" >
                    <br>
                    <p>si usted no se encuentra registrado puede hacerlo en el formulario de la derecha</p>
                    <br>
                    <a href="htto//:www.utoifuerzasespeciales.com"><input type="submit" class="d3e2" value="iNGRESAR"></a>
                    
                </form>
                </div>
            </div>
            <div class="caja2">
                <div class="regis">
                    <h1 class="susti">Resgistrese</h1>
                    <form action="insertar.php" method="POST">
                        <span class="deta2"><h4>Usuario</h4></span>
                        <input type="text" class="intpu" name="Usuario" placeholder="Usuario">
<br>
                        <span class="deta2"><h4>Contraseña</h4></span>
                        <input type="password" class="intpu" name="Contraseña" placeholder="Contraseña">
<br>
                        <span class="deta2"><h4>Nombre</h4></span>
                        <input type="text" class="intpu" name="Nombre" placeholder="Nombre">
<br>
                        <span class="deta2"><h4>Apellido</h4></span>
                        <input type="text" class="intpu" name="Apellido" placeholder="Apellido">
<br>

                </form>
                </div>
            </div>
            <div class="caja3">
                <div class="regist">

                        <span class="deta3"><h4>Fecha de Nacimiento</h4></span>
                        <input type="date" class="intput" name="Nacimiento">
<br>
                        <span class="deta3"><h4>Legajo</h4></span>
                        <input type="text" class="intput" name="Legajo" placeholder="Legajo" >  
<br>
                        <span class="deta3"><h4>Mail</h4></span>
                        <input type="text" class="intput" name="Mail" placeholder="Mail" > 
                        <br>
                                    
                        <input type="submit" class="btn btn-primary2">

                </div>

            </div>
        </div>
    </div>


</body>
</html>