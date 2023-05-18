<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="cSL77gTFpaKQ8fLh4kaWzMd4frFwcxFHqRnKBoEU">

        <title>Student Health Hub</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="http://127.0.0.1:8000/css/app.css">
        <link rel="stylesheet" href="http://127.0.0.1:8000/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://127.0.0.1:8000/css/theme.min.css">
        <link rel="stylesheet" href="http://127.0.0.1:8000/css/icons.min.css">

        <!-- Scripts -->
        <script src="http://127.0.0.1:8000/js/app.js" defer></script>
          <script src="http://127.0.0.1:8000/js/jquery.min.js" defer></script>
          <script src="http://127.0.0.1:8000/js/metismenu.min.js" defer></script>
          <script src="http://127.0.0.1:8000/js/waves.js" defer></script>
          <script src="http://127.0.0.1:8000/js/simplebar.min.js" defer></script>
          <script src="http://127.0.0.1:8000/js/theme.js" defer></script>
          <script src="http://127.0.0.1:8000/assetsTemplate/pages/chartjs-demo.js" defer></script>
          <script src="http://127.0.0.1:8000/js/bootstrap.bundle.min.js" defer></script>
          <script src="http://127.0.0.1:8000/assetsTemplate/plugins/chart-js/chart.min.js" defer></script>

          <script src="assetsTemplate/pages/morris-chart-demo.js"></script>

          <script src="http://127.0.0.1:8000/assetsTemplate/pages/morris-chart-demo.js" defer></script>







    </head>
    <style>
        /********** Template CSS **********/
:root {
    --primary: #FF1654;
    --secondary: #191C24;
    --light: #6C7293;
    --dark: #000000;
}

.back-to-top {
    position: fixed;
    display: none;
    right: 45px;
    bottom: 45px;
    z-index: 99;
}


/*** Spinner ***/
#spinner {
    opacity: 0;
    visibility: hidden;
    transition: opacity .5s ease-out, visibility 0s linear .5s;
    z-index: 99999;
}

#spinner.show {
    transition: opacity .5s ease-out, visibility 0s linear 0s;
    visibility: visible;
    opacity: 1;
}


/*** Button ***/
.btn {
    transition: .5s;
}

.btn-square {
    width: 38px;
    height: 38px;
}

.btn-sm-square {
    width: 32px;
    height: 32px;
}

.btn-lg-square {
    width: 48px;
    height: 48px;
}

.btn-square,
.btn-sm-square,
.btn-lg-square {
    padding: 0;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-weight: normal;
    border-radius: 50px;
}


/*** Layout ***/
.sidebar {
    position: fixed;
    top: 0;
    left: 0;
    bottom: 0;
    width: 250px;
    height: 100vh;
    overflow-y: auto;
    background: var(--secondary);
    transition: 0.5s;
    z-index: 999;
}

.content {
    margin-left: 250px;
    min-height: 100vh;
    background: var(--dark);
    transition: 0.5s;
}

@media (min-width: 992px) {
    .sidebar {
        margin-left: 0;
    }

    .sidebar.open {
        margin-left: -250px;
    }

    .content {
        width: calc(100% - 250px);
    }

    .content.open {
        width: 100%;
        margin-left: 0;
    }
}

@media (max-width: 991.98px) {
    .sidebar {
        margin-left: -250px;
    }

    .sidebar.open {
        margin-left: 0;
    }

    .content {
        width: 100%;
        margin-left: 0;
    }
}


/*** Navbar ***/
.sidebar .navbar .navbar-nav .nav-link {
    padding: 7px 20px;
    color: var(--light);
    font-weight: 500;
    border-left: 3px solid var(--secondary);
    border-radius: 0 30px 30px 0;
    outline: none;
}

.sidebar .navbar .navbar-nav .nav-link:hover,
.sidebar .navbar .navbar-nav .nav-link.active {
    color: var(--primary);
    background: var(--dark);
    border-color: var(--primary);
}

.sidebar .navbar .navbar-nav .nav-link i {
    width: 40px;
    height: 40px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: var(--dark);
    border-radius: 40px;
}

.sidebar .navbar .navbar-nav .nav-link:hover i,
.sidebar .navbar .navbar-nav .nav-link.active i {
    background: var(--secondary);
}

.sidebar .navbar .dropdown-toggle::after {
    position: absolute;
    top: 15px;
    right: 15px;
    border: none;
    content: "\f107";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    transition: .5s;
}

.sidebar .navbar .dropdown-toggle[aria-expanded=true]::after {
    transform: rotate(-180deg);
}

.sidebar .navbar .dropdown-item {
    padding-left: 25px;
    border-radius: 0 30px 30px 0;
    color: var(--light);
}

.sidebar .navbar .dropdown-item:hover,
.sidebar .navbar .dropdown-item.active {
    background: var(--dark);
}

