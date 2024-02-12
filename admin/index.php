<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Home</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Favicon -->
    <link rel="icon" href="img/MM.png">
</head>
<body>
    <?php include "inc/navbar.php"; ?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <a href="message.php" class="btn btn-dark btn-lg w-100 py-3">
                                    <i class="fas fa-envelope fa-3x mb-2"></i>
                                    <br>
                                    <span class="fs-5">Message</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <a href="setting.php" class="btn btn-primary btn-lg w-100 py-3">
                                    <i class="fas fa-cogs fa-3x mb-2"></i>
                                    <br>
                                    <span class="fs-5">Settings</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <a href="../logout.php" class="btn btn-warning btn-lg w-100 py-3">
                                    <i class="fas fa-sign-out-alt fa-3x mb-2"></i>
                                    <br>
                                    <span class="fs-5">Logout</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
