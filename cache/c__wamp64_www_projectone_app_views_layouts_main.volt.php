

<div class="ui fixed borderless huge menu">
    <div class="ui fluid container grid">
        <div class="computer only row">
            <a class="header item"><img class="logo" src="img/falcon-icon.png" style="width: 32px; height: 32px; margin-right: 10px;">ProjectOne</a>
            <a class="active item">Home</a>
            <a class="item">About</a>
            <a class="item">Contact</a>
            <a class="ui dropdown item">Dropdown<i class="dropdown icon"></i>
                <div class="menu">
                    <div class="item">Action</div>
                    <div class="item">Another action</div>
                    <div class="item">Something else here</div>
                    <div class="ui divider"></div>
                    <div class="header">Navbar header</div>
                    <div class="item">Seperated link</div>
                    <div class="item">One more seperated link</div>
                </div>
            </a>
            <div class="ui simple dropdown item">
                More
                <i class="dropdown icon"></i>
                <div class="menu">
                    <a class="item"><i class="edit icon"></i> Edit Profile</a>
                    <a class="item"><i class="globe icon"></i> Choose Language</a>
                    <a class="item"><i class="settings icon"></i> Account Settings</a>
                </div>
            </div>
            <div class="ui simple dropdown item">
                Multi Cols
                <i class="dropdown icon"></i>
                <div class="menu" style="width: 800px;">
                    <div class="ui three column relaxed divided grid">
                        <div class="column">
                            <h4 class="ui header">Business</h4>
                            <div class="ui link list">
                                <a class="item">Design &amp; Urban Ecologies</a>
                                <a class="item">Fashion Design</a>
                                <a class="item">Fine Art</a>
                                <a class="item">Strategic Design</a>
                            </div>
                        </div>
                        <div class="column">
                            <h4 class="ui header">Liberal Arts</h4>
                            <div class="ui link list">
                                <a class="item">Anthropology</a>
                                <a class="item">Economics</a>
                                <a class="item">Media Studies</a>
                                <a class="item">Philosophy</a>
                            </div>
                        </div>
                        <div class="column">
                            <h4 class="ui header">Social Sciences</h4>
                            <div class="ui link list">
                                <a class="item">Food Studies</a>
                                <a class="item">Journalism</a>
                                <a class="item">Non Profit Management</a>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="right menu">
                <a class="ui item">
                    <i class="icon bell outline"></i>
                    <div class="floating ui red label" style="padding:2px 3px; top: 15px; left: 45px;">
                        <span>12</span>
                    </div>
                </a>
                <a class="ui item">
                    <i class="icon tasks"></i>
                    <div class="floating ui orange label" style="padding:2px 3px; top: 15px; left: 45px;">
                        <span>12</span>
                    </div>
                </a>
                <a class="ui item">
                    <i class="icon mail outline"></i>
                    <div class="floating ui blue label" style="padding:2px 3px; top: 15px; left: 45px;">
                        <span>12</span>
                    </div>
                </a>
                <a class="ui dropdown item">
                    <img class="ui avatar image" src="img/avatar/elliot.jpg"><span style="padding-left: 10px;">Jeffrey Pogoy</span><i class="dropdown icon"></i>
                    <div class="menu">
                        <div class="item"><i class="edit icon"></i>Edit Profile</div>
                        <div class="item"><i class="settings icon"></i>Account Settings</div>
                        <div class="ui divider"></div>
                        <div class="item"><i class="sign out icon"></i>Sign out</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="tablet mobile only row">
            <a class="header item"><img class="logo" src="img/falcon-icon.png" style="width: 32px; height: 32px; margin-right: 10px;">ProjectOne</a>
            <div class="right menu">
                <a class="menu item">
                    <div class="ui basic icon toggle button">
                    <i class="content icon"></i>
                    </div>
                </a>
                </div>
                <div class="ui vertical accordion borderless fluid menu">
                <a class="active item">Home</a>
                <a class="item">About</a><a class="item">Contact</a>
                <div class="item">
                    <div class="title">Dropdown<i class="dropdown icon"></i></div>
                    <div class="content">
                        <a class="item">Action</a>
                        <a class="item">Another action</a>
                        <a class="item">Something else here</a>
                        <div class="ui divider"></div>
                        <a class="header item">Navbar header</a>
                        <a class="item">Seperated link</a>
                        <a class="item">One more seperated link</a>
                    </div>
                </div>
                <div class="ui divider"></div>
                <a class="item">Profile</a>
                <a class="item">Settings</a>
                <div class="ui divider"></div>
                <a class="item">Sign out</a>                   
            </div>
        </div>
    </div>
</div>

<?= $this->getContent() ?>

<div class="ui footer text-muted"><p>&copy; Copyright 2018, All rights reserved.</p></div> 