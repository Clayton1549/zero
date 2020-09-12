<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<title>Inicio</title>
<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
<link href="../bootstrap/bootstrap.min.css"  rel="stylesheet">
  <link rel="stylesheet" href="../css/img.css">
  <link rel="shortcut icon" href="../images/favicon/favicon.png" /> 

    </head>

   <body>

 
<nav  class="navbar  bg-dark navbar-dark  navbar-expand-lg ">
<a class="navbar-brand"   href="../templates/index.php"><img src="../images/logo_b.jpg" alt="clayton"></a>
	   <!-- menu sanduich -->
	   <button class="navbar-toggler" data-toggle="collapse" data-target="#menu" >
	   	<span class="navbar-toggler-icon"></span>
	   </button>
           <div id="menu" class="collapse navbar-collapse">

		 <ul class="navbar-nav ml-4 ">
	       
	        <li class="nav-item">
			  <a class="nav-link active" href="../templates/template.php">Inicio</a>
		  </li>
		  <li class="nav-item"> 
			  <a class="nav-link" href="../templates/in_conteudo.php">Conteúdo</a>
		  </li>
		  <li class="nav-item">
			  <a class="nav-link" href="../templates/produtos.php">Enviar foto </a>
		   </li>
		    <li class="nav-item">
			  <a class="nav-link " href="../templates/vendas.php"> Vendas </a>
		   </li>
		 </ul>

		 <ul class="navbar-nav ml-auto">
	        <li class="nav-item ">
			   <a class="nav-link" href="../templates/login_h.php"><span class=""></span>Pesquisa </a>
			 </li>
			 <li class="nav-item">
				 <a class="nav-link" href="../logica/logout.php"><span class=""></span> Sair</a></li>
			 </li>

			 
		  </ul>     
     </div>
</nav>


     
      <?php
		 session_start();

           if((isset ($_SESSION['user']) == true) and (isset ($_SESSION['senha']) == true)){

				   $logado = $_SESSION['user'];
                   date_default_timezone_set('America/Sao_Paulo');
				   $x =  $_SESSION["inicio"]  = date(" d-m-Y H:i");
                   $d = preg_replace('/[-]/' , '/' , $x);
		           print_r("  <p style ='margin:10px ; color:#0F0A0A'>$d</p>");
				   echo "  <p   style ='margin:10px ; color:blue'; >      Olá    .$logado;</p>";


				   echo "<script language='javascript' type='text/javascript'>
				   setTimeout(function(){
				    window.location.href='../logica/logout.php';},900000);
				      </script>";
                        	

                  } else{

                   header("Location: index.php");	

					}


		?>
		<div class="container-fluid text-info display-4">
				<p class=" text-center">Sua Jornada pelo mundo do entretenimento digital</p>
			</div>
			
		<div class="containe-fuid"  style="border:solid black 3px; background-color: blue">
			<div id="demo" class="carousel slide" data-ride="carousel">
			  <ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
			  </ul>
			 <div class="carousel-inner">
				<div class="carousel-item active">
				  <img src="../images/image.jpeg" alt="1" width="1100" height="500">
				 <div class="carousel-caption">
					<h3>Seu Portal</h3>
					 <p>Bem vindo ao Mundo do   entreterimento</p>
				</div>   
			</div>
			   <div class="carousel-item">
				  <img src="../images/imagem2.jpg" alt="" width="1100" height="500">
			   <div class="carousel-caption">
				  <h3>Melhores   conteúdos</h3>
					<p>Veja nosso contúdo!</p>
				</div>   
			  </div>
				<div class="carousel-item">
				  <img src="../images/imagem3.png" alt="" width="1100" height="500">
				 <div class="carousel-caption">
					<h3>Versatilidade</h3>
					 <p>Nosso  compromisso!!</p>
			    </div>   
			</div>
		  </div>
				 <a class="carousel-control-prev" href="#demo" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				 </a>
				  <a class="carousel-control-next" href="#demo" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				 </a>
			</div>
	    </div>
<br><br><br>
<div class="container text-justify">

<p>Aenean a leo sed elit euismod vestibulum eu quis mauris. Nunc consequat nibh et nibh tristique accumsan. Mauris fringilla ac purus elementum faucibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent lacinia scelerisque eros, pulvinar scelerisque augue dignissim eget. Aenean ante odio, dapibus non elementum nec, vestibulum id nulla. Morbi vel placerat lacus. Cras congue eleifend est, eu lobortis ex interdum eu. Sed laoreet fermentum lacus ac iaculis.

Duis aliquet porttitor porttitor. Etiam in ante vitae ex varius pretium. In commodo enim et dui lacinia iaculis. Curabitur quis magna non sapien molestie ullamcorper. Quisque ipsum lacus, consequat et blandit a, egestas in justo. Sed et turpis tristique, aliquet sem quis, mollis massa. Pellentesque dapibus felis in enim lacinia venenatis. Integer semper sit amet lacus vel bibendum. Phasellus orci odio, placerat eu semper imperdiet, dignissim et odio.

