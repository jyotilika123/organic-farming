<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <title>Document</title> -->
  <!-- title should be related to waht page contains uncomment the below code to see -->
  <title>Login</title>

  <link rel="stylesheet" href="style1.css">
   <!-- tailwind css cdn -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            fontFamily: {
              sans: ['Inter', 'sans-serif'],
            },
          }
        }
      }
    </script>
     <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
     <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
   
</head>
<body>

<div class="grid grid-cols-2 ">
  <!-- left -->
  <div class="flex justify-center items-center flex-col login_left px-10"> 
    <div>
      <h2 class="text-center text-lg text-gray-100">Nice to see you again</h2>
      <h1 class="text-6xl mt-4 font-bold text-white">WELCOME BACK !</h1>
    </div>

    <div class="mt-10 text-gray-300 text-lg px-20 text-center">
      <p>To keep connected with us please<br>
      login with your personal info</p>
    </div>

    <div class="mt-10 hover:scale-105 transition duration-200 ease-out shadow-lg px-20 p-3 rounded-2xl bg-white mt-16 font-semibold text-gray-600 cursor-pointer">
      SIGN IN
    </div>

  </div>

  <!-- right -->
  <div class="flex-col flex justify-center items-center  bg-gray-100">

    <div class="text-center" >
      <h1 class="text-blue-800 font-bold text-5xl mb-6">Login Account</h1>
      <p class="text-gray-400 text-sm px-20"> </p>
        
    </div>

    <!-- Form start -->
   
    <div class="mt-20">
      <!-- <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="Username">
            Username
          </label>
          <input
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            id="Username" type="text" placeholder="Username">
        </div>
      
        <div class="mb-6">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
            Password
          </label>
          <input
            class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
            id="password" type="password" placeholder="******************">
          <p class="text-red-500 text-xs italic">Please choose a password.</p>
        </div>
        <div class="flex items-center justify-between">
          <button
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
            type="button">
            Log In
          </button>
          <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
            Forgot Password?
          </a>
      
        </div>
      </form> -->
      <form action="" method="POST">

      <div class="grid md:grid-cols-2 md:gap-6">
        <div class="relative z-0 mb-6 w-full group">
          <input  name="firstname" id="floating_phone"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            placeholder=" " required />
          <label for="floating_phone"
            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
            First Name</label>
        </div>
        <div class="relative z-0 mb-6 w-full group">
          <input  name="lastname" id="floating_company"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            placeholder=" " required />
          <label for="floating_company"
            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
            Last Name</label>
        </div>
      </div>

      <div class="relative z-0 mb-6 w-full group">
        <input  name="address" id="floating_email"
          class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
          placeholder=" " required />
        <label for="floating_email"
          class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email
          address</label>
      </div>
      <div class="relative z-0 mb-6 w-full group">
        <input type="password" name="password" id="floating_password"
          class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
          placeholder=" " required />
        <label for="floating_password"
          class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
      </div>
      <div class="relative z-0 mb-6 w-full group">
        <input type="password" name="confirmpassword" id="floating_repeat_password"
          class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
          placeholder=" " required />
        <label for="floating_repeat_password"
          class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Confirm
          password</label>
      </div>

      <button type="submit" name="submit"
        class="mt-10 w-1/2 hover:scale-105 transition duration-200 ease-out shadow px-16 p-3 rounded-2xl bg-blue-800 text-white  font-semibold mt-4 cursor-pointer">
        SIGN UP
     </button>
    </form>
    </div> 
        <!-- Form end -->
  </div>


</div>




</body>
</html>
<?php
include 'connection.php';

if(isset($_POST['submit'])){

  $firstname = $_POST['firstname'];
  $lastname= $_POST['lastname'];
  $address = $_POST['address'];
  $password = $_POST['password'];
  $confirmpassword = $_POST['confirmpassword'];

  $insertquery =  "insert into login( firstname, lastname, address, password, confirmpassword) values('$firstname','$lastname', '$address', '$password', '$confirmpassword')";

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