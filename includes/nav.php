<ul class="navbar-nav">
  <?php
    foreach($nav_links as $nav_link) {
      echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"$nav_link[slug]\">$nav_link[title]</a></li>";
    }
  ?>
</ul>