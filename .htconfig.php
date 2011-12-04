<?php
/* 
*    Autoload classes based on namespace = directory structure (PHP 5.3+ style)
*	It also strtolowers the path which breaks autoloading on case sensitive file
*	systems, like linux. Additionally, PHP Devs will not fix because it would break
*	BC Math in PHP. I'm continuing to use this built in version instead of say,
*	http://groups.google.com/group/php-standards/web/psr-0-final-proposal?pli=1
*	because of speed and less typing. Just remember all directory structures are
*	lowercase because of this limitation in PHP itself, however class names will
*	ContinueToBeWrittenLikeThis.
*/
spl_autoload_extensions(".class.php");
spl_autoload_register();

?>