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
	<div class="categories">
<!--    /////////////////////////////// Start Choose Category /////////////////////////// -->

<!-- Start Add Category Button -->
<div class="col s12 m12">
<a  href="/admin/addcategory" style="margin-bottom:10px;" class="waves-effect waves-light btn right"> <i class="material-icons right">playlist_add</i>Add Category</a>
</div>
<!-- End Add Category Button -->

<!-- Start Style Category Design -->
<div class="col s12 m12">
<p class="btn-group right">
        <a href="#" class="btn btn-white active"><i class="material-icons">list</i></a>
        <a href="#" class="btn btn-white"><i class="material-icons">dashboard</i></a>
</p>
</div>
<!-- End Style Category Design -->


  <div class="row">
        <div class="col s12 m6 ">
          @foreach($categories as $category)

        <div class="raiting-category">
              <i class="material-icons text-warning md-18">star</i>
              <i class="material-icons text-warning md-18">star</i>
              <i class="material-icons text-warning md-18">star</i>
              <i class="material-icons text-warning md-18">star</i>
              <i class="material-icons text-warning md-18">star_border</i>
        </div>

          <div class="card">
            <div class="card-image">
              <img src="/images/{{$category->category_img}}">
            <span class="card-title">{{$category->category_name}}</span>
            </div>
            <div class="card-content">
              <p>{{$category->about_category}}</p>
            </div>
          </div>
                @endforeach
        </div>
        
  
        </div>
      </div>
<!--    ///////////////////////////////End Choose Category /////////////////////////// -->
	</div>
</div>
</div>
@endsection
