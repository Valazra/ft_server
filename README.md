# ft_server
afficher les containers : docker ps -a
afficher les images : docker images

stop un container : 
docker stop nomcontainer

suppr un container :
docker rm -f nomcontainer

suppr une image : 
docker rmi nomImage

suppr toutes les images et containers :
docker system prune -a

service nginx start
service nginx stop
service mysql start

Technique pour afficher une page html :
avoir un Docker file avec le FROM, un RUN apt-get -y upgrade && apt-get install de nginx
Et un COPY du fichier html à mettre dans var/www/html
Faire un build
Faire un run sur le port souhaité (ici 8080)
faire un exec
start le service nginx
aller sur localhost:8080

pour la correc sur la VM :

sudo -s pour se co en admin

commencer par désactiver nginx par défaut sur la VM (service nginx stop)

docker build -t monimage .
docker run --name coco -d -p 80:80 -p 443:443 -ti monimage
docker exec -ti coco
bash start.sh

wordpress user et password : vazra et password
phpmyadmin user et password : vazra et password (fichier start.sh)

dans default : autoindex on
le mettre sur off : quand on va sur localhost ça marche pas, il faut mettre genre localhost/wordpress
