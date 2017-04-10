# Assignment für die Vorbereitung des 4. INT-Workshoptags

Für die Lehrveranstaltung am 24.04. müssen Sie für den ersten Teil (H. Smits hat Ihnen schon ein weiteres Assessment ausgeteilt) die Security-Aspekte der Webentwicklung mal grob kennen gelernt haben. 

## Authentifizierung im Web

Die folgenden Quellen geben Ihnen einen guten Einblick, wie man Benutzer authentifizieren kann. Obacht: das sollten Sie in produktiven Umgebungen NICHT SELBST programmieren, sondern statt dessen gut, sichere Authentifizierungsservices einsetzen. 

* http://php.net/manual/de/features.http-auth.php

Wer sich zutraut, auch schon eine Datenbank zu installieren, für den ist folgende Information interessant:

* https://de.wikipedia.org/wiki/PhpMyAdmin
* https://www.youtube.com/watch?v=kJGbxoRir_4



## Session Management

Http ist ein statusloses Protokoll. Das bedeutet, dass der Webserver sich nicht merken kann, welche Anfrage zu wem gehört, und was dieser Benutzer zuletzt gemacht hatte. Um dies lösen zu können, gibt es Session Management. Einfaches Session Managagement erfolgt mit Cookies. 

* http://www.selfphp.de/praxisbuch/praxisbuch.php?group=35
* https://www.php-einfach.de/php-tutorial/php-sessions/
* https://www.w3schools.com/php/php_sessions.asp 

Warum das nicht so clever ist, können Sie hier nachschauen: 

* http://phpsec.org/projects/guide/
* https://www.youtube.com/watch?v=sY0mUxokQ0c

Statt dessen sollten Sie ein Token-basiertes Session Management implementieren. Hierzu gibt es folgende Informationen: 

* https://www.youtube.com/watch?v=8dMsHmlxY0s
* http://php.net/session_regenerate_id

## Transport Layer Security

Damit die übermittelten Daten nicht unterwegs abgehört werden können, müssen diese verschlüsselt werden. Dazu wird bei Webanwendungen das https-Protokoll verwendet, welches TLS "über" http legt. Hier finden Sie Hintergrundinformationen: 

* https://de.wikipedia.org/wiki/Transport_Layer_Security

Und hier, wie man es für den Apache httpd konfiguriert. 

* https://httpd.apache.org/docs/2.4/ssl/ssl_howto.html
* https://www.linuxmuster.net/wiki/dokumentation:addons:owncloud:apache-ssl-setup




