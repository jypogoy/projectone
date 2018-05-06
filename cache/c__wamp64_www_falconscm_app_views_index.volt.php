<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="<?= $this->url->get('img/favicon.ico') ?>"/>
        
        <?= $this->tag->getTitle() ?>
        <?= $this->tag->stylesheetLink('css/bootstrap.min.css') ?>
        <?= $this->tag->stylesheetLink('semantic/semantic.min.css') ?>
        <?= $this->tag->stylesheetLink('semantic/calendar.min.css') ?>
        <?= $this->tag->stylesheetLink('jqueryui/jquery-ui.min.css') ?>
        <?= $this->tag->stylesheetLink('jqueryui/jquery-ui.structure.css') ?>
        <?= $this->tag->stylesheetLink('toastr/toastr.min.css') ?>
        <?= $this->tag->stylesheetLink('css/app.css') ?>

    </head>
    <body>
        <?= $this->tag->javascriptInclude('js/jquery-3.3.1.min.js') ?>        
        <?= $this->getContent() ?>                
        <?= $this->tag->javascriptInclude('jqueryui/jquery-ui.min.js') ?>       
        <?= $this->tag->javascriptInclude('semantic/semantic.min.js') ?>
        <?= $this->tag->javascriptInclude('semantic/calendar.min.js') ?>
        <?= $this->tag->javascriptInclude('toastr/toastr.min.js') ?>
        <?= $this->tag->javascriptInclude('js/hashmap.js') ?> 
        <?= $this->tag->javascriptInclude('js/keypress.js') ?> 
        <?= $this->tag->javascriptInclude('js/accounting.min.js') ?> 

        <?= $this->tag->javascriptInclude('js/app.js') ?>
        <?= $this->tag->javascriptInclude('js/util.js') ?>
        <?= $this->tag->javascriptInclude('js/list.js') ?>
        <?= $this->tag->javascriptInclude('js/message.js') ?>
        <?= $this->tag->javascriptInclude('js/form.js') ?> 
    </body>
</html>
