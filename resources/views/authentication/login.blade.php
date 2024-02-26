@extends('layouts.authentication')
@section('title', 'Login')

@section('css')
<link rel="stylesheet" href="style.css">
@endsection

@section('style')
@endsection

@section('content')

<h1>Resilience <br> Management</h1>

<div id="paragraph">
    <p><b>Resilience Management (RM) </b><br>is a comprehensive approach designed to enhance an organization's ability to adapt, recover, and thrive in the face of challenges and disruptions.</p>
</div>
<div class="login-container">
    
    <form id="loginForm">
    
        <input type="text" id="username" name="username" placeholder="Username"  required>
        <input type="password" id="password" name="password" placeholder="Password" required>

        <button type="button" onclick="login()">Login</button>
    </form>
    <p id="loginStatus"></p>
</div>
@endsection

@section('script')
@endsection