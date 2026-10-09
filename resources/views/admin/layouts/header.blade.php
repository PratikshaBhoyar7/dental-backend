<nav class="navbar navbar-light bg-white border-bottom px-3 px-md-4">
    <div class="d-flex align-items-center gap-2">
        <button
            type="button"
            class="btn btn-outline-secondary d-lg-none"
            id="sidebarToggle"
            aria-label="Toggle sidebar"
        >
            ☰
        </button>
        <span class="fw-semibold d-none d-sm-inline">Admin Panel</span>
    </div>

    <div class="text-muted small">
        Welcome, {{ auth()->user()->name }}
    </div>
</nav>
