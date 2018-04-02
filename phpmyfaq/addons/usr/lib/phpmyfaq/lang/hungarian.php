<?php
/* $Id: english.php,v 1.2 2002/11/29 20:12:43 arty Exp $ */
/* english.php - englische Sprachdatei */

$metaCharset 				= "UTF-8";
$metaLanguage 				= "hu";

// Navigation
$msgCategory            	= "Kategóriák";
$msgShowAllCategories   	= "Az összes kategória";
$msgSearch              	= "Keresés";
$msgAddContent          	= "Javaslat";
$msgQuestion            	= "Kérdés";
$msgOpenQuestions       	= "Nyitott kérdések";
$msgHelp                	= "Segítség";
$msgContact             	= "Kapcsolat";
$msgHome                	= "Kezdőlap";
$msgNews                	= "Tudásbázis-Hírek";
$msgUserOnline          	= "Aktív felhasználó";
$msgXMLExport           	= "XML-Fájl";
$msgBack2Home			= "vissza a kezdőlapra";

// Contentpages
$msgFullCategories      	= "Kategóriák a bejegyzésekkel";
$msgFullCategoriesIn      	= "Kategóriák a bejegyzésekkel: ";
$msgSubCategories       	= "Alkategóriák";
$msgEntries             	= "bejegyzés";
$msgEntriesIn 			= "Kérdések: ";
$msgViews               	= "megjelenítés";
$msgPage                	= "";
$msgPages               	= " oldal";
$msgPrevious            	= "előző";
$msgNext                	= "következő";
$msgCategoryUp			= "egy kategóriával feljebb";
$msgLastUpdateArticle   	= "Utolsó módosítás: ";
$msgAuthor			= "Szerző: ";
$msgPrinterFriendly     	= "Nyomtatható verzió";
$msgPrintArticle        	= "Bejegyzés nyomtatása";
$msgMakeXMLExport       	= "XML verzió";
$msgAverageVote         	= "Átlagos osztályzat:";
$msgVoteUseability     		= "Kérlek osztályozd a bejegyzést:";
$msgVoteFrom            	= "/";
$msgVoteBad             	= "használhatatlan";
$msgVoteGood            	= "remek";
$msgVotings			= "Szavazatok ";
$msgVoteSubmit          	= "Szavazás";
$msgVoteThanks          	= "Köszönjük a szavazatot!";
$msgYouCan              	= "Tudsz ";
$msgWriteComment        	= "megjegyzést fűzni a bejegyzéshez";
$msgShowCategory        	= "Tartalomjegyzék: ";
$msgCommentBy           	= "Megjegyzés ";
$msgCommentHeader       	= "Megjegyzés a bejegyzéshez";
$msgYourComment         	= "Megjegyzéseid:";
$msgCommentThanks       	= "Köszönjük a hozzászólást!";
$msgSeeXMLFile          	= "XML fájl megnyitása";
$msgSend2Friend			= "Küldd el a barátaidnak";
$msgS2FName			= "Neved:";
$msgS2FEMail			= "Email címed:";
$msgS2FFriends			= "A barátaid:";
$msgS2FEMails			= ". email címe:";
$msgS2FText			= "A következő szöveg lesz elküldve:";
$msgS2FText2                	= "A bejegyzést a következő címen érheted el:";
$msgS2FMessage			= "További üzenet:";
$msgS2FButton			= "email elküldése";
$msgS2FThx			= "Köszönjük az ajánlást!";
$msgS2FMailSubject		= "Recommendation from ";

// Search
$msgSearchWord          	= "Kulcsszó";
$msgSearchFind          	= "A keresés eredménye: ";
$msgSearchAmount        	= " találat";
$msgSearchAmounts       	= " találat";
$msgSearchCategory      	= "Kategória: ";
$msgSearchContent       	= "Tartalom: ";

