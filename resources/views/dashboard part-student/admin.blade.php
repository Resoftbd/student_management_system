@extends('layouts.student_base')
@section('student_content')


<!-- Main content-->
				<div class="col-xs-10 content">
				<h3> Dashboard</h3>
					<form action="#" method="post">
						<div class="form-group row student_form_div">
							<label for="name" class="col-xs-4">Name:</label>
							<input class="col-xs-8" type="text" id="name" name="name" placeholder="full name">
						</div>
						<div class="form-group row student_form_div">
							<label for="id" class="col-xs-4">ID:</label>
							<input class="col-xs-8" type="text" id="id" name="id" placeholder="student id">
						</div>
						<div class="form-group row student_form_div">
							<label for="email" class="col-xs-4">Email:</label>
							<input class="col-xs-8" type="email" id="email" name="email" placeholder="your email">
						</div>
						<div class="form-group row student_form_div">
							<label for="cell" class="col-xs-4">Cell:</label>
							<input class="col-xs-8" type="text" id="cell" name="cell" placeholder="cell number">
						</div>
						<div class="form-group row student_form_div">
							<label for="gname" class="col-xs-4">Guardian's Name:</label>
							<input class="col-xs-8" type="text" id="gname" name="gname" placeholder="guardian's full name">
						</div>
						<div class="form-group row student_form_div">
							<label for="gmail" class="col-xs-4">Guardian's Email:</label>
							<input class="col-xs-8" type="text" id="gmail" name="gmail" placeholder="guardian's mail">
						</div>
						<div class="form-group row student_form_div">
							<label for="gcell" class="col-xs-4">Guardian's Cell:</label>
							<input class="col-xs-8" type="text" id="gcell" name="gcell" placeholder="guardian's cell">
						</div>
						<div class="form-group row student_form_div">
							<label for="pres_add" class="col-xs-4">Present Address:</label>
							<input class="col-xs-8" type="text" id="pres_add" name="pres_add" placeholder="present address">
						</div>
						<div class="form-group row student_form_div">
							<label for="perm_add" class="col-xs-4">Permanent Address:</label>
							<input class="col-xs-8" type="text" id="perm_add" name="perm_add" placeholder="permanent address">
						</div>
						<div class="form-group row student_form_div">
							<label for="achievements" class="col-xs-4">Achievements:</label>
							<input class="col-xs-8" type="text" id="achievements" name="achievements" placeholder="achievements">
						</div>
						<br>

						<div class="form-group">
							 <button class="btn btn-primary pull-right" type="submit" name="submit"> Submit </button>
						</div>

					</form>
					<p style="margin-top:75px; float:right; color:#aaa">Developed by Resoft</p>
				</div>


		</div>
@endsection