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
<div class="col s12 m12">
	<form action="/admin/quizmanager" method="POST">
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		<div class="card">
			<div class="col s5 m5" id="edit-category-input-text">
				<input type="text" name="question_name">
			</div>
			<div class="col s3 m3" id="edit-category-scroll">
				<p style="margin-top:15px;" class="range-field">
					<input name="quiz_score" type="range" id="test5" min="0" max="100" />
				</p>

			</div>
			<div style="margin-left:30px;" class="col s12 m12">
				<textarea name="about_quiz" class="col s5 m5 offset-m1"> </textarea>
			    <select name="category_id" class="col s3 m3" id="add-quiz-select-category">
			      <option value="" disabled selected >Choose your option</option>
			      @foreach($categories as $category)
			      <option value="{{$category->id}}">{{$category->id}}</option>
                   @endforeach
			    </select>
			</div>
			<div class="col s12 m12">
   <div class="file-field input-field">
      <div class="btn">
        <span>File</span>
        <input type="file" name="question_img">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
			</div>
	<div style="margin-top:10px;" class="col s12 m10">
  <button  class="btn waves-effect waves-light right" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
</div>

		</div>
	</form>
</div>
<script type="text/javascript">
$(document).ready(function() {
$('select').material_select();
});
	$('select').material_select('destroy');
</script>
</div>
</div>
@endsection
