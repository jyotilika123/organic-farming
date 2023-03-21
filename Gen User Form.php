<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- tailwind css cdn -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                clifford: '#da373d',
              }
            }
          }
        }
      </script>
      <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
      <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</head>
<body>
    <body class="bg-teal-500">
    
    
        <div class="flex justify-center mt-40">
    
        <div class="w-full max-w-xs  ">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"  action="" method="POST">
              <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="Username">
                  Username
                </label>
                <input name="username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Username" type="text" placeholder="Username">
              </div>
              <div class="mb-4">
                <label  class="block text-gray-700 text-sm font-bold mb-2" for="Age">
                  Age
                </label>
                <input name="age" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Age" type="text" placeholder="Age">
              </div>
              <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                  Password
                </label>
                <input name="password" class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************">
                <p class="text-red-500 text-xs italic">Please choose a password.</p>
              </div>
              <div class="flex items-center justify-between">
                <button type="submit" name="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                  Sign In
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                  Forgot Password?
                </a>
    
              </div>
            </form>
           
            </p>
          </div>
        </div>
    </body>
    
</body>
</html>
<?php
include 'connection.php';

if(isset($_POST['submit'])){

  $name = $_POST['username'];
  $age = $_POST['age'];
  $password = $_POST['password'];

  $insertquery =  "insert into guserform( username,age,password) values('$name', '$age', '$password')";

  $res =  mysqli_query($con,$insertquery);

  if($res){
    ?>
    <script>
      alert("data");
    </script>
    <?php
  }

}

?>