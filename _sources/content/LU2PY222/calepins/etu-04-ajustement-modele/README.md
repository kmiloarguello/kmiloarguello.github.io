# Entrées et sorties

## Ouverture d'un fichier

Si on veut ouvrir un fichier de text, ou csv ou dat, on peut le faire avec la fonction `open()`.

Par exemple:

```
file = open('myfile.txt', mode='r', encoding='utf-8')
```
On peut voir qu'il y a des parametres tels que `mode` et `encoding`. Avec le `mode` on peut décrire le type d'acces au fichier, par exemple `read`, `write` ou `execute`. Chacune va nous permettre de faire différentes choses tels que lire ou mettre à jour le fichier. Ainsi, lorsqu'il peut avoir des charactères spèciaux on doit utiliser `utf-8`.

> Pour éviter des erreurs de contexte il faut utiliser `with open() as file:`.

> Pour écrire un fichier on doit utiliser `file.write()`. Mais il faut avoir le `mode='w'`.

La façon d'écriture de fichier peut se faire avec des cycles `for` ou `while`, où il faut à chaque iteration ecrire dans le fichier.

```
for i in range(5):
    file.write(str(i) + '\n' )
```

## Clavier

On peut aussi avoir accés au clavier qui va demander à l'utilisateur d'entrer une valeur.

```
name = input('Écrirez votre prenom:\n')
```

Le type de valeur normalement est un `string`, mais on peut le changer avec les fonctions python.

## Pour imprimer des valeurs

On peut écrire de façon similar au languages C ou Matlab, pour imprimer des valeurs.

```
n = 5
x = 3.141516

print('x = {:f}, n = {}'.format(x,n))
```

Où `:f` c'est la quantité de valeurs `float` je vais montrer. Si j'ai `{}`, je vais montrer le valeur complét.

## `np.loadtxt(..)`

Avec Numpy, il est possible d'avoir accés aux fichiers, si par exemple on veut ouvrir le fichier `myfile.dat`.

```
data = np.loadtxt('myfile.dat')
```
Si par exemple dans le fichier il y a plusieurs colonnes, on peut y accéder avec le paramétre `unpack=True`.

```
col1, col2 = np.loadtxt('myfile.dat', unpack=True)
```

Ainsi que pour écrire un fichier:

```
np.savetxt('myfile-v2.dat', np.c_[col1, col2], fmt='%10.2e' )
```
On peut rémarquer qu'ici on a comme premier parametre le nom de fichier, le deuxième les données sépares par colonnes et puis finalement le format.

> Avec numpy il arrive très souvent que les données à importer soient de types différents, alors il faut mieux le faire avec Pandas.





