<html>
    <head>
        <title>Formula 1</title>
        <style>
            img {
                height: 100px;
            }
        </style>
        <?php const DIR_ESCUDERIAS = "Picture" . DIRECTORY_SEPARATOR . "chasis" . DIRECTORY_SEPARATOR; ?>
        <?php const DIR_BANDERAS =  "Picture" . DIRECTORY_SEPARATOR . "paises" . DIRECTORY_SEPARATOR; ?>
    </head>
    <body>
        <p>Lista de escuderías</p>
        <table border='1'>
            <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>Constructor</td>
                <td>Chasis</td>
                <td>Imagen</td>
                <td>País</td>
                <td>Pilotos</td>
                <td colspan=2 >Acciones</td>
            </tr>
            <?php foreach ($escuderias as $escuderia) { ?>
                <tr>
                    <td><?php echo $escuderia->id; ?></td>
                    <td><?php echo $escuderia->nombre; ?></td>
                    <td><?php echo $escuderia->constructor; ?></td>
                    <td><?php echo $escuderia->chasis; ?></td>
                    <td><img src="<?php echo DIR_ESCUDERIAS . $escuderia->imagen; ?>"></td>

                    <td><img src="<?php
                        $seleccionado = $escuderia->pais;
                        echo DIR_BANDERAS;
                        include 'Views\Pais\getById.php'
                        ?>"></td>
                    <td>
                        <?php
                        $seleccionado = $escuderia->piloto;
                        include 'Views\Piloto\getById.php';
                        ?>
                    </td>
                    
                    <td><a href="Controllers/escuderia_controller.php?action=update&id=<?php echo $escuderia->id ?>">Actualizar</a> </td>
                    <td><a href="Controllers/escuderia_controller.php?action=delete&id=<?php echo $escuderia->id ?>">Eliminar</a> </td>
                </tr>		
<?php } ?>
        </table>
    </body>
</html>