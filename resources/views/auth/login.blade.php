
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>caissier login</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Styles -->
	    <link rel="stylesheet" type="text/css" href="assets/css/user.css">
		<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    </head>
<body>

<div class="container">
     <img src="assets/images/cass.png" alt=""> 
 	<div class="header">
 		<h1>caissier</h1>
 	</div>
 	<div class="main">
       <x-auth-validation-errors class="mb-4" :errors="$errors" />
 		<form action="{{ route('login.user') }}" methode="POST">
           @csrf
 			<span>
			    <i class='bx bx-user'></i>
 				<input type="text" placeholder="Username" name="name" required>
 			</span><br>
 			<span>
			    <i class='bx bx-lock-alt'></i>
 				<input type="password" placeholder="password" name="password" required autocomplete="current-password">
 			</span><br>
 				<button type="submit" name="login">login</button>
 		</form>
 	</div>
 </div>

</body>
</html>



