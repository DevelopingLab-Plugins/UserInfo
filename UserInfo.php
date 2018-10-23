<?php

echo '<b>Scritto da t.me/Matxk</b>';

																		t.me/DevelopingLab;
																		
//Comando Start
if($msg == "/start")
{
 sm($chatID, "<i>Bot avviato con successo!</i>\n\n<b>Inoltra o scrivi un messaggio per ricevere le info della persona che lo ha mandato</b>");
 exit;
}

//Comandi per mandare i dati dell' utente che invia il messaggio
if (isset($update['message']['forward_from'])) {
    if($fusername == null and $fcognome == null) {
        sm($chatID, "<b>Info Utente:</b>\n\n<i>ID: </i><code>$fuserID</code>\n<i>Nome: </i><code>$fnome</code>\n<i>Cognome: </i><b>Non settato</b>\n<i>Username: </i><b>Non settato</b>\n<i>Lingua:</i> <code>$lingua</code>");
    }elseif($fcognome == null) {
        sm($chatID, "<b>Info Utente:</b>\n\n<i>ID: </i><code>$fuserID</code>\n<i>Nome: </i><code>$fnome</code>\n<i>Cognome: </i><b>Non settato</b>\n<i>Username: </i>@$fusername\n<i>Lingua:</i> <code>$lingua</code>");
    }elseif($fusername == null) {
        sm($chatID, "<b>Info Utente:</b>\n\n<i>ID: </i><code>$fuserID</code>\n<i>Nome: </i><code>$fnome</code>\n<i>Cognome: </i><code>$fcognome</code>\n<i>Username: </i><b>Non settato</b>\n<i>Lingua:</i> <code>$lingua</code>");
    }elseif($fusername != null and $fcognome != null) {
         sm($chatID, "<b>Info Utente:</b>\n\n<i>ID: </i><code>$fuserID</code>\n<i>Nome: </i><code>$fnome</code>\n<i>Cognome: </i><code>$fcognome</code>\n<i>Username: </i>@$fusername\n<i>Lingua:</i> <code>$lingua</code>");
 }
exit;
}

if($msg) {
    if($username == null and $cognome == null) {
        sm($chatID, "<b>Info Utente:</b>\n\n<i>ID: </i><code>$userID</code>\n<i>Nome: </i><code>$nome</code>\n<i>Cognome: </i><b>Non settato</b>\n<i>Username: </i><b>Non settato</b>\n<i>Lingua:</i> <code>$lingua</code>");
    }elseif($cognome == null) {
        sm($chatID, "<b>Info Utente:</b>\n\n<i>ID: </i><code>$userID</code>\n<i>Nome: </i><code>$nome</code>\n<i>Cognome: </i><b>Non settato</b>\n<i>Username: </i>@$username\n<i>Lingua:</i> <code>$lingua</code>");
    }elseif($username == null) {
        sm($chatID, "<b>Info Utente:</b>\n\n<i>ID: </i><code>$userID</code>\n<i>Nome: </i><code>$nome</code>\n<i>Cognome: </i><code>$cognome</code>\n<i>Username: </i><b>Non settato</b>\n<i>Lingua:</i> <code>$lingua</code>");
    }elseif($username != null and $cognome != null) {
        sm($chatID, "<b>Info Utente:</b>\n\n<i>ID: </i><code>$userID</code>\n<i>Nome: </i><code>$nome</code>\n<i>Cognome: </i><code>$cognome</code>\n<i>Username: </i>@$username\n<i>Lingua:</i> <code>$lingua</code>");
 }
exit;
}