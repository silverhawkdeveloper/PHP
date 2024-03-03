<html>
    <head>
        <title>Formula 1</title>
        <style>
            img {
                height: 40px;
            }
        </style>
        <?php const DIR_BANDERAS =  "Picture" . DIRECTORY_SEPARATOR . "paises" . DIRECTORY_SEPARATOR; ?>
    </head>
    <body>
        <p>Lista de paises</p>
        
        <table border='1'>
            <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>Imagen</td>
                <td colspan=2 >Acciones</td>
            </tr>
            <?php foreach ($paises as $pais) { ?>

                <tr>
                    <td><?php echo $pais->id; ?></td>
                    <td><?php echo $pais->nombre; ?></td>
                    <td><img src="<?php echo DIR_BANDERAS . $pais->imagen; ?>"></td>
                    <td><a href="Controllers/pais_controller.php?action=update&id=<?php echo $pais->id ?>">Actualizar</a> </td>
                    <td><a href="Controllers/pais_controller.php?action=delete&id=<?php echo $pais->id ?>">Eliminar</a> </td>
                </tr>		
            <?php } ?>
        </table>
    </body>
</html>