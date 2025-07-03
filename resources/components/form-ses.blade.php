@props([
    'name' => 'SCVV', // Sigla do Sistema
    'fullName' => 'Sistema para Controle de Viagens e Veículos', // Nome completo do Sistema
    'type' => 'login',
    'route' => '',
    'errors' => [],
    'token' => null,
])

<form method="POST" action="{{ $route }}">

    @csrf

    {{-- Identificação do Sistema (Sigla + Nome) --}}
    <h1>{{ $name }}</h1>
    <span style="margin-bottom: 20px">{{ $fullName }}</span>

    {{-- Formulário para recuperar a senha --}}
    @if ($type == 'forgot')
        <span>Esqueceu sua senha? Sem problemas. Apenas informe seu endereço de e-mail que enviaremos um link
            que permitirá definir uma nova senha.</span>
        <input type="email" placeholder="Email" name="email" />
        <button type="submit">Enviar</button>
        <a href="#" id="login">voltar</a>
    @endif

    {{-- Formulário de login --}}
    @if ($type == 'login')
        <input type="login" placeholder="Login" name="login" autofocus />
        <input type="password" placeholder="Senha" name="password">
        <x-input-error-ses :messages="$errors->get('login')" class="mt-2" />
        <x-input-error-ses :messages="$errors->get('password')" class="mt-2" />
        <x-input-error-ses :messages="$errors->get('email')" class="mt-2" />
        <x-auth-session-status-ses class="mb-4" :status="session('status')" />
        <a href="#" id="register">Esqueceu a senha?</a>
        <button type="submit">Entrar</button>
    @endif

    {{-- Formulário de redefinição de senha --}}
    @if ($type == 'reset')
        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $token }}">
        <!-- Login -->
        <input type="email" placeholder="E-mail" name="email" autofocus />
        <!-- Password -->
        <input type="password" placeholder="Senha" name="password">
        <!-- Confirm Password -->
        <input type="password" placeholder="Confirmação de senha" name="password_confirmation">
        <!-- Errors -->
        <x-input-error-ses :messages="$errors->get('login')" class="mt-2" />
        <x-input-error-ses :messages="$errors->get('password')" class="mt-2" />
        <x-input-error-ses :messages="$errors->get('email')" class="mt-2" />
        <x-input-error-ses :messages="$errors->get('password_confirmation')" class="mt-2" />
        <button type="submit">Modificar Senha</button>
    @endif


</form>
