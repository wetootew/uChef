<?php
include('db.php');
?>
<!DOCTYPE html> 
<title>uChef</title>
<link rel="stylesheet" type="text/css" href="style.css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>
function addField(e,event) {
  event.preventDefault();
  alert(event.keyCode + 'ver 2');
  if (event.keyCode == 8 && e.getElementsByTagName('input')[0].value == "") 
    e.parentNode.removeChild(e);
  if (event.keyCode != 13) 
    return true;
  var cloned = e.cloneNode(true);
  var inputs = cloned.getElementsByTagName('input');
  e.parentNode.insertBefore(cloned, e.nextSibling);
  for(var i = 0; i < inputs.length; i++)
    inputs[i].value = "";
  inputs[0].focus();
  return false;
} 

function fitResize(t) {
  t.style.height = 'auto';
  t.style.height = (t.scrollHeight  + t.offsetHeight - t.clientHeight ) + 'px';    
}
 
   // t.addEventListener && t.addEventListener('input', function(event) { resize(t); });
   // t['attachEvent']  && t.attachEvent('onkeyup', function() { resize(t); });

function toggle(obj) {
        var el = document.getElementById(obj);
        el.style.display = (el.style.display == 'none' ? '' : 'none' );
}
</script>

<div id=desk>
<header>
  <a href=index.php><h1>uChef</h1></a>
  <ul>
    <li><a href=#>Nuova ricetta</a>
    <li><a href=#>Cerca ricetta</a>
    <li><a href=#>Ricettario</a>
    <li><a href=#>Nozioni di cucina</a>
  </ul>
</header>

<form action=# method=post>
  <input type=text name=nome id=nome value="Nome Ricetta">
  <span id=pax> <label>per </label><input name=quantpers type=number maxlength=4 min=0 step=1 max=999 value="1"> <label> persone</label></span>
  <div>
  <datalist id="ingredients">
    <option value="Farina">
    <option value="Zucchero">
    <option value="Sale">
    <option value="Opera">
    <option value="Safari">
  </datalist> 
  <ul>
    <li onkeydown="return addField(this,event)">
      <input name=ingredients[] type=text maxlength=20
               autocomplete=on list=ingredients >
      <input name=quantities[] type=number maxlength=4 
           autocomplete=on min=0 step=10 max=1000>
  </ul>
  </div>
  <textarea id="ta" onkeyup="fitResize(this)">procedimento</textarea>  
  <br><input type=submit value=Invia!>
  <input type=submit value="Inserimento avanzato!" onclick="toggle('insavanzato');return false"> 
  <div id="insavanzato" style="display:none;">
    <label>Tempo di preparazione: </label><input name=tempo type=text maxlength=20><br>
    <label>Cottura: </label><input name=tempo type=text maxlength=20><br>
    <label>Colore </label><input name=tempo type=text maxlength=20><br>
    <label>Tipo di piatto: </label><input name=tempo type=text maxlength=20><br>
  </div>
  
</form>
</div>
