# Chapitre 2

## Lois de probabilités et mesures expérimentales

### Probabilité

- **Expériences dénombrables**: 
    Est une expérience qui a un nombre fini ou dénombrable de résultats possibles.
    Exemple:
        - Lancer d'un dé à six faces, car il y a six résultats possibles (nombres de `1` à `6`).
        - Tirage d'une carte dans un jeu de 52 cartes, car il y a 52 résultats possibles (52 cartes).
        - Lancer une pièce de monnaie, car il y a deux résultats possibles (face ou pile).
- **Expériences indénombrables**:
    Est une expérience qui a un nombre infini de résultats possibles.
    Exemple:
        - La mesure de la température dans une pièce, car il y a un nombre infini de températures possibles.
        - La durée de vie d'une ampoule électrique, car il y a un nombre infini de durées possibles.
        - La vitesse de réaction chimique, car il y a un nombre infini de vitesses possibles.

#### Variables aléatoires

On distingue deux types de variables aléatoires:

- **Variables aléatoires discrètes**, pour lesquelles l'univers est fini ou dénombrable.
- **Variables aléatoires continues**, lorsque l'univers est infini ou indénombrable.

#### Probabilité de variables discrètes

La probabilité d'une variable discrète est la mesure de la chance qu'un événement particulier se produise. Elle est comprise entre `0` et `1`, où `0` signifie qu'un événement est **impossible** et `1` signifie qu'il est **certain**.

Exemple:
- Le tirage d'un dé à 6 faces peut être associé a une variable aléatoire $X$ qui prend les valeurs ${ 1, 2, 3, 4, 5, 6 }$.
- Le nombre d'oeufs pondus par une poule chaque jour peut être associé a une variable aléatoire $X$ qui prend les valeurs ${ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 }$ dans $\mathbb{N}$.

Les variables aléatoires discrètes $N$ sont définies sur un ensemble $\Omega = \{n_i\}_{i=1...\infty} $. La probabilité d'une variable aléatoire discrète $N$ est une fonction $P$ qui associe à chaque élément de $\Omega$ une valeur de probabilité.

$$ p(n) = P(N = n) $$

Ainsi, toutes les probabilités de chaque valeur $n_i$ somment 1:

$$ \sum_{n=1}^{\infty} p(n_i) = 1 $$

Alors, si on ordonne les nombres dans l'ensemble $\Omega$ de manière croissante, on peut écrire: $\Omega : n_1 \lt n_2 \lt n_3 \lt ... $. On aura l'évènement $N \lt n$ qui est l'ensemble des valeurs de $N$ inférieures ou égales à $n$. Sa probabilité vaut:

$$ F(n) = P(N \lt n) = \sum_{n_i \lt n} p(n_i) $$

Cette fonction $F$ est appelée fonction de répartition de la variable aléatoire $N$. Elle est croissante et continue sur $\mathbb{R}$.

$$ lim_{n \to -\infty} F(n) = P(\emptyset) = 0 $$
$$ lim_{n \to \infty} F(n) = P(\Omega) = 1 $$

:::{admonition} Exemple

Supposons que on a une variable discrète $X$ qui représente le nombre de fois qu'un joueur réussit à marquer un panier lors d'un match de basket-ball. Si le joueur a une moyenne de `4` paniers par match, la probabilité qu'il marque exactement `3` paniers peut être calculée comme suit :

$$ P(X = 3) = \frac{\text{nombre de fois que le joueur a marqué 3 paniers}}{\text{nombre total de matchs joués}} $$

On utilise la loi binomiale pour calculer le nombre de façons dont le joueur peut marquer `3` paniers dans un match. Avec $p$ la probabilité d'un succès et $q$ la probabilité d'un échec égale à $(1 - p)$, la loi binomiale donne:

$$ P(X = k) = \binom{n}{k} \times p^k \times q^{n - k} $$ 

Le nombre de façons dont le joueur peut marquer `3` paniers dans un match est égal au nombre de combinaisons de `3` paniers parmi `4` tentatives. Le nombre de combinaisons de `3` paniers parmi `4` tentatives est égal à $\frac{4!}{3!(4-3)!}$. La probabilité qu'un joueur marque `3` paniers dans un match est égale à `0.25`. La probabilité qu'un joueur marque `3` paniers dans un match est donc égale à $\frac{4!}{3!(4-3)!} \times 0.25^3 \times 0.75^1$.

