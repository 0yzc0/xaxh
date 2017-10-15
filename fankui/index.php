<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <title>反馈页面</title>
</head>
<body>
	<div>
	<form action="fankui.php" method="post">
        <h1>实名反馈</h1>
        <p>姓名:
            <select name="title">
                <option value="先生">男</option>
                <option value="女士">女</option>
            </select> 
            <input type="text" name="name" size="20" />
        </p>

        <p>邮箱:<input type="text" name="email" size="20" /></p>
        <p>回复:本产品...
            <input type="radio" name="response" value="优秀" /> 优秀
            <input type="radio" name="response" value="一般" /> 一般
            <input type="radio" name="response" value="无聊" /> 无聊
        </p>
 
        <p>建议: <textarea name="comments" rows="3" cols="30"></textarea></p>

        <input type="submit" name="submit" value="反馈" /> 
    </form>
    </div>
</body>
</html>