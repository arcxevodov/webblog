<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
        <ul class="nav nav-pills nav-sidebar flex-column my-3">
            <li class="nav-item">
                <a href="{{ route('main.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-backward text-white-50"></i>
                    <p class="text-white-50">К сайту</p>
                </a>
            </li>
            <li class="nav-item mt-3">
                <a href="{{ route('admin.tags.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-tags"></i>
                    <p>Теги</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.categories.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-th-list"></i>
                    <p>Категории</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-cubes"></i>
                    <p>Посты</p>
                </a>
            </li>
        </ul>
    </div>
</aside>
