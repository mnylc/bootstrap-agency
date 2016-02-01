<header id="navbar" role="menubar" class="<?php print $navbar_classes; ?>">
  <div class="container">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
<?php if (!empty($site_name)): ?>
      <a class="name navbar-brand" href="<?php print drupal_is_front_page() ? '#' : $front_page; ?>" title="<?php print t('Home'); ?>">Home</a>
      <?php endif; ?>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="?q=node/4">about the fellowship</a>
                    </li>
                    <li>
                        <?php if (user_is_logged_in()) {
                          echo "<a class=\"page-scroll\" href=\"/node/add/reverse-pitch\">submit an idea!</a>";
                        }
                        else {
                            echo "<a class=\"page-scroll\" href=\"/?q=user/login\">log in / join</a>";
                        }
                      ?>
                      </li>  
                    <li>
                        <a class="page-scroll" href="http://metro.org" target="blank">about METRO</a>
                    </li>
                    <?php
                    $currentuser = $user->name;
                     if (user_is_logged_in()) {
                          echo "<li><a class=\"page-scroll user-logged-in\" href=\"/user/logout\">log out $currentuser</a></li>";
                        } ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
  </div>
</header>

<div class="container">
	<div class="pitch-login">
		<h2>We are so happy you want to be a part of this!</h2>
		<p>So, if you are new here, <a href="/user/register">sign up for your account now</a>.  If you've been here before, log in below.  This means that you'll be able to write down your problem of practice as a pitch that everyone can see.</p>
		<?php print drupal_render(drupal_get_form('user_login')); ?>
		<a href="user/password">Request new password"</a>
	</div>
</div>

<footer class="footer container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                  <?php print render($page['footerl']); ?>
                    
                </div>
                <div class="col-md-4">
                  <?php print render($page['footerc']); ?>
                    
                </div>
                <div class="col-md-4">
                  <?php print render($page['footerr']); ?>
                   
                </div>
            </div>
        </div>
</footer>