.content .navbar .navbar-nav .nav-link {
    margin-left: 25px;
    padding: 12px 0;
    color: var(--light);
    outline: none;
}

.content .navbar .navbar-nav .nav-link:hover,
.content .navbar .navbar-nav .nav-link.active {
    color: var(--primary);
}

.content .navbar .sidebar-toggler,
.content .navbar .navbar-nav .nav-link i {
    width: 40px;
    height: 40px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: var(--dark);
    border-radius: 40px;
}

.content .navbar .dropdown-item {
    color: var(--light);
}

.content .navbar .dropdown-item:hover,
.content .navbar .dropdown-item.active {
    background: var(--dark);
}

.content .navbar .dropdown-toggle::after {
    margin-left: 6px;
    vertical-align: middle;
    border: none;
    content: "\f107";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    transition: .5s;
}

.content .navbar .dropdown-toggle[aria-expanded=true]::after {
    transform: rotate(-180deg);
}

@media (max-width: 575.98px) {
    .content .navbar .navbar-nav .nav-link {
        margin-left: 15px;
    }
}


/*** Date Picker ***/
.bootstrap-datetimepicker-widget.bottom {
    top: auto !important;
}

.bootstrap-datetimepicker-widget .table * {
    border-bottom-width: 0px;
}

.bootstrap-datetimepicker-widget .table th {
    font-weight: 500;
}

.bootstrap-datetimepicker-widget.dropdown-menu {
    padding: 10px;
    border-radius: 2px;
}

.bootstrap-datetimepicker-widget table td.active,
.bootstrap-datetimepicker-widget table td.active:hover {
    background: var(--primary);
}

.bootstrap-datetimepicker-widget table td.today::before {
    border-bottom-color: var(--primary);
}


/*** Testimonial ***/
.progress .progress-bar {
    width: 0px;
    transition: 2s;
}


/*** Testimonial ***/
.testimonial-carousel .owl-dots {
    margin-top: 24px;
    display: flex;
    align-items: flex-end;
    justify-content: center;
}

.testimonial-carousel .owl-dot {
    position: relative;
    display: inline-block;
    margin: 0 5px;
    width: 15px;
    height: 15px;
    border: 5px solid var(--primary);
    border-radius: 15px;
    transition: .5s;
}

.testimonial-carousel .owl-dot.active {
    background: var(--dark);
    border-color: var(--primary);
}
    </style>
    <body class="font-sans antialiased">
        <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
            <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>
        
            <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"  class="fixed z-30 inset-y-0 left-0 w-64 transition duration-300 transform bg-gray-900 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0" id="hm">
            <div class="flex items-center justify-center mt-8">
                <div class="flex items-center">
                      

                    <a href="http://127.0.0.1:8000/admin/dashboard">
                        <span  class="text-white text-2xl mx-2 font-semibold">Student Health Hub</span>
                    </a>
                </div>
            </div>
    
            <nav class="mt-10">
                <a class="flex items-center mt-4 py-2 px-6 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100  " href="http://127.0.0.1:8000/admin/dashboard">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                    </svg>
    
                    <span class="mx-3">Dashboard</span>
                </a>
                
                                <a class="flex items-center mt-4 py-2 px-6 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 "
                    href="http://127.0.0.1:8000/admin/roles">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z">
                        </path>
                    </svg>
    
                    

                
            </nav>
        </div>

            <div class="flex-1 flex flex-col overflow-scroll">

                    <header class="flex justify-between items-center py-4 px-6 bg-white border-b-4 border-indigo-600">
    <div class="flex items-center">
        <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round"></path>
            </svg>
        </button>

        <div class="relative mx-4 lg:mx-0">
            <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                <svg class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                    <path
                        d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    </path>
                </svg>
            </span>

            <input class="form-input w-32 sm:w-64 rounded-md pl-10 pr-4 focus:border-indigo-600" type="text"
                placeholder="Search">
        </div>
    </div>

    <div class="flex items-center">    
        <div x-data="{ dropdownOpen: false }" class="relative">
            <button @click="dropdownOpen = ! dropdownOpen"
                class="relative block h-8 w-8 rounded-full overflow-hidden shadow focus:outline-none">
                <img class="h-full w-full object-cover"
                    src="/images/user.avif"
                    alt="Your avatar">
            </button>

            <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"
                style="display: none;"></div>

            <div x-show="dropdownOpen"
                class="absolute right-0 mt-2 w-48 bg-white rounded-md overflow-hidden shadow-xl z-10"
                style="display: none;">
                <a href="http://127.0.0.1:8000/admin/profile"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Profile</a>

                <form method="POST" action="http://127.0.0.1:8000/admin/logout">
                <input type="hidden" name="_token" value="cSL77gTFpaKQ8fLh4kaWzMd4frFwcxFHqRnKBoEU">                    <a href="http://127.0.0.1:8000/admin/logout" onclick="event.preventDefault();
                                                this.closest('form').submit();"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Logout</a>
                </form>
            </div>
        </div>
    </div>
