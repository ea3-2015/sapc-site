<?php
        echo $this->Html->css(array('general'));
        echo $this->Html->css(array('bootstrap.min2'));

        echo $this->Html->css('/assets/font-awesome/4.4.0/css/font-awesome.min');

        echo $this->Html->script(array('jquery-2.1.3'));
        echo $this->Html->script(array('scripts2'));
        echo $this->Html->script(array('bootstrap.min2'));
    ?>
<div class="contenedor_banner">
  <div class="border_banner">
    <img  src="../sapc-site/app/webroot/img/cabezal.png">
  </div>

</div>
<nav class="navbar navbar-static">
    <div class="container">
      <a class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
        <span class="glyphicon glyphicon-chevron-down"></span>
      </a>
      <div class="nav-collapse collase">
        <ul class="nav navbar-nav">  
          <li><?php echo $this->Html->link(__(' Inicio'), array('controller' => 'pages', 'action' => 'index'), array('class'=>'glyphicon glyphicon-home')); ?> </li>
          <li><?php echo $this->Html->link(__(' Vision'), array('controller' => 'pages', 'action' => 'index'), array('class'=>'glyphicon glyphicon-ok-sign')); ?> </li>
          <li><?php echo $this->Html->link(__(' Mision'), array('controller' => 'pages', 'action' => 'index'), array('class'=>'glyphicon glyphicon-eye-open')); ?></li>
        </ul>
        <ul class="nav navbar-right navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-search"></i></a>
            <ul class="dropdown-menu" style="padding:12px;">
                <form class="form-inline">
                   <div class="input-group">
                     <input type="text" class="form-control" placeholder="Search">
                     <div class="input-group-btn">
     			       <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                     </div>
                  </div>
                </form>
              </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> <i class="glyphicon glyphicon-chevron-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="#">Entrar</a></li>
              <li><a href="#">Perfil</a></li>
              <li class="divider"></li>
              <li><a href="#">Salir</a></li>
             </ul>
          </li>  
        </ul>
      </div>		
    </div>
</nav><!-- /.navbar -->

<header class="masthead">
  <div class="container">
    <div class="row">
      <div class="col col-sm-6">
      
      <?php echo $this->fetch('content'); ?>
        <!-- <h1><a href="#" title="scroll down for your viewing pleasure">Secretaria de Asustos Parroquiales</a>
          <p class="lead">2-column Layout + Theme for Bootstrap 3</p></h1> -->
      </div>
      <div class="col col-sm-6">
        <div class="well pull-right">
         <img src="//placehold.it/280x100/E7E7E7">        
        </div>
      </div>
    </div>
  </div>
  
  <div class="container">
	<div class="row">
      <div class="col col-sm-12">
        <h1>TEXTO</h1>
        <div class="panel">
        <div class="panel-body">
          <!-- You may want to put some news here  <span class="glyphicon glyphicon-heart-empty"></span> -->

        </div>
        </div>
        
      </div>
  	</div>
  </div>
</header>

<!-- Begin Body -->
<div class="container">
	<div class="row">
  			<div class="col col-sm-3">
              	<div id="sidebar">
      			<h1>TEXTO</h1>
                    
               	</div>
               </div>
      		</div>  
      		<div class="col col-sm-9">
              <div class="panel">
              <!-- <h1>The Top Stories from Around</h1> -->
              
              <div class="row">
              	<div class="col col-sm-8">
                  
                </div> 
        		<div class="col col-sm-4">
                  
              	</div>   
              </div>
                      
              	<h2>Content</h2>
                Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores 
                eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
                sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
              
              
              	<h2>Content</h2>
                Rrem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores 
                eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
                sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
              	<br><br>
                <button class="btn btn-default">More</button>
                
                <hr>
              	
                <h2>Content</h2>
                <img src="//placehold.it/150x100/EEEEEE" class="img-responsive pull-right"> Farmhand ida quae ab illo inventore veritatis et quasi architecto beatae vitae 
                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores 
                eos qui ratione voluptatem sequi nesciunt. I met him on the Internet. He's a French model. Qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
                sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
              	<br><br>
                <button class="btn btn-default">More</button>
                
                <hr>
                
                 <div class="row">
                  <div class="col col-sm-6">
                    <img src="/assets/example/bg_smartphones.jpg" class="img-responsive">
                    
                  </div> 
                  <div class="col col-sm-6">
                    <h1>There is still a lot to be said about the Responsive Web.</h1>
                  </div>   
                </div>
                
                <hr>
              
              	<h2>Responsive Text</h2>
      			Eeaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores 
                eos qui ratione voluptatem sequi nesciunt. Bootply is this awesomeness. Editor, prototype tool, adipisci velit, 
                sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
              
                <hr>
                
              	<h2>Responsive Images</h2>
      			Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores 
                eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
                sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
              
                <hr>
                
              	<h2>Media Queries</h2>
      			Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores 
                eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
                sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
              
              
              	<h1><a href="#"><i class="glyphicon glyphicon-user"></i> <i class="glyphicon glyphicon-chevron-down"></i></a></h1>
              
              	<hr>
              	<h4><a href="http://bootply.com/">Bootply</a></h4>
              	<hr>
             	</div>
      	</div> 
  	</div>
</div>
