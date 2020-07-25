
<html>
<head>
<title>Form site</title>
<style>body {
  background-image: url("img/bg.jpg") ;
  background-repeat: repeat-x;
}

    div.b{
        text-indent: 30%;
    margin-top: 50px;
    color: white}
        
 div.c{ text-indent: 40%;
       color: white;}
    div.a {margin-top: 70px;
    margin-left:400px;
     
    }
  div.d {
  background-color: #ffcccc;
  width: 300px;
  border: 15px solid black;
  padding: 50px;
  margin: 20px;
}
    
    
    </style>
</head>
<body>
    <div class="b">
        <h1> Vrei să accesezi materialele noastre gratuit?</h1></div>
    <div class="c">
    <h1>    Înregistrează-te!</h1></div>
    
    
    
    
 <div class="a">
<form method="post" action="connect.php">
    <div class="d">

    Email: <input type="text" name="email"><br><br>
   Nume de utilizator: <input type="text" name="username"><br><br>
   Parolă: <input type="password" name="password"><br><br>
<input type="submit" value="Înregistrează-te"></div>
</form></div></body>
</html>