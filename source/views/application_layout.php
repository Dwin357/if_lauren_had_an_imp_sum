<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php echo $title; ?></title>
  </head>
  <body>
    <div id="wrapper">
      <nav id="navigation">
        <ul id="nav">
          <li>
            <?php echo "<a href=/fizz.php>Fizz</a>";?>
          </li>
          <li>
            <?php echo "<a href=/bang.php >Bang</a>"; ?>
          </li>
          <li>
            <?php echo "<a href=/splash.php >Splash</a>"; ?>
          </li>
        </ul>
      </nav>
      <p><?php echo $content; ?></p>
    </div>
  </body>
</html>