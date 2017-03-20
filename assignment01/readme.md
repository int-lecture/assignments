# Assignment für die Vorbereitung des 2. INT-Workshoptags

In der Lehrveranstaltung am 27.03. werden wir die Architektur verfeinern, die Liste der "known unknowns" aufstellen und die Linux-Server soweit bringen, dass sie für die Vorlesung einsatzbereit sind. Da für die Server ein wenig Netzwerk- und Linux-Know-How nötig ist, sollten Sie dieses im Vorfeld erarbeiten.

Generell verwenden wir für alle Dokumente das [Markdown-Format](https://daringfireball.net/projects/markdown/), weil dieses einfach zu schreiben ist und trotzdem hübsch anzuzeigen.

## GitHub aufräumen

Bitte räumen Sie Ihr GitHub-Repository auf:

  * Legen Sie einen Ordner `requirements` an und speichern Sie dort die priorisierte Liste der Anforderungen (User-Stories) und die Bilder Ihre UI-Prototypen ab, die Sie heute erstellt haben.
  * Legen Sie einen Ordner `architecture` an, den Sie im nächsten Unterpunkt verwenden werden.
  * Legen Sie einen Ordner `questions` an, den Sie im über-übernächsten Unterpunkt verwenden werden.
  * Legen Sie im Hauptverzeichnis eine Datei `readme.md` an, die kurz den Ziel Ihres Projektes beschreibt.

## Architektur

Verfeinern Sie die Architektur und teilen Sie sie in entsprechende Komponenten auf:

  * Schreiben Sie für jede Komponente noch einmal auf, welche Aufgabe sie hat und auf welchen Daten sie arbeitet. Legen Sie hierzu ein passendes Dokument im Markdown-Format an, das alle Komponenten auflistet und beschreibt.
  * Zeichnen Sie ein Diagramm gemäß [FMC-Notation](http://www.fmc-modeling.org). Achten Sie insbesondere auf die Kommunikation zwischen den Agenten (z.B. Authentifizierung und Webserver) und welche Daten in den Agenten benutzt werden, d.h. auf welche Speicher sie zugreifen.
  * Überlegen Sie sich, welche der Komponenten Sie problemlos mehrfach haben können, um die Anwendung zu skalieren und bei welchen hierdurch Probleme entstehen, weil sie z.B. Daten enthalten, die unbedingt konsistent sein müssen. Dokumentieren Sie diese Überlegungen auch im Dokument.

_Abgabe_: Speichern Sie die Zeichnung (als PNG, JPG oder PDF) und die beschreibenden Dokumente (im Markdown-Format) im Ordner `architecture` in Ihrem GitHub-Projekt.

## Linux und Netzwerke

Wir werden in nächster Zeit mit Linux-Servern arbeiten. Dafür ist es notwendig,

  * Zugriff auf die Server per ssh-Key zu erhalten,
  * Linux auf der Kommandozeile bedienen zu können und
  * ein grundlegendes Verständnis zu TCP/IP-Netzen zu erlangen.

Sie finden die ssh-Keys aus Sicherheitsgründen im [Moodle](https://moodle.hs-mannheim.de/mod/folder/view.php?id=58737). Checken Sie diese auch auf keinen Fall in Ihr GitHub-Repository ein.

Folgendes Material kann Ihnen helfen

  * Linux Kommandozeile: [BashGuide](http://mywiki.wooledge.org/BashGuide)
  * ssh:
    - S. 277-284 [Beginning the Linux Command Line](https://link.springer.com/book/10.1007%2F978-1-4302-6829-1) (aus dem Hochschulnetz kostenlos)
    - Speziell unter Windows: [Key-basierte SSH Logins mit PuTTY](https://www.howtoforge.de/anleitung/key-basierte-ssh-logins-mit-putty/3/)
  * Netzwerke:
    - [VAR Folien - Kapitel zu Netzwerken](https://moodle.hs-mannheim.de/mod/url/view.php?id=58768)
    - S. 117ff. [Christian Baun. Computernetze kompakt](http://link.springer.com/book/10.1007/978-3-662-46932-3) (aus dem Hochschulnetz kostenlos)

_Abgabe_: *Keine*. Sie werden das Wissen in der nächsten Lehrveranstaltung anwenden. Sie können gerne vorher schon mit dem Zugriff auf die Server experimentieren.

## Known Unknowns

Denken Sie darüber nach, welche Fragen sich Ihnen stellen, wenn Sie über die Architektur und den weiteren Verlauf der Lehrveranstaltung nachdenken. Überlegen Sie sich, welche Informationen, Inhalte und mglw. Lehreinheiten Sie benötigen, um das Ziel der Vorlesung, den Secure Messenger, zu erreichen. Formulieren Sie diese Fragen so präzise wie möglich, damit man Sie auch in entsprechende Lehreinheiten umsetzen kann.

Die Liste soll ein lebendes Dokument sein, d.h. immer wenn Ihnen neue Fragen einfallen, ergänzen Sie die Liste bitte entsprechend. Auch über die ganze Lehrveranstaltung hinweg. Die Fragen können sich auch aus dem Lehrmaterial ergeben, dass wir Ihnen zur Verfügung stellen.

Speichern Sie diese Liste als `readme.md` im Ordner `questions` in Ihrem GitHub-Repository.

_Abgabe_: (Vorläufige) Liste mit Fragen.