$$ P(X = 3) = \frac{4!}{3!(4-3)!} \times 0.25^3 \times 0.75^1 = 0.25 $$

Il est important de noter que la somme des probabilités de toutes les valeurs possibles de la variable doit être égale à `1`, car l'un de ces résultats doit se produire. Ainsi, la somme de toutes les probabilités pour une variable discrète est égale à `1`.
:::

#### Probabilité de variables continues

La probabilité de variables continues utilise des variables qui peuvent prendre une infinité de valeurs réelles dans un intervalle continu. Par conséquent, la probabilité qu'une variable continue prenne une valeur exacte est nulle (i.e. $P(X=x) = 0$). Elle est égale à l'aire sous la courbe de la fonction de densité de probabilité.

:::{admonition} Qu'est ce que la densité de probabilité?

La densité de probabilité est une fonction qui décrit la probabilité qu'une variable aléatoire prenne une valeur dans un intervalle donné. La densité de probabilité est une fonction continue qui est toujours positive et intégrée à 1. 

Un exemple classique de densité de probabilité est la distribution normale.
:::

Exemple:
- Une position choisie au hasard le long d'une règle de $10cm$ peut être associée à une variable aléatoire $X$ qui prend les valeurs $[0, 10]$ (en $cm$).

On peut définir la probabilité d'une variable continue $X$ comme suit:

$$ P(X \lt x) = F(x) $$

Où $F(x)$ est appelée la fonction de répartition, et permet de définier la densité de probabilité $f(x)$ ou (pdf) telle que:

$$ f(x) = \frac{dF(x)}{dx} $$

```python

import numpy as np
import matplotlib.pyplot as plt

def gaussian(x, mu, sig):
    """
    Cette fonction retourne la valeur de la fonction gaussienne
    """
    return 1. /(np.sqrt(2 * np.pi) * sig) * np.exp(-np.power(x - mu, 2.) / (2 * np.power(sig, 2.)))

x1 = [ 0.2*i for i in range(-15,11) ]  # liste d'abscisses de la figure
y1 = [gaussian(val,0,1) for val in x1] # calcul de y1 = f(x)
x2 = [ 0.2*i for i in range(-15,11) ] # liste d'abscisses de la figure
y2 = [0.5+erf(val)/2. for val in x2]  # calcul de y = f(x)

# creation d'un plot
fig, ax = plt.subplots()
ax.plot(x1,y1,"-",label="pdf(x)") # plot de y1 vs x
ax.plot(x2,y2,"--", label="F(x)") # plot de y1 vs x
ax.set_xlabel('x') # titre de l'axe x
leg = ax.legend()   # creation de la légende

```

```{image} img/probabilite_var_continue.png
:alt: Probabilité de variables continues
:class: probabilite_var_continue
:width: 600px
:align: center
Figure 1: Probabilité de variables continues
```

On peut définir la probabilité de trouver une valeur de $X$ dans l'intervalle $dx$ autour de $x$:

$$ f(x)dx = P(X \lt x + dx) - P(X \lt x) = P(x \lt X \lt x + dx) $$ 

:::{note}
On peut dire que la variable $X$ est distribuée selon la fonction de densité de probabilité $f(x)$.
:::

Alors, on calcule la pdf $f(x)$ définie sur $\mathbb{R}$ et $\left[a, b\right]$ comme suit:

$$ P (a \lt X \lt b) = \int_a^b f(x)dx = F(b) - F(a) $$
$$ P (\emptyset) = \int_a^b f(x)dx = 0 $$
$$ P (\Omega) = \int_a^b f(x)dx = 1 $$



:::{admonition} Exemple

Supposons que $X$ est une variable aléatoire qui représente la hauteur d'une personne. Si on suppose aussi que la taille des personnes suit une distribution normale avec une moyenne de 170cm et un écart-type de 10cm, alors la fonction de densité de probabilité $f(x)$ peut être définie selon la loi normale comme suit:

$$ f(x) = \frac{1}{\sigma \times \sqrt{2 \pi}} \times e^{-\frac{(x - \sigma)^2}{\sigma^2}} $$

