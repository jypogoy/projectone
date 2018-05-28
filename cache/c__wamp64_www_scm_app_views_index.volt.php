<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="<?= $this->url->get('img/favicon.ico') ?>"/>
        
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <?= $this->tag->getTitle() ?>
        <?= $this->tag->stylesheetLink('dist/semantic-ui/semantic.min.css') ?>
        <?= $this->tag->stylesheetLink('css/default.css') ?>
        <?= $this->tag->stylesheetLink('css/pandoc-code-highlight.css') ?>
        
        <?= $this->tag->stylesheetLink('css/common.css') ?>
        <?= $this->tag->stylesheetLink('css/menu.css') ?>
                
    </head>
    <body>    
        <?= $this->tag->javascriptInclude('dist/jquery/jquery-3.3.1.min.js') ?>        
        <?= $this->getContent() ?>  
        <?= $this->tag->javascriptInclude('dist/semantic-ui/semantic.min.js') ?>
        <?= $this->tag->javascriptInclude('js/app.js') ?>   
    </body>
</html>
