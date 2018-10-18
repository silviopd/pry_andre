<!doctype html>
<html lang="en-US">
<head>

	<meta charset="utf-8">

	<title>Login</title>

        <link href="css/iniciosescion.css" rel="stylesheet">

</head>

<body>

    <div id="login">
        
        <h1>&nbsp</h1>
        <h1>&nbsp</h1>
        <h1>&nbsp</h1>
        <h1>&nbsp</h1>
        <h1>&nbsp</h1>
        <h1>&nbsp</h1>
        
        <h1 style="font-size: 20px; text-align: center" ><a href="index.html"><i class="glyphicon glyphicon-arrow-left"></i></a>&nbsp&nbsp&nbsp&nbsp&nbspINICIAR SESIÓN</h1>
        <form action="javascript:void(0);" method="get" >
            
            <fieldset class="clearfix">                
                <p><span class="fontawesome-user"></span><input type="text" value="Usuario" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" ></p> <!-- JS because of IE support; better: placeholder="Username" -->
                <p><span class="fontawesome-lock"></span><input type="password"  value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" ></p> <!-- JS because of IE support; better: placeholder="Password" -->
                <p><input type="submit" value="Ingresar" id="btningresar" ></p>
            </fieldset>

        </form>
        
        <p>No eres cliente? <a href="">Registrese</a><span class="fontawesome-arrow-right"></span></p>

    </div> <!-- end login -->

    <script src="js/jquery.js"></script>
    
    <script type="text/javascript">        
        $("#btningresar").click(function (){
            document.location.href = "pago-listado.php";
        })        
    </script>
        
</body>
</html>