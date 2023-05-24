<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
</head>

<body>
    <h2>Đăng nhập</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label>Mã sinh viên:</label>
        <input type="text" name="MaSV"><br><br>
        <label>Mã môn học:</label>
        <input type="MaMonHoc" name="MaMonHoc"><br><br>
        <input type="submit" value="Nhập thông tin">
    </form>
</body>

</html>
