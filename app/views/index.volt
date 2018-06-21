<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/favicon.ico') }}"/>
        
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        {{ get_title() }}
        {{ stylesheet_link('dist/semantic-ui/semantic.min.css') }}
        {{ stylesheet_link('css/default.css') }}
        {{ stylesheet_link('css/pandoc-code-highlight.css') }}
        
        {{ stylesheet_link('css/common.css') }}
        {{ stylesheet_link('css/menu.css') }}
        {{ stylesheet_link('css/app.css') }}
                
    </head>
    <body>    
        {{ javascript_include('dist/jquery/jquery-3.3.1.min.js') }}        
        {{ content() }}  
        {{ javascript_include('dist/semantic-ui/semantic.min.js') }}
        {{ javascript_include('js/app.js') }}   
    </body>
</html>
