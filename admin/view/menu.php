<?php
if (!isset($menu)) {
  $menu = "";
}
?>

<a class="nav-header" href="/admin">
  <img src="/include/images/logo.svg" alt="Explore logo" width="150px" height="150px" />
</a>

<div class="side-navbar">

  <a class="nav-item <?= $menu == 'accounts' ? "selected" : "" ?>" href="/admin/account">
    <div class="icon">
      <i class="fas fa-user-cog"></i>
    </div>
    <span>Admins</span>
  </a>

  <a class="nav-item <?= $menu == 'prestations' ? "selected" : "" ?>" href="/admin/prestation">
    <div class="icon">
      <i class="fas fa-hands-helping"></i>
    </div>
    <span>Prestations</span>
  </a>

  <a class="nav-item <?= $menu == 'events' ? "selected" : "" ?>" href="/admin/event">
    <div class="icon">
      <i class="fas fa-calendar-alt"></i>
    </div>
    <span>Evenements</span>
  </a>

  <a class='nav-item' onClick="destroy()" href="/">
    <div class="icon">
      <i class="fas fa-sign-out-alt"></i>
    </div>
    <span>Deconnexion</span>
  </a>

  <a class="nav-item" href="/">
    <div class="icon">
      <i class="fas fa-arrow-left"></i>
    </div>
    <span>Retour sur le site</span>
  </a>

</div>





<script>
  function destroy() {
    document.cookie = "PHPSESSID=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  }
</script>