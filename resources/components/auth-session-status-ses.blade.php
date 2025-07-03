@props(['status'])

@if ($status)
    <div style="color: green; font-weight: bold; margin-bottom: 1rem;">
        {{ $status }}
    </div>
@endif
