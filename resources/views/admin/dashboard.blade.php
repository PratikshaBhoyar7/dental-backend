@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid px-0">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-2 mb-4">
        <div>
            <h1 class="h3 mb-1">Dashboard</h1>
            <p class="text-muted mb-0">Overview of your dental admin panel</p>
        </div>
    </div>

    <div class="row g-3 g-md-4">
        <div class="col-12 col-lg-8">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <h2 class="h5 mb-2">Welcome back, {{ auth()->user()->name }}</h2>
                    <p class="text-muted mb-0">
                        You are signed in to the Dental Admin dashboard. Use the sidebar to navigate or log out when you are finished.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <h2 class="h6 text-uppercase text-muted mb-3">Account</h2>
                    <dl class="mb-0">
                        <dt class="fw-normal text-muted small">Name</dt>
                        <dd class="mb-3">{{ auth()->user()->name }}</dd>
                        <dt class="fw-normal text-muted small">Email</dt>
                        <dd class="mb-0">{{ auth()->user()->email }}</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
