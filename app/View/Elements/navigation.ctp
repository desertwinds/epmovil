    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="/">EP móvil</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
                <a id="home" href="#" class="dropdown-toggle" data-toggle="dropdown">Pedidos <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="/">Pedidos</a></li>
                <li><a href="/orders/search">Buscar</a></li>
            </ul>
            </li>
            <li id="clients" class="idle"><a href="/clients">Clientes</a></li>
            <li id="companies" class="idle"><a href="/companies">Empresas</a></li>
            <?php if($logg){
                    if($level === 'Superusuario'){
            ?>
            <li id="users" class="idle"><a href="/users/">Usuarios</a></li>
            <?php   }
            } ?>      
          </ul>
          
          <ul class="nav navbar-nav navbar-right">
            <?php if($logg){ ?>
            <li><a href="/users/view/<?php echo $id?>"><?php echo $name?></a></li>
            <li><a href="/users/logout/">Salir</a></li>
            <?php } ?>
            <?php if(!$logg){ ?>
            <li><a href="/users/login/">Conectarse</a></li>
            <?php } ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

<script>

window.onload = function () { 
    var pagina = <?php echo json_encode($pag);?>;
    if (pagina == "users"){
        document.getElementById("users").setAttribute('class','active');
    }
    if (pagina == "orders"){
        $('#home').parent().attr('class', 'dropdown active')
    }
    if (pagina == "companies"){
        document.getElementById("companies").setAttribute('class','active');
    }
    if (pagina == "clients"){
        document.getElementById("clients").setAttribute('class','active');
    }
 }

</script>