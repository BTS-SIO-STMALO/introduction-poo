## Cours introduction POO

# Classe 
Modèle, un plan de fabrication d'un objet. 

# Objet 
Pour créer un objet, on l'instancie à partir d'une classe. C'est une représentation à travers des attributs et des méthodes d'une entité matérielle ou immatérielle. L'objet possède les propriétés (attributs) que l'on a défini dans la classe. Chaque objet a des valeurs d'attributs qui lui sont propres. Un objet a accès à l'ensemble des méthodes de la classe dont il est issu. 

# Attributs (propriétés)
Exemples : 
- pour un objet voiture : couleur, modèle, marque, nombre de chevaux, nombre de place à l'intérieur ...
- pour une personne : couleur des yeux, nom, prénom, poids, taille, sexe ...

# Méthode
Une méthode est une fonction à l'intérieur d'une classe. Elle donc disponible pour tous les objets instanciés à partir de la classe où est cette méthode.
Exemple : 
- une personne peut : marcher, courir, sauter, manger ...
- une voiture peut : rouler, reculer, tournerGauche, tournerDroite ... 

# Visibilité de propriétés (attributs) et méthodes
public = c'est accessible partout
private = seul le code à l'intérieur de la classe peut lire cette propriété. Pour y accéder en dehors de ma classe, j'utilise les getters et setters
protected = c'est accessible au sein de la classe mais aussi la propriété est accessible à l'intérieur des enfants de cette classe (concept d'héritage).

# Getter
Méthode publique d'une classe qui permet de lire la valeur d'une propriété privée. Elle retourne la valeur. 

# Setter
Méthode publique d'une classe qui permet de modifier la valeur d'une propriété privée. 