Curabitur vitae velit ut enim luctus sagittis. Vestibulum libero velit, tempus sit amet lacus vitae, ultrices placerat enim. Aliquam erat volutpat. Proin pharetra sodales orci. Suspendisse ac pulvinar purus, vel egestas eros. Donec sit amet lobortis purus. Suspendisse eget mattis ipsum. Vestibulum in maximus tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam sit amet orci metus. Quisque auctor, erat ac sollicitudin convallis, purus eros rhoncus urna, a tincidunt augue ipsum nec lectus. Nunc vitae hendrerit nisi, ac tincidunt orci.

Nulla eget odio et mi malesuada sagittis id non nulla. Vivamus tristique suscipit mauris, vitae hendrerit est congue et. Morbi ut aliquet ante, quis mattis turpis. In hac habitasse platea dictumst. Pellentesque hendrerit risus quis purus egestas, porta suscipit lacus dignissim. Aliquam ullamcorper aliquam consectetur. Proin eleifend pellentesque leo nec vulputate. Aenean erat turpis, ultricies sed erat nec, pulvinar semper enim.
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et tempor elit, sit amet pharetra mi. Sed quis tellus sed dui accumsan mollis. Proin vel aliquet erat, ut imperdiet libero. Maecenas eu fermentum velit. Aliquam rutrum sem eros, ultricies mollis nibh pellentesque in. Curabitur vulputate tellus velit, id porta metus vulputate eu. Donec vestibulum auctor scelerisque. Aliquam nisl dolor, egestas in lorem a, facilisis fermentum velit. Nam sit amet varius risus. In id ullamcorper elit.


Praesent vulputate eros eget lacus convallis tristique. Donec vitae pretium sapien. Quisque finibus egestas viverra. Proin placerat hendrerit nulla, pulvinar condimentum lorem placerat id. Proin lobortis nibh lacus, ac volutpat dolor scelerisque a. Aenean egestas urna sit amet nisi rhoncus, ac auctor libero varius. Maecenas a sollicitudin leo. Suspendisse</p>
</div>

<div class="bg-img text-center text-light">

	<p>Networking</p>

</div>

<div class="container text-justify">
<br><br><br>

<p>Aenean a leo sed elit euismod vestibulum eu quis mauris. Nunc consequat nibh et nibh tristique accumsan. Mauris fringilla ac purus elementum faucibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent lacinia scelerisque eros, pulvinar scelerisque augue dignissim eget. Aenean ante odio, dapibus non elementum nec, vestibulum id nulla. Morbi vel placerat lacus. Cras congue eleifend est, eu lobortis ex interdum eu. Sed laoreet fermentum lacus ac iaculis.

Duis aliquet porttitor porttitor. Etiam in ante vitae ex varius pretium. In commodo enim et dui lacinia iaculis. Curabitur quis magna non sapien molestie ullamcorper. Quisque ipsum lacus, consequat et blandit a, egestas in justo. Sed et turpis tristique, aliquet sem quis, mollis massa. Pellentesque dapibus felis in enim lacinia venenatis. Integer semper sit amet lacus vel bibendum. Phasellus orci odio, placerat eu semper imperdiet, dignissim et odio.

Curabitur vitae velit ut enim luctus sagittis. Vestibulum libero velit, tempus sit amet lacus vitae, ultrices placerat enim. Aliquam erat volutpat. Proin pharetra sodales orci. Suspendisse ac pulvinar purus, vel egestas eros. Donec sit amet lobortis purus. Suspendisse eget mattis ipsum. Vestibulum in maximus tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam sit amet orci metus. Quisque auctor, erat ac sollicitudin convallis, purus eros rhoncus urna, a tincidunt augue ipsum nec lectus. Nunc vitae hendrerit nisi, ac tincidunt orci.

Nulla eget odio et mi malesuada sagittis id non nulla. Vivamus tristique suscipit mauris, vitae hendrerit est congue et. Morbi ut aliquet ante, quis mattis turpis. In hac habitasse platea dictumst. Pellentesque hendrerit risus quis purus egestas, porta suscipit lacus dignissim. Aliquam ullamcorper aliquam consectetur. Proin eleifend pellentesque leo nec vulputate. Aenean erat turpis, ultricies sed erat nec, pulvinar semper enim.
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et tempor elit, sit amet pharetra mi. Sed quis tellus sed dui accumsan mollis. Proin vel aliquet erat, ut imperdiet libero. Maecenas eu fermentum velit. Aliquam rutrum sem eros, ultricies mollis nibh pellentesque in. Curabitur vulputate tellus velit, id porta metus vulputate eu. Donec vestibulum auctor scelerisque. Aliquam nisl dolor, egestas in lorem a, facilisis fermentum velit. Nam sit amet varius risus. In id ullamcorper elit.

