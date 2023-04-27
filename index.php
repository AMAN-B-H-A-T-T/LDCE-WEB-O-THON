<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web-o-thon</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
          background: linear-gradient(to bottom, #3498db, #8e44ad);
          overflow: hidden;
        }
  
        .stars {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          z-index: -1;
        }
  
        .stars:before {
          content: '';
          display: block;
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/108957/star.png') repeat;
          z-index: -2;
          animation: animateStars 50s linear infinite;
        }
  
        .twinkling:before {
          content: '';
          display: block;
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/108957/twinkle.png') repeat;
          z-index: -1;
          animation: animateTwinkle 5s linear infinite;
        }
  
        @keyframes animateStars {
          0% {
            transform: translateY(0);
          }
          100% {
            transform: translateY(-1000px);
          }
        }
  
        @keyframes animateTwinkle {
          0% {
            opacity: 0;
          }
          50% {
            opacity: 1;
          }
          100% {
            opacity: 0;
          }
        }
      </style>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<div>

    <div class="login">
    <div class="event">
        <h1>Event Managment</h1>
    </div>
      
      <form class="my-4" action="" method="">
        <label class="my-2 login-Details">Enter the Login Details :</label><br>
        <label for="username">Username:</label>
        <input type="text" class="form-control" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password" required>

        <input type="submit" value="Login" id="login">
        <center><label class="my-3">Have no Account ?</label><a href="sign.php">Sign Up</a></center>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>