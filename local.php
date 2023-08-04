# dokuwiki conf file
# locate: conf/local.php
# ! change the path according to your checkmk installation !

$conf['authtype']    = 'authmultisite';
$conf['multisite']['authfile'] = '/omd/sites/ng/var/check_mk/wato/auth/auth.php';
$conf['multisite']['auth_secret'] = '/omd/sites/ng/etc/auth.secret';
$conf['multisite']['auth_serials'] = '/omd/sites/ng/etc/auth.serials';
$conf['multisite']['htpasswd'] = '/omd/sites/ng/etc/htpasswd';

#...
