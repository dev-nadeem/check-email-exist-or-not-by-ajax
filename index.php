<!DOCTYPE html>
<html>
<head>
    <style>
        .container{
            width: 700px;
            margin: 50px auto;
        }
        #search-email{
            padding: 10px;
            border: solid 1px #BDC7D8;
            margin-bottom: 10px;
            display:inline;
            width: 50%;
            float:left;
        }
        #search-result{
            font-size: 17px;
            padding: 5px;
            width: 400px;
        }
    </style>
    
</head>
<body>
    <div class="container">
        <div id="search-box">
            <label>Check Email Availability by Ajax</label><br><br>
            <input type="email" id="search-email" name="search-email" placeholder="Enter your Email">
        </div>
        <div id="search-result"></div>
        
    </div>
    <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
    <script>
    $(document).ready(function(){
       $('#search-email').blur(function(){
          var value = $(this).val(); 
          liveCheckEmail(value);
       });
    });
    
    function liveCheckEmail(val) {
        $.post('process.php',{'search-email':val}, function(data){
            if(data == "Found") {
                $('#search-result').html("<span style='color:red; font-weight:bold;'>Email is already Registered</span>");
            } else {
                $('#search-result').html("<span style='color:green; font-weight:bold;'>Email Address is Available</span>");
            }
        }).fail(function(xhr, ajaxOptions, throwError) {
        alert(throwError);
        });
    }
    </script>
</body>

</html>