// new Content
$msgNewContentHeader    	= "Javaslat a tudásbázishoz";
$msgNewContentAddon     	= "A javaslatod nem jelenik meg egyből a tudásbázisban, további sorsáról az adminisztrátor dönt. A kötelező mezők: <b>neved</b>, <b>email címed</b>, <b>kategória</b>, <b>cím</b> és <b>bejegyzés</b>. A kulcsszavakat csak szóközzel válaszd el.";
$msgNewContentUBB       	= "<p>Használhatsz UBB kódokat a kérdésedben. <a href=\"help/ubbcode.php\" target=\"_blank\">Segítség a UBB kódokhoz</a></p>";
$msgNewContentName      	= "Neved:";
$msgNewContentMail      	= "Email címed:";
$msgNewContentCategory  	= "Kategória:";
$msgNewContentTheme     	= "Cím:";
$msgNewContentArticle   	= "Szöveg:";
$msgNewContentKeywords  	= "Kulcsszavak:";
$msgNewContentLink      	= "Link ehhez a bejegyzéshez";
$msgNewContentSubmit    	= "elküld";
$msgInfo                	= "További információ: ";
$msgNewContentThanks    	= "Köszönjük a javaslatot!";
$msgNoQuestionsAvailable	= "Jelenleg nincs nyitott kérdés.";

// ask Question
$msgNewQuestion         	= "";
$msgAskCategory        		= "Kategória:";
$msgAskYourQuestion     	= "A kérdés:";
$msgAskThx4Mail         	= "<h2>Köszönjük a leveledet!</h2>";
$msgDate_User           	= "Dátum / Felhasználó";
$msgQuestion2           	= "Kérdés";
$msg2answer             	= "Javaslat";
$msgQuestionText        	= "Itt a többi látogató által feltett kérdéseket láthatod. Ha válaszolsz valamelyik kérdésre, akkor a válaszod bekerülhet a tudásbázisba.";

// Help
$msgHelpText            	= "<p>A Tudásbázis (FAQ) használata meglehetősen egyszerű. Kereshetsz a <b><a href=\"".$_SERVER["PHP_SELF"]."?sid=".isset($_GET["sid"])."&amp;aktion=anzeigen\">kategóriákban</a></b> vagy <b><a href=\"".$_SERVER["PHP_SELF"]."?sid=".isset($_GET["sid"])."&amp;aktion=search\">kulcsszavakra</a></b>.</p>";

// Contact
$msgContactEMail			= "email az adminisztrátornak:";
$msgMessage					= "Üzenet:";

// Startseite
$msgNews					= " Hír";
$msgTopTen					= "TOP 10";
$msgHomeThereAre        	= "Jelenleg ";
$msgHomeArticlesOnline  	= " bejegyzés érhető el";
$msgNoNews              	= "Ha nincs hír az jó hír.";
$msgLatestArticles      	= "Az utolsó öt beküldött kérdés:";

// E-Mailbenachrichtigung
$msgMailThanks          	= "Köszönjük a javaslatot.";
$msgMailCheck           	= "Új bejegyzés a tudásbázisban!\nEllenőrizd az admin részen!";
$msgMailContact         	= "Az üzenet postázva az adminisztrátornak.";

// Fehlermeldungen
$err_noDatabase         	= "Az adabázis elérhetetlen.";
$err_noHeaders          	= "Nincsenek kategóriák.";
$err_noArticles         	= "<p>Nincsenek bejegyzések.</p>";
$err_badID              	= "<p>Rossz ID.</p>";
$err_noTopTen           	= "<p>Még nincs TOP 10.</p>";
$err_nothingFound       	= "<p>Nincs bejegyzés.</p>";
$err_SaveEntries        	= "Required fields are <b>your name</b>, <b>your email address</b>, <b>category</b>, <b>headline</b> and <b>your Record</b>!<br><br>\n<a href=\"javascript:history.back();\">one page back</a><br><br>\n";
$err_SaveComment        	= "Required fields are <b>your name</b>, <b>your email address</b> and <b>your comments</b>!<br><br>\n<a href=\"javascript:history.back();\">one page back</a><br><br>\n";
$err_VoteTooMuch        	= "<p>We do not count double votings. <a href=\"javascript:history.back();\">Click here</a>, to go back.</p>";
$err_noVote             	= "<p><b>You did not rate the question!</b> <a href=\"javascript:history.back();\">Please click here</a>, to vote.</p>";
$err_noMailAdress       	= "Your email address is not correct.<br /><a href=\"javascript:history.back();\">back</a>";
$err_sendMail           	= "Required fields are <b>your name</b>, <b>your email address</b> and <b>your question</b>!<br><br>\n<a href=\"javascript:history.back();\">one page back</a><br><br>\n";

