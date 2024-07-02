
# Installer le serveur apache avec httpd pour amazone Linux
sudo yum -y install httpd

# Démarer le serveur Apache
sudo systemctl start httpd

# Installer et activation automatique de php 
sudo yum -y install php php-cli

# Crée sa page index.php et help.php dans un editeur de code (VsCode)
# Importer via FTP les codes
Accéder au repertoire /var/www/html
importer les fichiers index.php et help.php

# Création des fichiers log
créé dans le repertoire /var/log/ les fichiers log suivant: 
- /var/log/indexlog.log, qui vas contenir les fichiers log de la page index.php
- /var/log/aidelog.log, qui vas contenir les fichiers log des erreurs de la page help.php

# Restart le httpd 
sudo systemctl restart httpd

# une fos=is fini lancer le navigateur et accéder au différente page!!
