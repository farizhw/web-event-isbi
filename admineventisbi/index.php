<!doctype html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login.css">

    <title>Admin EVENT ISBI</title>
    <link rel="icon" href="assets/images/isbi2.png">
</head>

<body>
    <div class="center">
        <img src="assets/images/isbi2.png" width="110" class="mt-5 mx-auto d-block">
        <h1>Institut Seni Budaya Indonesia Bandung</h1>
        <form action="konfig/proses_login.php" name="formlogin" method="post" onsubmit="return validasi(this)">
            <div class="txt_field">
                <input type="text" name="username" minlength="2" maxlength="15" autofocus> 
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" minlength="3" maxlength="9">
                <span></span>
                <label>Password</label>
            </div>
            <input type="submit" value="Login">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <script>
        function validasi(formlogin) {

            if (formlogin.username.value == "") {
                alert("Username masih kosong!");
                formlogin.username.focus();
                return (false);
            }
            if (formlogin.password.value == "") {
                alert("Password masih kosong!");
                formlogin.password.focus();
                return (false);
            }
            return (true);
        }
    </script>
</body>

</html>