// Hilfe zur Suche
$help_search            	= "<p><b>Találatok:</b><br></p>";

// Menü
$ad                     	= "ADMIN RÉSZ";
$ad_menu_user_administration 	= "Felhasználók beállításai";
$ad_menu_entry_aprove   	= "Javasolt bejegyzések";
$ad_menu_entry_edit     	= "Bejegyzések szerkesztése";
$ad_menu_categ_add      	= "Kategória hozzáadása";
$ad_menu_categ_edit     	= "Kategória szerkesztése";
$ad_menu_news_add       	= "Hír hozzáadása";
$ad_menu_news_edit      	= "Hír szerkesztése";
$ad_menu_open			= "Nyitott kérdések szerkesztése";
$ad_menu_stat           	= "Statisztika";
$ad_menu_cookie         	= "Cookiek";
$ad_menu_session        	= "Sessionok listázása";
$ad_menu_adminlog       	= "Adminlog megjelenítése";
$ad_menu_passwd         	= "Jelszó változtatás";
$ad_menu_logout         	= "Kijelentkezés";
$ad_menu_startpage      	= "Kezdőlap";

// Nachrichten
$ad_msg_identify 			= "Kérlek azonosítsd magad.";
$ad_msg_passmatch 			= "Mindkét jelszónak <b>egyeznie</b> kell!";
$ad_msg_savedsuc_1 			= "Profil: ";
$ad_msg_savedsuc_2 			= "sikeresen tárolva.";
$ad_msg_mysqlerr 			= "<b>Adatbázis hiba</b> miatt a profilt nem lehet tárolni.";
$ad_msg_noauth 				= "Nincs jogosultságod.";

// Allgemein
$ad_gen_page 				= "oldal";
$ad_gen_of 				= "ból";
$ad_gen_lastpage 			= "Előző oldal";
$ad_gen_nextpage 			= "Következő oldal";
$ad_gen_save 				= "Tárolás";
$ad_gen_reset 				= "Reset";
$ad_gen_yes 				= "Igen";
$ad_gen_no 				= "Nem";
$ad_gen_top 				= "A lap teteje";
$ad_gen_ncf 				= "Nem találom a kategóriát!";
$ad_gen_delete 				= "Törlés";

// Benutzerverwaltung
$ad_user 				= "Felhasználók beállításai";
$ad_user_username 			= "Bejegyzett felhasználók";
$ad_user_rights 			= "Jogosultságok";
$ad_user_edit 				= "szerkesztés";
$ad_user_delete 			= "törlés";
$ad_user_add 				= "Felhasználó felvétele";
$ad_user_profou 			= "A felhasználó profilja";
$ad_user_name 				= "Név";
$ad_user_password 			= "Jelszó";
$ad_user_confirm 			= "Megerősítés";
$ad_user_rights 			= "Jogok";
$ad_user_del_1 				= "A felhasználót [";
$ad_user_del_2 				= "] valóban töröljem?";
$ad_user_del_3 				= "Biztos?";
$ad_user_deleted			= "A felhasználó törölve.";

