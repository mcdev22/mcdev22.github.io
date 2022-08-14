<x-guest-layout>
<div class="login-wrapper">   
    <form action="{{route('admin.check')}}" class="form" methode="POST">
        @csrf
            <img src="assets/images/add.jpg" alt="">
            <h2>Admin Login</h2>
        <div class="input-group">
            <input type="text" name="email" id="loginUser" required>
            <label for="loginUser">Email</label>
        </div>

        <div class="input-group">
            <input type="text" name="password" id="loginPassword" required>
            <label for="loginPassword">password</label>
        </div>
        <input type="submit" value="Login" class="submit-btn">
    </form>
 </div>
 </x-guest-layout>