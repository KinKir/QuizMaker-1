@extends('../layout')
<!-- Start Side Nav Content -->
@section('side-nav')
<div class="sidebar-heading">Instructor</div>
<li><a href="/admin/categorymaneger" class=""><i class="sidebar-menu-icon material-icons left">import_contacts</i>Category Manager</a></li>
<li><a href="/admin/quizmanager" class=""><i class="sidebar-menu-icon material-icons left">help</i>Quiz Manager</a></li>
<li><a href="/admin/publicprofile" class=""><i class="sidebar-menu-icon material-icons left">language</i>Public Profile</a></li>
<li><a href="/admin/accountsetting" class=""><i class="sidebar-menu-icon material-icons left">account_box</i>Edit Account</a></li>
<li><a href="/admin/messages" class=""><i class="sidebar-menu-icon material-icons left">comment</i>Messages</a></li>
<li><a href="/admin/logout" class=""><i class="sidebar-menu-icon material-icons left">lock_open</i>Log Out</a></li>
@endsection

@section('content')
<div class="container">
  <div class="row">
<!-- Start About Profile -->
<div class="center">
   <a href="#" class="profile-link">
          <img src="/images/Bob.jpg" alt="" class="circle">
   </a>

   <h1 class=" h2 m-b-0 admin-name">Adrian Demian</h1>
   <p class="lead text-muted m-b-0">Florida, USA </p>
   <p class="label label-primary">INSTRUCTOR</p>
<hr>
<h5 class="text-muted">Instructor Rating</h5>
<p>
          <i class="material-icons text-success md-18">star</i>
          <i class="material-icons text-success md-18">star</i>
          <i class="material-icons text-success md-18">star</i>
          <i class="material-icons text-muted-light md-18">star_border</i>
          <i class="material-icons text-muted-light md-18">star_border</i>
        </p>
<hr>
<h5 class="page-heading  text-muted">Courses by Adrian</h5>

<div class="category-column">
<div class="category-column-left">
	<div class="col s5 m5 card category-column-cards left">
		<div class="category-column-card-left left ">
			<a href="#">
                  <img src="/images/lorem.png" alt="Card image cap" width="100" class="img-rounded">
            </a>
		</div>
		<div class="category-column-card-right ">
			<a href="take-course.html" class="category-column-card-right-links">Learn VueJs</a>
			<div>
                  <i class="material-icons text-warning md-18">star</i>
                  <i class="material-icons text-warning md-18">star</i>
                  <i class="material-icons text-warning md-18">star</i>
                  <i class="material-icons text-warning md-18">star</i>
                  <i class="material-icons text-warning md-18">star_border</i>
            </div>
		</div>
	</div>





	<div class="col s5 m5 card category-column-cards right">
		<div class="category-column-card-left left ">
			<a href="#">
                  <img src="/images/lorem.png" alt="Card image cap" width="100" class="img-rounded">
            </a>
		</div>
		<div class="category-column-card-right ">
			<a href="take-course.html" class="category-column-card-right-links">Learn VueJs</a>
			<div>
                  <i class="material-icons text-warning md-18">star</i>
                  <i class="material-icons text-warning md-18">star</i>
                  <i class="material-icons text-warning md-18">star</i>
                  <i class="material-icons text-warning md-18">star</i>
                  <i class="material-icons text-warning md-18">star_border</i>
            </div>
		</div>
	</div>



		<div class="col s5 m5 card category-column-cards left">
		<div class="category-column-card-left left ">
			<a href="#">
                  <img src="/images/lorem.png" alt="Card image cap" width="100" class="img-rounded">
            </a>
		</div>
		<div class="category-column-card-right ">
			<a href="take-course.html" class="category-column-card-right-links">Learn VueJs</a>
			<div>
                  <i class="material-icons text-warning md-18">star</i>
                  <i class="material-icons text-warning md-18">star</i>
                  <i class="material-icons text-warning md-18">star</i>
                  <i class="material-icons text-warning md-18">star</i>
                  <i class="material-icons text-warning md-18">star_border</i>
            </div>
		</div>
	</div>


		<div class="col s5 m5 card category-column-cards right">
		<div class="category-column-card-left left ">
			<a href="#">
                  <img src="/images/lorem.png" alt="Card image cap" width="100" class="img-rounded">
            </a>
		</div>
		<div class="category-column-card-right ">
			<a href="take-course.html" class="category-column-card-right-links">Learn VueJs</a>
			<div>
                  <i class="material-icons text-warning md-18">star</i>
                  <i class="material-icons text-warning md-18">star</i>
                  <i class="material-icons text-warning md-18">star</i>
                  <i class="material-icons text-warning md-18">star</i>
                  <i class="material-icons text-warning md-18">star_border</i>
            </div>
		</div>
	</div>
</div>




</div>



</div>
<!-- End About Profile -->
</div>
</div>
@endsection
