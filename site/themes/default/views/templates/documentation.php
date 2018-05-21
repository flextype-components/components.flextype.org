<?php
    namespace Flextype;
    use Flextype\Component\{Event\Event, Http\Http, Registry\Registry};
?>
<?php Themes::view('partials/head')->display(); ?>
<main role="main" class="container">
    <?php if (Http::getUriSegment(1) == '') { ?>
    <h2 class="h2"><?php echo $page['title']; ?></h2>
    <?php } ?>
    <div class="content">
          <div class="row">
              <div class="col-10 flex-content">
                  <?php echo $page['content']; ?>
              </div>
            <div class="col-2 right-nav">
                <nav class="nav flex-column">
                  <a class="nav-link <?php if (Http::getUriSegment(1) == 'agent') echo 'active'; ?>" href="<?php echo Http::getBaseUrl(); ?>/documentation/agent">Agent</a>
                  <a class="nav-link <?php if (Http::getUriSegment(1) == 'arr') echo 'active'; ?>" href="<?php echo Http::getBaseUrl(); ?>/documentation/arr">Arr</a>
                  <a class="nav-link <?php if (Http::getUriSegment(1) == 'assets') echo 'active'; ?>" href="<?php echo Http::getBaseUrl(); ?>/documentation/assets">Assets</a>
                  <a class="nav-link <?php if (Http::getUriSegment(1) == 'cache') echo 'active'; ?>" href="<?php echo Http::getBaseUrl(); ?>/documentation/cache">Cache</a>
                  <a class="nav-link <?php if (Http::getUriSegment(1) == 'cookie') echo 'active'; ?>" href="<?php echo Http::getBaseUrl(); ?>/documentation/cookie">Cookie</a>
                  <a class="nav-link <?php if (Http::getUriSegment(1) == 'curl') echo 'active'; ?>" href="<?php echo Http::getBaseUrl(); ?>/documentation/curl">Curl</a>
                  <a class="nav-link <?php if (Http::getUriSegment(1) == 'date') echo 'active'; ?>" href="<?php echo Http::getBaseUrl(); ?>/documentation/date">Date</a>
                  <a class="nav-link <?php if (Http::getUriSegment(1) == 'debug') echo 'active'; ?>" href="<?php echo Http::getBaseUrl(); ?>/documentation/debug">Debug</a>
                  <a class="nav-link <?php if (Http::getUriSegment(1) == 'event') echo 'active'; ?>" href="<?php echo Http::getBaseUrl(); ?>/documentation/event">Event</a>
                  <a class="nav-link <?php if (Http::getUriSegment(1) == 'errorhandler') echo 'active'; ?>" href="<?php echo Http::getBaseUrl(); ?>/documentation/errorhandler">Error Handler</a>
                  <a class="nav-link <?php if (Http::getUriSegment(1) == 'filesystem') echo 'active'; ?>" href="<?php echo Http::getBaseUrl(); ?>/documentation/filesystem">Filesystem</a>
                  <a class="nav-link <?php if (Http::getUriSegment(1) == 'form') echo 'active'; ?>" href="<?php echo Http::getBaseUrl(); ?>/documentation/form">Form</a>
                  <a class="nav-link <?php if (Http::getUriSegment(1) == 'i18n') echo 'active'; ?>" href="<?php echo Http::getBaseUrl(); ?>/documentation/i18n">I18n</a>
                  <a class="nav-link <?php if (Http::getUriSegment(1) == 'html') echo 'active'; ?>" href="<?php echo Http::getBaseUrl(); ?>/documentation/html">Html</a>
                  <a class="nav-link <?php if (Http::getUriSegment(1) == 'http') echo 'active'; ?>" href="<?php echo Http::getBaseUrl(); ?>/documentation/http">Http</a>
                  <a class="nav-link <?php if (Http::getUriSegment(1) == 'number') echo 'active'; ?>" href="<?php echo Http::getBaseUrl(); ?>/documentation/number">Number</a>
                  <a class="nav-link <?php if (Http::getUriSegment(1) == 'notification') echo 'active'; ?>" href="<?php echo Http::getBaseUrl(); ?>/documentation/notification">Notification</a>
                  <a class="nav-link <?php if (Http::getUriSegment(1) == 'template') echo 'active'; ?>" href="<?php echo Http::getBaseUrl(); ?>/documentation/template">Template</a>
                  <a class="nav-link <?php if (Http::getUriSegment(1) == 'text') echo 'active'; ?>" href="<?php echo Http::getBaseUrl(); ?>/documentation/text">Text</a>
                  <a class="nav-link <?php if (Http::getUriSegment(1) == 'token') echo 'active'; ?>" href="<?php echo Http::getBaseUrl(); ?>/documentation/token">Token</a>
                  <a class="nav-link <?php if (Http::getUriSegment(1) == 'session') echo 'active'; ?>" href="<?php echo Http::getBaseUrl(); ?>/documentation/session">Session</a>
                  <a class="nav-link <?php if (Http::getUriSegment(1) == 'registry') echo 'active'; ?>" href="<?php echo Http::getBaseUrl(); ?>/documentation/registry">Registry</a>
                  <a class="nav-link <?php if (Http::getUriSegment(1) == 'view') echo 'active'; ?>" href="<?php echo Http::getBaseUrl(); ?>/documentation/view">View</a>
                </nav>
            </div>
          </div>
    </div>
</main>
<?php Themes::view('partials/footer')->display(); ?>
