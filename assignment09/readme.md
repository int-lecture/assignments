# Assignment 9 - Assignment zur Vorbereitung des zweiten Frontent-Workshops 

Ziel für heute sind vier Dinge: 

- Anbinden Ihres Frontends and Ihr Backend
- Speicherung der Konfigurationsdaten lokal im Browser, Einstellung über einen separaten Menüpunkt
- "Full responsiveness" - tunen Sie Ihr Frontend so, dass sie sowohl in einem Browser als auch auf einem Mobilgerät gut funktioniert (Beispiel: Moodle)
- Testen Sie Ihre Anwendungen ausgiebig

# Hier das Home-Assignment

## AJAX

Nachdem nun Ihr Frontent-Design steht, geht es daran, die (Micro-) Services des Chat-Servers einzubinden: Registrierung, Login, Chat-Partner, etc. Dafür müssen Sie verstehen, wie AJAX funktioniert, und wie man JSON in JavaScript ein- und auspackt. Meine Empfehlung: 

 - https://www.w3schools.com/js/js_ajax_intro.asp
 - https://www.w3schools.com/js/js_json_intro.asp
 - https://www.youtube.com/watch?v=rJesac0_Ftw
 - https://www.codeschool.com/courses/jquery-the-return-flight
 - https://www.tutorialspoint.com/ajax/
 
Natürlich müssen Sie nun auch wissen, wie das in JQuery bzw. AngularJS funktioniert - aber das können Sie ja nun selbst geeignet nachlesen!

## Unabhängigkeit von Ihrer Server-Implementierung

Da Sie in der Folge ja die Clients gegen verschiedene Server laufen lassen sollen ("Plugfest"), bietet es sich an, die Server-Konfiguration Client-seitig abzuspeichern. Recherchieren Sie, wie Sie dies bewerkstelligen können (Modularisierung der Konfigurationsdaten im Code, Editieren über ein "Einstellungen"-Menü und lokale Speicherung der Konfigurationsdaten) und erweitern Sie Ihr Frontend-Konzept um diese Aspekte. 
