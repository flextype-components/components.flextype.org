<?php
    namespace Flextype;
    use Flextype\Component\{Event\Event, Http\Http, Registry\Registry};
?>
<?php Themes::template('partials/head')->display(); ?>
<main role="main" class="container">
    <h2 class="h2"><?php echo $page['title']; ?></h2>
    <div class="content">
        <?php echo $page['content']; ?>
    </div>
</main>
<?php Themes::template('partials/footer')->display(); ?>
