<?php
// Check if the user has submitted the form
if (isset($_POST['submit'])) {
  // Get the user's preferences from the form
  $font_style = $_POST['font_style'];
  $font_size = $_POST['font_size'];
  $font_color = $_POST['font_color'];
  $background_color = $_POST['background_color'];

  // Set cookies to store the preferences for one hour
  setcookie('font_style', $font_style, time() + 3600);
  setcookie('font_size', $font_size, time() + 3600);
  setcookie('font_color', $font_color, time() + 3600);
  setcookie('background_color', $background_color, time() + 3600);

  // Redirect to the next page
  header('Location: next_page.php');
} else {
  // Display the form with default values
?>
<html>
<head>
<title>Preferences</title>
</head>
<body>
<form action="preferences.php" method="post">
<p>Select your preferences:</p>
<p>Font style: <select name="font_style">
<option value="Arial">Arial</option>
<option value="Times New Roman">Times New Roman</option>
<option value="Courier New">Courier New</option>
</select></p>
<p>Font size: <input type="number" name="font_size" value="12"></p>
<p>Font color: <input type="color" name="font_color" value="#000000"></p>
<p>Background color: <input type="color" name="background_color" value="#FFFFFF"></p>
<p><input type="submit" name="submit" value="Submit"></p>
</form>
</body>
</html>

<?php
}
?>
