<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
        <div class="row d-flex justify-content-center my-4">
            <!-- <div class="page-header text-center my-3">
            <h1>Register</h1>
        </div> -->
            <div class="authCard rounded my-3 py-2 login-bg">
                <div class="card-header text-center p-2 border-bottom mb-1">
                    <h4 class="text-capitalize mb-0">
                        Application/Admin Register Form
                    </h4>
                </div>
                <div class="card-body p-1">
                    <form class="rounded">
                        <div class="mb-3">
                            <label for="firstname" class="form-label mb-0">
                                First Name
                                <span class="text-danger">*</span>
                            </label>
                            <input
                                type="text"
                                name="firstname"
                                id="firstname"
                                class="form-control"
                                placeholder="Enter First Name"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="lastname" class="form-label mb-0">
                                Last Name
                                <span class="text-danger">*</span>
                            </label>
                            <input
                                type="lastname"
                                id="lastname"
                                name="lastname"
                                class="form-control"
                                placeholder="Enter Last Name"
                                required>
                        </div>
                        <!-- <div class="mb-3">
                        <label for="username" class="form-label mb-0">Username <span class="text-danger">*</span></label>
                        <input type="text" id="username" name="username" class="form-control" placeholder="Enter username" required>
                    </div> -->
                        <div class="mb-3">
                            <label for="email" class="form-label mb-0">
                                Email Address
                                <span class="text-danger">*</span>
                            </label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                class="form-control"
                                placeholder="Enter email address"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label mb-0">
                                Contact Number
                                <span class="text-danger">*</span>
                            </label>
                            <input
                                type="text"
                                id="phone"
                                name="phone"
                                class="form-control"
                                placeholder="Enter Contact number"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label mb-0">
                                Address
                                <span class="text-danger">*</span>
                            </label>
                            <input
                                type="text"
                                id="address"
                                name="address"
                                class="form-control"
                                placeholder="Enter address"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label mb-0">
                                Message
                                <span class="text-danger">*</span>
                            </label>
                            <textarea
                                name=""
                                id=""
                                rows="8"
                                class="form-control"
                                placeholder="I am interested in your ISP/HotSpot Management Software. Kindly provide me with the application form and relevant details, including pricing, installation requirements, and any available promotions. You can contact me at contact@example.com or +971 00 000 0000."></textarea>
                        </div>
                        <button type="submit" class="btn theme-btn form-control
                    text-uppercase">
                            Submit
                        </button>
                    </form>
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