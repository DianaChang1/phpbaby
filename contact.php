<?php

if(isset($_POST["action"])&&($_POST["action"]=="add")){
	require_once("conn.php");
	//若沒有執行新增的動作	
		$query_insert = "INSERT INTO question (name, birthdate, phone, contactime) VALUES (?, ?, ?, ?)";
		$stmt = $db_link->prepare($query_insert);
		$stmt->bind_param("ssss", 
			$_POST["name"],$_POST["birthdate"],$_POST["phone"], $_POST["contactime"]);
		$stmt->execute();
		$stmt->close();
		$db_link->close();
		header("Location: contact.php?loginStats=1");
	}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="common.css">
    <style>
         body{
          background-color: #f6eff7
     }
      .banner{
        background-image:url(images/212121.jpg);
        background-repeat: no-repeat;
        background-position:center center; 
       }
       .content{
        background-color: #FFD2A8;
        margin-top:5px; 
        width: 100%;
    	}
    
    	.button{
    	    display: block;
    		margin-bottom:20px; 
    	}
   </style>
   <script>
      function check(){
if(document.form1.phone.value!="")
{
    uid=document.form1.phone.value;
		if(!(uid.length==8 || uid.length==10)){
			alert( "電話輸入錯誤，請重新輸入!" );
			document.form1.phone.focus();
			return false;}
		if(!(uid.charAt(0)==0)){
			alert("電話輸入錯誤，請重新輸入!" );
			document.form1.phone.focus();
			return false;
        }
      }
      
      }
      </script>
   </head>

   <body>
    <?php if(isset($_GET["loginStats"]) && ($_GET["loginStats"]=="1")){?>
<script language="javascript">
alert('回覆成功!感謝您寶貴的意見!');
window.location.href='contact.php';
</script>
<?php }?>
     <div class="container">
  <div class="row">
<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light col-12">
  <a class="navbar-brand" href="index.html">沐綿會館</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">關於我們 <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="hall.html">環境設備</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="room.html">房型介紹</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="food.html">月子膳食</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="contact.php">聯絡我們</a>
      </li>
    </ul>
  </div>
</nav>

<div class="banner"></div>
<div class="content container">
<h4 style="text-align:center;padding-top:10px">聯絡我們</h4>
	<form name="form1" class="row justify-content-center" method="post" onsubmit="return check();">
  <div class="form-group col-8">
    <label for="formGroupExampleInput">媽媽姓名</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" name="name">
  </div>
  <div class="form-group col-8">
    <label for="formGroupExampleInput2">預產期</label>
    <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="Another input" name="birthdate">
  </div>
  <div class="form-group col-8">
    <label for="formGroupExampleInput">連絡電話</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" name="phone">
  </div>
  <div class="form-group col-8">
    <label for="formGroupExampleInput">方便聯繫時間</label>
    <input type="date" class="form-control" id="formGroupExampleInput" placeholder="Example input" name="contactime">
  </div>
  <div class="col-12"></div>
  <input type="hidden" name="action" value="add">
  <button type="submit" class="btn btn-danger button">送出</button>
</form>
</div>
 <footer>
       <p class="footertext">電話:05 636 556 | 地址: 632雲林縣虎尾鎮西安里五間厝31-7號</p>
  </footer>
 </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>