<hr>
<div class="container-fluid">
  <footer>
    <div class="row-fluid">
      <div class="span4">
        <p>&copy;
          <?= $title ?>
          <?= date('Y'); ?>
        </p>
      </div>
      <div class="span4">
      </div>
      <div class="span4">
        <p class="pull-right"><a href="<?= base_url() ?>user_guide/index.html" target="_blank">CI Framework User Guide</a> | </p>
      </div>
    </div>
  </footer>
</div>
<!-- javascript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 

<script src="<?= base_url()?>/js/bootstrap.js"></script> 
<script>
$(document).ready(function(){
    $('.tipping').tooltip();
});
</script> 
<script>
$(document).ready(function(){
    $('.pop').popover();
});
</script> 
<script>
$(document).ready(function(){
	$('.btn').button();
});
</script> 
<script language="javascript" type="text/javascript">
<!--
function popitup(url) {
	newwindow=window.open(url,'name','height=900,width=900');
	if (window.focus) {newwindow.focus()}
	return false;
}

// -->
</script>
</body></html>