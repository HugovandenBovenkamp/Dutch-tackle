<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/public/output.css">
    <link rel="stylesheet" href="animations.css">
    <title>Dutch tackle | Buy the latest fishing gear for a fair price!</title>
</head>
<body class="font-raleway h-full">


<!-- Navbar -->
<nav class="bg-navy-blue" id="nav">
    <div class="text-light-gray py-5 lg:py-3 container mx-auto px-12 grid grid-cols-1 lg:grid-cols-[200px_minmax(300px,1fr)] items-center">
        <div class="menu-button flex justify-between items-center">
            <a href="/public/index.php" class="text-xl lg:visible lg:text-center">Dutch tackle</a>
            <!-- Menu hamburger open button-->
            <button id="menu-open"
                    class="hamburger-open flex lg:hidden hover:bg-light-navy rounded-full p-3 transform transition ease-in-out duration-200 hover:scale-110"
                    onclick="animateMenu()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                </svg>
            </button>
            <!-- Menu hamburger close button-->
            <button id="menu-close"
                    class="hamburger-close hidden lg:hidden hover:bg-light-navy rounded-full p-3 transform transition ease-in-out duration-200 hover:scale-110"
                    onclick="animateMenu()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
        <!-- Todo: Refactor menu and put all menu elements inside the menu div-->
        <!--Menu-->
        <div id="menu" class="pt-5 lg:flex justify-center lg:py-4 lg:pr-6 transition-[height] duration-200 h-0 lg:h-auto invisible lg:visible">
            <nav class="flex flex-col lg:flex-row">
                <ul class="lg:flex items-center">
                    <li class="px-6 py-2 lg:py-0 hover:text-yellow"><a href="/public/index.php" class="block">Home</a>
                    </li>
                    <li class="px-6 py-2 lg:py-0 hover:text-yellow text-nowrap"><a href="#" class="block">Our story</a>
                    </li>
                    <li class="px-6 py-2 lg:py-0 hover:text-yellow"><a href="#" class="block">Products</a></li>
                    <li class="px-6 py-2 lg:py-0 hover:text-yellow"><a href="#" class="block">Contact</a></li>
                </ul>
                <div class="lg:flex" id="search-mobile">
                    <div class="search-bar relative text-dark-gray w-full sm:w-1/2 lg:w-auto px-3 py-2 lg:py-0">
                        <input type="text" placeholder="Search..."
                               class="w-full lg:w-auto px-4 py-2 pr-12 rounded-full focus:outline-none bg-navy-blue border border-yellow text-light-gray">
                        <button type="submit"
                                class="bg-yellow rounded-e-xl absolute p-3 bottom-2 top-2 right-0 lg:top-0 lg:bottom-0 lg:right-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"/>
                            </svg>
                        </button>
                    </div>
                    <div id="nav-icons" class="nav-icons lg:flex lg:items-center">
                        <a href="#" class="flex px-6 py-2 lg:px-0 items-center hover:text-yellow">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="size-7 mr-2 lg:size-6 lg:ml-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z"/>
                            </svg>
                            <span class="lg:hidden">Cart</span>
                        </a>
                        <a href="#" class="flex px-6 py-2 lg:px-0 items-center hover:text-yellow">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="size-7 mr-2 lg:size-6 lg:ml-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"/>
                            </svg>
                            <span class="lg:hidden">Profile</span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <!--Search, Profile and cart-->
    </div>
</nav>


<script src="../src/main.js"></script>
</body>
</html>