// Beitragsverwaltung
$ad_entry_aor 				= "Bejegyzések szerkesztése";
$ad_entry_id 				= "ID";
$ad_entry_topic 			= "Tartalom";
$ad_entry_action 			= "Művelet";
$ad_entry_edit_1 			= "Bejegyzés szerkesztése";
$ad_entry_edit_2 			= "";
$ad_entry_theme 			= "Téma:";
$ad_entry_content 			= "Bejegyzés:";
$ad_entry_keywords 			= "Kulcsszavak:";
$ad_entry_author 			= "Szerző:";
$ad_entry_category 			= "Kategória:";
$ad_entry_active 			= "Aktív?";
$ad_entry_date 				= "Dátum:";
$ad_entry_changed 			= "Változás";
$ad_entry_changelog 			= "Változtatások:";
$ad_entry_commentby 			= "Megjegyzés ";
$ad_entry_comment 			= "Megjegyzése:";
$ad_entry_save 				= "Tárolás";
$ad_entry_delete 			= "Törlés";
$ad_entry_delcom_1 			= "Biztos hogy a felhasználó [";
$ad_entry_delcom_2 			= "] megjegyzése törölhető?";
$ad_entry_commentdelsuc 		= "A megjegyzés <b>sikeresen</b> törölve.";
$ad_entry_back 				= "Vissza a bejegyzéshez";
$ad_entry_commentdelfail 		= "A megjegyzés <b>nem</b> lett törölve.";
$ad_entry_savedsuc 			= "A változások <b>sikeresen</b> tárolva.";
$ad_entry_savedfail 			= "<b>Hiba</b> az adatbázis elérésében.";
$ad_entry_del_1 			= "Biztos hogy a téma [";
$ad_entry_del_2 			= "][";
$ad_entry_del_3 			= "] törölhető?";
$ad_entry_delsuc 			= "Bejegyzés <b>sikeresen</b> törölve.";
$ad_entry_delfail 			= "A bejegyzés <b>nem</b> lett törölve!";
$ad_entry_back 				= "Vissza";


// Newsverwaltung
$ad_news_header 			= "A hír címe";
$ad_news_text 				= "A hír szövege";
$ad_news_link_url 			= "Link: (<b>http:// nélkül</b>)!";
$ad_news_link_title 			= "A link címe:";
$ad_news_link_target 			= "A link célja";
$ad_news_link_window 			= "A link új ablakot nyit";
$ad_news_link_faq 			= "Link a tudásbázison belül";
$ad_news_add 				= "Hír hozzáadása";
$ad_news_id 				= "#";
$ad_news_headline 			= "Cím";
$ad_news_date 				= "Dátum";
$ad_news_action 			= "Művelet";
$ad_news_update 			= "frissítés";
$ad_news_delete 			= "törlés";
$ad_news_nodata 			= "Nem találom az adatbázisban";
$ad_news_updatesuc 			= "A hír frissítve.";
$ad_news_del 				= "Biztos hogy törölni akarod a hírt?";
$ad_news_yesdelete 			= "Igen, törlöm!";
$ad_news_nodelete 			= "Nem!";
$ad_news_delsuc 			= "A hír törölve.";
$ad_news_updatenews 			= "Hír frissítése";

// Kategorieverwaltung
$ad_categ_new 				= "Kategória hozzáadása";
$ad_categ_catnum 			= "Kategória sorszáma:";
$ad_categ_subcatnum 			= "Alkategória sorszáma:";
$ad_categ_nya 				= "<i>még nem elérhető!</i>";
$ad_categ_titel 			= "Kategória címe:";
$ad_categ_add				= "Kategória hozzáadása";
$ad_categ_existing 			= "Meglévő kategóriák";
$ad_categ_id 				= "#";
$ad_categ_categ 			= "Kategória";
$ad_categ_subcateg 			= "Alkategória";
$ad_categ_titel 			= "Kategória címe";
$ad_categ_action 			= "Művelet";
$ad_categ_update 			= "frissítés";
$ad_categ_delete 			= "törlés";
$ad_categ_updatecateg 			= "Kategória frissítése";
$ad_categ_nodata 			= "Nem találom az adatbázisban";
$ad_categ_remark 			= "A meglévő bejegyzések nem lesznek elérhetőek ha törlöd a kategóriát. Új kategóriát kell hozzárendelned a bejegyzéshez, vagy törölni azt.";
$ad_categ_edit_1 			= "Szerkeszés";
$ad_categ_edit_2 			= "Kategória";
$ad_categ_add 				= "kategória hozzáadása";
$ad_categ_added 			= "Kategória hozzáadva.";
$ad_categ_updated 			= "Kategória frissítve.";
$ad_categ_del_yes 			= "Igen, törlöm!";
$ad_categ_del_no 			= "Nem!";
$ad_categ_deletesure 			= "Biztos hogy törlöd a kategóriát?";
$ad_categ_deleted 			= "Kategória törölve.";

