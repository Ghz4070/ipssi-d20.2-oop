**Ghezal Ilies**	
##Composition & Heritage
#### Qu'est-ce que l'héritage ?
	
L'héritage est l'un des principes fondamentaux de la programmation orientée objet (OOP), et PHP l'implémente dans son modèle objet. Ce principe aura une incidence sur le nombre de classes qui sont liées les unes aux autres.

Par exemple, lorsque vous étendez une classe, la classe fille hérite de toutes les méthodes publiques et protégées de la classe.
L'héritage est très utile pour définir et abstraire certaines fonctionnalités communes à plusieurs classes, tout en permettant l'implémentation de fonctionnalités supplémentaires dans les classes enfant, sans avoir à les réimplémenter avec

#### Qu'est-ce que la composition ?

La composition est l'un des concepts fondamentaux de la programmation orientée objet. Il décrit une classe qui fait référence à un ou plusieurs objets d'autres classes dans les variables d'instance. Ceci vous permet de modéliser une association has-a entre les objets.
	
Dans ce motif, un objet crée un autre objet. L'agrégation se produit lorsqu'un objet est composé de plusieurs objets. La composition est en fait une relation de propriété, tandis que l'agrégation est une relation "contenant". La composition permet de réutiliser le code sans hériter de la classe mère.

Vous pouvez trouver de telles relations assez régulièrement dans le monde réel. Une voiture, par exemple, a un moteur et les machines à café modernes ont souvent un moulin intégré et une unité de préparation.

## Héritage vs Compostion  

La composition sur l'héritage dans la programmation orientée objet est le principe que les classes doivent obtenir un comportement polymorphe (qui peut se présenter sous des formes différentes) et une réutilisation du code par leur composition plutôt que par l'héritage d'une classe de base ou parent. Il s'agit là d'un principe souvent énoncé dans la POO, comme dans l'ouvrage influent Design Patterns.

De plus, la composition permet souvent de simplifier les relations entre les objets, rendant le code moins interdépendant et donc plus versatile c'est a dire réutilisable.
	
Parfois l'héritage est nécessaire, surtout lorsque vous créez une classe de la même famille, ou si une classe veut simplement utiliser les caractéristiques et propriétés d'une autre classe, alors l'héritage sera utile.

#### Principales différences entre l'heritage et la composition

Composition - A une relation entre les objets.
Héritage - C'est une relation entre les classes.

Composition - L'objet de composition contient une référence aux classes de composition, donc la relation est vaguement liée.
Héritage - L'objet de la classe fille porte la définition de la classe mère en soi et donc étroitement liée.

Composition - Utilisée comme injection addictive
Héritage - Utilisé en polymorphisme

Composition - Les objets peuvent être composés dans plusieurs classes.
Héritage - Une classe ne peut hériter que d'une seule classe.


La principale différence entre la composition et le patrimoine est que la composition permet la réutilisation du code sans clé de classe, mais pour l'héritage vous devez hériter de la classe mère pour toute réutilisation de code ou de fonctionnalité. Une autre différence est que l'utilisation de la composition vous pouvez réutiliser le code pour une classe finale n'est pas extensible, mais l'héritage ne peut pas réutiliser le code en eux. En utilisant également Composition, vous pouvez réutiliser le code de plusieurs classes parce qu'elles sont déclarées comme un seul membre, mais avec Héritage, vous pouvez réutiliser le code d'une seule classe.