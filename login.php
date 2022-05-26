<?php
// Iniciar sessão
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/login.css" />
    <title>Login</title>
</head>

<body>
    <!-- Login -->
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="#" method="POST" class="sign-in-form">
                    <h2 class="title">Conecte-se</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Nome" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Senha" required />
                    </div>
                    <input type="submit" value="Login" class="btn solid" />

                    <a href="index.html" class="voltar">Voltar ao website</a>
                </form>

                <!-- Registar -->
                <form action="#" method="POST" class="sign-up-form">
                    <h2 class="title">Regista-te</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Nome" class="form-control" required>

                    </div>
                    <div class=" input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" class="form-control" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Senha" class="form-control" required />
                    </div>
                    <input type="submit" class="btn" value="Registar" />
                </form>
            </div>
        </div>

        <!-- Final Registar -->

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Novo Aqui ?</h3>
                    <p>Começa a tua jornada para angariar o máximo de conhecimento.</p>
                    <button class="btn transparent" id="sign-up-btn">Registar</button>
                </div>
                <img src="img/img/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Já é um de nós?</h3>
                    <p>Clique neste botão, inicie a sua sessão e participe</p>
                    <button class="btn transparent" id="sign-in-btn">Sign in</button>
                </div>
                <img src="img/img/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="js/app.js"></script>
</body>

</html>