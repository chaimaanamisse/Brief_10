@extends('layouts.app')

@section('content')
<div class="flex justify-center"> 
<div class="w-4/12 bg-white p-6 rounded-lg">
<form action="{{ route ('register')}}" method="post">
@csrf
<div class="mb-4">
<label for="name" class="sr-only">Nom complet</label>
<input type="text" name="name" id="name" placeholder="Entrer votre nom et prènom" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{ old('name') }}">

@error('name')
    <div class="text-red-500  mt-2 text-sm">
    {{ $message }}
    </div>
@enderror
</div>

<div class="mb-4">
<label for="username" class="sr-only">Nom d'utilisateur</label>
<input type="text" name="username" id="username" placeholder="Entrer votre nom d'utilisateur" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('username') border-red-500 @enderror" value="{{ old('username') }}"> 

@error('username')
    <div class="text-red-500  mt-2 text-sm">
    {{ $message }}
    </div>
@enderror
</div>

<div class="mb-4">
<label for="email" class="sr-only">Email</label>
<input type="text" name="email" id="email" placeholder="Entrer votre email" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">

@error('email')
    <div class="text-red-500  mt-2 text-sm">
    {{ $message }}
    </div>
@enderror
</div>

<div class="mb-4">
<label for="password" class="sr-only">Mot de passe</label>
<input type="password" name="password" id="email" placeholder="Entrer votre mot de passe" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" value=""> 

@error('password')
    <div class="text-red-500  mt-2 text-sm">
    {{ $message }}
    </div>
@enderror
</div>

<div class="mb-4">
<label for="password_confirmation" class="sr-only">Confirmer voter mot de passe</label>
<input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirmer votre mot de passe" class="bg-gray-100 border-2 w-full p-4 rounded-lg " value=""> 


</div>

<div>
<button type="submit" class="bg-blue-500  text-white px-4 py-3 rounded font-medium w-full">Enregistrer</button>
</div>


</form>
@endsection