// Cookies
$ad_cookie_cookiesuc 			= "A cookie <b>sikeresen</b> beállítva.";
$ad_cookie_already 			= "A cookie már be van állítva. A következő lehetőségeid vannak:";
$ad_cookie_again 			= "A cookie újra beállítása";
$ad_cookie_delete 			= "A cookie törlése";
$ad_cookie_no 				= "Jelenleg nincs cookie beállítva. A cookie-val automatikusan beléphetsz. A következő lehetőségeid vannak:";
$ad_cookie_set 				= "A cookie beállítása";
$ad_cookie_deleted 			= "A cookie sikeresen törölve.";

// Adminlog
$ad_adminlog 				= "AdminLog";

// Passwd
$ad_passwd_cop 				= "Jelszó változtatás";
$ad_passwd_old 				= "Régi jelszó:";
$ad_passwd_new 				= "Új jelszó:";
$ad_passwd_con 				= "Megerősítés:";
$ad_passwd_change 			= "Jelszó változtatás";
$ad_passwd_suc 				= "Jelszó megváltoztatva.";
$ad_passwd_remark 			= "<b>FIGYELEM:</b><br>A cookiet újra be kell állítani!";
$ad_passwd_fail 			= "A régi jelszónak helyesnek kell lennie és az újaknak egyezniekell.";

// Adduser
$ad_adus_adduser 			= "Felhasználó hozzáadása";
$ad_adus_name 				= "Név:";
$ad_adus_password 			= "Jelszó:";
$ad_adus_add 				= "Felhasználó hozzáadása";
$ad_adus_suc 				= "Felhasználó hozzáadva.";
$ad_adus_edit 				= "Profil szerkesztése";
$ad_adus_dberr 				= "<b>adatbázis hiba!</b>";
$ad_adus_exerr 				= "A felhasználónév már <b>létezik</b>.";

// Sessions
$ad_sess_id 				= "ID";
$ad_sess_sid 				= "Session ID";
$ad_sess_ip 				= "IP";
$ad_sess_time 				= "Idő";
$ad_sess_pageviews 			= "Megnézett oldalak";
$ad_sess_search 			= "Keresés";
$ad_sess_sfs 				= "Keresés a sessionban";
$ad_sess_s_ip 				= "IP:";
$ad_sess_s_minct 			= "min. műveletek:";
$ad_sess_s_date 			= "Dátum";
$ad_sess_s_after 			= "után";
$ad_sess_s_before 			= "előtt";
$ad_sess_s_search 			= "Keresés";
$ad_sess_session 			= "Session";
$ad_sess_r 				= "Találatok: ";
$ad_sess_referer 			= "Referer:";
$ad_sess_browser 			= "Browser:";
$ad_sess_ai_rubrik 			= "Kategória:";
$ad_sess_ai_artikel 			= "Bejegyzés:";
$ad_sess_ai_sb 				= "Kereső kérdések:";
$ad_sess_ai_sid 			= "Session ID:";
$ad_sess_back 				= "Vissza";

// Statistik
$ad_rs 					= "Osztályozási statisztika";
$ad_rs_rating_1 			= "Az osztályzata: ";
$ad_rs_rating_2 			= "users shows:";
$ad_rs_red 				= "Vörös";
$ad_rs_green 				= "Zöld";
$ad_rs_altt 				= "az átlaga kisebb mint 2";
$ad_rs_ahtf 				= "az átlaga nagyobb mint 4";
$ad_rs_no 				= "Nincs osztályzat";

// Auth
$ad_auth_insert 			= "Írd be a neved és a jelszavadat.";
$ad_auth_user 				= "Név:";
$ad_auth_passwd 			= "jelszó:";
$ad_auth_ok 				= "OK";
$ad_auth_reset 				= "Reset";
$ad_auth_fail 				= "A név vagy a jelszó nem megfelelő.";
$ad_auth_sess 				= "A Session ID elfogadva.";

