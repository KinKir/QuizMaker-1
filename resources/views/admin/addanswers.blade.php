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
<div class="col s12 m12">
	<div class="col s12 m12">
		<div id="DIV_1 left">
			<div id="DIV_2">
				<div id="DIV_3">
					<img src="/images/vuejs.png" alt="" width="80" id="IMG_4" />
				</div>
				<div id="DIV_5">
					<h4 id="H4_6">
					Vue.js Deploy Quiz
					</h4> <span id="SPAN_7">submited by</span> <a href="#" id="A_8">Adrian Demian</a>
				</div>
				<div id="DIV_9">
					<div id="DIV_10">
						<a href="#" id="A_11"><i id="I_12">keyboard_arrow_left</i></a> <a href="#" id="A_13"><i id="I_14">keyboard_arrow_right</i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="edit_quiz_admin col s12 m12">
		</div>
	</div>
</div>
<div class="col s12 m12">
	<form action="/admin/categorymaneger" method="POST">
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		<div class="card">
			<div class="col s5 m5" id="edit-category-input-text">
				<input type="text" name="category_name">
			</div>
			<div class="col s3 m3" id="edit-category-scroll">
				<p class="range-field" style="margin-top:15px;">
					<input name="category_time" type="range" id="test5" min="0" max="100" />
				</p>

		</div>
	<div class="col s12 m12">
    <textarea class="col s8 m8 offset-m1" name="about_category"> </textarea>
	</div>
	<div class="col s12 m9">
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
	<div class="col s12 m12">

	</div>
<div class="col s12 m12">
  <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
</div>
	</form>

</div>
</div>
</div>
@endsection
