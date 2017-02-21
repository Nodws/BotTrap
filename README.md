# BotTrap
honeypot to block evil spammers and crawlers


## Install
You will need root access to your Linux server, add this to your vhost .conf file

    RewriteEngine On
    RewriteMap access txt:/var/www/FULLPATH/blacklist.txt

Just add the link on the top of your website before the actual navigation.

## But... Why?
Of course you can skip that and modify nope to add IP range blocks directly to your .htaccess, but that's just messy, you have to make your htaccess writable (big NO NO)  and creates huge files that don't play whell with Wordpress.
