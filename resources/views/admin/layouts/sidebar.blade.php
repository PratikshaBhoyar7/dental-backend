<aside class="sidebar bg-dark text-white">
    <div class="p-3 border-bottom border-secondary">
        <h4 class="h5 mb-0">Dental Admin</h4>
    </div>

    <nav class="nav flex-column p-2">
        <a
            href="{{ route('admin.dashboard') }}"
            class="nav-link text-white rounded {{ request()->routeIs('admin.dashboard') ? 'active bg-primary' : '' }}"
        >
            Dashboard
        </a>

        <form method="POST" action="{{ route('logout') }}" class="mt-2">
            @csrf
            <button type="submit" class="nav-link text-white rounded border-0 bg-transparent w-100 text-start">
                Logout
            </button>
        </form>
    </nav>
</aside>

<div class="sidebar-backdrop" id="sidebarBackdrop"></div>
