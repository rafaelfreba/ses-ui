@props(['messages'])

@if ($messages)
    <p style="color: red !important; font-weight: bold; margin-bottom: 1rem;">
        @foreach ((array) $messages as $message)
            {{ $message }}
        @endforeach
    </p>
@endif
