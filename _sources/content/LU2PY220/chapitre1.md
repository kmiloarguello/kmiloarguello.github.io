# Chapitre 1 

## Comment se repérer dans l'espace ?

À l'aide de la règle et le compas, on peut tracer une droite perpéndiculaire à une droite donnée.

### Système de coordonées cartésiennes orthonormées

- On se place dans un point dans le plan

```{math}
:label: point_A
A = \begin{pmatrix} a^1 \\ a^2 \end{pmatrix}
```

- Ainsi, on peut definir un deuxième point $B$

```{math}
:label: point_B
A = \begin{pmatrix} b^1 \\ b^2 \end{pmatrix}
```

- On peut definir le vecteur $\vec{AB}$ à partir de couple de coordonées.

```{math}
:label: point_C
A = \begin{pmatrix} b^1 - a^1 \\ b^2 - a^2 \end{pmatrix}
```

Dans le plan, l'origine est donn' par le point $O$. Maintenant, le point M (quelconque) de coordonnées $x^1$ et $x^2$ où,

```{math}
x^1 = b^1 - a^1
```

et 

```{math}
x^2 = b^2 - a^2
```

On pourrait écrire que les vecteurs $\vec{AB}$ et $\vec{OM}$ sont identiques.

```{math}
v = AB = OM
```

:::{note}
$\vec{AB}$ et $\vec{OM}$ sont deux represéntants d'un même vecteur v
:::

### Vecteurs identiques

Les vecteurs $\vec{AB}$ et $\vec{CD}$ sont identiques si eux, ils forment un parallélogramme.


### Rélation de Chasles

Soient deux vecteurs $u$ et $v$.

```{math}
u = \begin{pmatrix} u^1 \\ u^2 \end{pmatrix}

v = \begin{pmatrix} v^1 \\ v^2 \end{pmatrix}
```
On définit la somme $w$ de ces deux vecteurs.

```{math}
u^1+v^1 et u^2+v^2
```

On répresente aussi $u$ par $\vec{AB}$ et $v$ par $\vec{BC}$ la loi de composition donnée montre que:

```{math}
w = AC
```
Ainsi,
```{math}
w = u + v
w = AB + BC
```
:::{note}
La loi de composition $\textbf{interne}$ est associé a la $\textbf{somme}$. 


La loi de composition $\textbf{externe}$ est associé au $\textbf{produit vectorielle}$. 
:::
