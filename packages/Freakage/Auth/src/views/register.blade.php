<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <!-- Styles -->
   <link href="{{url('/')}}/css/register.css" rel="stylesheet">
   <script src="{{url('/')}}/js/register.js" ></script>

<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<form action="{{route('user_register')}}" method="post">
@csrf
<h3>Registration Form</h3>
  <label>
    <p class="label-txt">ENTER YOUR NAME</p>
    <input type="text" name="name" class="input">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">ENTER YOUR EMAIL</p>
    <input type="email" name="email" class="input">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">ENTER YOUR PASSWORD</p>
    <input type="password" name="password" class="input">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <button type="submit">Submit</button>
</form>
</body>
</html>