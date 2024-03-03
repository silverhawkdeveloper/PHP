<select name="escuderia"> 
    <?php foreach ($escuderias as $escuderia) { ?>
        <option value="<?php echo $escuderia->id; ?>"  
        <?php if ($seleccionado == $escuderia->id) {
            echo 'selected = "selected"';
        }
        ?>>
        <?php echo $escuderia->nombre; ?>
        </option>
<?php } ?>
</select>
