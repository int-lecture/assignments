# Assignment für Workshop-Tag 5: Security (1. Hälfte) 

Wir wollen heute die rudimentäre PHP-Anwendung "sicher" machen. Dafür werden wir die Anwendung gegen Cross-Site-Scripting und Cross-Site-Request-Forgery schützen, sowie gegen Man-in-the-Middle-Angriffe schützen. 

## Schutz gegen Cross-Site-Scripting und co. 

Verändern Sie Ihre Anwendung derart, dass Sie keine Parameter (Nutzer / Kommunikationspartner) mehr via *get* oder *post* verwenden, sondern diese Angaben serverseitig verwalten, und dafür eine Session aufbauen. Dabei wird die Session-ID bei jedem neuen Request verändert. 

## Schutz gegen Man-in-the-Middle-Angriffe

Installieren Sie SSL/TLS für den Apache Webserver, generieren Sie ein Server-Zertifikat und installieren Sie das Zertifikat. Testen Sie, ob die Verbindung auch verschlüsselt ist - wie machen Sie das? 

