<?php Flextype\Templates::display('partials/head'); ?>
<main role="main" class="container">
    <?php if (Url::getUriSegment(1) == '') { ?>
    <h2 class="h2"><?php echo $page['title']; ?></h2>
    <?php } ?>
    <div class="content">
          <div class="row">
              <div class="col-10 flex-content">
                  <?php echo $page['content']; ?>
              </div>
            <div class="col-2 right-nav">
                <nav class="nav flex-column">
                  <a class="nav-link <?php if (Url::getUriSegment(1) == 'agent') echo 'active'; ?>" href="<?php echo Url::getBase(); ?>/documentation/agent">Agent</a>
                  <a class="nav-link <?php if (Url::getUriSegment(1) == 'arr') echo 'active'; ?>" href="<?php echo Url::getBase(); ?>/documentation/arr">Arr</a>
                  <a class="nav-link <?php if (Url::getUriSegment(1) == 'cookie') echo 'active'; ?>" href="<?php echo Url::getBase(); ?>/documentation/cookie">Cookie</a>
                  <a class="nav-link <?php if (Url::getUriSegment(1) == 'curl') echo 'active'; ?>" href="<?php echo Url::getBase(); ?>/documentation/curl">Curl</a>
                  <a class="nav-link <?php if (Url::getUriSegment(1) == 'date') echo 'active'; ?>" href="<?php echo Url::getBase(); ?>/documentation/date">Date</a>
                  <a class="nav-link <?php if (Url::getUriSegment(1) == 'debug') echo 'active'; ?>" href="<?php echo Url::getBase(); ?>/documentation/debug">Debug</a>
                  <a class="nav-link <?php if (Url::getUriSegment(1) == 'filesystem') echo 'active'; ?>" href="<?php echo Url::getBase(); ?>/documentation/filesystem">Filesystem</a>
                  <a class="nav-link <?php if (Url::getUriSegment(1) == 'html') echo 'active'; ?>" href="<?php echo Url::getBase(); ?>/documentation/html">Html</a>
                  <a class="nav-link <?php if (Url::getUriSegment(1) == 'http') echo 'active'; ?>" href="<?php echo Url::getBase(); ?>/documentation/http">Http</a>
                  <a class="nav-link <?php if (Url::getUriSegment(1) == 'number') echo 'active'; ?>" href="<?php echo Url::getBase(); ?>/documentation/number">Number</a>
                  <a class="nav-link <?php if (Url::getUriSegment(1) == 'notification') echo 'active'; ?>" href="<?php echo Url::getBase(); ?>/documentation/notification">Notification</a>
                  <a class="nav-link <?php if (Url::getUriSegment(1) == 'template') echo 'active'; ?>" href="<?php echo Url::getBase(); ?>/documentation/template">Template</a>
                  <a class="nav-link <?php if (Url::getUriSegment(1) == 'text') echo 'active'; ?>" href="<?php echo Url::getBase(); ?>/documentation/text">Text</a>
                  <a class="nav-link <?php if (Url::getUriSegment(1) == 'token') echo 'active'; ?>" href="<?php echo Url::getBase(); ?>/documentation/token">Token</a>
                  <a class="nav-link <?php if (Url::getUriSegment(1) == 'session') echo 'active'; ?>" href="<?php echo Url::getBase(); ?>/documentation/session">Session</a>
                  <a class="nav-link <?php if (Url::getUriSegment(1) == 'registry') echo 'active'; ?>" href="<?php echo Url::getBase(); ?>/documentation/registry">Registry</a>
                </nav>
            </div>
          </div>
    </div>
</main>
<?php Flextype\Templates::display('partials/footer'); ?>
