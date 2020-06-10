<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* 

  .regBtn {
      color:#ffffff;
      background-color: #ffefd5;
      color: black;
      padding: 16px 20px;
      margin: 8px 0;
      border: 2px solid #9a1115;
	  border-radius: 30px;
      cursor: pointer;
      width: 40%;
      margin-left: 30%;
      font-size:13pt;
      outline: none;

    }

    .regBtn:hover {
      color:#9a1115;
      background-color: #ffffff;
      border: 2px solid #9a1115;
	  border-radius: 30px;;
      opacity:1;
      font-size:13pt;
      outline: none;
    }
	#container{

      border: 20 px solid;
      align="center"
      width:90vh;
      border-radius:20px;
	  margin-top: 30px;
	  margin-bottom: 30px;
	  
    }
</style>
</head>
<body>


<div id="container">
  <form >
	   <button type="button" class="regBtn" onclick="window.location.href='form.php'"><b>Register</b></button></a><br><br>
	    <button type="button" class="regBtn" onclick="window.location.href='data.php'"><b>Search for donar</b></button>
  </form>
</div>

</body>
</html>
