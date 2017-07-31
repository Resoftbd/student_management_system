@extends('layouts.student_base')
@section('student_content')


		<!-- Main content-->
				<div class="col-xs-10 content">
				<div class="cat">
				<div class="row">
				<div class="col-sm-9">
					<h3>Notice</h3>
				
						<ul class="inbox">
							<li class="unread"><input type="checkbox" data-toggle="toggle" style="margin:3px 5px;"><a href="#msg" data-toggle="modal" data-target="#msg">Message from tazwarutshas@gmail.com - Hello! I'm tazwar utshas and I really loved your website...</a></li>
							<li class="unread"><input type="checkbox" data-toggle="toggle" style="margin:3px 5px;"><a href="">Message from shoaibaabesh@gmail.com - Hey! this site is simply awesome. I would love to see some...</a></li>
							<li class="read"><input type="checkbox" data-toggle="toggle" style="margin:3px 5px;"><a href="">Message from naimulaoyan@gmail.com - I read your news artcle on drags, that was published yesterday...</a></li>
							<li class="read"><input type="checkbox" data-toggle="toggle" style="margin:3px 5px;"><a href="">Message from shakibalhassan@gmail.com - Hello! I'm tazwar utshas and I really loved your website...</a></li>
							<li class="read"><input type="checkbox" data-toggle="toggle" style="margin:3px 5px;"><a href="">Message from tamimiqbal@gmail.com - Hey! this site is simply awesome. I would love to see some...</a></li>
							<li class="unread"><input type="checkbox" data-toggle="toggle" style="margin:3px 5px;"><a href="">Message from mustafizurrahman@gmail.com - I read your news artcle on drags, that was published yesterday...</a></li>
							<li class="read"><input type="checkbox" data-toggle="toggle" style="margin:3px 5px;"><a href="">Message from breat_lee@gmail.com - Hello! I'm tazwar utshas and I really loved your website...</a></li>
							<li class="read"><input type="checkbox" data-toggle="toggle" style="margin:3px 5px;"><a href="">Message from shabbirrahman@gmail.com - Hey! this site is simply awesome. I would love to see some...</a></li>
							<li class="read"><input type="checkbox" data-toggle="toggle" style="margin:3px 5px;"><a href="">Message from tazwarutshas@gmail.com - I read your news artcle on drags, that was published yesterday...</a></li>
							<li class="read"><input type="checkbox" data-toggle="toggle" style="margin:3px 5px;"><a href="">Message from shoaibaabesh@gmail.com - Hello! I'm tazwar utshas and I really loved your website...</a></li>
							<li class="read"><input type="checkbox" data-toggle="toggle" style="margin:3px 5px;"><a href="">Message from naimulaoyan@gmail.com - Hey! this site is simply awesome. I would love to see some...</a></li>
							<li class="unread"><input type="checkbox" data-toggle="toggle" style="margin:3px 5px;"><a href="">Message from shakibalhassan@gmail.com - I read your news artcle on drags, that was published yesterday...</a></li>
							<li class="read"><input type="checkbox" data-toggle="toggle" style="margin:3px 5px;"><a href="">Message from tamimiqbal@gmail.com - Hello! I'm tazwar utshas and I really loved your website...</a></li>
							<li class="read"><input type="checkbox" data-toggle="toggle" style="margin:3px 5px;"><a href="">Message from mustafizurrahman@gmail.com - Hey! this site is simply awesome. I would love to see some...</li>
							<li class="read"><input type="checkbox" data-toggle="toggle" style="margin:3px 5px;"><a href="">Message from breat_lee@gmail.com - I read your news artcle on drags, that was published yesterday...</a></li>
							<li class="read"><input type="checkbox" data-toggle="toggle" style="margin:3px 5px;"><a href="">Message from shabbirrahman@gmail.com - Hello! I'm tazwar utshas and I really loved your website...</a></li>
							</ul>
							
							<!--MODAL-->
							<div id="msg" class="modal fade " role="dialog">
							  <div class="modal-dialog">

								<!-- Modal content-->
								<div class="modal-content">
								  <div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									
									<h4 class="modal-title black1">From: tazwarutshas@gmail.com</h4>
								  </div>
								  <div class="modal-body">
								    <b>Name: Tazwar Utshas</b><br><br>
									<p>Hello! I'm Tazwar Utshas and I really loved your website layout design. Btw, I want to publish an interesting news to your website. Can you plz give me instruction about what should I do to publish my news into your website. Thanx in advance. :)</p>
								  </div>
								  <div class="modal-footer">
									<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								  </div>
								</div>

							  </div>
							</div>


				</div>
				
				 <!-- Right side message info showing and delete option providing portion-->
						<div class="col-sm-3" style="margin-top:40px; padding-left:40px;">
							<ul class="list-group inbox-del">
								  <li class="list-group-item list-group-item-success">Notice: 17</li>
								  <li class="list-group-item list-group-item-info">Read: 13</li>
								  <li class="list-group-item list-group-item-danger">Unread: 4</li>
								</ul>
						
							<div class="btn-group inbox-del">
								  <button type="button" class="btn btn-danger del-half"> Delete </button>
								  <button type="button" class="btn btn-danger del-half"> Delete all </button>
								</div>
							
							<p class="notice">* Check all the messages you want to delete and then press delete button. In order to delete all the messages, click the delete all button.</p>
						</div>
						</div>
				</div>
					</div>
		@endsection