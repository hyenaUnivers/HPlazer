
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL ,
  `password` varchar(255) NOT NULL ,
  `contact` varchar(255) ,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);


CREATE TABLE `travailleur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) ,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL ,
  `contact` varchar(255) NOT NULL ,
  `password` varchar(255) NOT NULL ,
  `titre` varchar(255) NOT NULL ,
  `description` varchar(255) ,
  `adresse` varchar(255) NOT NULL ,
  `competences`text ,
  `cv_url` varchar(255),
  `trav_image` varchar(255),
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);

CREATE TABLE `entreprise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `adresse` varchar(255) ,
  `description` varchar(255),
  `email` varchar(255) NOT NULL ,
  `contact` varchar(255) ,
  `password` varchar(255) NOT NULL ,
  `ent_image` varchar(255) ,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);

CREATE TABLE `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `forum_id` int(20) NOT NULL,
  `creator_id` int(20) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);


CREATE TABLE `forum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sujet` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);

CREATE TABLE `job` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entreprise_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `competences`text,
  `author` varchar(255) NOT NULL,
  `price` varchar(255),
  `localisation` varchar(255),
  `duree` varchar(255),
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);


CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);





