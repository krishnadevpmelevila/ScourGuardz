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

<table  class="table table-bordered">
  <thead class="table-header">
  
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Review</th>
      <th scope="col">Delete</th>

    </tr>
  </thead>
  <tbody>
  @foreach ($name as $review)
    <tr>
      <td>{{$review->name}}</td>
      <td>{{$review->feedback}}</td>
      <td><form method="post" action="/deletereview/{{$review->id}}"><button  onclick="return confirm('Are you sure to delete this Feedback ?')"  class="deleteRecord close-icon btn btn-danger">Delete</button>@csrf</form> </td>

    </tr>
  @endforeach
  </tbody>
</table>




@endsection