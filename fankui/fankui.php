<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <title>反馈成功</title>
</head>
<body>
    <h1>反馈成功</h1>
    <?php 
        $title = $_POST['title'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $response = $_POST['response'];
        $comments = $_POST['comments'];

        print "<p>尊敬的".$name.$title."，感谢您给我们提出的建议，您给我们的评价是'$response'。</p> <p>您的邮箱是：$email,您给我们提出的建议是：<br/>$comments</p>";
     ?>
</body>
</html>