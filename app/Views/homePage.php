<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <style>
       body{
            background-image: url('https://wallpapercave.com/wp/wp10165109.png');
            background-size: 1300px;
        }
        .navigation{
            background-color: white;
        }
    </style>
</head>
<body>
    <div class="navigation">
    <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/adminPage">Admin</a>
        </li>
      </ul>
    </div>

    <?php if(session()->has('msg_success')){ ?>
            <script>Swal.fire({
                      icon: 'success',
                      title: 'Success!',
                      text: 'Sukses login',
                })
            </script>
          <?php } ?>
</body>
</html>