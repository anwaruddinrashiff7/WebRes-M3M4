<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>M3&M4 5190411151</title>
  </head>
  <body>
    <form>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-4">
          <div class="card mt-5">
            <div class="card-header text-center bg-primary"><b>Form Login</b></div>
            <div class="card-body">
    <form method="post" action="">
<?php echo csrf_field(); ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
  </div>
  <div class="d-grid gap-2">
  <button class="btn btn-primary" type="submit">Login</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html><?php /**PATH C:\Users\HP\OneDrive\Documents\KULIAH\SEMESTER 6\Laravel Webres\webreslara\resources\views/login.blade.php ENDPATH**/ ?>