// Added v0.8 - 24.05.2001 - Bastian - Admin
$ad_config_edit 			= "Beállítások szerkesztése";
$ad_config_save 			= "Beállítások mentése";
$ad_config_reset 			= "Reset";
$ad_config_saved 			= "Beállítások elmentve.";
$ad_config_file 			= "config_hungarian.dat";
$ad_menu_editconfig 			= "Beállítások szerkesztése";
$ad_att_none 				= "Nincsenek csatolt fájlok";
$ad_att_att 				= "Csatolt fájlok:";
$ad_att_add 				= "Fájl csatolása";
$ad_entryins_suc 			= "A bejegyzés sikeresen tárolásra került.";
$ad_entryins_fail 			= "Hiba történt.";
$ad_att_del 				= "Törlés";
$ad_att_nope 				= "Csatolt fájlokat csak szerkesztés közben lehet hozzáadni.";
$ad_att_delsuc 				= "Csatolt fájl törölve.";
$ad_att_delfail 			= "Hiba történt a csatolt fájl törlése közben.";
$ad_entry_add 				= "Bejegyzés létrehozása";

// Added v0.85 - 08.06.2001 - Bastian - Admin
$ad_csv_make 				= "A backup a teljes adatbázis másolata. A backup formátuma MySQL tranzakciós fájl, melynek visszaállítása a mysql klienssel lehetséges.";
$ad_csv_link 				= "Backup letöltése";
$ad_csv_head 				= "Backup létrehozása";
$ad_att_addto 				= "Fájl csatolása";
$ad_att_addto_2 			= "";
$ad_att_att 				= "Fájl:";
$ad_att_butt 				= "OK";
$ad_att_suc 				= "A fájl sikeresen csatolva.";
$ad_att_fail 				= "Hiba történt a fájl csatolása közben.";
$ad_att_close 				= "Ablak bezárása";

// Added v0.85 - 08.07.2001 - Bastian - Admin
$ad_csv_restore 			= "Itt vissza tudod állítani az adatbázist egy backup-ból. A jelenleg az adatbázisban tárolt adatok elvesznek.";
$ad_csv_file 				= "Fájl";
$ad_csv_ok 				= "OK";
$ad_csv_linklog 			= "backup LOG-ok";
$ad_csv_linkdat 			= "backup adat";
$ad_csv_head2 				= "Visszaállítás";
$ad_csv_no 				= "Ez nem megfelelő backup fájl.";
$ad_csv_prepare 			= "Előkészítés...";
$ad_csv_process 			= "Lekérdezés...";
$ad_csv_of 				= "";
$ad_csv_suc 				= "sikerült.";
$ad_csv_backup 				= "Backup";
$ad_csv_rest 				= "Visszaállítás backupból";

// Added v0.8 - 25.05.2001 - Bastian - Admin
$ad_menu_backup 			= "Backup";
$ad_logout 				= "A session megszakítva.";
$ad_news_add 				= "Hír hozzáadása";
$ad_news_edit 				= "Hír szerkesztése";
$ad_cookie 				= "Cookie-k";
$ad_sess_head 				= "Sessionok lekérdezése";

// Added v1.1 - 06.01.2002 - Bastian
$ad_menu_categ_edit 			= "Kategória szerkesztése";
$ad_menu_stat 				= "Osztályozási statisztika";
$ad_kateg_add 				= "kategória hozzáadása";
$ad_kateg_rename 			= "átnevezés";
$ad_adminlog_date 			= "Dátum";
$ad_adminlog_user 			= "Felhasználó";
$ad_adminlog_ip 			= "IP cím";

$ad_stat_sess 				= "Session-ök";
$ad_stat_days 				= "Napok";
$ad_stat_vis 				= "Session-ok (Látogatások)";
$ad_stat_vpd 				= "Napi látogatások";
$ad_stat_fien 				= "Első Log";
$ad_stat_laen 				= "Utolsó Log";
$ad_stat_browse 			= "session-ök böngészése";
$ad_stat_ok 				= "OK";

$ad_sess_time 				= "Idő";
$ad_sess_sid 				= "Session-ID";
$ad_sess_ip 				= "IP cím";

$ad_ques_take 				= "Kérdés szerkesztése";
$no_cats 				= "Nincs kategória.";

// Added v1.1 - 17.01.2002 - Bastian
$ad_log_lger 				= "A név vagy a jelszó nem megfelelő.";
$ad_log_sess 				= "A session lejárt.";
$ad_log_edit 				= "\"Felhasználó szerkesztése\"-Felhasználó: ";
$ad_log_crea 				= "\"Új hír\"";
$ad_log_crsa 				= "Bejegyzés létrehozva.";
$ad_log_ussa 				= "Felhasználó adatainak frissítése: ";
$ad_log_usde 				= "Felhasználó törlése: ";
$ad_log_beed 				= "Felhasználó szerkesztése: ";
$ad_log_bede 				= "Bejegyzés törölve: ";

