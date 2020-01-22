 <!-- HEADER -->
 <div class="header">
     <nav class="navbar navbar-expand-sm navbar-light bg-light">
         <div class="mx-auto"></div>
         <img src="{{  url('/img/logoGA-2x.png')  }}" alt="">
         <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
             aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="collapsibleNavId">
             <div class="mx-auto"></div>
             <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                 <li class="nav-item active">
                     <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
                 </li>
                 <li class="nav-item active">
                     <!-- Mobile button -->
                     @guest
                     <form class="form-inline d-sm-block d-md-none">
                         <button class="btn btn-login my-2 my-sm-0" type="button"
                             onclick="event.preventDefault();location.href='{{url('login')}}';">
                             Masuk
                         </button>
                     </form>
                     <!-- Desktop Button -->
                     <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                         <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button"
                             onclick="event.preventDefault();location.href='{{url('login')}}';">
                             Masuk
                         </button>
                     </form>
                     @endguest


                     @auth
                     <!-- Mobile button -->
                     <form class="form-inline d-sm-block d-md-none" action="{{ url('logout') }}" method="POST">
                         @csrf
                         <button class="btn btn-login my-2 my-sm-0" type="button" type="submit">
                             Logout
                         </button>
                     </form>
                     <!-- Desktop Button -->
                     <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout') }}"
                         method="POST">
                         @csrf
                         <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
                             Logout
                         </button>
                     </form>
                     @endauth
                 </li>
                 <li class="nav-item active">
                    <a class="nav-link" href="{{ route('register')   }}">Daftar<span class="sr-only"></span></a>
                 </li>
             </ul>
         </div>
     </nav>
 </div>
