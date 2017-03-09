<!DOCTYPE html>
<html>
<head>
	<title>Question 2</title>
<style>
div.img {
    margin-top: 150px;
    margin-left: 500px;
    border: 1px solid #ccc;
    float: left;
    width: 580px;
}

div.img:hover {
    border: 1px solid #777;
}

div.img img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}

input {
  margin-left: 245px;
}
</style>
</head>
<body>

<script type="text/javascript">

  var tries = 0;
  function getAnswer(){
    var guess = prompt("Enter your answer here: ", "NUMBERS AREN'T ALLOWED");
    guess = guess.toLowerCase();
    if (isNaN(guess)) {
      switch (guess){
        case ('animal'):
        case ('rhino'):
          alert("You're normal!");
          window.location="3.php?1=<?php echo $_GET['1']?>&2=correct";
          break;
        default:
          alert("You're an addict!");
          window.location="3.php?1=<?php echo $_GET['1']?>&2=wrong";
          break;
      }
    } else if (tries>=2){
      window.location="911.php";
    }
    else {
      tries++;
      getAnswer();
    }
    
  }

</script>

<div class="img">
  <a>
    <img src="img/animal.jpg" alt="Test1" width="500" height="600">
  </a>
  <div class="desc">What do you see in this picture</div>
  <input type="button" value="Enter Answer" onclick="getAnswer()">
</div>

</body>
</html>