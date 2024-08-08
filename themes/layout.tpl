<!DOCTYPE html>
<html lang="vi">
    <head>
        <title><?=$title_tag?></title>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta http-equiv="Content-Language" content="vi"/>
        <!--Title - Description -->
        <meta name="title" content="<?=$title_tag?>">
        <meta name="description" content="<?=$description_tag?>" />
        <?php include_once $style; ?>
	</head>
	<body>
        <?php include_once $header; ?>
        <?php
            if (file_exists($path = THEME . $controller .DS .$action. TPL)) {
                include_once $path;
            } else {
                include_once $notfound;
            }
        ?>
        <?php include_once $footer; ?>
        <?php include_once $script; ?>
	</body>
</html>