<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="nav nav-pills nav-sidebar flex-column pt-3">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('personal.main.index') }}">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Home
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('personal.liked.index') }}">
                    <i class="nav-icon far fa-heart"></i>
                    <p>
                        Liked Posts
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('personal.comment.index') }}">
                    <i class="nav-icon far fa-comment"></i>
                    <p>
                        Comments
                    </p>
                </a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar -->
</aside>
