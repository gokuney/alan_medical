<?php require_once('./header.php'); ?>


<div class="container">

	<div class="row">
		<div class="col-xs-12 login-wrapper">
			<h2>REPORTS</h2>
		</div>
	</div>

	<hr />

	<div class="row hidden-sm hidden-xs"> <p>&emsp;</p> </div>

	<div class="row">
	

		<div class="col-xs-12 ">

			
			<div class="form-wrapper">
			<form id="browse-form">
				<select class="form-control select select-primary" data-toggle="select" style="width:100%;" required>
            	
            	<option value="">-- Please select an option --</option>

            	<option value="Aggregate Report">Aggregate Report</option>
            	<option value="Feedback Report">Feedback Report</option>
            	<option value="Detailed Report">Detailed Report</option>
            
            
          </select>

          <p><br/>
          	<input type="submit" value="Download" class="btn btn-block btn-primary download"/>
          </p>

			</div>			

		</form>
			
		</div>

		


	</div>
</div>



<script type="text/javascript">

$(function(){

$('#browse-form').on('submit' , function(e){

e.preventDefault();

// var data = $(this).find('option:selected').data('json');

// var head = $(this).find('option:selected').data('title');

// $.get('./browse.mst' , function(template){

// 	var html = Mustache.render(template , { data : data });

// 	$('#browseModalBody').html(html);
// 	$('#browseModalHeader').html(head);
// 	$('#browseModal').modal('show');

// 	//show modal


// });

window.open('./sample.pdf');

});

	       $('[data-toggle="select"]').select2();

//	$.backstretch("./bg.jpg");

});

</script>




<div id="browseModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="browseModalHeader">  </h4>
      </div>
      <div class="modal-body" id="browseModalBody">
        <p>&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Download Original File ( <span id="filename">Something.xml</span> )</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->





</body>
</html>