$ad_start_visits 			= "Látogatások";
$ad_start_articles 			= "Hírek";
$ad_start_comments 			= "Megjegyzések";

$ad_user_chpw 				= "Az aktuális felhasználó jelszavát csak itt tudod módosítani: \"$ad_menu_passwd\".";

// Added v1.1 - 30.01.2002 - Bastian
$ad_categ_paste 			= "beillesztés";
$ad_categ_cut 				= "kivágás";
$ad_categ_copy 				= "másolás";
$ad_categ_process 			= "Kategóriák feldolgozása...";

// Added v1.1.4 - 07.05.2002 - Thorsten
$err_NotAuth				= "<b>Nem vagy bejelentkezve.</b>";

// Added v1.2.3 - 29.11.2002 - Thorsten
$msgPreviusPage				= "előző oldal";
$msgNextPage				= "következő oldal";
$msgPageDoublePoint			= "Oldal: ";
$msgMainCategory			= "Fő kategória";

// Added v1.2.4 - 30.01.2003 - Thorsten
$ad_passwdsuc				= "Jelszavad megváltoztatva.";

// Added v1.3.0 - 04.03.2003 - Thorsten
$msgPDF					= "PDF verzió";
$ad_xml_head				= "XML-Backup";
$ad_xml_hint				= "A tudásbázis mentése XML fájlba.";
$ad_xml_gen				= "XML fájl készítése";
$ad_entry_locale			= "Nyelv";
$msgLangaugeSubmit			= "nyelv megváltoztatása";

// Added v1.3.1 - 29.04.2003 - Thorsten
$ad_entry_preview			= "Előnézet";
$ad_attach_1				= "Először add meg a csatolt fájlok helyét a beállításokban.";
$ad_attach_2				= "Először állítsd be a linkeket a beállításokban.";
$ad_attach_3				= "Az attachment.php nem nyitható meg.";
$ad_attach_4				= "A csatolt fájlnak kisebbnek kell lennie mint ".$attmax." byte.";
$ad_menu_export				= "Tudásbázis exportálása";
$ad_export_1				= "RSS készítése";
$ad_export_2				= ".";
$ad_export_file				= "Hiba: Nem írható a fájl.";
$ad_export_news				= "Hírek RSS";
$ad_export_topten			= "Top 10 RSS";
$ad_export_latest			= "Az 5 legújabb bejegyzés RSS";
$ad_export_pdf				= "PDF fájlba exportálása a bejegyzéseknek";
$ad_export_generate			= "RSS készítése";

$rightsLanguage[0]			= "felhasználó hozzáadása";
$rightsLanguage[1]			= "felhasználó szerkesztése";
$rightsLanguage[2]			= "felhasználó törlése";
$rightsLanguage[3]			= "bejegyzés hozzáadása";
$rightsLanguage[4]			= "bejegyzés szerkesztése";
$rightsLanguage[5]			= "bejegyzés törlése";
$rightsLanguage[6]			= "log megnézése";
$rightsLanguage[7]			= "admin log megnézése";
$rightsLanguage[8]			= "megjegyzés törlése";
$rightsLanguage[9]			= "hír hozzáadása";
$rightsLanguage[10]			= "hír szerkesztése";
$rightsLanguage[11]			= "hír törlése";
$rightsLanguage[12]			= "kategória hozzáadása";
$rightsLanguage[13]			= "kategória szerkesztése";
$rightsLanguage[14]			= "kategória törlése";
$rightsLanguage[15]			= "jelszó megváltoztatása";
$rightsLanguage[16]			= "beállítások szerkesztése";
$rightsLanguage[17]			= "fájl csatolása";
$rightsLanguage[18]			= "csatolt fájl törlése";
$rightsLanguage[19]			= "backup készítése";
$rightsLanguage[20]			= "backup visszaállítása";
$rightsLanguage[21]			= "nyitott kérdések törlése";

$msgAttachedFiles			= "csatolt fájlok:";

