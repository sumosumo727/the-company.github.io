<?php
session_start();

require '../classes/User.php';

$user_obj = new User;
$all_users = $user_obj->getAllUsers();
?>

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
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">

  <title>Dashboard</title>
</head>
<body>
  <nav class="navbar navbar-expand navbar-dark bg-dark" style = "margin-bottom: 80px;">
    <div class="container">
      <a href="dashboard.php" class="navbar-brand">
        <h1 class="h3">The Company</h1>
      </a>
      <div class="navbar-nav">
        <span class="navbar-text"><?= $_SESSION['full_name'] ?></span>
        <form action="../actions/logout.php" method="post" class="d-flex ms-2">
          <button type="submit" class="text-danger bg-transparent border-0">Logout</button>
        </form>
      </div>
    </div>
  </nav>

  <main>
    <div class="row justify-content-center gx-0">
      <div class="col-6">
        <h2 class="text-center">USER LIST</h2>

        <table class="table table-hover align-middle">
          <thead>
            <tr>
              <th><!-- for photo --></th>
              <th>ID</th>
              <th>FIRST NAME</th>
              <th>LAST NAME</th>
              <th>USERNAME</th>
              <th><!-- for action buttons --></th>
            </tr>
          </thead>
          <tbody>
            <?php
              while($user = $all_users->fetch_assoc()){
            ?>
              <tr>
                <td>
                <?php
                if($user['photo']){
                ?>
                  <img src="../assets/images/<?= $user['photo']?>" alt="<?= $user['photo'] ?>" class="d-block mx-auto dashboard-photo">
                <?php
                } else {
                ?>
                  <i class="fa-solid fa-user text-secondary d-block text-center dashboard-icon"></i>
                <?php
                }
                ?>
                </td>
                <td><?= $user['id']?></td>
                <td><?= $user['first_name']?></td>
                <td><?= $user['last_name']?></td>
                <td><?= $user['username']?></td>
                <td>
                  <?php
                  if($_SESSION['id'] == $user['id']){
                  ?>
                    <a href="edit-user.php" class="btn btn-outline-warning" title="Edit">
                      <i class="fa-regular fa-pen-to-square"></i>
                    </a>
                    <a href="delete-user.php" class="btn btn-outline-danger" title="Delete">
                      <i class="fa-regular fa-trash-can"></i>
                    </a>
                  <?php  
                  }
                  ?>
                </td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </main>
</body>
</html>