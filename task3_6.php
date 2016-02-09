<?php
$text= "<html>
<head>
<meta>
<1234>
<title>Insert title here</title>
</head>
<div>
<!%kdkdld;>
<jjs&jdkjd>
</47339>
</body>
</html>";
preg_match_all('#</{0,1}[a-z]+(\s>|[\s[a-z(=\")]+]*>|>)#', $text , $matches);
var_dump($matches);