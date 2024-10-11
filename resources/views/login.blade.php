<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!--bootstrap CDN CSS link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!--Font awsome CSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/NOCNP/font-awesome-pro@main/fontawesome-pro-6.5.1-web/css/all.min.css" type="text/css">

    <style>
        body::-webkit-scrollbar {
            display: none;
        }

        :root {
            --base-bg-color: #1E1E2E;
            --form-bg-color: #27293D;
            --themeBtn1-color: #3B3363;
        }

        .base-bg {
            color: #fff;
            background-color: var(--base-bg-color);
        }

        .login-bg {
            color: #fff;
            background-color: var(--form-bg-color);
        }

        .theme-btn {
            border: 1px solid #222;
            color: #fff;
            background-color: var(--themeBtn1-color);
        }

        .theme-btn:hover {
            border: 1px solid var(--themeBtn1-color);
            color: white;
            background-color: transparent;
        }

        .logo {
            width: 50%;
        }

        .authCard {
            width: 400px;
        }

        .authCard>.card-header>h4 {
            font-size: 22px;
            font-weight: 400;
        }

        .landing h1 {
            margin-top: 15%;
            font-size: 68px;
            color: #fff;
            opacity: 0;
            /* Initially set opacity to 0 */
            transform: translateX(-100%);
            /* Initially move the element outside the viewport on the left */
            transition: transform 0.5s ease, opacity 0.5s ease;
            /* Set transition properties */
        }

        .landing h1.show {
            opacity: 1;
            /* Change opacity to 1 when the element is visible */
            transform: translateX(0);
            /* Move the element back to its original position */
        }

        .landing h3 {
            /* margin: 15% 0 0 20%; */
            font-size: 48px;
            color: #fff;
            opacity: 0;
            /* Initially set opacity to 0 */
            transform: translateX(100%);
            /* Initially move the element outside the viewport on the left */
            transition: transform 0.5s ease, opacity 0.5s ease;
            /* Set transition properties */
        }

        .landing h3.show {
            opacity: 1;
            /* Change opacity to 1 when the element is visible */
            transform: translateX(0);
            /* Move the element back to its original position */
        }
    </style>
</head>

<body class="base-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col landing text-center">
                <h1>Welcome To</h1>
                <h3>Infinity</h3>
            </div>
            <div class="col-md-3 login-bg d-flex justify-content-center  flex-column align-items-center text-center vh-100 p-0">
                <div>
                    <img class="logo" src="staticfiles/images/logo.png" alt="Infinity">
                </div>
                <div>
                    <h2>Welcome To</h2>
                    <h5>Infinity</h5>
                </div>
                <form class="mt-2" action="{{route('dashboard')}}" method="post">
                    @csrf
                    <div class="input-group mb-2">
                        <div class="input-group-text">
                            <i class="fas fa-user"></i>
                        </div>
                        <input
                            type="text"
                            class="form-control"
                            id="username"
                            value=""
                            name="username"
                            placeholder="Username/Email"
                            required
                            autofocus>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-text">
                            <i class="fas fa-lock"></i>
                        </div>
                        <input
                            type="password"
                            class="form-control"
                            id="password"
                            name="password"
                            placeholder="Password"
                            required>
                    </div>
                    <div class="mb-2 form-check text-start">
                        <input
                            type="checkbox"
                            class="form-check-input"
                            id="rememberme"
                            name="rememberme">
                        <label class="form-check-label" for="rememberme">Remember Me</label>
                    </div>
                    <button type="submit" class="btn theme-btn form-control text-uppercase">Login</button>
                </form>
                <div class="mt-2 mb-3">
                    <a href="#" class="text-danger link-underline link-underline-opacity-0">Forgot Username/Password?</a>
                </div>
                <div class="mt-2 mb-3">
                    <p class="text-secondary">Don't have an account?</p>
                    <a href="{{route('register')}}" class="text-light link-underline link-underline-opacity-0 text-uppercase h5">Sign Up Now</a>


                </div>

            </div>
        </div>
    </div>

    <!--Bootstrap JS CDN Link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <!--FontAwsome JS CDN -->
    <script src="https://cdn.jsdelivr.net/gh/NOCNP/font-awesome-pro@main/fontawesome-pro-6.5.1-web/js/all.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var h1Element = document.querySelector(".landing h1");
            h1Element.classList.add("show");
        });
        document.addEventListener("DOMContentLoaded", function() {
            var h3Element = document.querySelector(".landing h3");
            h3Element.classList.add("show");
        });
    </script>

</body>

</html>