</header>
                                        
                    
                    
                    <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
          <br><br>
            <div class="container mx-auto px-6 py-2">
                <div class="text-right">
                                      <a style="background-color: blue; color: black;"href="http://127.0.0.1:8000/admin/users/create" class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">New User</a>
                                  </div>

              <div class="bg-white shadow-md rounded my-6">
                <table class="table table-hover">
                  <thead class="table-dark">
                    <tr>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">User Name</th>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Role</th>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light text-right">Actions</th>
                    </tr>
                  </thead>
                  <tbody style="background: rgb(255,255,255);
background: linear-gradient(0deg, rgba(255,255,255,1) 0%, rgba(218,218,218,1) 26%, rgba(192,192,198,1) 100%);">
                    
                                                                <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">writer</td>
                        <td class="py-4 px-6 border-b border-grey-light">
                                                          <span class="inline-flex items-center justify-center px-2 py-1 mr-2 text-xs font-bold leading-none text-white bg-gray-500 rounded-full">writer</span>
                                                    </td>
                        <td class="py-4 px-6 border-b border-grey-light text-right">
                                                    <a href="http://127.0.0.1:8000/admin/users/2/edit" style="background-color: blue; color: white; " class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark text-blue-400">Edit</a>
                          
                                                    <form action="http://127.0.0.1:8000/admin/users/2" method="POST" class="inline">
                              <input type="hidden" name="_token" value="cSL77gTFpaKQ8fLh4kaWzMd4frFwcxFHqRnKBoEU">                              <input type="hidden" name="_method" value="delete">                              <button id="zzh" style="background-color: red; color: white;"class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-blue hover:bg-blue-dark text-red-400 hover:text-blue">Delete</button>
                          </form>
                          
                        </td>
                      </tr>
                                            <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">Admin</td>
                        <td class="py-4 px-6 border-b border-grey-light">
                                                          <span class="inline-flex items-center justify-center px-2 py-1 mr-2 text-xs font-bold leading-none text-white bg-gray-500 rounded-full">admin</span>
                                                    </td>
                        <td class="py-4 px-6 border-b border-grey-light text-right">
                                                    <a href="http://127.0.0.1:8000/admin/users/1/edit" style="background-color: blue; color: white; " class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark text-blue-400">Edit</a>
                          
                                                    <form action="http://127.0.0.1:8000/admin/users/1" method="POST" class="inline">
                              <input type="hidden" name="_token" value="cSL77gTFpaKQ8fLh4kaWzMd4frFwcxFHqRnKBoEU">                              <input type="hidden" name="_method" value="delete">                              <button id="zzh" style="background-color: red; color: white;"class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-blue hover:bg-blue-dark text-red-400 hover:text-blue">Delete</button>
                          </form>
                          
                        </td>
                      </tr>
                                          
                  </tbody>
                </table>
              </div>
  
            </div>
        </main>
    </div>
</div>
                    
            </div>
        </div>
    </body>
</html>
<script>
        var ctx1 = $("#worldwide-sales").get(0).getContext("2d");
    var myChart1 = new Chart(ctx1, {
        type: "bar",
        data: {
            labels: ["2016", "2017", "2018", "2019", "2020", "2021", "2022"],
            datasets: [{
                    label: "USA",
                    data: [15, 30, 55, 65, 60, 80, 95],
                    backgroundColor: "rgba(235, 22, 22, .7)"
                },
                {
                    label: "UK",
                    data: [8, 35, 40, 60, 70, 55, 75],
                    backgroundColor: "rgba(235, 22, 22, .5)"
                },
                {
                    label: "AU",
                    data: [12, 25, 45, 55, 65, 70, 60],
                    backgroundColor: "rgba(235, 22, 22, .3)"
                }
            ]
            },
        options: {
            responsive: true
        }
    });


    // Salse & Revenue Chart
    var ctx2 = $("#salse-revenue").get(0).getContext("2d");
    var myChart2 = new Chart(ctx2, {
        type: "line",
        data: {
            labels: ["2016", "2017", "2018", "2019", "2020", "2021", "2022"],
            datasets: [{
                    label: "Salse",
                    data: [15, 30, 55, 45, 70, 65, 85],
                    backgroundColor: "rgba(235, 22, 22, .7)",
                    fill: true
                },
                {
                    label: "Revenue",
                    data: [99, 135, 170, 130, 190, 180, 270],
                    backgroundColor: "rgba(235, 22, 22, .5)",
                    fill: true
                }
            ]
            },
        options: {
            responsive: true
        }
    });
    

</script>
