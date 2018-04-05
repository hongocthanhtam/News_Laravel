@extends('master')
@section('content')

<header id="header" class="">
	<div class="col-md 12">
		<div style="background-color: green;">
			<p>Header</p>
		</div>
	</div>
</header><!-- /header -->

<div class="container">
  	<div class="row">
  		<!-- Content-left -->
    	<div class="col-sm-2" style="border: 1px solid red;">
      		<div class="image-logo">
				<a href="#" title="logo">
					<img src="image/logo/pn-logo.png" alt="logo" width="80">
				</a>
			</div>
			<div class="menu-left" style="margin-left: -30px;">
				<ul style="list-style-type: none;">
					<li><a href="#" title=""><span>Education</span></a></li>
					<li><a href="#" title=""><span>Picture</span></a></li>
					<li><a href="#" title=""><span>Trang liên quan</span></a></li>
				</ul>
			</div>
    	</div>
		
		<!-- Content-middle -->
    	<div class="col-sm-7" style="border: 1px solid red;">
    		<!-- News 1 -->
      		<div class="row">
      			<div class="col-sm-12">
      				<img src="image/NoImageAvailable.png" title="avatar" width="30">
      				<span>Admin posted news</span>
      			</div>

				<div class="col-sm-3" style="border: 1px solid blue;text-align: center;">
					<a href="{{URL::to('chi-tiet')}}" title="thumbnail">
						<img src="image/NoImageAvailable.png" alt="thumbnail" width="100">
					</a>
				</div>

				<div class="col-sm-9" style="border: 1px solid blue;">
					<span>Title 1</span><br/>
					<span>Content 1!</span><br/>
					<a href="{{URL::to('chi-tiet')}}" title=""><span>Read more &#62;&#62;</span></a>

					<div class="reaction">
						<span><i class="fa fa-thumbs-o-up"></i></span>
						<span><i class="fa fa-thumbs-o-down"></i></span>
						<span><i class="fa fa-heart-o"></i></span>
						<!-- <span><i class="fa fa-smile-o"></i></span> -->
						<span><i class="fa fa-frown-o"></i></span>
					</div>

					<div class="comment">
						<span><strong>Comment:</strong></span><br/>
						<input type="text" class="form-control" name="cmt">
					</div>
				</div>
			</div>
			<div class="space20">&nbsp;</div>

			<!-- News 2 -->
			<div class="row">
				<div class="col-sm-3" style="border: 1px solid blue;text-align: center;">
					<a href="{{URL::to('chi-tiet')}}" title="thumbnail">
						<img src="image/NoImageAvailable.png" alt="thumbnail" width="100">
					</a>
				</div>

				<div class="col-sm-9" style="border: 1px solid blue;">
					<span>Title 2</span><br/>
					<span>Content 2!</span><br/>
					<a href="{{URL::to('chi-tiet')}}" title=""><span>Read more &#62;&#62;</span></a>

					<div class="reaction">
						<span><i class="fa fa-thumbs-o-up"></i></span>
						<span><i class="fa fa-thumbs-o-down"></i></span>
						<span><i class="fa fa-heart-o"></i></span>
						<!-- <span><i class="fa fa-smile-o"></i></span> -->
						<span><i class="fa fa-frown-o"></i></span>
					</div>

					<div class="comment">
						<span><strong>Comment:</strong></span><br/>
						<input type="text" class="form-control" name="cmt">
					</div>
				</div>
			</div>
			<div class="space20">&nbsp;</div>

			<!-- News 3 -->
			<div class="row">
				<div class="col-sm-3" style="border: 1px solid blue;text-align: center;">
					<a href="{{URL::to('chi-tiet')}}" title="thumbnail">
						<img src="image/NoImageAvailable.png" alt="thumbnail" width="100">
					</a>
				</div>

				<div class="col-sm-9" style="border: 1px solid blue;">
					<span>Title 3</span><br/>
					<span>Content 3!</span><br/>
					<a href="{{URL::to('chi-tiet')}}" title=""><span>Read more &#62;&#62;</span></a>

					<div class="reaction">
						<span><i class="fa fa-thumbs-o-up"></i></span>
						<span><i class="fa fa-thumbs-o-down"></i></span>
						<span><i class="fa fa-heart-o"></i></span>
						<!-- <span><i class="fa fa-smile-o"></i></span> -->
						<span><i class="fa fa-frown-o"></i></span>
					</div>

					<div class="comment">
						<span><strong>Comment:</strong></span><br/>
						<input type="text" class="form-control" name="cmt">
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>

		<!-- Content-right -->
    	<div class="col-sm-3" style="border: 1px solid red;">
      		<div class="row">
      			<div class="col-sm-12">
					<h5><u>Life Story</u></h5>
				</div>

				<!-- Student life 1 -->
				<div class="col-sm-3" style="border: 1px solid blue;text-align: center;">
					<a href="#" title="thumbnail">
						<img src="image/NoImageAvailable.png" alt="thumbnail" width="50">
					</a>
				</div>

				<div class="col-sm-9" style="border: 1px solid blue;">
					<span>Title 1</span><br/>
					<span>Content 1!</span><br/>
					<a href="#" title=""><span>Read more &#62;&#62;</span></a>

					<div class="reaction">
						<span><i class="fa fa-thumbs-o-up"></i></span>
						<span><i class="fa fa-thumbs-o-down"></i></span>
						<span><i class="fa fa-heart-o"></i></span>
						<!-- <span><i class="fa fa-smile-o"></i></span> -->
						<span><i class="fa fa-frown-o"></i></span>
					</div>

					<div class="comment">
						<span><strong>Comment:</strong></span><br/>
						<input type="text" class="form-control" name="cmt">
					</div>
				</div>
				<div class="space20">&nbsp;</div>
			</div>

			<!-- Student life 2 -->
			<div class="row">
				<div class="col-sm-3" style="border: 1px solid blue;text-align: center;">
					<a href="#" title="thumbnail">
						<img src="image/NoImageAvailable.png" alt="thumbnail" width="50">
					</a>
				</div>

				<div class="col-sm-9" style="border: 1px solid blue;">
					<span>Title 2</span><br/>
					<span>Content 2!</span><br/>
					<a href="#" title=""><span>Read more &#62;&#62;</span></a>

					<div class="reaction">
						<span><i class="fa fa-thumbs-o-up"></i></span>
						<span><i class="fa fa-thumbs-o-down"></i></span>
						<span><i class="fa fa-heart-o"></i></span>
						<!-- <span><i class="fa fa-smile-o"></i></span> -->
						<span><i class="fa fa-frown-o"></i></span>
					</div>

					<div class="comment">
						<span><strong>Comment:</strong></span><br/>
						<input type="text" class="form-control" name="cmt">
					</div>
				</div>
				<div class="space20">&nbsp;</div>
			</div>
			<!-- Student life 3 -->
			<div class="row">
				<div class="col-sm-3" style="border: 1px solid blue;text-align: center;">
					<a href="#" title="thumbnail">
						<img src="image/NoImageAvailable.png" alt="thumbnail" width="50">
					</a>
				</div>

				<div class="col-sm-9" style="border: 1px solid blue;">
					<span>Title 3</span><br/>
					<span>Content 3!</span><br/>
					<a href="#" title=""><span>Read more &#62;&#62;</span></a>

					<div class="reaction">
						<span><i class="fa fa-thumbs-o-up"></i></span>
						<span><i class="fa fa-thumbs-o-down"></i></span>
						<span><i class="fa fa-heart-o"></i></span>
						<!-- <span><i class="fa fa-smile-o"></i></span> -->
						<span><i class="fa fa-frown-o"></i></span>
					</div>
					
					<div class="comment">
						<span><strong>Comment:</strong></span><br/>
						<input type="text" class="form-control" name="cmt">
					</div>
				</div>
				<div class="space20">&nbsp;</div>
			</div>
    	</div>
    	<!-- .col-sm-3 -->
  	</div>
  	<!-- .row -->
</div>
<!-- .container -->

@endsection