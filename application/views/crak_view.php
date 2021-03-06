<? foreach ($positions as $position): ?>
<div class="container">
	<div class="row-fluid">
		<div class="span8 offset2 hero-unit" style="padding: 0 10px 5px 10px;">
			<h3>Norminess for <?php echo $position->position; ?></h3><hr>
			<table style="width:100%">
				<tr>
					<? foreach ($candidates as $candidate): ?>
					<? if ($position->id === $candidate->position):?>
					<td>
					<img src="<?=asset_url(); echo $candidate->image; ?>"  width="120px"/><br>
					<span class="label label-important "> Vote for <? echo $candidate->name?></span>
					<input type="radio" name="<? echo $position->position; ?>"/>
					</td>
					<? endif ?>
					<? endforeach; ?>
				</tr>
			</table>
		</div>
	</div>
</div>
<? endforeach ?>
<div class="container">
	<div class="row-fluid">
		<div class="span8 offset2">
			<!-- Button to trigger modal -->
			<a data-toggle="modal" href="#myModal" class="btn btn-primary btn-large">Launch demo modal</a>
				<!--<a href="#myModal" role="button" class="btn btn-primary pull-right" data-toggle="modal">Continue &raquo;</a>-->
		</div>
	</div>
</div>

<!-- Modal -->
<div id="myModal" class="modal hide fade in" data-show="true">  
<div class="modal-header">  
<a class="close" data-dismiss="modal">×</a>  
<h3>This is a Modal Heading</h3>  
</div>  
<div class="modal-body">  
<h4>Text in a modal</h4>  
<p>You can add some text here.</p>                
</div>  
<div class="modal-footer">  
<a href="#" class="btn btn-success">Call to action</a>  
<a href="#" class="btn" data-dismiss="modal">Close</a>  
</div>  
</div> 
<!--
<div class="modal hide fade in" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel">Confirm Selection</h3>
	</div>
	<div class="modal-body">
		<p>Please confirm selection below:</p>
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
		<button class="btn btn-primary">Save changes</button>
	</div>
</div>-->
<!--<a rel="tooltip" href="#" data-original-title="Default tooltip">you probably</a>-->


<div class="container">
<h2>Example of creating Modals with Twitter Bootstrap</h2>
<div id="example" class="modal hide fade in" style="display: none; ">
            <div class="modal-header">
              <a class="close" data-dismiss="modal">×</a>
              <h3>This is a Modal Heading</h3>
            </div>
            <div class="modal-body">
              <h4>Text in a modal</h4>
              <p>You can add some text here.</p>		        
            </div>
            <div class="modal-footer">
              <a href="#" class="btn btn-success">Call to action</a>
              <a href="#" class="btn" data-dismiss="modal">Close</a>
            </div>
          </div>
<p><a data-toggle="modal" href="#example" class="btn btn-primary btn-large">Launch demo modal</a></p>

<script src="/twitter-bootstrap/twitter-bootstrap-v2/docs/assets/js/jquery.js"></script>
<script src="/twitter-bootstrap/twitter-bootstrap-v2/js/bootstrap-modal.js"></script>
