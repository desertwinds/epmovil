<?php echo $this->Html->css('form.add');?>
<?php echo $this->Html->script('jquery-1.6.2.min'); ?>
<?php echo $this->Html->script('jquery-ui.min'); ?>
<?php echo $this->Html->script('jquery.ui.datepicker-es'); ?>
<?php  //echo $this->Html->css('jquery-ui.theme.min');?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
<?php echo $this->Form->create('Order'); ?>
	<fieldset>
		<legend><?php echo __('Agregar pedido'); ?></legend>
                <div>
                <?php 
                   echo $this->Form->input('Client.rif', array('label' => 'RIF', 'style' => 'width: 300px'));
                ?>
                </div>
                <div id="clientElement">
                    
                    <span style="display:inline-block">
                        <?php echo $this->Form->input('Client.name', array('label' => 'Nombre', 'style' => 'width: 300px')); ?>
                    </span>
                    <span style="display:inline-block">
                        <?php echo $this->Form->input('Client.telefono', array('label' => 'Teléfono', 'style' => 'width: 300px'));?>
                    </span>    
 
                    <?php 
                    
                    echo $this->Form->input('Client.direccion',array('label' => 'Dirección'));
                    ?>
                    <span style="display:inline-block">
                    <?php echo $this->Form->input('Client.referencia',array('style' => 'width: 300px')); ?>
                    </span>
                    <span style="display:inline-block">
                    <?php echo $this->Form->input('Client.contacto',array('style' => 'width: 300px')); ?>
                    </span>
                </div>
                <div>
                <span style="display:inline-block">
                     <?php echo $this->Form->input('distribuidor', array('style' => array('width: 300px; height: 30px'))); ?>
                </span>
                   
                <span style="display:inline-block">
                    <?php echo $this->Form->input('company_id', array('label' => 'Empresa', 'style' => 'width: 300px; height: 30px'));  ?>
                </span>
                </div>
                <div>
                    <span style="display:inline-block">
	<?php 
                    echo $this->Form->input('factura', array('style' => 'width: 300px'));
        ?>
                    </span>
                    <span style="display:inline-block">
                <div class="required">
                    <label for="OrderFecha">Fecha de envío</label>
                    <div class="input text required">
                        <input name="data[Order][fecha]" type="text" id="OrderFecha" required="required" style="width: 300px;">
                    </div>
                </div>
                    </span>
                </div>
        <div>
        <?php
                //echo $this->Form->input('envio', array('dateFormat' => 'DMY',
                //    'separator' => ' de ', 'minYear' => date('Y'), 
                //    'maxYear' => date('Y') + 1, 'label' => 'Fecha de envío'));
		echo $this->Form->input('comentario', array('style' => 'width: 300px'));
	?>
        </div>
        
              
	</fieldset>

<script>
                jQuery(function() {
                                jQuery( "#OrderFecha" ).datepicker();
                });
                </script>
<?php echo $this->Form->end(__('Submit')); ?>

<script>
    
    
    function init() {
  var aux = document.getElementById("ClientRif");
  if(aux.addEventListener){
      aux.addEventListener("change", changeAddres, false);
  } else if(aux.attachEvent){
      aux.attachEvent("change", changeAddres);
  }
};
if(window.addEventListener){
   window.addEventListener("load", init, false);
} else if(window.attachEvent){
   window.attachEvent("onload", init);
} else{
   document.addEventListener("load", init, false);
}
      function changeAddres(){
        var rif = document.getElementById("ClientRif").value;
	jQuery.get('/project/orders/direccion/' + rif, function(data){
  			
	        document.getElementById("clientElement").innerHTML= data;
	    })
      }        
</script>
