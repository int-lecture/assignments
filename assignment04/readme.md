# Assignment für die Vorbereitung des 4. INT-Workshoptags

In der Lehrveranstaltung am 24.04. werden Sie einen einfachen Nachrichtenbroker realisieren, über den zwei Kommunikationspartner miteinander chatten können. Authentifizierung und Verschlüsselung lassen wir für diesen Schritt außen vor. Für den nächsten Workshop (8.5) brauchen wir einen funktionierenden Broker. Im Workshop werden wir also primär die offenen Fragen zur Implementierung klären und erste Schritte machen. Den Rest müssen Sie dann außerhalb der Lehrveranstaltung fertigstellen.

## Erarbeiten der Details zu REST

Der Broker wird mit Java (JAX-RS) und JSON arbeiten. Bearbeiten Sie daher zur Vorbereitung *vor der Vorlesung* die folgenden Unterlagen:

  * REST
    - [SUN JAX-RS Tutorial](http://docs.oracle.com/javaee/6/tutorial/doc/giepu.html)
    - [IGT-Skript - Kapitel 6](https://smits-net.de/files/igt/skript/igt_skript.pdf)
    - [VAR Folien - Kapitel zu REST](https://smits-net.de/files/var/folien/VAR_04_Kommunikationsorientierte_Middleware.pdf)
  * JSON
    - [W3Schools - JSON](https://www.w3schools.com/js/js_json_intro.asp)
  * HTT-Protocol/URI
    - [WAW Folien](https://smits-net.de/files/waw/folien/WAW_05_Webserver_HTTP-Folien.html#slide_id__37)

## Sammeln von offenen Fragen zu den Themen

Sammeln Sie alle offenen Fragen, die sich beim Bearbeiten der Unterlagen ergeben. Diese werden wir am Anfang des Workshops diskutieren, damit alle Teilnehmer denselben Stand haben. Wenn Sie nichts fragen, wird davon ausgegangen, dass Sie alles verstanden haben.

_Abgabe_: Liste mit Fragen in Ihrem `questions`-Ordner auf GitHub. Nennen Sie die Datei `rest-questions.md`.

## Implementierung des Nachrichtenbrokers

Zur Vorbereitung der Implementierung hier noch einmal die Festlegung der Schnittstelle. Diese weicht aus Gründen der einfacheren Umsetzbarkeit leicht von der am 27.3 an der Tafel entwickelten Schnittstelle ab.

### Senden einer Nachricht

Nachrichten werden bei der URL `/send` per `PUT` als JSON-Dokument (Mime-Type: `application/json`) abgegeben. Eine beispielhafte Nachricht sieht wie folgt aus:

```json
{
  "from": "bob",
  "to" : "jim",
  "date": "2017-03-30T17:00:00Z",
  "text": "Hallo Jim, wie geht es Dir?"
}
```

Das Datum ist gemäß [ISO 8601](https://de.wikipedia.org/wiki/ISO_8601) formatiert.

Sind die Daten nicht korrekt formatiert, sendet der Server den Statuscode 400. Zusätzliche Felder werden aber ignoriert, damit man später das Protokoll einfacher erweitern kann.

Sind die Daten korrekt formatiert, sendet der Server den Status 201 und ein Antwort-JSON mit der Sequenznummer und der Server-Zeit. Z.B.:

```json
{
  "date": "2017-03-30T17:00:00Z",
  "sequence": 78
}
```

Die Sequenznummern werden pro Benutzer verwaltet, d.h. eine Sequenznummer kann mehrfach (bei unterschiedlichen Nutzern) vorkommen.

### Empfangen von Nachrichten

Der Client kann Nachrichten unter der URL `/messages/{user_id}/{sequence_number}` über `GET` abholen. `{user_id}` gibt den User-Namen (siehe `to` und `from`) an, für den die Nachrichten abgeholt werden sollen. Mit `{sequence_number}` gibt er die letzte Nachricht an, die er schon erhalten hat. Verwendet der Client die URL `/messages/{user_id}` bekommt er alle Nachrichte (Sequenz-Nummer = 0), die noch auf dem Server vorhanden sind.

Wenn für den Benutzer keine Nachrichten vorhanden sind, antwortet der Server mit dem Statuscode 204. Sind welche vorhanden, sendet er ein JSON-Dokument, das alle Nachrichten für den Benutzer (beginnend bei `{sequence_number} + 1`) enthält:

```json
[
  {
    "from": "bob",
    "to" : "jim",
    "date": "2017-03-30T17:00:00",
    "text": "Hallo Jim, wie geht es Dir?",
    "sequence": 6
  },
  {
    "from": "tom",
    "to" : "jim",
    "date": "2017-03-30T17:10:00",
    "text": "Wollen wir heute INT schwänzen?",
    "sequence": 7
  }
]
```

Nachdem der Server die Liste der Nachrichten gesendet hat, löscht er alle Nachrichten des Nutzers, deren Sequenznummer <= der übergebenen Zahl ist. Dieses Feature sollte allerdings für Testzwecke ein- und ausschaltbar sein.

### Testen des Servers

Testen Sie den Server mit Hilfe des Kommandozeilenwerkzeugs `curl`. Während der Vorlesung steht Ihnen eine Referenzimplementierung zur Verfügung zum Testen Ihre Ideen zur Verfügung, d.h. wir werden Ihnen einen Server und einen Client zur Verfügung stellen, der das Protokoll wie beschrieben umsetzt.

Testen Sie Ihre Implementierung auch mit dem zur Verfügung gestellten [Java-Client](https://github.com/int-lecture/chat-client).
