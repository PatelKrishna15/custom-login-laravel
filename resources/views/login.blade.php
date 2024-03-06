<form action="{{ route('login') }}" method="POST">
@csrf
{{-- <input type="text" name="username" id="username" placeholder="emailOrUsername"><br> --}}
<input id="login" type="text" name="login" value="{{ old('login') }}" placeholder="usernameOrEmail" required ><br>
<input type="password" name="password" id="password" placeholder="Password"><br>
<button type="submit">Login</button>
</form>