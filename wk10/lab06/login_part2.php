$badpasswords=array(
"123456",
"123456789",
"qwerty",
"password",
"111111",
"12345678",
"abc123",
"1234567",
"password1",
"12345"
)

$guess="someGuess426"
$username=$_POST['hidden']
$inputpass=$_POST['password']
$submit=$_POST['submit']
if(issset($_POST['submit']) && isset($_POST['password']) && isset($_POST['hidden])){
if(in_array($inputpass,$badpasswords)){
echo "<h2>failed</h2>";
}else if($inputpass == $guess){
echo "<h2>welcome $username to yourportal </h2>"
}

?>