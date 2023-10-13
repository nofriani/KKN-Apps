<?php
ob_start();
require 'backand/core.php';
$template = 'frontend/template/dashboard';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Masuk</title>
    <link href="<?= $template ?>/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        button,
        input,
        select,
        textarea,
        a {
            box-shadow: none !important;
        }
    </style>
</head>

<body class="bg-success">
    <br><br>
    <h3 class="text-white text-center mt-5"><?= $app_name ?></h3>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5 rounded-0">
                                <div class="card-body">
                                    <form class="mt-3 mb-1" action="dashboard.php?page=index">
                                        <div class="row mb-3">
                                            <div class="col">
                                                <div class="form-floating">
                                                    <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                                    <label for="inputEmail"><i class="fas fa-user me-2"></i> Alamat Email</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <div class="form-floating">
                                                    <input class="form-control" id="inputPassword" type="password" placeholder="Password" />
                                                    <label for="inputPassword"><i class="fas fa-lock me-2"></i> Kata Sandi</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <button class="btn btn-success"><i class="fas fa-sign-in-alt"></i> Masuk</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= $template ?>/js/scripts.js"></script>
</body>

</html>