D'où:

$$ f(x) = \frac{1}{10 \times \sqrt{2 \pi}} \times e^{-\frac{(x - 170)^2}{2 \times 10^2}} $$

La probabilité qu'une personne soit plus grande que 180cm peut être calculée en vérifient dans l'intervalle de $180cm$ à l'infini, alors on fait l'integral:

$$ P(180 \lt X \lt \infty) = \int_{180}^{\infty} f(x)dx $$

Si par exemple à l'aide d'un logiciel de calcul, on trouve que l'intégrale est égale à `0.16`, alors la probabilité que la hauteur d'une personne soit comprise entre `180cm` et l'infini est égale à `16%`.
:::

#### Changement de variables aléatoires

Pour une variable $X$ dont la *pdf* $f(x)$ est connue, on peut déterminer la *pdf* $g(y)$ d'une variable aléatoire $Y$ définie par la relation: $X:Y = \phi(X)$, on pourra démontrer que:

$$ g(y) = \frac{f(x)}{\left| \phi'(x) \right|} = \frac{f(\phi^-1(y))}{\left| (\phi'(\phi^{-1}(y))) \right|}$$

:::{admonition} Exemple
Soit $X$ une variable aléatoire suivant une loi exponentielle: $f(x) = \exp (-x)$ sur $\left[0,\infty\right]$. Que vaut la distribution $g$ de la variable $Y=\sqrt{X}$ ?

La dérivée de $\phi(x)$ par rapport à $x$ est $\phi'(x) = \frac{1}{2\sqrt{x}}$. Ainsi, la *pdf* de $Y$ est donnée par :

En utilisant la formule précédente, on trouve:

$$ g(y) = \frac{f(x)}{\left| \frac{1}{2 \sqrt{x}} \right|} = 2 \sqrt{x} \exp(-x) $$

On peut substituer $\sqrt{x}$ par $y$ pour trouver la *pdf* de $Y$:

$$ g(y) = 2 y \exp(-y^2), \quad \text{pour} \quad y \geq 0 $$

:::

```python
import matplotlib.pyplot as plt # importer maplotlib
import numpy as np
from math import exp

x = [ 0.02*i for i in range(0,260) ] # liste d'abscisses de la figure
f = [exp(-val) for val in x]      # calcul de f(x)
g = [2*val*exp(-val*val) for val in x] # calcul de g(y)

fig, ax = plt.subplots()         # creation d'un plot
ax.plot(x,f,"-",label="f(x)")   # plot de f vs x
ax.plot(x,g,"--", label="g(y)") # plot de g vs x
ax.set_xlabel('x ou y')          # titre de l'axe x
leg = ax.legend()                # creation de la légende
```
```{image} img/probabilite_change_var.png
:alt: Changement de variables aléatoires
:class: fig:probabilite_change_var
:width: 600px
:align: center
Figure 2: Changement de variables aléatoires
```
```

:::{admonition} Qu'est ce que une fonction bijective?
Une fonction bijective est une fonction qui est à la fois injective et surjective. 

- Une fonction est injective si chaque élément d'un ensemble de départ (domaine) est associé à un seul élément de l'ensemble d'arrivée (codomaine).
- Une fonction est surjective si chaque élément de l'ensemble d'arrivée est associé à un élément de l'ensemble de départ.

```{image} img/bijection-wiki.png
:alt: bijection
:width: 600px
:align: center
```

Image prise de [Wikipédia](https://fr.wikipedia.org/wiki/Bijection)
:::

Si la fonction $\phi(y)$ n'est pas *bijective*, alors c'est possible de découper l'espace de définition de $\phi$ en $n$ intervalles sur lesquel la fonction $\phi$ est *bijective* et on peut définir la *pdf* de $Y$ comme suit:

$$ g(y) = \sum_{i=1}^n \frac{f(x_i)}{\left| \phi'(x_i) \right|} \mathbb{1}_{\left[x_i, x_{i+1}\right]}(y) $$

:::{note}
Verifiez [l'exercice 5](exercices.html#exercice-1)
:::

### Lois de Probabilité usuelles
### Notion d'erreur sur une mesure
