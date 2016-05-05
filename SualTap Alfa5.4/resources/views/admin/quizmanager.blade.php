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
<!-- End Side Nav Content -->
@section('content')
<div class="container">
  <div class="row">
<div class="quiz-column col s12 m12">
    <div class="quiz-column-top-left  col s6 m6">
        <h3 class="left">Quizes</h3>
    </div>
    <div class="quiz-column-top-right  col s6 m6">
        <a href="/admin/addquiz" class="btn btn-success btn-rounded right">New Quiz <i class="material-icons right">add</i> </a>
    </div>
</div>
<div class="quiz-column-bottom col s12 m12">
    <div class="col s9 m9">
        <div class="col s6 m6">
        @foreach($questions as $question)
        <a href="admin/answermanager/{{$question->id}}">
            <div class="card small cards-item">
                <div class="card-content">
                    <div class="media">
                        <div class="media-left">
                            <img src="/images/{{$question->question_img}}" alt="Card image cap" width="80">
                        </div>
                        <div class="media-right">
                            <p>{{$question->question_name}}</p>
                            <small class="grey-text lighten-1">25 Completed</small>
                        </div>
                    </div>
                </div>
                <div class="card-action">
                    <a href="#" class="waves-effect waves-light btn left"><i class="material-icons left">toc</i>Review<div class="badge-btn right">5</div></a>
                    <a class="waves-effect waves-light btn white right grey-text"><i class="material-icons left">mode_edit</i>edit</a>
                </div>
            </div>
            </a>
            @endforeach
    <div class="col s3 m3">
    </div>
</div>
</div>
</div>
@endsection
