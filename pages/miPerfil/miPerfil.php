<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mi perfil</title>

        <!-- Link accesos a archivos css internos -->
        <link rel="stylesheet" href="../styles/styles.css">
        <link rel="stylesheet" href="../styles/header.css">
        <link rel="stylesheet" href="../styles/footer.css">

        <!-- Link stylos unicos -->
        <link rel="stylesheet" href="../styles/stylesPages/miPerfil/miPerfil.css">
    </head>
    <body>
        <?php include("../includes/header.php");?>

        <main class="main">
            <div class="section-titles_miPerfil">
                <h1>Mi perfil</h1>
                <h2>administrador</h2>
            </div>
            <div class="section-froms_miPerfil">
                
                <form class="form-userData_miPerfil" action="">

                    <div class="frm-item_miPerfil frm-nombre">
                        <label class="lbl-item_miPerfil lbl-nombre">Nombres</label>
                        <p class="txt-item_miPerfil txt-nombre">Nombre ejemplo</p>
                    </div>

                    <div class="frm-item_miPerfil frm-apellido">
                        <label class="lbl-item_miPerfil lbl-apellido">Apellidos</label>
                        <p class="txt-item_miPerfil txt-apellido">Apellido ejemplo</p>
                    </div>

                    <div class="frm-item_miPerfil frm-nacimiento">
                        <label class="lbl-item_miPerfil lbl-fechaNacimiento">Fecha de nacimiento</label>
                        <p class="txt-item_miPerfil txt-fechaNacimiento">dd/mm/aaaa</p>
                    </div>

                    <div class="frm-item_miPerfil frm-tipoIdentidad">
                        <label class="lbl-item_miPerfil lbl-tipoIdentidad">Tipo de documento</label>
                        <p class="txt-item_miPerfil txt-tipoIdentidad">Cedula de ciudadania</p>
                    </div>

                    <div class="frm-item_miPerfil frm-identificacion">
                        <label class="lbl-item_miPerfil lbl-numeroIdenfificacion">Identificacion</label>
                        <p class="txt-item_miPerfil txt-numeroIdentificacion">1111111111</p>
                    </div>

                    <div class="frm-item_miPerfil frm-email">
                        <label class="lbl-item_miPerfil lbl-email" for="inp-email">Email</label>
                        <p class="txt-item_miPerfil txt-email">ejemplo@extencion.com</p>
                    </div>

                    <div class="frm-item_miPerfil frm-telefono">
                        <label class="lbl-item_miPerfil lbl-telefono" for="inp-telefono">Telefono</label>
                        <p class="txt-item_miPerfil txt-telefono">12345657</p>
                    </div>

                    <div class="frm-item_miPerfil frm-direccion">
                        <label class="lbl-item_miPerfil lbl-direccion" for="inp-direccion">Dirección</label>
                        <p class="txt-item_miPerfil txt-dereccion">Direccion ejemplo</p>
                    </div>

                    <div class="frm-item_miPerfil frm-genero">
                        <label class="lbl-item_miPerfil lbl-genero" for="slc-genero">Genero</label>
                        <p class="txt-item_miPerfil txt-genero">Masculino</p>
                    </div>
                </form>
                <div class="form-userPhoto_editorUsuario">
                    <div class="userPhoto_editorUsuario">
                        <div class="img-fotoPerfil">
                            <img src="/sources/img/miPerfil/perfil.jpg" alt="">
                        </div>
                        <ul class="btn-fotoPerfil">
                            <li><button onclick="alert('hola')" class="btn btn-fotoPerfil_verFoto">Ver foto</button></li>
                        </ul>
                    </div>
                </div> 
            </div>
        </main>
        <footer class="footer">
            <div class="action-buttons">
                <a href="/pages/home.html" class="btn btn-primary">Volver</a>
                <a href="/pages/miPerfil/editorUsuario.html" class="btn btn-second">Editar perfil</a>
            </div>
        </footer>
    </body>
</html>