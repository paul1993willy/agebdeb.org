<?php defined('SYSPATH') or die('No direct script access.'); ?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo __($title) ?></title>
<meta name="description" content="<?php echo __($description) ?>" />
<meta name="keywords" content="<?php echo $keywords ?>" />

<?php echo HTML::style("asset/css/bootstrap.min.css") ?>
<?php echo HTML::style("asset/css/agebdeb.css") ?>

<?php echo HTML::script("asset/css/bootstrap.min.js") ?>

<script type="text/javascript">
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-40207514-1', 'agebdeb.org');
    ga('send', 'pageview');
</script>
