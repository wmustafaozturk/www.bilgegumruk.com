<div class="ja-slidewrap" id="ja-slide-<?php echo $module->id;?>" style="visibility:hidden">
  <div class="ja-slide-main-wrap">
    <div class="ja-slide-main">
      <?php for ($i=0;$i<count($images); $i++) {?>
      <div class="ja-slide-item"><img src="<?php echo $folder.$images[$i];?>" alt="<?php echo $images[$i];?>"/>
      <?php if ($showdescwhen == 'always' && $captionsArray[$i]):?><span class="ja-slide-desc"><?php echo $captionsArray[$i];?></span><?php endif; ?>
      </div>						
      <?php }?>
    </div>		
  <?php if ($animation=='move' && $container) :?>  
    <div class="but_prev ja-slide-prev"></div>
    <div class="but_next ja-slide-next"></div>
  <?php endif; ?>
  <div class="maskDesc"><div class="inner"><?php if ($showDescription=='desc-readmore'){?><a class="readon" title=""><span><?php echo $readmoretext;?></span></a><?php }?></div></div>
  </div>
  
  <?php if($showDescription && $showdescwhen!='always'){?>
  <div class="ja-slide-descs" style="width:">
    <?php foreach($captionsArray as $desc) {?>
      <div class="ja-slide-desc"><?php echo $desc?></div>					
    <?php }?>					
  </div>
  <?php }?>
  
  <?php if ($navigation): ?>
  <div class="ja-slide-mask">
  </div>
  <div class="ja-slide-thumbs-wrap">
    <div class="ja-slide-thumbs">
      <?php for ($i=0;$i<count($images); $i++) {?>
        <div class="ja-slide-thumb">
        <?php if ($navigation=='thumbs'){?><img src="<?php echo $thumbArray[$i]?>" alt="Photo Thumb" />
        <?php }else{?><span><?php echo ($i+1);?></span><?php } ?>
        </div>
      <?php }?>							
    </div>

    <div class="ja-slide-thumbs-mask"><span class="ja-slide-thumbs-mask-left">&nbsp;</span><span class="ja-slide-thumbs-mask-center">&nbsp;</span><span class="ja-slide-thumbs-mask-right">&nbsp;</span></div>

    <p class="ja-slide-thumbs-handles">
      <?php for ($i=0;$i<count($images); $i++) {?>
        <span>&nbsp;</span>
      <?php }?>						
    </p>
  </div>
  <?php endif; ?>
  
  <?php if ($control): ?>
  <div class="ja-slide-buttons clearfix">
    <span class="ja-slide-prev">&laquo; Previous</span>
    <span class="ja-slide-playback">&lsaquo;Playback</span>
    <span class="ja-slide-stop">Stop</span>
    <span class="ja-slide-play">Play &rsaquo;</span>
    <span class="ja-slide-next">Next &raquo;</span>
  </div>
  <?php endif; ?>
</div>

<script type="text/javascript">
  window.addEvent('load', function(){
    new JASlideshow2('ja-slide-<?php echo $module->id;?>', {	
                startItem: <?php echo $startItem; ?>,
                showItem: <?php echo $showItem; ?>,
                itemWidth: <?php echo $thumbWidth+$thumbSpaces[0]; ?>,
                itemHeight: <?php echo $thumbHeight+$thumbSpaces[1]; ?>,
                mainWidth: <?php echo $mainWidth; ?>,
                mainHeight: <?php echo $mainHeight; ?>,
                duration: <?php echo $duration; ?>,
                transition: Fx.Transitions.<?php echo $effect; ?>,
                animation: '<?php echo $animation; ?>',
                thumbOpacity:<?php echo $thumbOpacity; ?>,			
                maskOpacity: <?php echo $descOpacity; ?>,
                buttonOpacity: <?php echo $overlapOpacity; ?>,
                showDesc: '<?php echo $showDescription; ?>',
                descMode: '<?php echo $showdescwhen; ?>',
                readmoretext: '<?php echo $readmoretext; ?>',
                overlap: <?php echo $container; ?>,
                navigation:'<?php echo $navigation; ?>',
                urls:['<?php echo implode('\',\'', $urls); ?>'],
								autoPlay: <?php echo $autoplay; ?>,
								interval: <?php echo $interval; ?>
              });
  });
</script>	
