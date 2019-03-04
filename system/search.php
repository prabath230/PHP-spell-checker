<html lang="en">

      <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <style>  
          .color{
              padding:12px;
            }
          .list-unstyled{
              background-color:#eee;  
              cursor:pointer;
            }
           </style>  
      </head>
<body>
<?php 

            $connect = mysqli_connect("localhost", "root", "", "helabasa");
            
            /* change character set to utf8 */
              if (!$connect->set_charset("utf8")) {
                  printf("Error loading character set utf8: %s\n", $connect->error);
              } else {
                  
              }

            if(isset($_POST["query"]))  
            {  
              $output = '';  
              $query = "SELECT * FROM words WHERE word LIKE '%".$_POST["query"]."%'"; 
             

              $result = mysqli_query($connect, $query); 
             

              $output = '<ul class="list-unstyled">'; 

              if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_array($result)) {
                  $output .= '<li class="color">'.$row["word"].'</li>';
                  
                }
              }

              
              else  
              {  
                 $output .= '<li>Country Not Found</li>';  
          }  
              $output .= '</ul>';  
              echo $output; 
          }
         ?> 

  </body>
</html>