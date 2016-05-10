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
<div class="row">

    <div class="col s9 m9 left" data-scrollable="">
        <div id="chat">
            <div class="col s10 m10 offset-m1 offset-s1">
                <div class="card blue-grey lighten-5">
                    <div class="card-content">
                        <div class="row">
                            <div class="chat-user-img col s6 m2">
                                <img src="/images/woman-5.jpg" alt="Card image cap" width="80" class="circle">
                            </div>
                            <div class="chat-user col s6 m10">
                                <h5 class="flow-text">Michelle Smith</h5>
                                <p class="grey-text darken-5">Close Friends</p>
                            </div>
                        </div>
                    </div>
                </div>


                <ul class="collection">
                    <li class="collection-item avatar">
                        <a href="#"><img src="/images/Bob.jpg" alt="" class="circle"></a>
                        <a href="#" class="title">Michelle</a>
                        <small class="grey-text darken-5">wrote:</small>
                        <p>Superb job.. Clients loved the new design.</p>
                        <small class="secondary-content">10 days ago</small>
                    </li>
                    <li class="collection-item avatar">
                        <a href="#"><img src="/images/Bob.jpg" alt="" class="circle"></a>
                        <a href="#" class="title">You</a>
                        <small class="grey-text darken-5">wrote:</small>
                        <p>Glad it all worked out.</p>
                        <small class="secondary-content">5 days ago</small>
                    </li>
                    <li class="collection-item avatar">
                        <a href="#"><img src="/images/woman-5-1.jpg" alt="" class="circle"></a>
                        <a href="#" class="title">Michelle</a>
                        <small class="grey-text darken-5">wrote:</small>
                        <p>Superb job.. Clients loved the new design.</p>
                        <small class="secondary-content">10 days ago</small>
                    </li>
                    <li class="collection-item avatar">
                        <a href="#"><img src="/images/guy-6.jpg" alt="" class="circle"></a>
                        <a href="#" class="title">You</a>
                        <small class="grey-text darken-5">wrote:</small>
                        <p>Glad it all worked out.</p>
                        <small class="secondary-content">5 days ago</small>
                    </li>
                    <li class="collection-item avatar">
                        <a href="#"><img src="/images/woman-5-1.jpg" alt="" class="circle"></a>
                        <a href="#" class="title">Michelle</a>
                        <small class="grey-text darken-5">wrote:</small>
                        <p>Superb job.. Clients loved the new design.</p>
                        <small class="secondary-content">10 days ago</small>
                    </li>
                    <li class="collection-item avatar">
                        <a href="#"><img src="/images/guy-6.jpg" alt="" class="circle"></a>
                        <a href="#" class="title">You</a>
                        <small class="grey-text darken-5">wrote:</small>
                        <p>Glad it all worked out.</p>
                        <small class="secondary-content">5 days ago</small>
                    </li>
                    <li class="collection-item avatar">
                        <a href="#"><img src="/images/woman-5-1.jpg" alt="" class="circle"></a>
                        <a href="#" class="title">Michelle</a>
                        <small class="grey-text darken-5">wrote:</small>
                        <p>Superb job.. Clients loved the new design.</p>
                        <small class="secondary-content">10 days ago</small>
                    </li>
                    <li class="collection-item avatar">
                        <a href="#"><img src="/images/guy-6.jpg" alt="" class="circle"></a>
                        <a href="#" class="title">You</a>
                        <small class="grey-text darken-5">wrote:</small>
                        <p>Glad it all worked out.</p>
                        <small class="secondary-content">5 days ago</small>
                    </li>
                    <li class="collection-item avatar">
                        <a href="#"><img src="/images/woman-5-1.jpg" alt="" class="circle"></a>
                        <a href="#" class="title">Michelle</a>
                        <small class="grey-text darken-5">wrote:</small>
                        <p>Superb job.. Clients loved the new design.</p>
                        <small class="secondary-content">10 days ago</small>
                    </li>
                    <li class="collection-item avatar">
                        <a href="#"><img src="/images/guy-6.jpg" alt="" class="circle"></a>
                        <a href="#" class="title">You</a>
                        <small class="grey-text darken-5">wrote:</small>
                        <p>Glad it all worked out.</p>
                        <small class="secondary-content">5 days ago</small>
                    </li>
                </ul>

            </div>
            <div class="reply blue-grey lighten-5">
                <input placeholder="Reply to Michelle" rows="3" class="form-control grey-text darken-5">
            </div>
        </div>
    </div>
    <div class="col s3 m3 right sidebar-right">
        <ul class="collection">
            <li class="collection-header"><span>Online</span></li>
            <li class="collection-item avatar sidebar-item">
                <a href="#">
                    <span class="media">
                        <span class="media-left"><img src="/images/guy-8.jpg" alt="" class="responsive-img circle">
                        </span>
                    <span class="media-body">Andrew Brain</span>
                    </span>
                </a>
            </li>
            <li class="collection-item avatar sidebar-item">
                <a href="#">
                    <span class="media">
                        <span class="media-left"><img src="/images/guy-2.jpg" alt="" class="responsive-img circle">
                        </span>
                    <span class="media-body">Jimmy Carter</span>
                    </span>
                </a>
            </li>
            <li class="collection-item avatar sidebar-item active">
                <a href="#">
                    <span class="media">
                        <span class="media-left"><img src="/images/woman-5-1.jpg" alt="" class="responsive-img circle">
                        </span>
                    <span class="media-body">Samantha Doe</span>
                    </span>
                </a>
            </li>
            <li class="collection-item avatar sidebar-item">
                <a href="#">
                    <span class="media">
                        <span class="media-left"><img src="/images/woman-2.jpg" alt="" class="responsive-img circle">
                        </span>
                    <span class="media-body">Michelle Smith</span>
                    </span>
                </a>
            </li>
        </ul>
        <p class="grey-text lighten-1 status-text">
            <small>21 Offline</small>
        </p>
    </div>
</div>
@endsection
