<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title> සිංහල අක්ෂර නිවැරදි කරනය</title>     
       
  <meta name="description" content="Hello World">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
  

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
          <img src="img/logo.png">
        </div>
        <div class="collpase navbar-collapse" id="example">
          <div class="navbar-form navbar-right">
            <ul class="nav nav-pills">
                <li class="active"><a href="index.php">මුල් පිටුව</a></li>
                <li><a href="about.html">පද්ධතිය ගැන</a></li>
                <li><a href="comments/index.php">යෝජනා</a></li>
                <li><a href="download/index.php">ප්‍රභව කේතය බාගන්න</a></li>
               
            </ul>
          </div>
        </div>

      </div>
    </div>
  </header>
    
<div class="tab-content">
  <div class="tab-pane fade in active">
    <div class="jumbotron">
      <div class="container">
      <center>  <h1>හෙලබස</h1>
        <h3>සිංහල අක්ෂර නිවැරදි කරනය</h3></center> 
      </div> 
    </div>
    <div class="container">
      <div class="row">
        <center>
          <form class="navbar-form " role="search"  method="POST">
            <div class="form-group">
			 
              <input type="text" name="country"  id="country" class="form-control" placeholder="සිංහල වචනය ඇතුලත් කරන්න" style="width: 550px;height: 120px;">
			   </div>
            <button type="submit" class="btn btn-primary">සොයන්න</button>
          </form>
		  
          <div class="form-group" id="comment">
            <textarea class="form-control" rows="8" id="comment" style="width: 45%;font-size: 14pt;">
			
            <?php $connect = mysqli_connect("localhost", "root", "", "helabasa");
            
            /* change character set to utf8 */
              if (!$connect->set_charset("utf8")) {
                  printf("Error loading character set utf8: %s\n", $connect->error);
              } else {
                  
              }

            if (isset($_POST['country'])) {
               $search_query = $_POST['country'];

               $query = "SELECT * FROM words WHERE word LIKE '$search_query%' LIMIT 12";
              
               $result = mysqli_query($connect, $query);
              

              if (mysqli_num_rows($result) > 0) {
              while ($country_row = mysqli_fetch_array($result)) {
              
              echo "  ඔබ සෙවූ වචනය :  ".$country_row['word'];?>

             

              <?php
              echo "නිවැරදි වචනය :  ". $country_row['word'];?>

              <?php
             
              }
            }
            else {
              echo "No data found";
            }
          }

           ?></textarea>
           
          </div></center>
      </div>
    </div>
  </div>
 </div>    


<!-- <footer>
  <div class="footer-bottom" style="background-color: black;">
        <div class="container">
            <div class="row">
              <div class="col-md-6">
              <p style="padding-top: 3%;"> © Copyright WiBuz.com. All Rights Reserved</p>
              </div>
            </div>
        </div>
    </div>
</footer> -->
    
  <!-- Latest compiled and minified JavaScript -->
  <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body> 
</html>
<script>  
 $(document).ready(function(){  
      $('#country').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"search.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#comment').fadeIn();  
                          $('#comment').html(data);  
                     }  
                });  
           }
                 
      });  
      $(document).on('click', 'li', function(){  
           $('#country').val($(this).text());  
           $('#comment').fadeOut();  
      });  
 }); 


 </script>



