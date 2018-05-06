<nav class="ui fixed menu" id="menu">
    <a href="#" class="header item">
        <img class="logo" src="/{{ appName }}/public/img/falcon.png" style="width: 32px; height: 32px;">{{ appName | upper }}
    </a>
    {{ elements.getMenu() }}
</nav>

<div class="ui main stackable container">
    {{ flash.output() }}
    {{ content() }}    
    <div class="footer text-muted"><p>&copy; Davao Fibre, Copyright 2018, All rights reserved.</p></div>
</div>