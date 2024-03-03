<select name="pais"> 
    <?php foreach ($paises as $pais) { ?>
        <option value="<?php echo $pais->id; ?>"  
        <?php if ($seleccionado == $pais->id) {
            echo 'selected = "selected"';
        }
        ?> >
        <?php echo $pais->nombre; ?>
        </option>
<?php } ?>
</select>
