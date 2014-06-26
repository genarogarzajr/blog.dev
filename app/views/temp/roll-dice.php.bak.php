
<html>

<head>
	<title>routing Exercise</title>
</head>
<body>
<h2>routing Exercise</h2>
the roll was <?=$random; ?><br>
your guess was <?=$guess; ?><br>

<? if ($random == $guess) : ?>
	<p style="color:green;"> Your guess was correct!</p>
<? else : ?>
<p style="color:red;"> Your guess was wrong!</p>
<? endif; ?>
</body>
</html>