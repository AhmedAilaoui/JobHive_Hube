# 🐝 JobHive Hub

**JobHive Hub** est une plateforme web de recrutement moderne qui facilite la mise en relation entre employeurs et candidats à la recherche d'opportunités professionnelles.

![JobHive Logo](logo1.png)

## 📋 Table des matières

- [À propos](#à-propos)
- [Fonctionnalités](#fonctionnalités)
- [Technologies utilisées](#technologies-utilisées)
- [Installation](#installation)
- [Structure du projet](#structure-du-projet)
- [Configuration](#configuration)
- [Utilisation](#utilisation)
- [Contributeurs](#contributeurs)

## 🎯 À propos

JobHive Hub est une solution complète de gestion de recrutement qui permet aux entreprises de publier des offres d'emploi et aux candidats de postuler facilement. La plateforme offre une interface intuitive pour les deux types d'utilisateurs.

## ✨ Fonctionnalités

### Pour les Candidats
- ✅ Création et gestion de profil
- 🔍 Recherche d'offres d'emploi
- 📄 Candidature en ligne
- 📊 Suivi des candidatures
- 🔔 Notifications sur les nouvelles opportunités

### Pour les Employeurs
- 📝 Publication d'offres d'emploi
- 👥 Gestion des candidatures
- 🔎 Recherche de candidats
- 📈 Tableau de bord de suivi
- ✉️ Communication avec les candidats

### Fonctionnalités générales
- 🔐 Système d'authentification sécurisé
- 📱 Interface responsive
- 📧 Page de contact
- 🎨 Design moderne et épuré

## 🛠 Technologies utilisées

- **Backend**: PHP (89.9%)
- **Frontend**: 
  - HTML (3.7%)
  - CSS (6.3%)
  - JavaScript (0.1%)
- **Base de données**: MySQL
- **Serveur**: Apache/Nginx (XAMPP, WAMP, ou similaire)

## 📥 Installation

### Prérequis

- PHP 7.4 ou supérieur
- MySQL 5.7 ou supérieur
- Serveur web (Apache/Nginx)
- XAMPP/WAMP/LAMP (recommandé pour le développement local)

### Étapes d'installation

1. **Cloner le repository**
```bash
git clone https://github.com/AhmedAilaoui/JobHive_Hube.git
cd JobHive_Hube
```

2. **Configurer la base de données**
```bash
# Créer une nouvelle base de données MySQL
# Importer le fichier SQL
mysql -u votre_utilisateur -p nom_de_la_base < jobhive_hub.sql
```

3. **Configurer les paramètres de connexion**
```php
// Modifier les paramètres de connexion à la base de données
// dans les fichiers de configuration PHP
$host = "localhost";
$dbname = "jobhive_hub";
$username = "votre_utilisateur";
$password = "votre_mot_de_passe";
```

4. **Démarrer le serveur**
```bash
# Si vous utilisez XAMPP/WAMP, placer le projet dans htdocs
# Puis accéder à: http://localhost/JobHive_Hube
```

## 📁 Structure du projet

```
JobHive_Hube/
│
├── contact_us/          # Page de contact
├── landing_page/        # Page d'accueil principale
├── login/              # Système de connexion
├── page-employeur/     # Interface employeur
├── page-utilisateur/   # Interface candidat
├── registre/           # Système d'inscription
├── jobhive_hub.sql     # Structure de la base de données
└── logo1.png           # Logo de l'application
```

## ⚙️ Configuration

### Configuration de la base de données

Le fichier `jobhive_hub.sql` contient la structure complète de la base de données. Assurez-vous de l'importer avant de lancer l'application.

### Variables d'environnement

Créez un fichier de configuration pour vos paramètres sensibles :

```php
<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'jobhive_hub');
define('DB_USER', 'votre_utilisateur');
define('DB_PASS', 'votre_mot_de_passe');
?>
```

## 🚀 Utilisation

1. **Accéder à la page d'accueil**
   - Naviguez vers `http://localhost/JobHive_Hube/landing_page`

2. **S'inscrire**
   - Choisissez votre type de compte (Candidat ou Employeur)
   - Remplissez le formulaire d'inscription dans `/registre`

3. **Se connecter**
   - Utilisez vos identifiants sur `/login`

4. **Naviguer dans l'interface**
   - **Candidats**: Accédez à `/page-utilisateur`
   - **Employeurs**: Accédez à `/page-employeur`

## 👥 Contributeurs

- **Ahmed Ailaoui** - *Développeur principal* - [@AhmedAilaoui](https://github.com/AhmedAilaoui)

## 📞 Contact

Pour toute question ou suggestion, n'hésitez pas à nous contacter via la page de contact de l'application.

## 📝 Licence

Ce projet est sous licence MIT - voir le fichier LICENSE pour plus de détails.

## 🔮 Améliorations futures

- [ ] Système de messagerie interne
- [ ] Filtres de recherche avancés
- [ ] Export de CV en PDF
- [ ] Notifications par email
- [ ] API REST
- [ ] Version mobile (Application native)
- [ ] Intégration avec LinkedIn
- [ ] Système de recommandations IA

---

⭐ Si vous aimez ce projet, n'hésitez pas à lui donner une étoile sur GitHub !
