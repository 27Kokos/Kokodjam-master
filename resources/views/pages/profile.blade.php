@extends('template')
<nav>
    <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        @auth
            <li><a href="{{ url('/profile') }}">Profile</a></li>
            <li>
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-link">Logout</button>
                </form>
            </li>
        @else
            <li><a href="{{ url('/login') }}">Login</a></li>
            <li><a href="{{ url('/register') }}">Register</a></li>
        @endauth
    </ul>
</nav>