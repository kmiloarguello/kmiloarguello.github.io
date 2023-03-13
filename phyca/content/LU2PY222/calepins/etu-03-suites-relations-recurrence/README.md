# Suite, relations de récurrence et fonctions

## `while`

```
while (3 > 2):
    # do something
```

Avec une variable `n` qui puisse varier, on peut arreter le flux d'exécution du cycle `while`.

```
n = 0

while n < 3:
    print("La valeur de n=" + str(n))
    n += 1
```

> Pour arreter le boucle `while`, lors d'une condition, il suffit d'ajouter l'instruction `break`. Mais ce n'est pas recommandé de l'utiliser assez souvent :'). C'est la programmation spaghetti.

## `for`

```
for i in range(5):
    print(i) # 0  1  2  3  4
```

Pour cela on utilise l'instruction `range(start, stop, step)`.

> Si on veut transformer un objet `range` en objet `list`

```
list(range(5))
```

On peut utiliser l'instruction `enumerate()` pour savoir l'indice de chaque élement.

> Pour itérer sur un dictionnaire `for k, v in dictionnaire.items():`. Avec `k` le mot clé et `v` sa valeur.

Pour numpy:

> Si on veut itérer sur tous les éléments d'un tableau 2D, on peut utiliser la fonction Numpy `np.nditer()`

Pour Pandas dataframe:

> Si on veut itérer sur un dataframe il suffit: `for label, row in df.iterrows():`, avec `label` comme l'indice de la ligne et `row` comme la valeur de toute la ligne.

Si on veut obtenir une colonne en particulaire, il faut par exemple dans l'itération: `row['colonne']`, avec `'colonne'` le nom de la colonne à filtrer.

On peut aussi filtrer avec `df.iteritems()` au lieu de `df.iterrows()`. ça va filtrer par colonnes.

## Fonctions

```
def my_fonction ():
    print("Hola mundo")
```

Pour éxecuter la fonction il suffit d'ajouter : `my_fonction()` et voilà.

> Il faut faire attention avec **l'scope** de chaque fonction, où les variables ne sont pas forcément globales.

On peut avoir des fonctions avec paramètres et arguments comme par exemple:

```
def your_name ( name ):
    print("Your name is " + name )

my_name("Giulia")
```

Les fonctions peuvent aussi retourner des valeurs, qu'on pourrait utiliser après, comme par exemple:

```
def fullname(firstname,lastname):
    return firstname + " " + lastname

fullname("Giulia","M.")
```

> N'oublier commenter les fonctions avec les `Docstrings` c'est à dire les `""" something """`.

On peut retourner plusieurs valeurs de chaque fonction. Les valeurs doivent être retourners sous la forme d'une tuple. Exemple `return (a, b, c, d)`. Ainsi que pour obtenir ces variables dehors de la fonction, on peut faire comme ça:

```
def my_fonction():
    a = 1
    b = 2
    return (a,b)

x, y = my_fontion()
```

**Lambda**

> C'est très importante 

Pour une fonction en forme *lambda*:

```
lambda name : "Je suis " + name
```
Avec `name` le nom variable et après les `:`, l'instruction.

Si on veut donner une valeur d'entrée:

```
(lambda name : "Je suis " + name)("Giulia")
```

Ainsi avec une variable:

```
best_name = lambda name : "Je suis " + name

best_name("Giulia")

```

Un petit remarque des exercices: 

> Il y a la fonction `plt.semilogy()` qui peut plotter sur une grille logaritmique.



