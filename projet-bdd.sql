

CREATE TABLE autorisation (
  auth_id int NOT NULL,
  auth_type varchar(255) NOT NULL
);

CREATE TABLE historique (
  historique_id int NOT NULL,
  id_utilisateurs int NOT NULL
);

CREATE TABLE images (
  image_id int NOT NULL,
  image blob NOT NULL,
  height int NOT NULL,
  width int NOT NULL
);

CREATE TABLE jobs (
  job_id int NOT NULL,
  job_name varchar(255) NOT NULL,
  auth_id int NOT NULL
);

CREATE TABLE utilisateurs (
  id_utilisateurs int NOT NULL,
  nom varchar(255) NOT NULL,
  prenom varchar(255) NOT NULL,
  mdp varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  job_id int NOT NULL,
  image_id int NOT NULL
);


ALTER TABLE autorisation
  ADD PRIMARY KEY (auth_id);

ALTER TABLE historique
  ADD PRIMARY KEY (historique_id);

ALTER TABLE images
  ADD PRIMARY KEY (image_id);

ALTER TABLE jobs
  ADD PRIMARY KEY (job_id);

ALTER TABLE utilisateurs
  ADD PRIMARY KEY (id_utilisateurs);

ALTER TABLE historique 
 ADD FOREIGN KEY(id_utilisateurs) REFERENCES utilisateurs(id_utilisateurs);

ALTER TABLE jobs 
  ADD FOREIGN KEY(auth_id) REFERENCES autorisation(auth_id);

ALTER TABLE utilisateurs 
  ADD FOREIGN KEY(job_id) REFERENCES jobs(job_id);

ALTER TABLE utilisateurs 
  ADD FOREIGN KEY(image_id) REFERENCES images(image_id);