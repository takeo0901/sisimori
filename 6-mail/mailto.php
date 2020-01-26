<!DOCTYPE html>
<html>
<head>
　<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
　<title>sample</title>
</head>

<body>

  <?php
  			mb_language("Japanese");
  			mb_internal_encoding("UTF-8");

  			$to = 't.s-jpgbmudo@ezweb.ne.jp';
        $subject =  $_POST["subject"];
        $message =  $_POST["inquiry"];
        $from =  $_POST["mail"];

  			if(mb_send_mail($to, $subject, $message, $from)){
  				echo "メールを送信しました";
  			} else {
  				echo "メールの送信に失敗しました";
  			}
  		?>


　
　</body>
　
</html>
