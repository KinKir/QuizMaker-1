
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
        <li><a href="/logout" class=""><i class="sidebar-menu-icon material-icons left">lock_open</i>Log Out</a></li>
@endsection
<!-- End Side Nav Content -->

@section('content')
<div class="container">
	<div class="row">
<div class="page-heading col s9 m9 offset-m2">
        <div class="media">
          <div class="media-left media-middle left">
            <img src="/images/lorem.png" alt="" width="80" class="rounded question_photo">
          </div>
          <div class="media-body media-middle left question quiz-result-quiz-name">
            <h4 class="m-b-0"> Vue.js Deploy Quiz</h4>
            <small class="text-muted">submited on 2nd Feb 2016</small>
          </div>
          <div class="media-right media-middle right">
           <a class="waves-effect waves-light btn index-page-card-button-margin-top"><i class="material-icons right ">refresh</i>replay</a>
          </div>
        </div>
      </div>
      <div class="card col s9 m9 offset-m2 quiz-result-blade">
                <ul class="collection">
                    <li class="collection-item">
                        <div class="media">
                            <div class="media-left">
                                <div class="grey-text lighten-1">1.</div>
                            </div>
                            <div class="media-body">Installation</div>
                            <div class="media-right">
                                    <span class="correct-badge">Correct</span>
                            </div>
                        </div>
                    </li>
                    <li class="collection-item">
                        <div class="media">
                            <div class="media-left">
                                <div class="grey-text lighten-1">2.</div>
                            </div>
                            <div class="media-body">The MVC architectural pattern</div>
                            <div class="media-right">
                                    <span class="correct-badge">Correct</span>
                            </div>
                        </div>
                    </li>
                    <li class="collection-item">
                        <div class="media">
                            <div class="media-left">
                                <div class="grey-text lighten-1">3.</div>
                            </div>
                            <div class="media-body">Database Models</div>
                            <div class="media-right">
                                    <span class="correct-badge">Correct</span>
                            </div>
                        </div>
                    </li>
                    <li class="collection-item">
                        <div class="media">
                            <div class="media-left">
                                <div class="grey-text lighten-1">4.</div>
                            </div>
                            <div class="media-body">Database Access</div>
                            <div class="media-right">
                                    <span class="wrong-badge">Wrong</span>
                            </div>
                        </div>
                    </li>
                    <li class="collection-item">
                        <div class="media">
                            <div class="media-left">
                                <div class="grey-text lighten-1">5.</div>
                            </div>
                            <div class="media-body">Database Access</div>
                            <div class="media-right">
                                    <span class="pending-badge">Pending Review</span>
                            </div>
                        </div>
                    </li>
                    <li class="collection-item">
                        <div class="media">
                            <div class="media-left">
                                <div class="grey-text lighten-1">6.</div>
                            </div>
                            <div class="media-body">Take Quiz</div>
                            <div class="media-right">
                                    <span class="correct-badge">Correct</span>
                            </div>
                        </div>
                    </li>
                    <li class="collection-item total-score">
                        Total Score:
                        <span class="blue-text"><strong>600</strong></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
	</div>
</div>
@endsection
