# Méthodes mathématiques complémentaire

## Chapitre 1: Fonctions et intégrales

### 1.1 Continuité et dérivation

#### Limite

Une fonction f admet la limite $l$ en $x=a$ si et seulement si $ \forall \epsilon \gt 0, \exists \eta \gt 0 $ tel que $ \forall x $, $ \left| x - a \right| \le n \Rightarrow  \left| y - l \right| \le \epsilon $.

$$ l = \lim_{x \to a} f(x) \hspace{1cm} ou \hspace{1cm} f(x) \rightarrow_{x \to a} l $$

:::{admonition} Exemple

On a la fonction $ f(x) = x^2 $ définie sur $\mathbb{R}$ admet $l=4$ en $x=2$. On peut dire:

$$ \left| f(x) - 4 \right| = \left| x^2 - 4 \right| = \left| x - 2 \right|\left| x + 2 \right| $$

Si on pose:

$$ 1 \lt x \lt 3 \rightarrow 3 \lt x + 2 \lt 5 \hspace{1cm}\text{et} \left| x + 2 \right| \lt 5$$

Soit

$$ \left| f(x) - 4 \right| \le 5 \left| x - 2 \right| $$

Il suffit d'avoir $\left| x -2 \right| \lt \epsilon / 5$ pour obtenir $\left| f(x) - 4 \right| \lt \epsilon$.

:::

La limite à droite de $a$ est $\infty$ si:

$$ \lim_{x \to a^+} f(x) = + \infty \Leftrightarrow \forall \epsilon \gt 0, \exists X \gt 0 / \forall x, a \lt x \le a+\eta \Rightarrow f(x) \ge M $$

La limite à gauche peut être définie de la même manière.

$$ \lim_{x \to +\infty} f(x) = l \Leftrightarrow \forall \epsilon \gt 0, \exists X \gt 0 / \forall x, X \le x \rightarrow \left| f(x)-l \right| \le \epsilon $$


$$ \lim_{x \to +\infty} f(x) = +\infty \Leftrightarrow \forall \epsilon \gt 0, \exists X \gt 0 / \forall x, X \le x \rightarrow f(x) \ge M $$

#### Continuité

Une fonction $f$ est continue en $x=a$ si:

$$ \lim_{x \to a} f(x) = f(a) $$

*Si $f$ est continue en $x=a$, alors $f$ est continue en $x=a^+$ et $x=a^-$.*

Soit $I \subset \mathbb{R} \rightarrow \mathbb{R}$, si $I$ est un intervalle de type $\left[ a,b \right], \left[ a,b \right[$ alors, $f(I)$ est aussi un intervalle.

Si $I$ est un intervalle fermé de type $\left[ a,b \right]$ alors, $f(I)$ est aussi un intervalle fermé.

#### Dérivation

Soit $f$ une fonction définie sur un intervalle $I$ et $a \in I$. On dit que $f$ est dérivable en $x=a$ si:

$$ \lim_{x \to a} \frac{f(x)-f(a)}{x-a} = f'(a) $$

Pour que la dérivée existe, il faut que $f$ soit continue en $x=a$. C'est necessaire mais pas suffisante.

Aussi, si $g$ est dérivable en $x$ et $f$ dérivable en $y=g(x)$, alors:

$$ f[g(x)] \hspace{1cm} \text{est dérivable} \hspace{1cm} (f[g(x)])' = f'[g(x)]g'(x) $$

##### Dérivée d'une fonction inverse

Soit $f$ une fonction bijective de $I$ vers $f(I)$. On suppose $f$ dérivable en $y=f^{-1}(x)$ tel que $f'(f^{-1}(x)) \neq 0$. Alors $f^{-1}$ est dérivable en $x=f(y)$.

De plus:

$$ (f^{-1})'(x) = \frac{1}{f'(f^{-1}(x))} $$

Exemple $f(x) = x$:

$$ f(x) = x \rightarrow f(f^{-1}(x)) = x \rightarrow f'(f^{-1}(x))(f^{-1})(x) = 1 $$

Exemple $f(x) = x^2$:

$$ f(x) = x^2 $$ 

$$ f'(x) = \lim_{\epsilon \to 0} \frac{f(x-\epsilon)-f(x)}{\epsilon} = \lim_{\epsilon \to 0} \frac{(x+\epsilon)^2-x^2}{\epsilon} $$

$$ f'(x) = \lim_{\epsilon \to 0} \frac{x^2+2\epsilon x + \epsilon^2 - x^2}{\epsilon}  $$

$$ f'(x) = 2x $$


