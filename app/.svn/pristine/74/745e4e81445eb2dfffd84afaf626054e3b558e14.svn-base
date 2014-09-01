    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/project">EP móvil</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li id="home" class="idle"><a href="/project">Pedidos</a></li>
            <li id="clients" class="idle"><a href="/project/clients">Clientes</a></li>
            <li id="companies" class="idle"><a href="/project/companies">Empresas</a></li>
            <?php if($logg){
                    if($level === 'Superusuario'){
            ?>
            <li id="users" class="idle"><a href="/project/users/">Usuarios</a></li>
            <?php   }
            } ?>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <?php if($logg){ ?>
            <li><a href="/project/users/view/<?php echo $id?>"><?php echo $name?></a></li>
            <li><a href="/project/users/logout/">Salir</a></li>
            <?php } ?>
            <?php if(!$logg){ ?>
            <li><a href="/project/users/login/">Conectarse</a></li>
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
        document.getElementById("home").setAttribute('class','active');
    }
    if (pagina == "companies"){
        document.getElementById("companies").setAttribute('class','active');
    }
    if (pagina == "clients"){
        document.getElementById("clients").setAttribute('class','active');
    }
 }

</script>