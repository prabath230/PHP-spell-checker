<html>
<head>
<meta charset="utf-8">
  <title> සිංහල අක්ෂර නිවැරදි කරනය</title>
  <meta name="description" content="Hello World">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link href="../css/reset.css" rel="stylesheet" type="text/css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>

	function commentSubmit(){
		if(form1.name.value == '' && form1.comments.value == ''){ //exit if one of the field is blank
			alert('Enter your message !');
			return;
		}
		var name = form1.name.value;
		var comments = form1.comments.value;
		var xmlhttp = new XMLHttpRequest(); //http request instance
		
		xmlhttp.onreadystatechange = function(){ //display the content of insert.php once successfully loaded
			if(xmlhttp.readyState==4&&xmlhttp.status==200){
				document.getElementById('comment_logs').innerHTML = xmlhttp.responseText; //the chatlogs from the db will be displayed inside the div section
			}
		}
		xmlhttp.open('GET', 'insert.php?name='+name+'&comments='+comments, true); //open and send http request
		xmlhttp.send();
	}
	
		$(document).ready(function(e) {
			$.ajaxSetup({cache:false});
			setInterval(function() {$('#comment_logs').load('logs.php');}, 2000);
		});
		
</script>
</head>
<body>
<header>
    <div class="navbar navbar-default navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img src="../img/logo.png">
        </div>
        <div class="collpase navbar-collapse" id="example">
          <div class="navbar-form navbar-right">
            <ul class="nav nav-pills">
                <li><a href="../index.php">මුල් පිටුව</a></li>
                <li><a href="../about.html">පද්ධතිය ගැන</a></li>
                <li class="active"><a href="index.php">යෝජනා</a></li>
                <li><a href="../download/index.php">ප්‍රභව කේතය බාගන්න</a></li>
            
            </ul>
          </div>
        </div>

      </div>
    </div>
  </header>

    <div class="tab-pane fade in active">
    <div class="jumbotron">
      <div class="container">
      <center>  <h1 style="font-family:sans-serif; padding-top:20px;">හෙලබස</h1>
        <h3 style=" font-family:sans-serif; padding-top:20px; font-size:24px;"> සිංහල අක්ෂර නිවැරදි කරනය</h3></center>
      </div> 
    </div> 

<div id="container">
	<div class="page_content" style="padding-left: 18px;">
    	<h3>Add your sugesstions</h3>
    </div>
    <div class="comment_input">
        <form name="form1" class="navbar-form ">
        	<input type="text" name="name" placeholder="Enter your name"/></br></br>
            <textarea name="comments" placeholder="Enter your suggestion.." style="width:635px; height:100px;"></textarea></br></br>
            <a href="#" onClick="commentSubmit()" class="btn btn-primary">Post</a></br>
        </form>
    </div>
    <div id="comment_logs" style="padding-left: 18px;">
    	Loading comments...
    	
    <div>
</div>
<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>