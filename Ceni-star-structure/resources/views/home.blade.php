<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    header{
        width:100vw;
        height:100vh;
        background-image:url(" {{asset('/img/witcher_season_2_promo.jpg') }}");
        background-repeat: no-repeat;
        background-position: center;
    }
    .container {
        position: relative;
        box-sizing: border-box;
        width: fit-content;
      }
      
      .mainbox {
        box-sizing: border-box;
        position: relative;
        width: 230px;
        height: 50px;
        display: flex;
        flex-direction: row-reverse;
        align-items: center;
        justify-content: center;
        border-radius: 160px;
        background-color: rgb(0, 0, 0);
        transition: all 0.3s ease;
      }
      
      .checkbox:focus {
        border: none;
        outline: none;
      }
      
      .checkbox:checked {
        right: 10px;
      }
      
      .checkbox:checked ~ .mainbox {
        width: 50px;
      }
      
      .checkbox:checked ~ .mainbox .search_input {
        width: 0;
        height: 0px;
      }
      
      .checkbox:checked ~ .mainbox .iconContainer {
        padding-right: 8px;
      }
      
      .checkbox {
        box-sizing: border-box;
        width: 30px;
        height: 30px;
        position: absolute;
        right: 17px;
        top: 10px;
        z-index: 9;
        cursor: pointer;
        appearance: none;
      }
      
      .search_input {
        box-sizing: border-box;
        height: 100%;
        width: 170px;
        background-color: transparent;
        border: none;
        outline: none;
        padding-bottom: 4px;
        padding-left: 10px;
        font-size: 1em;
        color: white;
        transition: all 0.3s ease;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      }
      
      .search_input::placeholder {
        color: rgba(255, 255, 255, 0.776);
      }
      
      .iconContainer {
        box-sizing: border-box;
        padding-top: 5px;
        width: fit-content;
        transition: all 0.3s ease;
      }
      
      .search_icon {
        box-sizing: border-box;
        fill: white;
        font-size: 1.3em;
      }
      .overlay{
        background-color: black;

      }
      .title-wrapper {
        position: absolute;
        top: 20%;
        right: 5%;
        text-align: right;
        color: white;
    }
    .title-wrapper h1 {
        font-size: 3em;
        margin-bottom: 0;
    }

    p {
      position: absolute;
        top: 30%;
        right: 5%;
        text-align: right;
        color: white;
        font-size: 1.5em;
    }
</style>
<body>
    <header>
    <div class="overly">
        <nav class="">
         
            <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
              <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                  <!-- Mobile menu button-->
                  <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!--
                      Icon when menu is closed.
          
                      Menu open: "hidden", Menu closed: "block"
                    -->






                    
                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!--
                      Icon when menu is open.
          
                      
                      Menu open: "block", Menu closed: "hidden"
                    -->
                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  </button>
                </div>
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                  <div class="flex flex-shrink-0 items-center">
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                  </div>
                  <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                      <a href="#" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Dashboard</a>
                      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Team</a>
                      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Projects</a>
                      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Calendar</a>
                    </div>
                  </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                 
                <div class="container">
                        <input checked="" class="checkbox" type="checkbox"> 
                        <div class="mainbox">
                            <div class="iconContainer">
                                <svg viewBox="0 0 512 512" height="1em" xmlns="http://www.w3.org/2000/svg" class="search_icon"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path></svg>
                            </div>
                         <input class="search_input" placeholder="search" type="text">
                        </div>
                    </div>
          
                  <!-- Profile dropdown -->
                  <div class="relative ml-5">
                    <div>
                      <button type="button" class="relative  flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">Open user menu</span>
                        <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                      </button>
                    </div>
          
                    <!--
                      Dropdown menu, show/hide based on menu state.
          
                      Entering: "transition ease-out duration-100"
                        From: "transform opacity-0 scale-95"
                        To: "transform opacity-100 scale-100"
                      Leaving: "transition ease-in duration-75"
                        From: "transform opacity-100 scale-100"
                        To: "transform opacity-0 scale-95"
                    -->
                    <!-- <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1"> -->
                      <!-- Active: "bg-gray-100", Not Active: "" -->
                      <!-- <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                      <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                      <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
          
            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="sm:hidden" id="mobile-menu">
              <div class="space-y-1 px-2 pb-3 pt-2">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Dashboard</a>
                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Team</a>
                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Projects</a>
                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Calendar</a>
              </div>
            </div>
          </nav>
          <div class="title-wrapper columns-6">
                <h1>THE WITCHER</h1>
               <!-- Insert your star rating here -->
            </div>
            <p class="mt-12 columns-5">Geralt of Rivia, a solitary monster hunter, 
                  struggles to find his place in a world where people often prove more wicked than beasts.</p>
                <p>Category: Fantasy</p>
                <p>Rating: &#9733;&#9733;&#9733;&#9733;</p> </div>
    </header>
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>