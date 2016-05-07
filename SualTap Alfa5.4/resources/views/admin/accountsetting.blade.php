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
<div class="editaccount-content card col s9 m9 offset-m2">
<div class="space-div col m12 s12"></div>
      <form>
      <div class="editaccount-content-form">
      	<div class="col s3 left">
      		<label for="avatar" class="col-sm-3 form-control-label">Avatar</label>
      	</div>
      	<div class="col s9">
      		<div class="icon-block left btn">

                        <i class="material-icons text-muted-light md-36">photo</i>
             </div>
         <div class="edit_user_ccout_profile_photo">
              <div class="file-field input-field">
      <div class="btn">
        <span>File</span>
        <input type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
         </div>

      	</div>
  </div>

        <div class="editaccount-content-form">
      	<div class="col s3 left">
      		<label for="name" class="col-sm-3 form-control-label">Full Name</label>
      	</div>
      	<div class="col s9">
     <div class="row">
                    <div class="col-md-6">
                      <input type="text" class="form-control" placeholder="First Name" value="Adrian">
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" placeholder="Last Name" value="Demian">
                    </div>
                  </div>
      	</div>
  </div>


        <div class="editaccount-content-form">
      	<div class="col s3 left">
      		<label for="email" class="col-sm-3 form-control-label">Email</label>
      	</div>
      	<div class="col s9">
<div class="col-sm-6 col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">
								<i class="material-icons md-18 text-muted">mail</i>
							</span>
                   <input id="email" type="email" class="validate">
                  </div>
                </div>
      	</div>
  </div>


        <div class="editaccount-content-form">
      	<div class="col s3 left">
      		<label for="website" class="col-sm-3 form-control-label">Website</label>
      	</div>
      	<div class="col s9">
<div class="col-sm-6 col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon2">
								<i class="material-icons md-18 text-muted">language</i>
							</span>
                    <input type="text" class="form-control" placeholder="www." value="learning.themekit.io">
                  </div>
                </div>
      	</div>
  </div>


          <div class="editaccount-content-form">
      	<div class="col s3 left">
      		<label for="password" class="col-sm-3 form-control-label">Change Password</label>
      	</div>
      	<div class="col s9">
<div class="col-sm-6 col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon3">
								<i class="material-icons md-18 text-muted">lock</i>
							</span>
                    <input type="text" class="form-control" placeholder="Enter new password">
                  </div>
                </div>
      	</div>
  </div>
    <button class="btn waves-effect waves-light left" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
        <p class="right">
      <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
      <label for="filled-in-box">Subscribe to Newsletter</label>
    </p>
      </form>
      <div class="space-div col m12 s12"></div>
	</div>
</div>
</div>
@endsection