// Added v1.3.2 - 15.05.2003 - Thorsten
$help_BBCode_01				= "Mi az UBB kód?";
$help_BBCode_02				= "Az UBB kód egy kis része a HTML parancsoknak. Lehetővé teszi olyan funkciók és hatások létrehozását, melyhez HTML kódokat kellene használni.";
$help_BBCode_03				= "URL linkek";
$help_BBCode_04				= "Írd a teljes URL-t bármely következő módszer szerint és linkek megjelennek a bejegyzésben:";
$help_BBCode_05				= "Az [url] kód a lentebb leírtak szerint működik. Példa a használatra: (UBB code is red)";
$help_BBCode_06				= "A példában az UBB kód autómatikusan létrehozza a linket az URl-re, mely az UBB kódok közt van. A linkre kattintva egy új ablakban megnyílik az oldal melyre a link mutat.";
$help_BBCode_07				= "Félkövér és dőlt írásmód, aláhúzás";
$help_BBCode_08				= "Használhatsz félkövér vagy dőlt betűket és aláhúzást is ha a szöveget a következő kódok közé írod [b][/b] vagy [i][/i] vagy [u][/u]. A kódok tetszőleges kombinációban is használhatóak.";
$help_BBCode_09				= "Felsorolások és középre igazított szövegek";
$help_BBCode_10				= "A szöveg középre igazításához használd a [center] kódot:";
$help_BBCode_11				= "A felsorolás a lista minden eleme elé egy felsoroló elemet helyez. A lista létrehozásához használd a [ul][/ul] kódot és minden listaelem elé tedd ki [li] jelet. Példa:";
$help_BBCode_12				= "Az alábbi felsorolást jeleníti meg:";
$help_BBCode_13				= "Képek beillesztése";
$help_BBCode_14				= "Képek beillesztéséhez a kép URL-jét kell megadni az UBB kódok között (UBB code is red):";
$help_BBCode_15				= "Megjegyzés: A \"http://\" része az URL-nek KÖTELEZŐ az [img] kód használatánál!";
$help_BBCode_16				= "Idézetek beillesztése";
$help_BBCode_17				= "Idézetek beillesztéséhez a szöveget az UBB kódok közé kell tenni (UBB code is red):";
$help_BBCode_18				= "A példában az idézet két vízszintes vonal között van.";
$help_BBCode_19				= "Kódrészletek";
$help_BBCode_20				= "Hasonlóan a [quote] kódhoz, ez a kód is &lt;PRE&gt; utasításokat tesz a megjegyzésbe és biztosítja hogy a szöveg elrendezése ne változzon meg. Elsősorban programkódoknál hasznos ez a lehetőség.";
$help_BBCode_21				= "A példában az UBB kód autómatikusan határozza meg a formázást.";
$help_BBCode_22				= "A PHP-ben készült kódrészletekhez használható a következő UBB kód is:";
$help_BBCode_23				= "A [php] kód szintaxis kiemeléssel van bemutatva.";
$help_BBCode_24				= "Referenciák";
$help_BBCode_25				= "HTML és UBB kódok nem használhatóak egyidőben. Minden UBB kódot kisbetűvel kell írni (i.e., [url], de nem [URL]."; 

// Added v1.3.3 - 27.05.2003 - Thorsten
$ad_user_action             	= "művelet";
$ad_entry_email			= "email cím:";
$ad_entry_allowComments		= "megjegyzések engedélyezése";
$msgWriteNoComment        	= "Nem fűzhetsz megjegyzést ehhez a bejegyzéshez!";
$ad_user_realname		= "teljes név:";
$ad_export_generate_pdf		= "PDF fájl létrehozása";
$ad_export_full_faq		= "A tudásbázis PFD fájlban: ";
$err_bannedIP			= "Az IP-d ki lett tiltva.";
$err_SaveQuestion		= "A kötelező mezők: <b>neved</b>, <b>email címed</b> és a <b>kérdésed</b>.<br><br><a href=\"javascript:history.back();\">egy oldalt visszak</a><br><br>\n";

// added v1.3.4 - 23.07.2003 - Thorsten
$ad_entry_fontcolor         = "Betű szín: ";
$ad_entry_fontsize          = "Betű méret: ";
?>
