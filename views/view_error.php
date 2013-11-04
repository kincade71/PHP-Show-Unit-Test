<?php foreach($line as $error){
	echo '<style>
			#line-'.$error.'{
				background-color: red;
				width: 100%;
				margin-left: -8px;
				padding-left: 8px;
			}
		</style>';
}?>
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span12">
    <p class="lead">This file lives at: <?= $filepath; ?></p>
		<textarea style="height:900px;" class="span12" id="numberfyDemo"><?= $file ?></textarea>
	</div>
	</div>
</div>
	<script type='text/javascript' src="<?= base_url()?>js/numberfy.js"></script>
	<script type="text/javascript">
	$(function() { $('#numberfyDemo').numberfy(); });
	</script>