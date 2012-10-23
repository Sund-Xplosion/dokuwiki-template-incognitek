<!-- FIXES FOR IE6:
The logo and other images should be able to use transparent pngs. Since
internet explorer 6 does not support them, I use the script 'iepngfix.htc'. 
However, the script cannot handle the background shadow of the content div. 
So we have to rebuild these elements without the shadow.       
-->

<!--[if lt IE 7]>
<script type="text/javascript">
  // This must be a path to a blank image. Used by 'iepngfix.htc'
  if (typeof blankImg == 'undefined') var blankImg = '<?php echo DOKU_TPL."images/blank.gif"?>';
</script>
<style type="text/css">
  div.dokuwiki {
    margin: 0px 9px;
    border-left: 1px solid black;
    border-right: 1px solid black;
    background-image: none;
    background-color: white;
    width: 690px; /* miraculously needed when a right aligned image is taller 
                     than the text on a page */
  }
  div#breadcrumbs {
    background-image: none;
    background-color: #bbddd4;
    margin: 9px 9px 0 9px;
    border-right: 1px solid black;
    border-top: 1px solid black;
    border-left: 1px solid black;
    padding: 3px 6px 3px 6px;
  }
  div#footer {
    background-image: none;
    background-color: #bbddd4;
    margin: 0px 9px 9px 9px;
    border-right: 1px solid black;
    border-bottom: 1px solid black;
    border-left: 1px solid black;
    border-top: none;
    padding: 10px 18px 11px 18px;
  }

  div#navigation ul li a { border: none; margin: 0px 1px; }
  div#navigation ul li a:hover { border: 1px solid black; margin: 0px 0px; }
  textarea#wiki__text { width: 650px; }

  img {
     behavior: url(<?php echo DOKU_TPL."iepngfix.php"?>);
  }
</style>
<![endif]-->
