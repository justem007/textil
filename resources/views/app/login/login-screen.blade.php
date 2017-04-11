<!DOCTYPE html>
<html class="ls-theme-gray">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Tela de Login</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" href="css/dist/locastyle.css" >
</head>
<body class="documentacao documentacao_exemplos documentacao_exemplos_login-screen documentacao_exemplos_login-screen_index">
<div class="ls-login-parent">
    <div class="ls-login-inner">
        <div class="ls-login-container">
            <div class="ls-login-box">
                <h1 class="ls-login-logo"><img title="Logo login" src="images/dashboard/logo-locaweb.png" /></h1>
                <form role="form" class="ls-form ls-login-form" action="#">
                    <fieldset>
                        <label class="ls-label">
                            <b class="ls-label-text ls-hidden-accessible">Usuário</b>
                            <input class="ls-login-bg-user ls-field-lg" type="text" placeholder="Usuário" required autofocus>
                        </label>
                        <label class="ls-label">
                            <b class="ls-label-text ls-hidden-accessible">Senha</b>
                            <div class="ls-prefix-group ls-field-lg">
                                <input id="password_field" class="ls-login-bg-password" type="password" placeholder="Senha" required>
                                <a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye" data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#password_field" href="#"></a>
                            </div>
                        </label>
                        <p><a class="ls-login-forgot" href="#">Esqueci minha senha</a></p>
                        <input type="submit" value="Entrar" class="ls-btn-primary ls-btn-block ls-btn-lg">
                        <p class="ls-txt-center ls-login-signup">Não possui um usuário na Locaweb? <a href="#">Cadastre-se agora</a></p>
                    </fieldset>
                </form>
            </div>
            <div class="ls-login-adv"><img title="Exemplo banner" src="images/dashboard/banner-example.png" /></div>
        </div>
    </div>
</div>
<script src="js/dist/jquery.js"></script>
<script src="js/dist/locastyle.js"></script>
</body>
</html>
