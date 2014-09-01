<?php
if (isset ($direccion))
{
echo $this->Form->input('Client.id',array('value' => $direccion['Client']['id'], 'readonly' => true));
?>
<span style="display:inline-block">
<?php echo $this->Form->input('Client.name', array('label' => 'Nombre', 'value' => $direccion['Client']['name'], 'readonly' => true, 'style' => 'width: 300px'));?>
</span>
<span style="display:inline-block">
<?php echo $this->Form->input('Client.telefono', array('label' => 'Teléfono', 'value' => $direccion['Client']['telefono'], 'readonly' => true, 'style' => 'width: 300px'));?>
</span>
<?php
echo $this->Form->input('Client.direccion',array('value' => $direccion['Client']['direccion'], 'readonly' => true, 'label' => 'Dirección')); ?>
<span style="display:inline-block">
<?php echo $this->Form->input('Client.referencia', array('value' => $direccion['Client']['referencia'], 'readonly' => true, 'style' => 'width: 300px')); ?>
</span>
<span style="display:inline-block">
<?php echo $this->Form->input('Client.contacto', array('value' => $direccion['Client']['contacto'], 'readonly' => true, 'style' => 'width: 300px')); ?>
</span>
<?php
}
else
	{ ?>
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
<?php	}
?>