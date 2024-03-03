<html>
    <head>
        <title>Formula 1</title>
        <style>
            img {
                height: 100px;
            }
        </style>
        <?php const DIR_PILOTOS = "Picture" . DIRECTORY_SEPARATOR . "pilotos" . DIRECTORY_SEPARATOR;?>
        <?php const DIR_BANDERAS =  "Picture" . DIRECTORY_SEPARATOR . "paises" . DIRECTORY_SEPARATOR; ?>
    </head>
    <body>
        <p>Lista de pilotos</p>
        <table border='1'>
            <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>Dorsal</td>
                <td>Imagen</td>
                <td>Pais</td>
                <td>Escudería</td>
                <td colspan=2 >Acciones</td>
            </tr>
            <?php foreach ($pilotos as $piloto) { ?>

                <tr>
                    <td><?php echo $piloto->id; ?></td>
                    <td><?php echo $piloto->nombre; ?></td>
                    <td><?php echo $piloto->dorsal; ?></td>
                    <td><img src="<?php echo DIR_PILOTOS . $piloto->imagen; ?>"/></td>

                    <td><img src="<?php
                        $seleccionado = $piloto->pais;
                        echo DIR_BANDERAS;
                        include 'Views\Pais\getById.php'
                        ?>"></td>
                    
                    <td><?php
                        $seleccionado = $piloto->escuderia;
                        include 'Views\Escuderia\getById.php'
                        ?></td>

                    <td><a href="Controllers/piloto_controller.php?action=update&id=<?php echo $piloto->id ?>">Actualizar</a> </td>
                    <td><a href="Controllers/piloto_controller.php?action=delete&id=<?php echo $piloto->id ?>">Eliminar</a> </td>
                </tr>		
<?php } ?>
        </table>
    </body>
</html>