<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/public/output.css">
    <title>Dutch tackle | Buy the latest fishing gear for a fair price!</title>
</head>
<body class="font-raleway">

<!-- Navbar -->
<div class="bg-navy-blue">
    <div class="text-light-gray py-5 container mx-auto px-12 sm:px-0">
        <div class="grid grid-cols-2 lg:grid-cols-4 lg:place-items-center items-center">
            <div class="brand col-span-1 lg:text-center">
                <a href="/public/index.php" class="text-xl">Dutch tackle</a>
            </div>
            <!--            Menu hamburger button-->
            <div class="menu-button col-span-1 lg:hidden flex justify-end">
                <button id="menuOpen" class="flex lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                    </svg>
                </button>
                <button id="menuClose" class="hidden lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <!--Menu-->
            <div class="hidden lg:flex col-span-2">
                <nav id="menu">
                    <ul class="lg:flex">
                        <li class="px-6 hover:text-yellow"><a href="/public/index.php" class="block">Home</a></li>
                        <li class="px-6 hover:text-yellow"><a href="#" class="block">Our story</a></li>
                        <li class="px-6 hover:text-yellow"><a href="#" class="block">Products</a></li>
                        <li class="px-6 hover:text-yellow"><a href="#" class="block">Contact</a></li>
                    </ul>
                </nav>
            </div>

            <!--            todo: hier ligt waarschijnlijk het probleem met het niet kunnen centeren van de hamburger menu button-->
            <div class="hidden lg:flex lg:col-span-1" id="searchMobile">
                <div class="search-bar text-dark-gray relative">
                    <input type="text" placeholder="Search..."
                           class="px-4 py-1 pr-12 rounded-full focus:outline-none bg-navy-blue border border-yellow text-light-gray">
                    <button type="submit"
                            class="bg-yellow rounded-e-xl px-3 absolute top-0 bottom-0 right-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"/>
                        </svg>
                    </button>
                </div>
                <div class="nav-icons hidden lg:flex items-center">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="size-6 ml-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z"/>
                        </svg>
                    </a>

                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="size-6 ml-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"/>
                        </svg>
                    </a>

                </div>
            </div>
            <!--Search, Profile and cart-->
        </div>
    </div>
</div>


<script src="../src/main.js"></script>
</body>
</html>