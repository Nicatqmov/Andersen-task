@if(session('success'))
<div class="position-absolute top-0 end-0 p-3" style="z-index: 1050;">
    <div class="alert alert-success alert-dismissible fade show shadow" role="alert" style="min-width: 280px;">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
@endif