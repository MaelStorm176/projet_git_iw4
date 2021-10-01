<p align="center">
  <h3 align="center">Projet git - environnement de travail collaboratif</h3>

  <p align="center">
    Refonte et amélioration d'un projet PHP pour une ESN
    <br />
    <a href="https://gitlab.com/mael.jamin/projet_git_iw4"><strong>Lien GitLab  </strong></a>
    <br />
    <br />
    

  </p>
</p>



<details open="open">
  <summary>Table de matières  </summary>
  <ol>
    <li>
      <a href="#about-the-project">A propos du projet</a>
      <ul>
        <li><a href="#Contexte du travail">Contexte du travail</a></li>
      </ul>
      <ul>
        <li><a href="#Tarvail demandé">Travail demandé</a></li>
      </ul>
    </li>
    <li> <a href="#les outils utilisé">les outils utilisé </a></li>
    <li> <a href="#Installation">Installation </a></li>
    <li><a href="#Gitflow">Gitflow</a></li>
    <li><a href="#Gitlab CI">Gitlab CI</a></li>
    <li><a href="#Git remote">Git remote</a></li>
    <li><a href="#Les licences">Les licences</a></li>
    <li><a href="#Docker">Docker</a></li>
    <li><a href="#Php Apache">Heroku</a></li>
        
   
  </ol>
</details>



## A propos du projet:
### Contexte du travail: 


 Une entreprise de Service numériques (ENS), nous a demandé de mettre en place un projet fraîchement acquis par la société cliente, et accorder l'ajoute 
 de nouvelles fonctionnalités.   

### Tarvail demandé:
* Créer un git, et fournir l'accès à deux git et synchronisé le code source
* Écrire un README détaillé 
* Réaliser un Gitlabrepository, Gitlab Boards, Gitlab Issues, CI et Github repository 
* Utiliser un tableau Kanban pour gérer le projet
* Respecter le workflow
* Réaliser des commits avec des bons messages
* Mettre en place d'un docker en respectant le sematic versionning et d'un docker-compose pour permettre l'installation en une seul commande 
* Déploiement du projet sur Heroku 
* Mettre en place un outil d'analyse statique 
* Mettre en place et lancement de tests unitaires 
* Mettre à jour la version de php 5.6 vers la version récente 8.0
* Céer d'un endpoint permettant de récupérer l'heure courante 
* Configuration et installation de Xdebug dans l'image Docker 
* Configuration de Gitlab Service Desk
* Utilisation de hooks git pour valider les commits localement 
* Modification du webservice 


### les outils utilisés: 
Pour réaliser le projet on a utilsé plusieurs outils: 

* [GitLab](/https://gitlab.com)
* [GitHub](https://github.com)
* [Heroku](https://www.heroku.com)
* [Docker](https://www.docker.com/)



<!-- Installation-->
### Installation

1. Creation de un nouveau projet, on la nomé "projet_git". Par défaut, Gitlab et Github nous a donneé la possibilité avec un compte gratuit d’attribuer un accès vers repo de code en privé, interne ou publique.
Par la suite on peut directement cloner notre projet et ajouter le fichier README.md
2. Cloner le dépot 
   ```sh
   git clone git@gitlab.com:mael.jamin/projet_git.git
   ```
 3.  on a réinitialiser le projet avec la commande suivante: 
 ```sh 
  git init
  ```

on a utilser la commande suivante dans le but d'enregistre les modifications dans les référentiel 
   ```sh 
  git commit -m "message du commit"
  ```

la commande suivante: 
  ```sh 
  git add
  ```
  pour ajouter tout les modification de tous les fichiers

## Gitflow (Workflow): 
git-flow est un modèle de branche dont le but est de créer une branche de fonctionnalité et en attendent que la fonctionnalité soit terminée pour la merger à la branche principale.

Dans notre projet on a utilisé deux branches : 
 - "main" 
 - "develop" 
 
Pour chaque feature de ce projet une sous-branche de develop est créée
 
 [![Gitflow]](https://ibb.co/vVthvmw)

 

<!-- GitLab CI -->
## GitLab CI
Creation de pipeline de déploiement qui permet d'automatiser les étapes de test et deploiement.
- creer un fichier nommé .gitlab-ci.yml
 ```sh
 touch .gitlab-ci.yml && vi .gitlab-ci.yml
```

```sh
image: node:latest
cache:
  paths:
    - node_modules/
stages:
  - build
```

Le contenu de fichier: 

* Image vous permet de spécifier l image Docker à utiliser pour lancer le pipeline.
* Stage nous permet de définir nos différentes étapes au sein de la pipeline.
* Cache nous permet ici de garder en cache nos node_modules pour éviter d avoir à les re-télécharger à chaque fois.

Enfin on a commité le tout :
```sh
git add .
git commit -m "build stage"
git push origin master
```



## Git remote: 
git remote sont but est de créer et d'afficher et d supprimer des connexions avec d'autre dépots

## Les licences : 
Les licences open source c'est une licence de logiciel dont le code source est mis a la disposition du grand public et qui peut être partagé et modifié


## Docker: 
c'est une technologie de conteneurisation qui permet la création et l'utilisation de conteneurs

## Heroku : 
c'est une plateforme en tant que service permettant de déployer des applications sur le cloud 





<!-- CONTACT -->
## Contact
BESSONNIER  Raphaël: [https://gitlab.com/ThePrimesBros](https://gitlab.com/ThePrimesBros)

JAMIN Mael: [https://gitlab.com/mael.jamin](https://gitlab.com/mael.jamin)

TAGUEMOUNT Kamelia: [https://gitlab.com/taguemountkamelia094](https://gitlab.com/taguemountkamelia094)

Project Link: [https://gitlab.com/mael.jamin/projet_git_iw4](https://gitlab.com/mael.jamin/projet_git_iw4)
