<nav class="navbar navbar-expand-lg" style="background-color: {{$settingColor->nav_color}}">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="{{asset($settingColor->logo)}}" height="50px" width="50px" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('frontend.product')}}">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('frontend.category')}}">Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Cart <span class="badge bg-danger">0</span></a>
          </li>
        </ul>
        <div class="float-left">
        @if(Auth::check())
           <a>{{Auth::user()->name}}</a>
           @else
           <a href="{{route('login')}}"> <button class=" btn btn-info">Login</button></a>
           @endif
        </div>
        @if(Auth::check())
        <div class="mx-3">
            <a href="{{route('logouts')}}"><button class="btn btn-danger">Logout</button></a>
        </div>
        @endif
      </div>
    </div>
  </nav>