Proin vel ligula commodo, sodales metus id, placerat risus. Vivamus lobortis tellus id ex consequat, convallis porttitor risus consequat. Maecenas euismod neque consequat urna aliquam ullamcorper. In vitae enim nec est euismod aliquam. Quisque efficitur efficitur odio, a consectetur sem ultrices id. Vivamus a nisl tincidunt, tempor quam non, ornare dui. Quisque pellentesque est id metus iaculis, ac euismod nisl laoreet. Mauris tincidunt, mauris in eleifend porttitor, dui ante sodales dui, ac convallis justo ex et purus. Suspendisse vitae porttitor ligula.

Morbi ac purus id eros sollicitudin dapibus. Maecenas nec venenatis magna. Vivamus sagittis elementum facilisis. Maecenas lobortis purus massa, at fringilla quam porttitor at. Cras rutrum ante sed odio egestas, at tempus mauris mattis. Donec tincidunt maximus pellentesque. Morbi justo elit, vulputate non cursus eu, finibus eu diam. Fusce sit amet iaculis diam, ut condimentum nulla. Phasellus sollicitudin a turpis in convallis. Curabitur maximus sit amet sem in ultricies. Pellentesque dignissim sodales dictum. Integer sit amet tincidunt erat. Morbi porttitor mollis leo, in finibus dui malesuada eget. Donec vehicula nulla justo, non imperdiet arcu consequat in. In id tortor mi.

Cras eget blandit nisi. Integer vehicula metus sodales erat pulvinar, suscipit varius orci vehicula. Proin ullamcorper, tellus sit amet mollis consectetur, nisl nisl dictum purus, eget bibendum lorem dui et odio. Pellentesque eget tortor neque. Donec vel massa eget libero ultricies finibus ut vel nisi. Aenean vitae ligula rhoncus nulla commodo imperdiet vitae vitae ligula. Nam ultrices gravida lorem, sed vulputate quam semper ac. Nunc cursus tincidunt odio eu ultricies. Nulla ultrices nunc vitae lorem commodo, a pellentesque ante finibus. Fusce tristique ipsum id pharetra congue. Sed cursus imperdiet tortor nec ornare.

Praesent vulputate eros eget lacus convallis tristique. Donec vitae pretium sapien. Quisque finibus egestas viverra. Proin placerat hendrerit nulla, pulvinar condimentum lorem placerat id. Proin lobortis nibh lacus, ac volutpat dolor scelerisque a. Aenean egestas urna sit amet nisi rhoncus, ac auctor libero varius. Maecenas a sollicitudin leo. Suspendisse</p>
</div>

<div class="container">
	 <div class="row">
	  <div class="col-lg-3 col-md-6 col-12">
	 	<div class="card">
	 	   <img src="../images/images.jpg" alt="rede">
      <div class="card-body">
      	<h5 class="card-title">
      		Mundo conectado 
      	</h5>
      	<p class="card-text">
      		Um novo método de entretenimento
      		o mundo em mudança constantemente
      	  </p>
         <a href="#" class="btn btn-primary">Saiba mais</a>
          </div>
      </div>
   </div>
    <div class="col-lg-3 col-md-6 col-12">
      <div class="card ">
	 	   <img src="../images/images.jpg" alt="rede">
      <div class="card-body">
      	<h5 class="card-title">
      		Hoje e sempre
      	</h5>
           <p class="card-text">
      		Um novo método de entretenimento
      		o mundo em mudança constantemente
      	  </p>
      	    <a href="#" class="btn btn-primary">Saiba mais</a>
      </div>
  </div>
</div>
<div class="col-lg-3 col-md-6 col-12">
      <div class="card ">
	 	   <img src="../images/images.jpg" alt="rede">
      <div class="card-body">
      	<h5 class="card-title">
      		Novas perspectivas
      	</h5>

      		<p class="card-text">
      		Um novo método de entretenimento
      		o mundo em mudança constantemente
      	  </p>
      	    <a href="#" class="btn btn-primary">Saiba mais</a>
      </div>
  </div>
</div>
<div class="col-lg-3 col-md-6 col-12">
      <div class="card ">
	 	   <img src="../images/images.jpg" alt="rede">
      <div class="card-body">
      	<h5 class="card-title">
      		Novo mundo
      	</h5>

      		<p class="card-text">
      		Um novo método de entretenimento
      		o mundo em mudança constantemente
      	  </p>
      	    <a href="#" class="btn btn-primary">Saiba mais</a>
      </div>
  </div>
</div>
      


</div>
</div>

<br><br><br>
	 

<?php


include("footer.php");




?>

		


		



	    
		<!-- boostrap javascript -->
		<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
		<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>-->
		<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->
		<script src="../jQuery/jquery.js"></script>
		<script src="../jQuery/bootstrap.bundle.min.js"></script>

</body>


</html>