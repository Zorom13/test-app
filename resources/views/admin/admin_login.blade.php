<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/signin.css') }}" />


</head>

<body>
    <!-- Login Form  Start-->
    @if (Session::has('error'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session::get('error') }}</strong>
            <button type="button" class="btn-close" data-bs--dismiss="alert" aria-label="Close">
            </button>
        </div>
    @endif
    <div class="Signin-form-container">
        <form action="{{ route('admin.login') }}" method="POST">
            @csrf
            <h1>Sign In</h1>
            <div class="form-mail-password">

                <input type="email" name="" placeholder="enter your email" id="">

                <input type="password" name="" placeholder="enter your password" id="">
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                    remember-me
                </label>
            </div>
            <button type="submit">Signin</button>
            <p>forget password ? <a href="#">click here</a></p>
            <p>don't have an account ? <a href="singup.html">creat one</a></p>
        </form>

        <div id="close-signin-btn" class="fas fa-times"></div>
    </div>
    <!-- Login Form  End-->

    <!-- JavaScripts placed at the end of the document so the pages load faster -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>
