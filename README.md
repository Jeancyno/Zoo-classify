# Zoo-classify
# Classification Animale - Système Expert Web

Ce projet permet de classifier un animal dans une des catégories suivantes : **mammifère, reptile, batracien**, en fonction de ses caractéristiques (locomotion, ossature, respiration, température). Il repose sur un **moteur d'inférence en C** et une **base de connaissances en Python**, interfacés via une **application web en PHP**.

## 📌 Fonctionnalités
- Interface web pour saisir les caractéristiques de l’animal.
- Communication avec le moteur d'inférence via `popen()` et JSON.
- Stockage des règles et faits dans une base **SQLite**.
- Affichage du résultat avec un pourcentage de certitude.
- Affichage d’une **image correspondant à la classification** de l’animal.

## 🛠️ Technologies utilisées
- **Frontend** : HTML, PHP, Tailwind CSS


## 📂 Structure du projet

/mon-projet │ 
   ├── /assets │ 
     ├── /css │ │ 
        └── tailwind.css 
     ├── /images │ 
         ├── mammifère.jpg │ 
   ├── /includes 
      ├── header.php 
      ├── footer.php 
      └── navbar.php 
   ├── /pages │
     ├── index.php
     ├── process.php 
     ├── results.php 
     └── about.php 

## Ouverture du server 
```sh
php -S localhost:8080
```
