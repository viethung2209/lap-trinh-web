<html>
<head>
    <title>Product Information Request</title>
</head>
<body>
<form action="ex1-action.php" method="post" >
    <h1>Happy Harry's Hardware Product Information</h1>
    <table>
        <tr>
            <td>Enter product code (Use AB## format):</td>
            <td><input type="text" size="6" name="code"></td>
        </tr>
        <tr>
            <td>Please enter description:   </td>
            <td><input type="text" size="50" name="description"></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </td>
        </tr>
    </table>
</form>
</body>
</html>