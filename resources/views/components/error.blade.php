@if ($errors->any())
<div class="alert alert-dark text-start text-secondary border rounded-0 border-2 border-secondary beautiful" role="alert">
    @foreach ($errors->all() as $error)
    <strong>{{ $error }}</strong><br>
    @endforeach
</div>
@endif