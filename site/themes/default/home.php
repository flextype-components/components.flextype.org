<?php Flextype\Templates::display('partials/head'); ?>
<center>
    <div class="mega-header">
        <h1 class="heading">FLEXTYPE COMPONENTS</h1>
        <h2 class="sub-heading">A set of decoupled and reusable<br> PHP libraries for kickass<br> Web Applications.</h2>
        <br>
        <p class="p">
            We comply to the standards of the <a href="https://www.php-fig.org" class="external">PHP-FIG.</a><br>
            We adhere to the best-practices put forward by <a href="http://www.phptherightway.com" class="external">PHP The "Right" Way.</a><br>
            We distribute code via <a href="https://packagist.org" class="external">Packagist</a> and <a href="https://getcomposer.org" class="external">Composer.</a><br>
        </p>
    </div>
</center>

<?php echo $page['content']; ?>

<?php Flextype\Templates::display('partials/footer'); ?>
