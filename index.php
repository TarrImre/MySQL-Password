<html>  
<head>  
<meta charset="utf-8"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta http-equiv="content-type" content="application/json; charset=utf-8" />
    <title>Webesmegoldások</title>  
    <link rel = "stylesheet" type = "text/css" href = "style.css">   
</head>  
<body>  
    <div class="hatter">  
		<center>
        <h1>Bejelentkezés</h1>  
		<hr/>
        <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
            <p>  
                <label> Email: </label>
				<br/>				
                <input type = "email" id ="user" name  = "user" />  
            </p>  
            <p>  
                <label> Jelszó: </label>  
				<br/>	
                <input type = "password" id ="pass" name  = "pass" />  			 
            </p>  
			<p>
			    <input type =  "submit" id = "btn" value = "Login" /> 
			</p>
			<p>

			<br/><b>Tarr Imre<br/>IGXWVJ</b>
			<br/>
			<br/>
			<a class="gomb papir-hatter" href="https://toxy.hu/webesmegoldasok/kopapirollo/">Első projekt</a>
			</p>
        </form>  
		</center>
    </div>  
     
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("Email és jelszó mező üres!");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("Email kötelező!");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Jelszó kötelező!");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
</html>  