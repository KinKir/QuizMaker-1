@extends('../layout')

<!-- Start Search Input -->
@section('search')
<form class="left">
	<div class="input-field">
		<input id="search" type="search" required>
		<label for="search"><i class="material-icons">search</i></label>
		<i class="material-icons">close</i>
	</div>
</form>
@endsection
<!-- End Search Input -->

<!-- Start Side Nav Content -->
@section('side-nav')
		<div class="sidebar-heading">Student</div>
        <li><a href="/user/category" class=""><i class="sidebar-menu-icon material-icons left">search</i>Browse Category</a></li>
        <li><a href="/user/takequiz" class=""><i class="sidebar-menu-icon material-icons left">dvr</i>Take Quiz</a></li>
        <li><a href="/user/quizresult" class=""><i class="sidebar-menu-icon material-icons left">poll</i>Quiz Result</a></li>
        <li><a href="/user/editaccount" class=""><i class="sidebar-menu-icon material-icons left">account_box</i>Edit Account</a></li>
        <li><a href="/user/messages" class=""><i class="sidebar-menu-icon material-icons left">comment</i>Messages</a></li>
        <li><a href="/user/logout" class=""><i class="sidebar-menu-icon material-icons left">lock_open</i>Log Out</a></li>
@endsection
<!-- End Side Nav Content -->

@section('content')
<div class="container">
	<div class="row">
<div class="col s6 m6 card">
		<div class="card-headder">
			<div class="media-body left">
				<h4 class="card-title ">Quiz</h4>
				<p class="card-subtitle">Your Performance</p>
			</div>
			<div class="media-right right">
				<a class="btn grey-text white index-page-card-button-margin-top" href="#"> View All</a>
			</div>
		</div>
		<ul>
			<li class="list-group-item">
				<div class="media-body"></div>
				<div class="media-right"></div>
			</li>
			<li class="list-group-item">
				<div class="media-body"></div>
				<div class="media-right"></div>
			</li>
			<li class="list-group-item">
				<div class="media-body"></div>
				<div class="media-right"></div>
			</li>
		</ul>
</div>
<div class="col s5 m5 card " id="card-right-index">
	<div class="card-header  bg-white">
              <h4 class="card-title">Rewards</h4>
              <p class="card-subtitle">Your latest achievements</p>
	</div>
<div class="underline"></div>
	<div class="card-block center user-index-rewards">
              <div class="btn btn-primary btn-floating blue"><i class="material-icons">thumb_up</i></div>
              <div class="btn btn-danger btn-floating red"><i class="material-icons">grade</i></div>
              <div class="btn btn-success btn-floating  teal accent-3"><i class="material-icons">bubble_chart</i></div>
              <div class="btn btn-warning btn-floating  yellow darken-3"><i class="material-icons">keyboard_voice</i></div>
              <div class="btn btn-info btn-floating light-blue"><i class="material-icons">event_available</i></div>
            </div>

</div>
<div class="col s6 m6 card ">
<div class="card-header">
	<div class="media">
		<div class="media-body media-middle left">
			<h4 class="card-title">Forum Activity</h4>
			<p class="card-subtitle">Latest forum topics &amp; comments</p>
		</div>
		<div class="media-right media-middle right index-page-card-button-margin-top">
                  <a class="btn grey-text white" href="forum.html"> <i class="material-icons">keyboard_arrow_right</i></a>
       </div>
      <div class="underline"></div>
      <ul class="list-group">
      	<li class="list-group">

      	</li>
      </ul>
	</div>
</div>
</div>
</div>
@endsection
