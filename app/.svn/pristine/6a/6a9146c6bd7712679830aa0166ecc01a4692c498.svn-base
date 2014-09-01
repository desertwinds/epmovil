<?php  echo $this->Html->css('login');?>
<?php echo $this->Session->flash('auth'); ?>

    <fieldset>
        <legend>
            <?php echo __('Por favor introduzca su nombre de usuario y contraseña'); ?>
        </legend>


      <form class="form-signin" role="form" action="/project/users/login/" id="UserLoginForm" method="post" accept-charset="utf-8">

          <input name="data[User][name]" type="text" class="form-control" maxlength="15" id="UserName" placeholder="Nombre de usuario" required="required" autofocus="">
        <input name="data[User][password]" type="password" class="form-control" id="UserPassword" placeholder="Contraseña" required="required">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Conectarse</button>
      </form>


    </fieldset>

