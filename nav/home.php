<div class="row">
	
		<div class="carousel carousel-slider" id="full">
			<a class="carousel-item" href="#one!"><img src="img/d1.jpg"></a>
			<a class="carousel-item" href="#one!"><img src="img/d2.jpg"></a>
			<a class="carousel-item" href="#one!"><img src="img/d1.jpg"></a>
			<a class="carousel-item" href="#one!"><img src="img/d2.jpg"></a>
		</div>
		<button class="btn-floating btn-large waves-effect waves-light" id="next" onclick=""><i class="material-icons right middle-indicator-text">chevron_right</i></button>
		<button class="btn-floating btn-large waves-effect waves-light" id="prev" onclick=""><i class="material-icons right middle-indicator-text">chevron_left</i></button>
	
</div>

<div class="container">
				<?php 
				$types = array( 'png', 'jpg', 'jpeg', 'gif' );
				$path = 'img/marks/';
				$dir = new DirectoryIterator($path);
				?>
 <div class="row">
     <div class="col s6">
         <div class="carousel" id="default">
			<?php foreach ($dir as $fileInfo) : ?>
				<?php if(strlen($fileInfo->getFilename()) > 2) : ?>
				
					<a class="carousel-item">
						<img src="<?=$path?><?=$fileInfo->getFilename(); ?>" /> 
					</a>
					
				<?php endif; ?>
			<?php endforeach; ?>
		  </div>
      
     </div>
	 <div class="col s6">
         <div class="carousel" id="default2">
			<?php foreach ($dir as $fileInfo) : ?>
				<?php if(strlen($fileInfo->getFilename()) > 2) : ?>
				
					<a class="carousel-item">
						<img src="<?=$path?><?=$fileInfo->getFilename(); ?>" /> 
					</a>
					
				<?php endif; ?>
			<?php endforeach; ?>
		  </div>
      
     </div>
 </div>
</div>