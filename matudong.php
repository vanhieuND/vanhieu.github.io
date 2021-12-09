<?php
session_start();
$macode = $_SESSION['my_captcha'];
?>
<html>
<head>
<title>Demo of a  form showing  Captcha image </title>
<script type="text/javascript">
function reload()
{
img = document.getElementById("capt");
img.src="captcha.php?rand_number=" + Math.random();
}
</script>

</head>
<body >
<input type=text id="manhapvao">
<img src=captcha.php id="capt" >
<input type=button onClick='reload();' value='Reload image'>
<input type=submit id='submit'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#submit").click(function(){
            var manhap = $("#manhapvao").val();
            var macu = '<?php echo $macode;?>';
            console.log( manhap);
            console.log( macu)
            // if(manhap==macu){
            //     alert('1')
            // } else{
            //     alert('2')
            // }
            
            // $.ajax({
            //   url : "captcha.php",
            //   type: "POST",
            //   data : {mavao:manhap,hoatdong:'kiemtra'},
            //   success: function(response) {
            //       if(response=='true'){
            //           alert(' thanh cong')
            //       } else {
            //           alert('khong thanh cong')
            //       }
            //     }
            // });
        });
    });
</script>
</body>
</html>
