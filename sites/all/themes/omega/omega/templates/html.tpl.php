<?php print $doctype; ?>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf->version . $rdf->namespaces; ?>>
<head<?php print $rdf->profile; ?>>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

  <!--[if IE 7]>
  <style type="text/css" media="all">@import url("http://juanruedaconinternational.com/sites/all/themes/juan_rueda/css/ie7.css");</style>
<![endif]-->
<!--[if IE 8]>
  <style type="text/css" media="all">@import url("http://juanruedaconinternational.com/sites/all/themes/juan_rueda/css/ie7.css");</style>
<![endif]-->


</head>
<body<?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
