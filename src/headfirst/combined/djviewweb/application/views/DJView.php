<html>
<head>
<title>DJ View</title>
</head>
<body>

<H1>DJ View</H1>
Beats per minute = <?php echo $beatModel->BPM ?>
<br />
<hr>
<br />

<form method="post" action="index.php?controller=DJView&action=change">
BPM: <input type=text name="bpm"
			value="<?php echo $beatModel->BPM ?>">
&nbsp;

<input type="submit" name="set" value="set"><br />
<input type="submit" name="decrease" value="&lt;&lt;">
<input type="submit" name="increase" value="&gt;&gt;"><br />
<input type="submit" name="on" value="on">
<input type="submit" name="off" value="off"><br />
</form>

</body>
</html>