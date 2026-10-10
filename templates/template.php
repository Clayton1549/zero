 <?php include '../logica/autentica_login.php'; ?>
  <div class="container-fluid text-info display-4">
	 <p class="text-center">Sua Jornada pelo mundo da arte e do digital</p>
	</div>
	<div class="containe-fluid" style="border:solid black 3px; background-color: blue">
	 <div id="demo" class="carousel slide" data-ride="carousel">
	   <ul class="carousel-indicators">
	    <li data-target="#demo" data-slide-to="0" class="active"></li>
	    <li data-target="#demo" data-slide-to="1"></li>
		<li data-target="#demo" data-slide-to="2"></li>
	  </ul>
	 <div class="carousel-inner">
	  <div class="carousel-item active">
	   <img src="../images/image.jpeg" alt="cidade e digital" width="1100" height="500">
	  <div class="carousel-caption">
		 <h3>Seu Portal</h3>
		 <p>Bem-vindo ao Mundo do digital</p>
	  </div>   
	</div>
	  <div class="carousel-item">
	    <img src="../images/imagem2.jpg" alt="aparelhos digitais na palma da mão" width="1100" height="500">
	   <div class="carousel-caption">
		  <h3>Melhores conteúdos</h3>
		  <p>Veja nosso conteúdo!</p>
		</div>   
	 </div>
	   <div class="carousel-item">
		 <img src="../images/imagem3.png" alt="cidade conectada" width="1100" height="500">
	    <div class="carousel-caption">
		  <h3>Versatilidade</h3>
		  <p>Nosso compromisso!!</p>
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
    <h1 class="text-info">Conteúdo para quem gosta de tecnologia e arte.</h1>
      <p>Este site é experimental e voltado para a arte e a tecnologia. Ele apresenta alguns produtos fictícios destinados aos usuários cadastrados. Vale ressaltar que não se trata de uma loja virtual real.</p>
	  <p>Feito para testes em servidor, sem quaisquer fins comerciais ou prestação de serviços, ele se apresenta como uma solução experimental de contexto simples e experimental.</p> 
	  <p>Seu objetivo é demonstrar o funcionamento do sistema de login e de outras funcionalidades, buscando se aproximar, na medida do possível, de um site de comércio eletrônico real.</p>
   </div>
 <br>
	<div class="bg-img text-center text-light">
      <h1>Bem-vindo ao meu site</h1>
  </div>
    <br><br><br>
    <div class="container text-justify">
	   <h2 class="text-info">Algumas das artes que você encontra no site.</h2>
	    <h3 class="text-success">Natureza</h3>
	    <img src="../images/produtos/trees.jpg" class="img-thumbnail img-fluid w-100 imagemIndex" alt="quadro de uma paisagem com rio"> 
	    <h3 class="text-success">Arte</h3> 
	    <img src="../images/produtos/art.jpg" class="img-thumbnail img-fluid w-100 imagemIndex" alt="imagem arte">
	    <h3 class="text-success">Tecnologia</h3>
	    <img src="../images/produtos/webself4.png" class="img-thumbnail img-fluid w-100 imagemIndex" alt="Imagem tecnologia">
	   <p>Os produtos são meramente ilustrativos e não existem como produtos físicos. São representados por imagens em formato digital para a web, que transmitem a ideia de produtos reais, como quadros e obras de arte.</p>
	   <p>Estamos sempre diversificando nosso catálogo, que pode aumentar com a participação dos usuários do site. Devido às limitações do banco de dados, a quantidade de produtos será ampliada gradualmente, conforme as possibilidades do projeto.</p>
	   <p>Oferecer aos nossos usuários uma experiência de compra segura é um dos objetivos da plataforma, proporcionando uma navegação simples e agradável.</p>
    </div>
     <div class="container">
	  <div class="row">
	   <div class="col-lg-3 col-md-6 col-12">
	 	<div class="card">
	 	   <img class="cardImagem" src="../images/produtos/webself4.png" alt="tecnologia">
        <div class="card-body">
      	<h5 class="card-title">
      		Mundo conectado 
      	</h5>
      	<p class="card-text">
      		Um novo método 
      		um mundo em mudança 
      	  </p>
         <a href="vendas.php" class="btn btn-primary">Compre</a>
          </div>
      </div>
   </div>
    <div class="col-lg-3 col-md-6 col-12">
      <div class="card">
	 	<img class="cardImagem" src="../images/produtos/trees.jpg" alt="quadro com uma paisagem com rio">
      <div class="card-body">
      	<h5 class="card-title">
      		Hoje e sempre
      	</h5>
           <p class="card-text">
      		Um dos quadros de exemplo
      		Veja em nosso mural 
      	  </p>
      	    <a href="vendas.php" class="btn btn-primary">Compre</a>
      </div>
   </div>
</div>
    <div class="col-lg-3 col-md-6 col-12">
      <div class="card">
	 	<img class="cardImagem" src="../images/produtos/th.jpg" alt="rede">
      <div class="card-body">
      	<h5 class="card-title">
      		Novas perspectivas,
      	</h5>
        <p class="card-text">
      		Um cenário de arte
      		comtemporânia 
      	</p>
      	<a href="vendas.php" class="btn btn-primary">Compre</a>
       </div>
    </div>
 </div>
     <div class="col-lg-3 col-md-6 col-12">
       <div class="card">
	 	 <img class="cardImagem" src="../images/produtos/art.jpg" alt="rede">
      <div class="card-body">
      	<h5 class="card-title">
      		Novo mundo
      	</h5>
      	<p class="card-text">
      		Um novo método
      	    mundo em equilíbrio
      	  </p>
      	    <a href="vendas.php" class="btn btn-primary">Compre</a>
       </div>
     </div>
  </div>
      
  </div>
</div>

   <br><br><br>
   <?php include "footer.php";?>
   <script src="../jQuery/jquery.js"></script>
   <script src="../jQuery/bootstrap.bundle.min.js"></script>
  
  </body>
</html>