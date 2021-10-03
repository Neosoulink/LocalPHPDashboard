<?php
function layout(string $children = ""): string
{
	$layout = '<!DOCTYPE html>
		<html lang="en">

		<head>
			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">

			<title>__TheDash</title>

			<link rel="stylesheet" href="' . Helpers::getAssetsPath() . '/css/index.css">
		</head>

		<body>
		' . $children . '
		</body>

		</html>
	';

	return $layout;
}
