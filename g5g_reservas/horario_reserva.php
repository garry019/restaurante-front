<?php
$horario = $_POST['horario'];
?>
<label for="horaReserva" class="col-sm-3 control-label">Hora</label>
<div class="col-sm-6">
  <select id="horaReserva" name="horaReserva" class="form-control" aria-describedby="hora" required="required" >
      <?php for($i=0;$i<=25;$i++){ ?>
          <?php if( $i >= date('H',mktime($horario[0])) and $i < date('H',mktime($horario[1])) ){ ?>
              <option value="<?php echo date('H:i:s',mktime($i,0,0)); ?>"><?php echo date('h:i a',mktime($i,0,0)); ?></option>
              <?php if($i != date('H',mktime($horario[1])) - 1){ ?>
                  <option value="<?php echo date('H:i:s',mktime($i,30,0)); ?>"><?php echo date('h:i a',mktime($i,30,0)); ?></option>
              <? } ?>
          <?php } ?>
          <?php if( $i >= date('H',mktime($horario[2])) and $i < date('H',mktime($horario[3])) ){ ?>
              <option value="<?php echo date('H:i:s',mktime($i,0,0)); ?>"><?php echo date('h:i a',mktime($i,0,0)); ?></option>
              <?php if($i != date('H',mktime($horario[3])) - 1){ ?>
                  <option value="<?php echo date('H:i:s',mktime($i,30,0)); ?>"><?php echo date('h:i a',mktime($i,30,0)); ?></option>
              <? } ?>
          <?php } ?>
      <?php } ?>
  </select>
</div>
