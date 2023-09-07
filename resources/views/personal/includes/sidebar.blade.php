<!-- Main Sidebar Container -->

<aside class="main-sidebar sidebar-dark-primary elevation-4">
        <div class="sidebar">
            <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route("personal.main.index") }}" class="nav-link">
                        <i class="nav-icon fas fa-solid fa-house-user"></i>
                        <p>
                            Main
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route("liked.main.index") }}" class="nav-link">
                        <i class="nav-icon fas fa-regular fa-heart"></i>
                        <p>
                            Liked posts
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route("comment.main.index") }}" class="nav-link">
                        <i class="nav-icon fas fa-solid fa-comment"></i>
                        <p>
                            Commentaries
                        </p>
                    </a>
                </li>
            </ul>
        </div>

</aside>
