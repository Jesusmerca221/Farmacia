<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <style>.container {
  display: flex;
  justify-content: flex-end;
  align-items: flex-end;
  height: 75vh;
}

.image {
   
  width: 39%;
}

.image img {
    
  width: 500px;
  
  padding-left: 20px;
  padding-right: 20px;
  padding-bottom: 20px;
  padding-top: 20px;
  box-sizing: border-box;
}

.login {

    margin-left: 20px;
    margin-right: 100px;
    margin-top: auto;
  width: 350px;
  background-color: cadetblue;
  border-style: solid;
  
  padding-left: 10px;
  padding-right: 50px;
  padding-bottom: 60px;
  padding-top: 60px;
  
  
}

h2 {
  text-align: center;
  margin-bottom: 20px;
}

form {
  display: flex;
  flex-direction: column;
  width: 350px;

  padding-left: 20px;
  padding-right: 20px;
  padding-bottom: 20px;
  padding-top: 20px;
}

label {
  margin-bottom: 10px;
}

input {
  padding: 10px;
  margin-bottom: 20px;
  border: none;
  border-radius: 5px;
}

button {
  padding: 10px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button:hover {
  background-color: #3e8e41;
}

body {
    background-color:darkseagreen;
}

  </style>
</head>
<body>
<div class="container">
  <div class="image">
    <img src="/img/Logo.png" alt="Imagen">
  </div>
  <div class="login">
    <h2>Login</h2>
    <form method="POST" action="{{ route('login') }}">
    @csrf

<div>
    <x-label for="email" value="{{ __('Email') }}" />
    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
</div>

<div class="mt-4">
    <x-label for="password" value="{{ __('Password') }}" />
    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
</div>



<div class="flex items-center justify-end mt-4">
    @if (Route::has('password.request'))
        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
            {{ __('Forgot your password?') }}
        </a>
    @endif

    <x-button class="ml-4">
        {{ __('Log in') }}
    </x-button>
</div>
    </form>
  </div>
</div>

</body>
</html>

