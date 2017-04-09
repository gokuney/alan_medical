<?php require_once('./header.php'); ?>


<div class="container">

	<div class="row">
		<div class="col-xs-12 login-wrapper">
			<h2>UPLOAD</h2>
		</div>
	</div>

	<hr />

	<div class="row hidden-sm hidden-xs"> <p>&emsp;</p> </div>

	<div class="row">
		<div class="col-xs-12 ">
			<div class="form-wrapper">
				
				<form action="" method="POST" enctype="multipart/form-data">

					<div class="form-group center">
						<small>UPLOAD XML</small>
					</div>
					
					<div class="form-group">
						<label for="name">Select Measure</label>
						
						<select class="form-control select select-primary" name="measure" data-toggle="select" required>
				            <option value="Tobbaco Treatment">Tobbaco Treatment</option>
				            <option value="MAT-4"> MAT-4 </option>

				            
				        </select>

					</div>

					<div class="form-group">
						<label for="name">Identifier</label>
						<input type="text" name="title" class="form-control" required/>
					</div>

					<div class="form-group">
						<label for="userfile">Choose File</label>
						<input type="file" name="userfile" required/>
					</div>

					<div class="form-group">
						<input type="submit" value="Upload" class="btn btn-primary btn-block" />
						<input type="hidden" name="intent" value="upload" />
						<input type="hidden" name="type" value="file" />
					</div>

				</form>

			</div>
		</div>

		<h2 class="center"> <center> -- OR -- </center></h2>

		<div class="col-xs-12 ">


			<div class="form-wrapper">

			<div class="form-group center">
						<small>UPLOAD VIA FORM</small>
					</div>
					
				
				<form action="" method="POST" enctype="multipart/form-data">

					

	<table width="100%" border="1">
		
		<tr>
			<td colspan="3" align="center">
				Attributes
			</td>
		</tr>

		<tr>
			<td>
				Action Code
			</td>
			<td colspan="2">
				<input type="text" class="form-control" placeholder="Enter data here"  required/>
			</td>
		</tr>

		<tr>
			<td>
				Data
			</td>
			<td colspan="2">
								<input type="text" class="form-control" placeholder="Enter data here"  required/>
			</td>
		</tr>

		<tr>
			<td>
				Type
			</td>
			<td colspan="2">
								<input type="text" class="form-control" placeholder="Enter data here"  required/>
			</td>
		</tr>

		<tr>
			<td>
				Version
			</td>
			<td colspan="2">
								<input type="text" class="form-control" placeholder="Enter data here"  required/>
			</td>
		</tr>

		<tr>
			<td colspan="3" align="center">
				File Audit Data
			</td>
		</tr>

		<tr>
			<td>
				Create Date
			</td>
			<td colspan="2">
								<input type="text" class="form-control datepicker" placeholder="Enter data here"  required readonly="" />
			</td>
		</tr>

		<tr>
			<td>
				Create Time
			</td>
			<td colspan="2">
								<input type="text" class="form-control" placeholder="Enter data here"  required/>
			</td>
		</tr>


		<tr>
			<td>
				Created by Tool
			</td>
			<td colspan="2">
								<input type="text" class="form-control" placeholder="Enter data here"  required/>
			</td>
		</tr>

		<tr>
			<td>
				Version
			</td>
			<td colspan="2">
				<input type="text" class="form-control" placeholder="Enter data here"  required/>
			</td>
		</tr>

		<tr>
			<td>
				Created By
			</td>
			<td colspan="2">
				<input type="text" class="form-control" placeholder="Enter data here"  required/>
			</td>
		</tr>

		<tr>
			<td colspan="3" align="center">
				Provider
			</td>
		</tr>

		<tr>
			<td>
				Provider ID
			</td>
			<td colspan="2">
				<input type="text" class="form-control" placeholder="Enter data here"  required/>
			</td>
		</tr>

		<tr>
			<td>
				HCOID
			</td>
			<td colspan="2">
				<input type="text" class="form-control" placeholder="Enter data here"  required/>
			</td>
		</tr>

		<tr>
			<td colspan="3" align="center">
				Patient
			</td>
		</tr>

		<tr>
			<td>
				First Name
			</td>
			<td colspan="2">
				<input type="text" class="form-control" placeholder="Enter data here"  required/>
			</td>
		</tr>

		<tr>
			<td>
				Last Name
			</td>
			<td colspan="2">
				<input type="text" class="form-control" placeholder="Enter data here"  required/>
			</td>
		</tr>

		<tr>
			<td>
				Birthdate 
			</td>
			<td colspan="2">
				<input type="text" class="form-control datepicker" placeholder="Enter data here"  required readonly="" />
			</td>
		</tr>

		<tr>
			<td>
				Sex
			</td>
			<td colspan="2">
				<select name="" id="" required data-toggle="select" class="ddown">
					<option value="">-Select One-</option>
					<option value="M">Male</option>
					<option value="F">Female</option>
				</select>
			</td>
		</tr>

		<tr>
			<td>
				Race
			</td>
			<td colspan="2">
				<input type="text" class="form-control" placeholder="Enter data here"  required/>
			</td>
		</tr>

		<tr>
			<td>
				Ethnic
			</td>
			<td colspan="2">
				<input type="text" class="form-control" placeholder="Enter data here"  required/>
			</td>
		</tr>

		<tr>
			<td>
				Postal Code
			</td>
			<td colspan="2">
				<input type="text" class="form-control" placeholder="Enter data here"  required/>
			</td>
		</tr>

		<tr>
			<td colspan="3" align="center">
				Episode of care
			</td>
		</tr>
		<tr>
			<td>
				Measure Set
			</td>
			<td colspan="2">
				
				<select class="ddown" name="measure" data-toggle="select" required>
				

				            <option value="TOB">TOB</option>
				            <option value="MAT-4"> MAT-4 </option>

				            
				</select>

			</td>
		</tr>

		<tr>
			<td>
				Admit Date
			</td>
			<td colspan="2">
				<input type="text" class="form-control datepicker" placeholder="Enter data here"  required readonly="" />
			</td>
		</tr>

		<tr>
			<td>
				Discharge Date
			</td>
			<td colspan="2">
				<input type="text" class="form-control datepicker" placeholder="Enter data here"  required/>
			</td>
		</tr>

		<tr>
			<td>
				Vendor Tracking ID
			</td>
			<td colspan="2">
				<input type="text" class="form-control" placeholder="Enter data here"  required/>
			</td>
		</tr>

		<tr>
			<td>
				Patient ID
			</td>
			<td colspan="2">
								<input type="text" class="form-control" placeholder="Enter data here"  required/>
			</td>
		</tr>

		<tr>
			<td colspan="3" align="center">
				Patient Details<a href="#" id="add-user" class="btn btn-sm text-info add-row">Add Row</a>
			</td>
		</tr>

		<tr>
			<th>
				Answer Code
			</th>
			
			<th>
				Question CD
			</th>

			<th>
				Row Number
			</th>

		</tr>


