<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>cadastro de aluno</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</head>

<body>

    <div class="container-fluid p-0">

        <div class="row min-vh-100 g-0">
            <div class="col-lg-5 col-md-5 d-flex flex-column align-items-center justify-content-center position-relative" style="background-color: #BD2323">

                <div class="d-flex gap-5 text-white">
                    <h1 class="fw-bold">SESI</h1>
                    <h1 class="fw-bold">SENAI</h1>
                </div>

                <div class="mt-5 pt-5 text-white text-center">
                    <h1 class="display-1 fw-bold fst-italic" style="font-family: pacifico;">
                        Cozinha<br>
                        digital
                    </h1>
                </div>
                <img src="{{ asset('seta2.png') }}" alt="Logo" class="position-absolute top-50 end-0 translate-middle-y" style="width: 100px; height: auto;">
                <button type="button" class="btn btn-outline-light btn-lg rounded-5 mt-5 text-white fw-bold">
                    Entrar
                </button>
                <button type="button" class="btn btn-light btn-lg rounded-5 mt-3 text-danger fw-bold">
                    Cadastrar
                </button>
                <button type="button" class="btn btn-outline-light btn-lg rounded-5 mt-3 text-white fw-bold">
                    Entrar como funcionario
                </button>

            </div>


            <div class="col-lg-7 col-md-7 d-flex align-items-center justify-content-center"
                style="background-color: #BD2323">
                <div class="rounded-start-5 p-5 min-vh-100 w-100 d-flex align-items-center justify-content-center"
                    style="background-color: white">

                    <div class="rounded-4 p-3 w-75" style="background-color: #EBAEAE">

                        <h1 class="text-center fw-bold text-white">
                            Cadastre-se
                        </h1>

                        <h4 class="text-center fw-bold text-white mb-3">
                            Insira seus dados e crie sua conta
                        </h4>


                        <div class="col-lg-12 col-md-12 col-sm-12 mt-3 px-4">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control form-control-sm" id="nome" name="nome"
                                placeholder="Digite seu nome">
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 mt-3 px-4">
                            <label for="cpf" class="form-label">CPF</label>
                            <input type="text" class="form-control form-control-sm" maxlength="11" id="cpf"
                                name="cpf" placeholder="Digite seu cpf">
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 mt-3 mb-3 px-4">
                            <label for="data_nascimento" class="form-label">Data de nascimento</label>
                            <input type="date" class="form-control form-control-sm" id="data_nascimento"
                                name="data_nascimento">
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 mt-3 px-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control form-control-sm" id="email" name="email"
                                placeholder="Digite seu email">
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 mt-3 mb-3 px-4">
                            <label for="senha" class="form-label">Senha</label>
                            <input type="password" class="form-control form-control-sm" id="senha" name="senha"
                                placeholder="Digite sua senha">
                        </div>


                        <div class="d-grid px-4">

                            <button type="button" class="btn btn-lg text-white" style="background-color: #BD2323">
                                Entrar
                            </button>

                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>

</body>

</html>
