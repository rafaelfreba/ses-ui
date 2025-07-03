# 📦 SES UI - Componentes de Interface para Laravel
<p>
Este pacote fornece componentes de UI, views e assets (CSS/JS/imagens) reutilizáveis para telas como login e recuperação de senha em aplicações Laravel.
</p>

# ✅ Requisitos

<ul>
    <li>Laravel Breeze</li>
    <li>Composer</li>
    <li>NPM</li>
    <li>PHP 8+</li>
</ul>

# 🚀 Instalação

<h4>Edite o arquivo</h4> ``composer.json``:
```
"require": {
        "seunome/ses-ui": "*"
    },
    "repositories": [
        {
            "type": "vcs",
            "url": "https://dev.azure.com/minhaempresa/sistema/_git/ses-ui"
        }
    ]
```

<h4>Instale o pacote via Composer:</h4>

```
composer require rafaelfreba/ses-ui
```

# 📂 Publicação de arquivos

Para publicar todas as views, componentes e arquivos estáticos (CSS/JS/imagens) de uma só vez:

```
php artisan vendor:publish --tag=ses-ui
```
Ou, se preferir, publique partes específicas:

| Tipo        | Comando                                              |
| ----------- | ---------------------------------------------------- |
| Views       | `php artisan vendor:publish --tag=ses-ui-views`      |
| Componentes | `php artisan vendor:publish --tag=ses-ui-components` |
| Assets      | `php artisan vendor:publish --tag=ses-ui-assets`     |

# 🖼️ Uso das views

Altere o arquivo ``app > Http > Controllers > Auth > AuthenticatedSessionController.php`` na linha 19:
```
return view('ses-ui::auth.login');
```
Essa ação altera a tela de login e recuperação de senha. Já para alterar a tela de redefinição da senha, altere o arquivo ``app > Http > Controllers > Auth > NewPasswordController.php``  na linha 23:
```
return view('ses-ui::auth.reset-password', ['request' => $request]);
```

# 📁 Estrutura esperada após publicação

```
resources/
├── views/
│   └── vendor/
│       └── ses-ui/
│           └── auth/
│               ├── login.blade.php
│               └── reset-password.blade.php
└── components/
    ├── form-ses.blade.php
    └── form-logo-ses.blade.php

public/
└── vendor/
    └── ses-ui/
        ├── css/
        │   └── ses-ui.css
        ├── js/
        │   └── ses-ui.js
        └── images/
            └── logo.png
```

# 🛠️ Personalização

Você pode editar livremente os arquivos publicados. Eles ficam totalmente desacoplados após a publicação.

# 📃 Licença
Este pacote é licenciado sob a licença MIT.



