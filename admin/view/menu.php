<a class="nav-link" href="/">RETOUR</a>
<a class="nav-link" href="/admin/account">Liste des admins</a>
<a class="nav-link" href="/admin/prestation">Liste des prestations</a>
<a onClick="destroy()" href="/">DECONNEXION</a>



<script>
function destroy(){
    document.cookie = "PHPSESSID=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
}
</script>