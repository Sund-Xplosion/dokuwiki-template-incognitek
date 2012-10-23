<?php
/**
 * DokuWiki Incognitek Template
 *
 * @link   http://wwww.incognitek.com/redge
 * @author Daniel Sperl <redge@incognitek.com>
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die(); 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $conf['lang']?>"
 lang="<?php echo $conf['lang']?>" dir="<?php echo $lang['direction']?>">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>
    <?php tpl_pagetitle()?>
    [<?php echo strip_tags($conf['title'])?>]
  </title>
  <link rel="shortcut icon" href="<?php echo DOKU_TPL?>images/favicon.ico" />
  <?php tpl_metaheaders()?>
  <?php include('ie6_fixes.php'); ?>
</head>

<body>
  <?php html_msgarea()?>
  <div class="dokuwiki">    
    <div id="header">
      <?php 
      tpl_link(wl(),'<img id="logo" src="'.DOKU_TPL.'images/logo.png" alt="'.hsc($conf['title']).'" width="316" height="116" />',
               'accesskey="h" title="[ALT+H]"');
      ?>
      <div id="navigation">
        <?php include('menu.php'); ?>
      </div>      
    </div>
    <div id="corpus">

      <?php if($conf['breadcrumbs']) {?>
      <div id="breadcrumbs"><?php tpl_breadcrumbs()?></div>
      <?php } elseif ($conf['youarehere']) {?>
      <div id="breadcrumbs"><?php tpl_youarehere() ?></div>
      <?php }?>
      <?php flush()?>    

      <div id="kopfzeile">
        <div id="kopfzeile_left">
          <?php tpl_button('edit')?>
        </div>
        <div id="kopfzeile_center">
          <?php tpl_button('admin')?>
          <?php tpl_button('profile')?>
          <?php tpl_button('login')?>
        </div>
        <div id="kopfzeile_right">
          <?php tpl_searchform(); ?>
        </div>
      </div>

      <div class="page">

        <!-- wikipage start -->
        <?php tpl_content(); ?>
        <!-- wikipage stop -->

        <div class="clearer">&nbsp;</div>

        <div id="pageinfo">
          <div id="user"><?php tpl_userinfo()?></div>
          <div id="doc"><?php tpl_pageinfo();
             if ($INFO['exists']) { 
                echo " &middot; ["; 
                tpl_actionlink('history'); 
                echo "]"; 
             }?>
          </div>   
        </div>   
      </div>     

      <div id="footer">
        <div id="footer_left">
          <?php tpl_button('edit')?>
        </div>
        <div id="footer_center">
          <?php tpl_button('subscription')?>
          <?php #tpl_button('admin')?>
          <?php #tpl_button('profile')?>
          <?php #tpl_button('login')?>
        </div>
        <div id="footer_right">
	  <?php #tpl_searchform(); ?>
        </div>        
      </div>

    </div>

    <?php
    $tgt = ($conf['target']['extern']) ? 'target="'.$conf['target']['extern'].'"' : '';
    ?>

    <div class="footerinc">
      <a <?php echo $tgt?> href="<?php echo DOKU_BASE; ?>feed.php" title="Recent changes RSS feed"><img src="<?php echo DOKU_TPL; ?>images/button-rss.png" width="80" height="15" alt="Recent changes RSS feed" /></a>
      <a <?php echo $tgt?> href="http://www.php.net" title="Powered by PHP"><img src="<?php echo DOKU_TPL; ?>images/button-php.gif" width="80" height="15" alt="Powered by PHP" /></a>
      <a <?php echo $tgt?> href="http://validator.w3.org/check/referer" title="Valid XHTML 1.0"><img src="<?php echo DOKU_TPL; ?>images/button-xhtml.png" width="80" height="15" alt="Valid XHTML 1.0" /></a>
      <a <?php echo $tgt?> href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3" title="Valid CSS"><img src="<?php echo DOKU_TPL; ?>images/button-css.png" width="80" height="15" alt="Valid CSS" /></a>
      <a <?php echo $tgt?> href="http://wiki.splitbrain.org/wiki:dokuwiki" title="Driven by DokuWiki"><img src="<?php echo DOKU_TPL; ?>images/button-dw.png" width="80" height="15" alt="Driven by DokuWiki" /></a>
    </div>
  
  </div>

<?php if ($conf['allowdebug']) { 
    echo '<!-- page made in '.round(delta_time(DOKU_START_TIME), 3).' seconds -->';
} ?>

<div class="no"><?php /* DokuWiki housekeeping */ tpl_indexerWebBug()?></div>
</body>
</html>
