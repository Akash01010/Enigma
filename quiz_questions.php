<?php $i=1;
?>
<html>
<head>
  <title>Welcome</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
  <link href="div.css" rel="stylesheet">
  <!-- <link href="style.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="style1.css">

  <style>
  body{
    background-color:#F1F1F1;
  }
</style>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>
    /*$(function () {
        $('input.more').on('click', function () {
            var $table = $('#input_fields');
            var $tr = $table.find('form').eq(0).clone();
            //$tr.appendTo($table).find('input').val('');
            $tr.appendTo($table).find('form');
        });
    });*/
$(function () {
        $('input.less').on('click', function () {
          var i;
          //for (i = 0; i <document.getElementsByClassName('input_fields').length ; i++) {
          //document.getElementById('input_fields').
          document.getElementsByTagName('form')[0].submit();
          //}
        });
});

$(function () {
        $('input.more').on('click', function () {
            var $table = $('#quick_post');
            var $tr = $table.find('#input_fields').eq(0).clone();
            //$tr.appendTo($table).find('input').val('');
            $tr.appendTo($table).find('#input_fields');
        });
    });
</script>
<script>

</script>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#myPage"><img src="images\iitmandi_logo.jpg" style=" width: 60px"> IIT Mandi</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#root">Root Login</a></li>
        <!--<li><a href="#login">Login</a></li>
        <li><a href="#signup">SignUp</a></li>
        <li><a href="#joinus">Join Us</a></li>
        <li><a href="#contact">Contact Us</a></li>-->
      </ul>
    </div>
  </div>
</nav><br>


       <form id="quick_post" method="post"  class="myForms" action="http://localhost:234/proj/add_quiz_to_database.php">
        <div id="input_fields" class="division" style="width:900px;position:relative;top:auto;left:-230px;right:0px;">
      
      <header style=""><font size="6">Question <?php /*echo $i; $i++;*/ ?></font></header>
      <div style="background-color:#F1F1F1;border-radius: 10px;">
        <table style="border-radius: 10px;">
          
          <tr> 
            <td><textarea class="orderinput" type="comment" name="question[]" style="width:900;height:200;border-radius: 10px;" row="5"></textarea></td>
          </tr>
      </div>
      <tr>
            <td><br></td>
          </tr>
          <tr>
            <td><b> OPTION A :</b></td><td><input  type="text" name="optionA[]" placeholder="Option A" style="width:400px;margin-left:-520px;padding: 10px;
  border: solid 1px #dcdcdc;
  transition: box-shadow 0.3s, border 0.3s;border: solid 1px #707070;
  box-shadow: 0 0 5px 1px #969696;" ></td></tr><tr>
            <td><b> OPTION B :</b></td><td><input type="text" name="optionB[]" placeholder="Option B" style="width:400px;margin-left:-520px;padding: 10px;
  border: solid 1px #dcdcdc;
  transition: box-shadow 0.3s, border 0.3s;border: solid 1px #707070;
  box-shadow: 0 0 5px 1px #969696;"></td>
          </tr>

          <tr>
            <td><b> OPTION C :</b></td><td><input type="text" name="optionC[]" placeholder="Option C" style="width:400px;margin-left:-520px;padding: 10px;
  border: solid 1px #dcdcdc;
  transition: box-shadow 0.3s, border 0.3s;border: solid 1px #707070;
  box-shadow: 0 0 5px 1px #969696;"></td></tr><tr>
            <td><b> OPTION D :</b></td><td><input type="text" name="optionD[]" placeholder="Option D" style="width:400px;margin-left:-520px;padding: 10px;
  border: solid 1px #dcdcdc;
  transition: box-shadow 0.3s, border 0.3s;border: solid 1px #707070;
  box-shadow: 0 0 5px 1px #969696;"></td>
          </tr>
          <tr>
            <td><br><br></td>
          </tr>
          <tr>
            <td style="width:50px;margin:0;padding:0;border:1px black"><b> Correct Option :</b></td><td><input type="text" name="corr_ans[]" placeholder="Correct Option" maxlength="1" style="width:400px;margin-left:-520px;padding: 10px;
  border: solid 1px #dcdcdc;
  transition: box-shadow 0.3s, border 0.3s;border: solid 1px #707070;
  box-shadow: 0 0 5px 1px #969696;"><br></td>
          </tr>
          <tr>
            <td><br></td>
          </tr>
        </table>
      </div>
    </div><br><br>
      </form>

      
      <input class="more" type="button" value="Addmore" name="addmore" onclick="function()" style="margin-left:1000px">
      <input class="less" type="button" id="clickMe" value="Submit ALL" onclick="function()">
  <br><br><br>
</body>
</html>


<!-- <div class="container">
	<form id="quick_post" method="post" action="http://localhost:234/proj/add_quiz_to_database.php"> 
<div id="input_fields"><table>


 <tr> 
   <td><textarea class="orderinput" type="comment" name="question[]" style="width:800;height:300" row="5"></textarea></td>
</tr>


<tr>
  
    <td>
     <input  type="text" name="optionA[]"  maxlength="3" placeholder="Option A" style="width:510px" ></td>
     <td>
      <input type="text" name="optionB[]" maxlength="3" placeholder="Option B" style="margin-left:-550px ;width:510px"></td>
      
</tr>


<tr>
     <td><input class="orderquan" type="text" name="optionB[]" maxlength="3" placeholder="Option B" width:"50px"><br></td>
</tr>


<tr>
   
     <td><input type="text" name="optionC[]"  maxlength="3"placeholder="Option C" style="width:510px"></td>
      <td><input class="orderquan" type="text" name="optionB[]" maxlength="3" placeholder="Option D" style=" margin-left:-510px ; width:510px"></td>
      
</tr>


<tr>
     <td><input type="text" name="corr_ans[]" placeholder="Correct Answer" maxlength="3" style="width:1024px"><br>
  </td>
</tr>
<tr><td>
  <br></td>
</tr>

 </table> </div> -->       
 <!-- <input class="more" type="submit" value="Submit" name="addmore" style="margin-left:1000px" 
 onclick="location.href='http://localhost:234/proj/add_quiz_to_database.php?question=<?php //echo $ques; ?>';">
 -->
<!--<script type="text/javascript">
/*$('.myForms').submit(function () {
    console.log("");
    return true;
})

$("#clickMe").click(function () {
    $(".myForms").trigger('submit'); // should show 3 alerts (one for each form submission)
});*/	
// $(function () {
  //      $('input.more').on('click', function () {


/*$("#clickMe").click(function(){
var arr;
arr = document.getElementById('input_fields').getElementsByTagName('form');
var i=0;
//document.write(i);
for (i = 0; i <list.length ; i++) {
  <?php// echo $i; ?>
  document.getElementById('input_fields').getElementsByTagName('form')[i].submit;
}
});*/

  <body>
  </html>















/*$('.myForms').submit(function () {
    //console.log("");
    alert($(this).attr("id"));
    return true;
})

  $(function () {
        $('input.less').on('click', function () {
    var arr[];
    arr[] = document.getElementById('input_fields').getElementsByTagName('form');
    
      var i;
    for (i = 0; i <document.getElementById('input_fields').getElementsByTagName('form').length ; i++) {
      document.getElementById('input_fields').getElementsByTagName('form')[i].submit();
}
});
});*/


/*$(function () {
        $('input.less').on('click', function () {
          var i;
          for (i = 0; i <document.getElementsByClassName('input_fields').length ; i++) {
          document.getElementById('input_fields').getElementsByTagName('form')[i].submit();
          }
        });
});*/