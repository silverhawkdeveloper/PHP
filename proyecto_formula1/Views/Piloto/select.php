<select name="piloto[]" multiple> 
    <?php foreach ($pilotos as $piloto) { ?>
        <option value="<?php echo $piloto->id; ?>"  
        <?php if ($seleccionado == $piloto->id) {
            echo 'selected = "selected"';
        }
        ?>>
        <?php echo $piloto->nombre; ?>
        </option>
<?php } ?>
</select>
