@extends('layouts.admin.adminLayout')




@section('order')

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <!-- Left Side Of Navbar -->
  <ul class="navbar-nav mr-auto">

  </ul>

  <!-- Right Side Of Navbar -->
  <ul class="navbar-nav ml-auto">
    <!-- Authentication Links -->
    @guest
    <li class="nav-item">
      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
    </li>
    @if (Route::has('register'))
    <li class="nav-item">
      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
    </li>
    @endif
    @else
    <li class="nav-item dropdown">
      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }} <span class="caret"></span>
      </a>

      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </div>
    </li>
    @endguest
  </ul>
</div>

<table class="table table-bordered table-responsive">
  <thead class="table-header">
  
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Landmark</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Area(in Sq.feet)</th>
      <th scope="col">Time</th>
      <th scope="col">Requirement</th>
      <th scope="col">Contact Time</th>
     
      <th scope="col">Delete</th>

    </tr>
  </thead>
  <tbody id="refresh">
  @foreach ($name as $order)
  <form method="post" action="/deleteorder/{{$order->id}}">
    <tr>
      <th scope="row">1</th>
      <td>{{$order->name}}</td>
      <td>{{$order->address}}</td>
      <td>{{$order->landmark}}</td>
      <td>{{$order->phone}}</td>
      <td>{{$order->email}}</td>
      <td>{{$order->area}}</td>
      <td>{{$order->finalDate}}</td>
      <td>{{$order->requirement}}</td>
      <td>{{$order->contactPreference}}</td> 
      
      
      <td><button  onclick="return confirm('Are you sure to delete this order ?')"  class="deleteRecord close-icon btn btn-danger">Delete</button> </td>

    </tr>
    @csrf
    </form>

  @endforeach
  </tbody>
</table>




@endsection