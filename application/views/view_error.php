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
    <form method="POST" action="index.php?c=welcome&m=save">
    	<input type="hidden" name="filepath" value="<?= $filepath; ?>" >
    	<input type="hidden" name="errors" value="<?= (isset($_GET['l']))?$_GET['l']:$this->input->post('errors');?>">
		<textarea style="height:900px;" class="span12" id="numberfyDemo" name="file"><?= $file ?></textarea>
		<br/>
		<?php 
		$message = NULL;
		if($unable){
				if($unable == 'error'){
					$message = 'Save failed!';
				}else{
					$message = 'Changes Saved!';
				}
			}
		?>
		<!--<div class=" pull-left alert alert-<?= $unable ?>"><?= $message ?></div>
		  <input type="submit" value="Save Changes" class="pull-right btn btn-primary">-->
	</form>
	</div>
	</div>
</div>
	<script type='text/javascript' src="<?= base_url()?>js/numberfy.js"></script>
	<script type="text/javascript">
	$(function() { $('#numberfyDemo').numberfy(); });
	</script>