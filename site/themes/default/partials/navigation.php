<nav class="navbar navbar-expand-lg navbar-light">
<div class="container">
  <a class="navbar-brand" href="<?php echo Url::getBase(); ?>"><h1 class="h1"><img src="https://avatars1.githubusercontent.com/u/14968615?s=400&u=4f7dfa99b0eb7638d6ce452230c0b16299ba598e&v=4" class="site-logo" width=40 /> <b>COMPONENTS</b></h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link <?php if (Url::getUriSegment(0) == 'documentation') echo 'active'; ?>" href="<?php echo Url::getBase(); ?>/documentation"><span class="span">Documentation</span></a>
      </li>
    </ul>
  </div>
</div>
</nav>
