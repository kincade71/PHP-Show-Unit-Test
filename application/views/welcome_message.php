<div class="container-fluid">
  <div class="row-fluid">
    <div class="span12">
      <div class="span10 ">
        <?php if(!empty($command)){?>
        <div class="well well-small">
        <p class="lead">Command Exicuted</p>
        	<?php echo $command;?>
        </div>
        
        <?php
        if($_GET['m'] == 'singletest'){
         	preg_match_all('/[\/].*.p:\d*/',$results, $matches);
         	$lines = NULL;
         	foreach ($matches as $errors){
				foreach($errors as $mistakes){					
						
						$lines.= strstr($mistakes,':');
				}
			}
			if(!empty($lines)){
				$Errors = '<a href="index.php?c=welcome&m=seeerror&t='.strstr($mistakes,':',true).'&l='.$lines.'" target="_blank"><div class="alert alert-error ">number of errors: '.count($errors).'</div></a>';
			}else{
				$Errors = '<div class="alert alert-success">no errors</div>';
			}
			echo $Errors;
        }
         ?>
         
        <?php } ?>
       <?= ($results)?'<div class="well well-small">'.nl2br($results).'</div>':null;?>
        </p>
        <!--<pre>
        <?php //print_r($results);
        	
        		foreach($common as $ctests){
					if(get_mime_by_extension(substr(strrchr($ctests,'/'),1)) == 'application/x-httpd-php'){
						//echo str_replace('.php','',substr(strrchr($ctests,'/'),1)).'<br/>';
					}
				}
        	?>
        </pre>-->
     <?php if(empty($command) && empty($results)){ ?>
     <pre class="hidden-phone"><span class="lead ">In computer programming, unit testing is</span> a method by which individual units of source code, sets of one or more computer program modules together with associated control data, usage procedures, and operating procedures are tested to determine if they are fit for use. Intuitively, one can view a unit as the smallest testable part of an application. In procedural programming, a unit could be an entire module, but is more commonly an individual function or procedure. In object-oriented programming, a unit is often an entire interface, such as a class, but could be an individual method. Unit tests are created by programmers or occasionally by white box testers during the development process.<br/><br/>
Ideally, each test case is independent from the others. Substitutes such as method stubs, mock objects,fakes, and test harnesses can be used to assist testing a module in isolation. Unit tests are typically written and run by software developers to ensure that code meets its design and behaves as intended. Its implementation can vary from being very manual (pencil and paper) to being formalized as part of build automation.</pre>
     <?php }?>
      </div>
      <div class="span2">
		<a href="index.php?c=welcome&m=runtestsuite&t=frc-unit" class="btn btn-block btn-info" >Run FRC Unit Tests</a>
		<a href="index.php?c=welcome&m=runtestsuite&t=frc-int" class="btn btn-block btn-info" >Run FRC Int Tests</a>
		<a href="index.php?c=welcome&m=runtestsuite&t=frmobile-unit	" class="btn btn-block btn-info" >Run FRMobile Unit Tests</a>
		<a href="index.php?c=welcome&m=runtestsuite&t=frmobile-int" class="btn btn-block btn-info" >Run FRMobile Int Tests</a>
		<a href="index.php?c=welcome&m=runtestsuite&t=all-unit" class="btn btn-block btn-info" >Run All Unit Tests</a>
		<a href="index.php?c=welcome&m=runtestsuite&t=all-int" class="btn btn-block btn-info" >Run All Int Tests</a>
		<a href="index.php?c=welcome&m=runtestsuite" class="btn btn-block btn-info" >Run All Tests</a>
		<hr/>
		<div class="accordion" id="accordion2">
		  <div class="accordion-group">
		    <div class="accordion-heading">
		      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
		        Common
		      </a>
		    </div>
		    <div id="collapseOne" class="accordion-body collapse">
		      <div class="accordion-inner">
		        	<?php
		        		foreach($common as $ctests){
							if(get_mime_by_extension(substr(strrchr($ctests,'/'),1)) == 'application/x-httpd-php'){
								echo'<a href="index.php?c=welcome&m=singletest&t='.$ctests.'" class="btn btn-block btn-info" data-loading-text="Loading...">'.ucfirst(str_replace('Test','',str_replace('.php','',substr(strrchr($ctests,'/'),1)))).'</a>';
							}
						}
		        	?>
		      </div>
		    </div>
		  </div>
		  <div class="accordion-group">
		    <div class="accordion-heading">
		      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
		        Forrent
		      </a>
		    </div>
		    <div id="collapseTwo" class="accordion-body collapse">
		      <div class="accordion-inner">
		        <?php
		        		foreach($forrent as $ftests){
							if(get_mime_by_extension(substr(strrchr($ftests,'/'),1)) == 'application/x-httpd-php'){
								echo'<a href="index.php?c=welcome&m=singletest&t='.$ftests.'" class="btn btn-block btn-info" data-loading-text="Loading...">'.ucfirst(str_replace('Test','',str_replace('.php','',substr(strrchr($ftests,'/'),1)))).'</a>';
							}
						}
		        	?>
		      </div>
		    </div>
		  </div>
		</div>
		<!-- End accordian -->
      </div>
    </div>
  </div>
</div>
