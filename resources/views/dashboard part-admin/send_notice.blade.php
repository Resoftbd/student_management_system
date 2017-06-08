@extends('layouts.admin_base')
@section('admin_content')


<!-- Main content-->
				<div class="col-xs-10 content">
				<h3> Send Notice</h3>
					<form action="#" method="post">
						<div class="form-group" style="padding:2px 16px">
							<div class="row">
							<b class="col-xs-2">Message title:</b> <input type="text" class="col-xs-10" name="title" id="title" placeholder="message title"><br><br>
							</div>
							<textarea rows="8" cols="150" id="description" name="description" placeholder="message description"></textarea>

						<lavel for="options">Select Reciever</lavel>
						<select name="options" id="options">
							<option>To the students under project supervision</option>
							<option>To the students under academic supervision</option>
							<option>To all student under supervision</option>
						</select>
						</div>

						<br>

						<div class="form-group">
							 <button class="btn btn-primary pull-right" type="submit" name="submit"> Submit </button>
						</div>

					</form>
					<p style="margin-top:75px; float:right; color:#aaa">Developed by Resoft</p>
				</div>

@endsection