<?php
function get_pseudo($id) {
   global $bdd;
   $pseudo = $bdd->prepare('SELECT login FROM users WHERE id_u = ?');
   $pseudo->execute(array($id));
   $pseudo = $pseudo->fetch()['login'];
   return $pseudo;
}
?>