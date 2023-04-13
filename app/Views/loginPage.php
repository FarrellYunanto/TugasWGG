<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Website Latihan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    
    <style>
        body{
            background-image: url('https://wallpapercave.com/wp/wp10165109.png');
            background-size: 1300px;
        }
        .center{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 450px;
            background-color: white;
            border-radius: 15px;
            padding-left: 0px
        }
        .center h1{
            text-align: center;
            color: #DF7857;
            padding: 10px 0px 20px 0;
            border-bottom: 1px solid silver;
        }
        .center form{
            padding: 0 40px;
            
        }
        form .txt_field{
            position: relative;
            border-bottom: 2px solid #adadad;
            margin: 30px 0;
        }
        .txt_field input{
            width: 100%;
            padding: 0 5px;
            height: 40px;
            font-size: 10px;
            border: none;
            background: none;
            outline: none;
        }
        .txt_field label{
            position: absolute;
            top: 50%;
            left: 5px;
            color: #adadad;
            transform: translateY(-50%);
            pointer-events: none;
            transition: .5s;
        }
        .txt_field span::before{
            content: '';
            position: absolute;
            top: 40px;
            left: 0;
            width: 0%;
            height: 2px;
            background: #DF7857;
            transition: 0.5s;
        }
        .txt_field input:focus ~ label,
        .txt_field input:valid ~ label{
            top: 5px;
            color: #DF7857;
        }
        .txt_field input:focus ~ span::before,
        .txt_field input:valid ~ span::before{
            width: 100%;
        }

    .forgotPass{
        margin: -5px 0 20px 5px;
        color: #a6a6a6;
        cursor: pointer;
    }
    .forgotPass:hover{
        text-decoration: underline;
    }
    button[type="submit"]{
        margin: 5px 0px 15px 0px;
        width: 100%;
        height: 50px;
        border: 1px solid;
        border-radius: 15px;
    }
    button[type="submit"]:hover{
        color: white;
        border: 1px solid;
        background: #DF7857;
        transition: 0.5s;
    }
    </style>
</head>
<body>
    <div class="center">
        <h1> Login </h1>

        <?php if(session()->has('msg_success')){ ?>
            <script>Swal.fire({
                      icon: 'success',
                      title: 'Success!',
                      text: 'Sukses menambah data',
                })
            </script>
          <?php } ?>
          
            <form method="post" action="../validasi">
                <div class="txt_field">
                    <input type="text" name="email" required> 
                    <span></span>
                    <label> NRP </label>
                </div>
                <div class="txt_field">
                    <input type="password" name="password" required>
                    <span></span>
                    <label> Password SIM Petra</label>
                </div>

                <div class="forgotPass">
                    forgot password?
                </div>
                <button type="submit" value="Login" onclick ="Swal('Success', '', 'success')">Login</button>
            </form>
    </div>
</body>
</html>