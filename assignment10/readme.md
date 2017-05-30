# Assignment 10

## Vorbereitung des Workshops am 12.6

Nach der Bearbeitung der letzten VAR-Assignments sollten Sie einen funktionierenden Satz aus den drei Services (login, profile, chat) haben. Der Login und Profile-Service verwenden die MongoDB. Der Chat-Services möglicherweise noch nicht.

An diesem Punkt sollten Sie Ihre Dienste so gestaltet haben, dass Sie diese über Gruppen hinweg austauschen können, d.h. der Chat-Server der einen Gruppe kann mit dem dem Login-Server einer anderen Gruppe und der wieder mit dem Profile-Server einer weiteren Gruppe zusammenarbeiten.

Im Workshop am 12.6 wird es um die Skalierung (siehe [WAW-Folien](https://smits-net.de/files/waw/folien/WAW_11_Skalierung-Folien.html)) der Dienste gehen, d.h. wie man mehrere davon parallel betreiben kann. Um dieses Thema behandeln zu können, müssen Sie den Chat-Server zustandslos gestalten und einen Load-Balancer installieren und konfigurieren.

### Chat-Server stateless (zustandslos) gestalten

Als erstes müssen Sie den Chat-Server zustandslos gestalten (siehe [IGT-Skript](https://smits-net.de/files/igt/skript/igt_skript.pdf), S. 74f.). Dazu muss auch er seine Ablage der Chat-Protokolle in die MongoDB verlagern und dürfen sie nicht mehr im Speicher des Servers halten. Access-Tokens darf er aber weiterhin cachen, solange er das Ablauf-Datum korrekt beachtet.

### Load-Balancing

Auf Ihrem Server sollen mehrere Chat-Server laufen, die über einen Load-Balancer angesteuert werden. Für den Test gehen wir von drei Chat-Servern aus. Als Load-Balancer bietet sich [HA-Proxy](http://www.haproxy.org) an. Installieren Sie haproxy und konfigurieren Sie ihn so, dass er auf Poert 5000 arbeitet. Die drei Chat-Server betreiben Sie dann auf anderen Ports, z.B. 4000, 4001 und 4002. Der Load-Balancer verteilt die Anfragen auf die drei Server.

### Lasttest

Führen Sie eine Lasttest Ihrer Chat-Server durch. Hierzu können Sie entweder den vorhandenen Chat-Client modifizieren oder ein vorgefertigtes Werkzeug wie [JMeter](http://jmeter.apache.org) benutzen. Lassen Sie den Test zuerst mit einem Chat-Server laufen und notieren Sie die maximale Anzahl der Anfragen, die Sie verarbeiten können. Erhöhen Sie dann die Anzahl der Server auf zwei, messen Sie noch einmal und erhöhen Sie dann auf drei.

### Docker

Als weitere Vorbereitung informieren Sie sich bitte, wie Container-Virtualisierung funktioniert und insbesondere, wie diese von [Docker](http://docker.io) realisiert wird. Machen Sie erste Versuche mit dem Erzeugen, Starten und Beenden von Docker-Containern.

### Installation der Dienste

Installieren Sie Ihre Dienste so auf dem Server, dass sie dauerhaft laufen und beim Start des Betriebssystems automatisch mit gestartet werden. D.h. wenn Sie Ihren Server mit `shutdown -r now` neu starten, laufen danach die Dienste und können angesprochen werden.  Wie dies geht recherchieren Sie bitte selbständig im Internet.

## Inhalte des Workshops am 12.6

### Lasttest-Battle

Die verschiedenen Teams werden die Server der jeweils anderen Teams mit Lasttests befeuern.

### Verschieben der Dienste in einen Container

Nachdem wir in den Lasttests die Leistungsfähigkeit der Server getestet haben, verschieben Sie diese in Docker-Container. Sowohl die MongoDB als auch jeder der Services wird in einen eigenen Container installiert. Erzeugen Sie die Container und testen Sie das Zusammenspiel.
