<?php
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.g-second.net/css/style.php?file=bootstrap.min">
        <link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title><?= $title ?> | スコア管理システム</title>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="./">スコア管理システム</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><?= isset($screenName) ? $screenName : "ログインしていません"; ?></a></li>
                    </ul>
                </div>
            </div>
        </nav>
<?php
    if(isset($statusdata) && $statusdata !== []) {
?>
        <div class="container">
            <div class="alert alert-dismissible alert-success">
                <strong><?= $statusdata["title"] ?></strong> <?= $statusdata["detail"] ?>
            </div>
        </div>
<?php
    }
?>