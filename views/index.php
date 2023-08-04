<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS link -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Font Awesome CSS link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Log in</title>
</head>
<body>
  <div style= "height: 100vh">
    <div class= "row h-100 m-0">
      <div class="card w-25 my-auto mx-auto">
        <div class="card-header bg-white border-0 py-3">
          <h1 class="text-center">LOGIN</h1>
        </div>

        <div class="card-body">
          <form action="../actions/login.php" method="post">
            <input type="text" name="username" id="username" class="form-control mb-2" placeholder="USERNAME" required>
            <input type="password" name="password" id="password" class="form-control mb-5" placeholder="PASSWORD" required>
            <button type="submit" class="btn btn-primary w-100">Log in</button>
          </form>

          <p class="text-center mt-3 small"><a href="register.php">Create Account</a></p>
        </div>

      </div>
    </div>
  </div>
</body>
</html>