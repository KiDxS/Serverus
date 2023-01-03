@if(session()->has('message'))
<div class="alert alert-dark text-start text-success border rounded-0 border-2 border-success" role="alert">
    <span>
        <strong>{{ session('message') }}</strong>
    </span>
</div>
@endif