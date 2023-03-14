# Introduction à Python

Python est un language assez puissante pour travailler dans l'analyse numérique. Toute d'abbord, on va utiliser Jupyter Notebook qui est une interface créé pour travailler en terms de cellules où on peut mettre: soit de code python, soit de texte markdown, etc.

## Première prise en main

###  Quelques remarques

- Pour ajouter des cellules il faut clicker sur le button `plus` sur jupyter.
- Pour imprimer des instructions, on utilise `print('')`, où on peut imprimer n'importe quel type de valeur (string, integer, float)
- Pour mettre de commentaires il sufit d'ajouter `#` au début de la ligne
- Les opérateurs en python sont addition `+`, soustraction `-`, multiplication `*`, division `/`, puissance `**`, division entiére `//`, et la notation scientifique `e`.

## Les listes Python

C'est comme une chaine mais avec des valeurs de n'importe quel type
```
my_list = [ 0, 1, "hola", "salut," ciao" ]
```
On peut avoir listes des listes
```
my_grand_list = [ [0,1], [2,3] ]
```
On peut modifier les listes avec `l'indice` pour affecter le valeur
```
my_list[0] = "3"
```
**Règles d'indexation**

1. toute expression *entière* peut être utilisée comme indice.
2. Si un indice a une valeu négative, il comte en sens inverse, à partir de la fin de la liste. `my_liste[-2]`
3. C'est impossible de lire ou d'écrire un élément que n'existe pas.

**Des opérations**

Avec l'opérateur plus:
```
["hola"] + ["como"] + ["estas"] 
```
Avec l'opérateur fois:

```
["hola"] * 3 # ["hola"] ["hola"] ["hola"]
```
