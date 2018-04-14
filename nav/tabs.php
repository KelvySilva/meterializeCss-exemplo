<?php 
$types = array( 'png', 'jpg', 'jpeg', 'gif' );
$path = 'img/marks/';
$dir = new DirectoryIterator($path);
?>

<div class="">
    <div class="row">
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s3"><a onclick="M.toast({html: 'I am a toast'})" href="#test1">Test 1</a></li>
                <li class="tab col s3"><a onclick="M.toast({html: 'I am a toast'})" class="active" href="#test2">Test 2</a></li>
                <li class="tab col s3"><a onclick="M.toast({html: 'I am a toast'})" href="#test3">Test 3</a></li>
                <li class="tab col s3"><a onclick="M.toast({html: 'I am a toast'})" href="#test4">Test 4</a></li>
            </ul>
        </div>
    </div>
	
</div>



<div id="test1">
    <div class="carousel carousel-slider" id="full2">
        <a " class="carousel-item" href="#one!"><img src="img/d2.jpg"></a>
        <a " class="carousel-item" href="#one!"><img src="img/d1.jpg"></a>
        <a " class="carousel-item" href="#one!"><img src="img/d2.jpg"></a>
        <a " class="carousel-item" href="#one!"><img src="img/d1.jpg"></a>
    </div>
	
</div>


    <div class="row">
        <div id="test2" class="col s12">
            <div class="carousel" id="default2">
                <?php foreach ($dir as $fileInfo) : ?>
                    <?php if(strlen($fileInfo->getFilename()) > 2) : ?>

                            <a  class="carousel-item">
                                <img src="<?=$path?><?=$fileInfo->getFilename(); ?>" /> 
                            </a>

                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
				  
    </div>




<div id="test3">
    <div class="carousel carousel-slider" id="full3">
        <a class="carousel-item" href="#one!"><img src="img/d1.jpg"></a>
        <a class="carousel-item" href="#one!"><img src="img/d2.jpg"></a>
        <a class="carousel-item" href="#one!"><img src="img/d1.jpg"></a>
        <a class="carousel-item" href="#one!"><img src="img/d2.jpg"></a>
    </div>
	
</div>

    <div class="row">
        <div id="test4" class="col s12">
            <div class="carousel" id="default3">
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

