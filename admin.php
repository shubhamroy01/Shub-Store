<html>  
<head>  
    <title>Shub Store</title>  
    <style>
        body{   
    background: #eee;  
    }  
    #frm{  
        border: solid gray 1px;  
        width:25%;  
        border-radius: 2px;  
        margin: 120px auto;  
        background: white;  
        padding: 50px;  
    }  
    #btn{  
        color: #fff;  
        background: #337ab7;
        padding: 2%;
    }
    </style>
</head>  
<body>  
    <div id = "frm">  
        <center>
        <h1>Login</h1>  
        <form name="f1" action = "adlogin.php" onsubmit = "return validation()" method = "POST">
                <table>
                    <tr>
                        <td><label> User Name:</label></td>
                        <td><input type = "text" id ="user" name  = "user" /></td>
                    </tr>
                    <tr>
                        <td><label> Password: </label></td>
                        <td><input type = "password" id ="pass" name  = "pass" /></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2"><center><input type="submit" value="Log In" id="btn"></center></td>
                    </tr>
                </table>  
            <p>     
                  
            </p>
        </center> 
        </form>  
    </div>  
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }
                else
                {
                    if(id.length=="") {
                        alert("User Name is empty");
                        return false;
                    }
                    if (ps.length=="") {
                    alert("Password field is empty");
                    return false;
                    }
                }
            }
        </script>
</body>
</html>