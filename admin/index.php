<?php
session_start();
include '../koneksi.php';

if (isset($_SESSION['login'])) {
    header('Location: dashboard.php');
    exit;
}

if (isset($_POST['login'])) {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = md5($_POST['password']);

    $query = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username' AND password='$password'");

    if (mysqli_num_rows($query) > 0) {

        $_SESSION['login'] = true;
        $_SESSION['username'] = $username;

        header('Location: dashboard.php');
        exit;

    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - KSR PMI</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #7a0000, #2b0000);
            font-family: Poppins, sans-serif;
        }

        .login-card {
            width: 100%;
            max-width: 420px;
            border-radius: 24px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(12px);
            border: none;
            color: white;
        }

        .form-control {
            border-radius: 12px;
            padding: 12px;
        }

        .btn-login {
            background: linear-gradient(135deg, #ff0000, #9b0000);
            border: none;
            padding: 12px;
            border-radius: 12px;
            color: white;
            font-weight: 600;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <div class="card login-card shadow-lg p-4">

        <div class="text-center mb-4">
            <h2>KSR PMI</h2>
            <p>ADMIN PANEL</p>
        </div>

        <?php if (isset($error)): ?>

            <div class="alert alert-danger">
                <?= $error; ?>
            </div>

        <?php endif; ?>

        <form method="POST">

            <div class="mb-3">
                <label class="mb-2">Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>

            <div class="mb-4">
                <label class="mb-2">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button type="submit" name="login" class="btn btn-login w-100">
                LOGIN
            </button>
            <br>
           
            <a href="../index.php" class="btn-glitch-fill">
                <span class="text">Kembali</span><span class="text-decoration"> ....</span><span
                    class="decoration">⇒</span>
            </a>




        </form>

        <style>
            /* From Uiverse.io by Awadhesh684827 */
            [class*="btn-glitch-"] {
                display: inline-block;
                font-family: "VT323", monospace;
                border: 1px solid rgb(0, 0, 0);
                color: rgb(0, 0, 0);
                padding: 1px 13px;
                min-width: 370px;
                line-height: 1.5em;
                white-space: no-wrap;
                text-transform: uppercase;
                cursor: pointer;
                border-radius: 15px;
                

                .text,
                .decoration {
                    display: inline-block;
                }

                .decoration {
                    display: inline-block;
                    float: right;
                }

                &:hover,
                &:focus {
                    animation-name: glitch;
                    animation-duration: 0.2s;
                    background-color: yellow;
                    color: black;
                    border: 1px solid yellow;

                    .text-decoration {
                        animation-name: blink;
                        animation-duration: 0.1s;
                        animation-iteration-count: infinite;
                    }

                    .decoration {
                        animation-name: blink;
                        animation-duration: 0.1s;
                        animation-iteration-count: infinite;
                    }
                }

                &:active {
                    background: none;
                    color: yellow;

                    .text-decoration {
                        animation-name: none;
                    }

                    .decoration {
                        animation-name: none;
                    }

                    :before,
                    :after {
                        display: none;
                    }
                }
            }

            @keyframes glitch {
                25% {
                    background-color: red;
                    transform: translateX(-10px);
                    letter-spacing: 10px;
                }

                35% {
                    background-color: green;
                    transform: translate(10px);
                }

                59% {
                    opacity: 0;
                }

                60% {
                    background-color: blue;
                    transform: translate(-10px);
                    filter: blur(5px);
                }

                100% {
                    background-color: yellow;
                    blur: (5px);
                }
            }

            @keyframes blink {
                50% {
                    opacity: 0;
                }
            }

            @keyframes shrink {
                100% {
                    width: 10%;
                }
            }
        </style>

    </div>

</body>

</html>