<!-- Multiplier -->
		<tr id="min-multi">
			<td>
				<input type="text" class="form-control" placeholder="Enter data here"  required/>
			</td>
			<td>
				<input type="text" class="form-control" placeholder="Enter data here"  required/>
			</td>

			<td>
				<input type="text" class="form-control" placeholder="Enter data here"  required/>
			</td>
		</tr>

		
<!-- End Multiplier -->

	</table>
	
	


					<div class="form-group">
						<p>&nbsp;</p>
						<hr/>
					</div>	



					<div class="form-group">
						<input type="submit" value="Upload" class="btn btn-primary btn-block" />
						<input type="hidden" name="intent" value="upload" />
						<input type="hidden" name="type" value="text" />
					</div>

				</form>

			</div>
		</div>


	</div>
</div>



<script type="text/javascript">
$(function(){

$(document).on('click' , '#add-user' , function(e){

e.preventDefault();

var template = '<tr class="arow">'+
			'<td>'+
				'<a href="#" class="remove-row text-danger" title="Remove this row">-</a><input type="text" class="form-control" placeholder="Enter data here"  required/>'+
			'</td>'+
			'<td>'+
			'	<input type="text" class="form-control" placeholder="Enter data here"  required/>'+
			'</td>'+

			'<td>'+
				'<input type="text" class="form-control" placeholder="Enter data here"  required/>'+
			'</td>'+
		'</tr>';
$('#min-multi').after(template);

});

$(document).on('click' , '.remove-row' , function(e){
	e.preventDefault();
	$(this).parent().parent().remove();
	});

	      $('[data-toggle="select"]').select2();
	      $('.datepicker').datepicker();
	  });
//	$.backstretch("./bg.jpg");
</script>
</body>
</html>