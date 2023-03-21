<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

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
    <h1 class="text-6xl font-bold text-center text-gray-700 mt-10">ABOUT US</h1>

    <!-- first ssection -->
    <section>
        <div class="grid grid-cols-4 mt-20">
            <!-- left -->
            <div class="text-center gap-6 text-xl font-semibold">
                <div class="text-gray-800 ">About us.</div>
                <div class="mt-2 text-gray-400 hover:scale-105 hover:text-gray-800 transition duration-200 ease-out cursor-pointer"></div>
                <div class="mt-2 text-gray-400 hover:scale-105 hover:text-gray-800 transition duration-200 ease-out cursor-pointer"></div>
            </div>

            <!-- right -->
            <div class="col-span-2 text-gray-500">
                <div class="mb-6">Organic farming can be defined as an agricultural process that uses biological fertilisers and pest control acquired from animal or plant waste. Organic farming was actually initiated as an answer to the environmental sufferings caused by the use of chemical pesticides and synthetic fertilisers. In other words, organic farming is a new system of farming or agriculture that repairs, maintains, and improves the ecological balance.
                   
                </div>

                <div>
                   
                </div>
            </div>

            <!-- just for the spacing -->
            <div></div>

        </div>
    </section>

    <!-- second section -->
    <section>
        <div class="flex justify-center mt-20 ">
            <img src="./images/about.png" class="rounded-2xl">
        </div>
    </section>

    <!-- third section -->
    <section class="my-20">
        <div class="grid grid-cols-2 ">
            <!-- left side -->
            <div class="flex justify-center items-center">
                <h1 class="text-2xl text-gray-700 font-bold italic">"<br>
                    Our work make sense<br>
                    only if it is a faithful witness<br>
                    of his time<br>
                    <span class="text-gray-400 font-normal text-lg mt-10"></span>
                    <span class="pl-40"> "</span>
                </h1>
            </div>

            <!-- right side -->
            <div>
                <img src="./images/aboutus_bg.png">
            </div>
        </div>
    </section>

    <!-- fourth section -->
    <section class="mb-20 mt-40">
        <div class="text-center text-4xl text-gray-600 font-bold">TEAM</div>

        <div class="flex justify-center gap-40 mt-6">
            <!-- person 1 -->
            <div class="hover:scale-105 transition duration-200 ease-out cursor-pointer">
               <img src="./images/tm1.png" class="rounded-full shadow-lg mb-4">
               <div class="text-center text-lg font-semibold">Dimple Gogoi</div>
               <div class="text-center text-xm text-gray-400"> Front-end Developer</div>
            </div>

                <!-- person 2 -->
            <div class="hover:scale-105 transition duration-200 ease-out cursor-pointer">
                <img src="./images/tm2.png" class="rounded-full shadow-lg mb-4">
                <div class="text-center text-lg font-semibold">Jyotilika Prodhani</div>
                <div class="text-center text-xm text-gray-400"> Back-end Developer</div>
            </div>
        </div>
    </section>
    
</body>
</html>