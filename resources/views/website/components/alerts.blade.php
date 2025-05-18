{{-- <!-- Primary Alert -->
<div class="alert alert-primary alert-border-left alert-dismissible fade show" role="alert">
    <i class="ri-user-smile-line me-3 align-middle"></i> <strong>Primary</strong> - Left border alert
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> --}}

{{-- <!-- Secondary Alert -->
<div class="alert alert-secondary alert-border-left alert-dismissible fade show" role="alert">
    <i class="ri-check-double-line me-3 align-middle"></i> <strong>Secondary</strong> - Left border alert
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> --}}

@if ($message = Session::get('success'))
    <div class="alert alert-success alert-border-left alert-dismissible fade show" role="alert">
        <i class="ri-check-double-line me-3 align-middle"></i> <strong>Success</strong> - {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if ($message = Session::get('error'))
    <div class="alert alert-danger alert-border-left alert-dismissible fade show" role="alert">
        <i class="ri-error-warning-line me-3 align-middle"></i> <strong>Danger</strong> - {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if ($message = Session::get('warning'))
    <div class="alert alert-warning alert-border-left alert-dismissible fade show" role="alert">
        <i class="ri-alert-line me-3 align-middle"></i> <strong>Warning</strong> - {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if ($message = Session::get('info'))
    <!-- Info Alert -->
    <div class="alert alert-info alert-border-left alert-dismissible fade show" role="alert">
        <i class="ri-information-line me-3 align-middle"></i> <strong>Info</strong> - {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

{{-- <!-- Success Alert -->
<div class="alert alert-success alert-border-left alert-dismissible fade show" role="alert">
    <i class="ri-notification-off-line me-3 align-middle"></i> <strong>Success</strong> - Left border alert
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> --}}

{{-- <!-- Danger Alert -->
<div class="alert alert-danger alert-border-left alert-dismissible fade show" role="alert">
    <i class="ri-error-warning-line me-3 align-middle"></i> <strong>Danger</strong> - Left border alert
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> --}}

{{-- <!-- Warning Alert -->
<div class="alert alert-warning alert-border-left alert-dismissible fade show" role="alert">
    <i class="ri-alert-line me-3 align-middle"></i> <strong>Warning</strong> - Left border alert
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> --}}

{{-- <!-- Info Alert -->
<div class="alert alert-info alert-border-left alert-dismissible fade show" role="alert">
    <i class="ri-airplay-line me-3 align-middle"></i> <strong>Info</strong> - Left border alert
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<!-- Light Alert -->
<div class="alert alert-light alert-border-left alert-dismissible fade show" role="alert">
    <i class="ri-mail-line me-3 align-middle"></i> <strong>Light</strong> - Left border alert
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<!-- Dark Alert -->
<div class="alert alert-dark alert-border-left alert-dismissible fade show" role="alert">
    <i class="ri-refresh-line me-3 align-middle"></i> <strong>Dark</strong> - Left border alert
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> --}}
