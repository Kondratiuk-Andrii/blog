<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="nav nav-pills nav-sidebar flex-column pt-3">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.main.index') }}">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Home
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.user.index') }}">
                    <i class="nav-icon fa-solid fa-users"></i>
                    <p>
                        Users
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.post.index') }}">
                    <i class="nav-icon fa-solid fa-images"></i>
                    <p>
                        Posts
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.category.index') }}">
                    <i class="nav-icon fas fa-th-list"></i>
                    <p>
                        Categories
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.tag.index') }}">
                    <i class="nav-icon fa fa-tags"></i>
                    <p>
                        Tags
                    </p>
                </a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar -->
</aside>
