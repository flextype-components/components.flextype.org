<?php
    namespace Flextype;
    use Flextype\Component\{Event\Event, Http\Http, Registry\Registry};
?>
    <footer class="footer">
        <div class="container">
            <p class="social-links text-center">
                <a rel="nofollow" href="<?php echo Registry::get('site.social_link.github'); ?>"><i class="fab fa-github"></i></a>
                <a rel="nofollow" href="<?php echo Registry::get('site.social_link.vkontakte'); ?>"><i class="fab fa-vk"></i></a>
            </p>
            <p>
                <ul class="copyright">
                    <li>
                        <p><a href="<?php echo Http::getBaseUrl(); ?>">Flextype Components</a> was <i class="fa fa-code"></i> with <i class="fa fa-heart"></i> by <a href="http://awilum.github.io" class="highlight">Sergey Romanenko</a></p>
                        <p>Copyright © 2018 - Flextype Components - All rights reserved</p>
                    </li>
                </ul>
            </p>
        </div>
    </footer>
    <?php Themes::view('partials/tail')->display(); ?>
  </body>
</html>
