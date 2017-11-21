
<?php
include_once __DIR__.'/../../header.php';

require __DIR__.'/../../Parsedown.php';
require __DIR__.'/../../ParsedownExtra.php';
require __DIR__.'/../../ParsedownExtraPlugin.php';

// $Parsedown = new Parsedown();
$parser = new ParsedownExtraPlugin();

$content = file_get_contents(realpath(__DIR__ . '/../../..').'/markdown/enterprise/get-started/home.md');


?>


<!-- Sidebar -->

    <!-- Sidebar -->
    <aside class="col-sm-3 sidebar">
        <?php include_once realpath(__DIR__ . '/../../..').'/markdown/enterprise/doc-get-started-sidebar.md.php'; ?>
    </aside>
    <!-- END Sidebar -->

<!-- END Sidebar -->


<!-- Main content -->
<article class="col-sm-9 main-content" role="main">
    <header>
        <h1>First Time Login</h1>
    </header>

    <?php echo $parser->text($content); ?>

</article>


<?php include_once __DIR__.'/../../footer.php'; ?>
<script type="text/javascript">
$("table").addClass("table table-bordered table-striped");
$("a[href='<?php echo $siteUrl; ?>enterprise/get-started']").parent('li').addClass("active");
</script>
