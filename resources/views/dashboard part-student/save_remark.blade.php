@extends('layouts.student_base')
@section('student_content')


		<!-- Main content-->
				<div class="col-xs-10 content">
				<h3> Save Remark</h3>
					<form action="#" method="post">
						<div class="form-group student_form_div">
							<div class="row">
							<b class="col-xs-2">Remark title:</b> <input type="text" class="col-xs-10" name="title" id="title" placeholder="message title"><br><br>
							</div>
							<div class="row">
								<b class="col-xs-2">Remark date:</b> <input type="date" class="col-xs-10" name="date" id="date"><br><br>
							</div>
							<textarea rows="8" cols="146" id="description" name="description" placeholder="remark description"></textarea>

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