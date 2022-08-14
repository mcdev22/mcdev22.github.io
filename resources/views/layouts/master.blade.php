<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Pos</title>
   <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
   <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
   <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Lekton:400,700,400italic' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
   <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="../assets/css/responsive.css">
   @livewireStyles

   
</head>

<body>
<div class="container">
<!-- Header right sidebar -->
<div class="header">                  
    <div class="menu-wrap" style="background-image: url(../nav_bg.jpg)">
        <div class="content-cal">           
            <form action="#" name="forms" style="width:250px;height:50px;margin-left:40px;">
              <input type="text" id="montant" class="toCalculate" name="answer">
              <div class="buttons">
                <input type="button" value="AC" onclick="forms.answer.value = ' '">
                <input type="button" value="DEL" onclick="forms.answer.value = forms.answer.value.substr(0, forms.answer.value.length -1)">
                <input type="button" value="%" onclick="forms.answer.value += '%'">
                <input type="button" value="/" onclick="forms.answer.value += '/'">
              </div>

              <div class="buttons">
                <input type="button" value="7" onclick="forms.answer.value += '7'">
                <input type="button" value="8" onclick="forms.answer.value += '8'">
                <input type="button" value="9" onclick="forms.answer.value += '9'">
                <input type="button" value="*" onclick="forms.answer.value += '*'">
              </div>

              <div class="buttons">
                <input type="button" value="4" onclick="forms.answer.value += '4'">
                <input type="button" value="5" onclick="forms.answer.value += '5'">
                <input type="button" value="6" onclick="forms.answer.value += '6'">
                <input type="button" value="-" onclick="forms.answer.value += '-'">
              </div>

              <div class="buttons">
                <input type="button" value="1" onclick="forms.answer.value += '1'">
                <input type="button" value="2" onclick="forms.answer.value += '2'">
                <input type="button" value="3" onclick="forms.answer.value += '3'">
                <input type="button" value="+" onclick="forms.answer.value += '+'">
              </div>

              <div class="buttons">
                <input type="button" value="0" onclick="forms.answer.value += '0'">
                <input type="button" value="00" onclick="forms.answer.value += '00'">
                <input type="button" value="." onclick="forms.answer.value += '.'">
                <input type="button" value="=" onclick="forms.answer.value = eval(forms.answer.value)">
              </div>

              <div class="input-reste">
               <label style="color:gray;font-weight:600;margin:18px 18px;">Le reste :</label><input type="text" style="margin-left:20px;" name="diff" class="reste" readonly>
              </div>     
            </form>
            

          <form action="{{route('user.chiffre')}}" method="POST">
            @csrf
            <div class="btn-info" style="margin-top:400px;background:transparent;">
              <label style="color:orange;font-weight:600;font-size:25px;margin-left:15px;">Total :</label><input type="text" id="total" name="total" class="get-total" class="toCalculate" value="{{Cart::getTotal()}}" readonly>
              <input type="submit" value="Encaisser"> 
            </div>
          </form>

        </div>     
    </div>           
</div>

<!--**** left sidebar ******-->
<div class="sidebar">
   <div class="logo_content">
      <div class="logo">
        <i class='bx bx-restaurant'></i>
        <div class="logo_name" style="color:orange;">Categories</div>
      </div>
    </div>

    @php
    $category = DB::table('categories')->get();
    @endphp

     <ul class="nav_list">
     @foreach($category as $categ)
        <li>
          <a href="{{ route('category.product',['category_slug'=>$categ->slug]) }}">
            <i class='bx bx-food-menu'></i>
            <span class="links_name">{{$categ->name}}</span>
          </a>
          <span class="tooltip">{{$categ->name}}</span>
        </li>
      @endforeach
      </ul>

    <!-- Suplement -->
    <div class="logo_content">
      <div class="logo">
        <i class='bx bxs-plus-square'></i>       
        <div class="logo_name" style="color:orange;">Supplément</div>
      </div>
    </div>

      @php
        $catsuppl = DB::table('suppl_categories')->get();
      @endphp

    <ul class="nav_list">
      @foreach($catsuppl as $extra)
        <li>
          <a href="{{ route('extra.product',['catg_slug'=>$extra->slug]) }}">
            <i class='bx bx-plus'></i>
            <span class="links_name">{{$extra->name}}</span>
          </a>
          <span class="tooltip">{{$extra->name}}</span>
        </li>      
      @endforeach
    </ul>
</div>

{{ $slot }}

</div>
 <!--***************Footer************** -->
<footer>
  <div class="footer-left">
    <div class="footer-links" style="margin:0;"> 
      <p style="margin:2px;"><i class='bx bx-user'></i><span style="color:black;margin-left:10px;font-weight:700;">Caissier : <span style="color:#fc8505;font-weight:800;" >{{ Auth::user()->name }}</span></span></p>
      <p><i class='bx bx-log-out'></i><a href="{{ route('logout') }}" ><span style="color:#fc8505;font-weight:800;margin-left:10px;">Logout</span></a></p> 
      <div class="img-cart-row">  
        <a href="{{ route('cart') }}"><img  class="cart" src="../assets/images/carte.png" alt=""></a> 
        <a href="{{ route('user.product') }}"><img  class="row" src="../assets/images/prod.jpg" alt=""></a>
     </div>
    </div>
   
  </div>
</footer>

<!-- Scripts-->
<script src="../assets/js/script.js"></script>
<script src="../assets/js/jquery.js"></script>     
<script src="../assets/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>  
@livewireScripts

<script  script type="text/javascript"> 
  $(document).ready(function() {
        $(".toCalculate").keyup(function() {
        var total=0;          
          var num1=1*$("#montant").val() || 0;
          var num2=1*$("#total").val() || 0;
          total = num1 - num2;
          $(".reste").val(total);        
      });
  });

</script>
</body>
</html>