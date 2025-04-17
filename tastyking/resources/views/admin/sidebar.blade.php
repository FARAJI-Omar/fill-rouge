<div class="body">
    <div class="sidebar">
        <div class="sidebar-menu">
            <a href="{{ route('dashboard') }}" class="menu-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <i class="fas fa-th-large"></i>
                <span>Dashboard</span>
            </a>
            <a href="{{ route('menu-management') }}" class="menu-item {{ request()->routeIs('menu-management') ? 'active' : '' }}">
                <i class="fas fa-clipboard-list"></i>
                <span>Menu Management</span>
            </a>
            <a href="{{ route('user-management') }}" class="menu-item {{ request()->routeIs('user-management') ? 'active' : '' }}">
                <i class="fas fa-users"></i>
                <span>User Management</span>
            </a>
            <a href="{{ route('settings') }}" class="menu-item {{ request()->routeIs('settings') ? 'active' : '' }}">
                <i class="fas fa-cog"></i>
                <span>Settings</span>
            </a>
        </div>
    </div>

    <div class="side-content">
        @stack('admin-content')
    </div>
</div>

<style>
    .body {
        display: flex;
    }

    .sidebar {
        width: 20%;
        min-height: 100vh;
        background-color: #FFF8DC;
        padding-top: 4rem;
    }

    .sidebar-menu {
        display: flex;
        flex-direction: column;
        gap: 2rem;
        padding: 0 1rem;
    }

    .menu-item {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.75rem 1rem;
        border-radius: 0.5rem;
        color: #666;
        text-decoration: none;
        transition: all 0.3s ease;
        margin-bottom: 0.5rem;
    }

    .menu-item:hover {
        background-color: rgba(255, 179, 14, 0.1);
    }

    .menu-item.active {
        background-color: #FFB30E;
        color: white;
    }

    .menu-item i {
        font-size: 1.25rem;
        width: 1.5rem;
        text-align: center;
    }

    .menu-item span {
        font-size: 1rem;
    }

    .side-content {
        width: 80%;
    }
</style>