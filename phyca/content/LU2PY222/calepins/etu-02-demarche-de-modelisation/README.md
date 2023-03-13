# Démarche de modélisation


## Dictionnaires

- Un dictionnaire est une collection de paires clé-valeur qui sont accessibles via leur clé, ils se ressemblent à une liste grâce à qu'ils sont capables d'stocker n'importe quel type de valeur.

```
{
    "key" : "valeur"
}
```

Par exemple si on veut trouver la valeur associé, dans un dictionnaire de pays et capitals:

```
europe = { "france" : "paris" }

print(europe["france"]) # "paris"
```

On peut utiliser la méthode `capitalize` pour changer la valeur:

```
print(europe["france"].capitalize()) # "Paris"
```

Pour verifier s'il y a une `clé` dans le dictionnaire. 

```
'france' in europe # True
```

Pour enlever une `clé` il faut utiliser `del`
```
del(europe["france"])
```

## Dataframes

L'objet est similaire à une excel. Pour créer un Pandas DataFrame:

```
import pandas as pd

data = { .. }

df = pd.dataframe(data)
```

Quelques attributs importantes:

`ndim` : nombre de dimensions `# ex: 2`
`shape`: nombre d'éléments dans chaque dimension `# ex: (27, 4)`
`size` : nombre total d'éléments `# 108`

Deux méthodes pour afficher les premières ou dernières lignes de notre tableau.

```
df.head(n = 2) # montre deux premières lignes 
df.head(n = 3) # montre trois dernières lignes
```

L'objet Series sur pandas est liée à chacune des clés présents dans le dataframe `df`. Alors, si on veut extraire une colonne du dataframe, il suffit d'écrire: `col_pays = df['pays']`, avec `pays` comme un clé dans le dataframe. Ainsi, on peut accéder à la valeur de la "Series" `col_pays[23]` comme si c'est une liste ou un numpy.array.

On doit utiliser `.loc[]` pour accéder à une ligne de `df`, exemple: 
```
df.loc[23]
```

Pour savoir les **étiquettes des lignes** : `df.index`
Pour savoir les **noms de columns** : `df.columns`

Pour extraire des info dans une colonne par exemple: `df.loc[1:4, 'capitale']`. Il existe aussi `iloc[]`, `.at[]` et `.iat[]`.

On peut utiliser `.append()` pour ajouter des colonnes dans le tableau. Il faut bien vérifier l'structure avant d'y mettre. Par exemple l'attribut `name` donne l'ID ou le nom de colonne.

Pour suprimmer, il faut utiliser `.drop()`. Comme par exemple, si on envie de suprimmer la ligne 20: `df.drop([20])`

N'oublier qu'on peut faire des calculs arithmétiques comme `.sum()` et d'autres.

Pour sauvegarder un dataframe avec les mêmes propiétés qu'on a:

```
# Sauvegarde d'un DataFrame dans un fichier pickle
df.to_pickle('fichier.pkl')

# Lecture du fichier pickle
df_file = pd.read_pickle('./fichier.pkl')
```

## Opérateurs de comparaison

### les booléens

On a des expressions booléenes: c'est à dire, elles sont vraies ou fausses.


```
print(5 == 5) # True

# ou

print(2 == 4) # False
```

### Opérateurs

> `==`
> `!=`

Par exemple `print(15 == 15.0)` c'est `True` même si ce sont deux types de données.

> `>` et `>=`
> `<` et `<=`

Par exemple : `print(2 < 5. <= 10)` c'est `True`.

On peut aussi comparer avec les listes

```
my_liste = np.array([1,2,3,4])

print(A > 5) # True

```
Chaque element doit être plus petite que `5` pour que la condition soit `True`.

### Opérateurs logiques

**`and`**

```
x = 11
x > 10 and x <= 14 # True
```

Avec Numpy il faut utiliser: `logical_and(bool1, bool2)`. Le sorti c'est aussi un tableau numpy

**`or`**

```
n = 12
n % 5 == 0 or n % 6 == 0 # True
```

Avec Numpy il faut utiliser: `logical_or(bool1, bool2)`

**`not`**

```
x = 2.
y = 3

not x > y # True
```
Avec Numpy il faut utiliser: `logical_not(bool)`

**NOTE**

Dans numpy on utilise des fois `all()` si tous sont vrais ou `any()` si au moins un élément es vrai.

## Conditionnelles

```

if:
 # code
elif:
 # code
else:
 # code

```

Pour filtrer un tableau Numpy: `A[condition]` avec `A` comme un tableau Numpy.

Pour filtrer dans un Dataframe: `df[condition]` avec `condition = A > 10`

Dans pandas on utilise les opérateurs logiques comme: `&` pour "and", `|` pour "or", et `~` pour "not".

