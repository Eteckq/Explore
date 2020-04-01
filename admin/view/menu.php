<a class="nav-header" href="/admin">
<img src="/include/images/logo.svg" alt="Explore logo" width="150px" height="150px"/>
</a>

<a class="nav-item" href="/admin/account">
  <span>Liste des admins</span>
  <div class="icon">
  <i class="fas fa-user-cog"></i>
  </div>
</a>

<a class="nav-item" href="/admin/prestation">
  <span>Liste des prestations</span>
  <div class="icon">
  <i class="fas fa-hands-helping"></i>
  </div>
</a>

<a class='nav-item' onClick="destroy()" href="/">
<span>Deconnexion</span>
  <div class="icon">
    <i class="fas fa-sign-out-alt"></i>
  </div>
</a>

<a class="nav-item" href="/">
<span>Retour sur le site</span>
  <div class="icon">
    <i class="fas fa-arrow-left"></i>
  </div>
</a>



<script>
  function destroy() {
    document.cookie = "PHPSESSID=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  }
</script>