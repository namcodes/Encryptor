<?php
$text = $_POST['string'];
if(isset($_POST['submit'])){
  
  if(!empty($text)){
  $encryptermd5 = md5($text);
  $encrypterhash = password_hash($text, PASSWORD_DEFAULT);
  $hash .= $encrypterhash;
  $md5 .= $encryptermd5;
  
  }else{
    $error .= "Enter text first";
    $hash .= "";
  }
}else{
  
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Text Encryptor/Generato</title>
  <link rel="stylesheet" href="style.css" type="text/css" media="all" />
</head>
<body>
  <div class="container">
    <section class="content encrypt">
      <header>
        Text Hash/MD5 Encryptor
      </header>
      <form method="POST" autocomplete="off">
        <p class="status"><?php echo $error?></p>
        <div class="form-input submit">
          <input type="text" name="string" placeholder="Enter your text here." />
          <button type="submit" name="submit">Encrypt</button>
        </div>
        <div class="form-group">
          <label for="md5">String MD5</label>
          <input type="text" name="md5" value="<?php echo $md5 ?>" readonly />
        </div>
        <div class="form-group">
          <label for="hash">String Hash</label>
          <input type="text" name="hash" value="<?php echo $hash ?>" readonly />
        </div>
      </form>
      <p>
        Developed By : Noel Mallari<br>Copy Right &copy September 22, 2020
      </p>
    </section>
  </div>
  <script type="text/javascript" charset="utf-8">
    const button = document.querySelector(".submit button");
  button.onclick = () => {
    let error = document.querySelector("form .status");
    const text = document.querySelector(".submit input");
   
    if(text.value == ""){
      error.style.display = "block";

    }else{
      error.style.display = "none";
    }
  }
  </script>
  </body>
</html>