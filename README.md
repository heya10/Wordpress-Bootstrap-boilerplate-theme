bootstrap_boilerplate
===

Hello. This project is created to save some time. If you want to create wordpress theme with bootstrap as a foundation I think you may like this one.

Based on:

* _s - starter theme ( https://github.com/automattic/_s )
* bootstrap - framework ( http://getbootstrap.com/ )
* wp-bootstrap-navwalker - needed if you want to display dropdown menu ( http://twittem.github.io/wp-bootstrap-navwalker/ )

Getting Started
---------------

Of course you can do whatever you can do with "_s" theme because this theme is based on "_s".

Lets see what can you do in addition to this.

* edit "screenshot.png" file to change theme screenshot (you can see it when you are choosing theme)
* edit "images/logo.jpg" file to change logo (the one displayed at the top of your website)
* you need custom style ? you can add your customization at the end of "style.css"

At the end of "style.css" file there is additional customization (932 line) there are few useful option
* (lines 936 - 941) firstly you should change a:visited and a:active (at least this two) to override default (ugly) style
* if you need custom font uncomment lines 969 - 983 and add your font (Rememeber ! If you need external font you will probably need to import that font)

Custom theme
---------------

Now fun part ! You need completly diferent style ? No problem just replace "css/bootstrap.min.css" with your own one. Check bootswatch there is few really great themes https://bootswatch.com/
You can also try your luck with http://getbootstrap.com/customize/

Good luck wtih your own customization !

Site example
---------------

![Site example](http://heya10.github.io/projects_images/bootstrap_boilerplate_site_example.png)