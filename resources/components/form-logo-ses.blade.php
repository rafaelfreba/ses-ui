 <img src="{{ !App::environment('local') ? '/' . config('app.name') : '' }}/vendor/ses-ui/images/logo-{{ $type == 'reset' ? 'codemsi' : 'ses' }}.png"
     alt="logomarca da {{ $type == 'reset' ? 'codemsi' : 'ses' }}" width="100%">
