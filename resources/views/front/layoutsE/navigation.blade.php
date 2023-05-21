
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Student Health Hub</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

    @php
                    $userID = Auth::guard('front')->user()->id;
                    $userName = Auth::guard('front')->user()->name;
                    $userEmail = Auth::guard('front')->user()->email;     
                      
                       @endphp
</head>

<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
        <div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="/">Student Health Hub</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li ><a href="/">Home</a></li>
					<li><a href="/about">About</a></li>
                
					<li class=""><a href="{{ route('Evenement') }}">Evenement</a></li>
					<li><a href="{{ route('consultation') }}">Consultaion</a></li>
                   
                    @php
                    $userID = Auth::guard('front')->user()->id;
                    $ListesEP = DB::table('evenements as E')
                    ->join('participants as P', 'P.evennement_id', '=', 'E.id')
                    ->where('P.user_id', $userID)
                    ->select('E.Nom_Evenement', 'P.evennement_id')
                    ->get();

                    $ListesEI = DB::table('evenements as E')
                    ->join('interresants as I', 'I.evennement_id', '=', 'E.id')
                    ->where('I.user_id', $userID)
                    ->select('E.Nom_Evenement', 'I.evennement_id')
                    ->get();
                            

                    $participants = DB::table('participants')->where('user_id', $userID)->get();
                    $interresants = DB::table('interresants')->where('user_id', $userID)->get();
                    $x = count($participants);
                    $y = count($interresants);

                    @endphp
                   
                        
                        <li>
                             <div class="dropdown d-inline-block ml-2">
                            <button type="button" class="btn header-item noti-icon" id="page-header-notifications-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style=" border:none;">
                                <i class="mdi mdi-bell-outline" ata-toggle="modal"></i>
                                <span class="text-white">{{ $userName}} <i class="bi bi-person-gear"></i></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                               
                                <div class="p-3">
                                   <h6 style="color:white;">{{ $userEmail}}</h6>
                                   <form method="POST" action="{{ route('admin.logout') }}">
                                        @csrf

                                        <x-responsive-nav-link :href="route('admin.logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-responsive-nav-link>
                                    </form>

                                </div>
                               
                               
                            </div>
                        </div>
                        </li>
                        <li >
                    <div class="dropdown d-inline-block ml-2">
                            <button type="button" class="btn header-item noti-icon" id="page-header-notifications-dropdown" 
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style=" border:none;>
                                <i class="mdi mdi-bell-outline" ata-toggle="modal"></i>
                            <span>
                            @if ($x == 0 || $y == 0)
                                    <img src="/patron/feedback0.png" style="width:30px;"  alt="">
                                @else
                                    <img src="/patron/feedback1.png" style="width:30px;"   alt="">
                                @endif
                                </span>
    
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"aria-labelledby="page-header-notifications-dropdown" style="width:300px;">
                                <h4 class="text-warning text-center">Listes Evenement Participation : {{$x}}</h4>
                                @foreach ($ListesEP as $event)
                                <div class=" text-center">
                                   <h6 style="color:white;">{{ $event->Nom_Evenement }} <form action="{{ route('admin.events.destroyParticipation', $event->evennement_id) }}" onsubmit="return confirm('Are you sure ?')" method="POST" class="inline">
                              @csrf
                              @method('delete')
                              <button  class=" btn btn-danger" ><i class="bi bi-trash"></i></button>
                          </form></h6>

                                </div>
                                @endforeach
                                <hr class="hr">
                                <h4 class="text-warning text-center">Listes Evenement Interresant : {{$y}}</h4>
                                @foreach ($ListesEI as $event)
                                <div class=" text-center">
                                    <h6 style="color:white;">{{ $event->Nom_Evenement }} <form action="{{ route('admin.events.destroyInterresant', $event->evennement_id) }}" onsubmit="return confirm('Are you sure ?')" method="POST" class="inline">
                                     @csrf
                                       
                                        <button  class="btn btn-danger" ><i class="bi bi-trash"></i></button>
                                    </form></h6>
                                </div>
                                @endforeach
                               
                            </div>
                        </div>
                        </li>
                   
        </ul>
</div>
</div>

            <!-- Settings Dropdown -->
           

            <!-- Hamburger -->
            
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('Evenement')" :active="request()->routeIs('Evenement')">
                {{ __('Evenement') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
       
    </div>
</nav>
