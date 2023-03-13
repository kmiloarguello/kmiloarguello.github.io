#!/usr/bin/env python
# coding: utf-8

# # Exercise 5
# 
# En utilisant une distribution de nombres aléatoires distribués uniformément, on veut produire une distribution de loi sinusoidale:
# 
# $$ f(x) = \frac{1}{2} \sin(x) $$
# 
# Dans un intervalle compris entre 0 et $\pi$.

# ## Question 1 
# 
# Vérifier que sur cet intervalle $I$ de $f$ est normalisée à 1.

# $$ I = \int_{0}^{\pi} f(x) $$
# 
# $$ I = \int_{0}^{\pi} \frac{1}{2} sin(x) $$
# 
# $$ I = \frac{1}{2} \int_{0}^{\pi} sin(x) $$
# 
# $$ I = \frac{1}{2} \left[ -cos(x) \right]_{0}^{\pi} $$
# 
# $$ I = \frac{1}{2} \left[ -cos(\pi) + cos(0) \right] $$
# 
# $$ I = \frac{1}{2} \left[ 1 + 1 \right] $$
# 
# $$ I = \frac{1}{2} \left[ 2 \right] $$
# 
# $$ I = 1 $$

# ## Question 2
# Calculer la fonction cumulative $F$ de $f$.

# $$ F(x) = \int_{0}^{x} f(x') dx' $$
# 
# $$ F(x) = \int_{0}^{x} \frac{1}{2} sin(x') dx'$$
# 
# $$ F(x) = \frac{1}{2} \int_{0}^{x} sin(x') dx'$$
# 
# $$ F(x) = \frac{1}{2} \left[ -cos(x') \right]_{0}^{x}$$
# 
# $$ F(x) = \frac{1}{2} \left[ -cos(x) + 1 \right]$$
# 
# $$ F(x) = \frac{1}{2} \left[ 1 - cos(x) \right]$$

# ## Question 3
# Démontrer que l'inverse de $F$ est $F^{-1}(x) = cos^{-1}(1-2x)$. Donner l'intervalle de définition de $F^{-1}$.

# <div style="width:100%;height:auto;margin: 1.5625em auto;
#     padding: 0 0.6rem 0.8rem;
#     overflow: hidden;
#     page-break-inside: avoid;
#     border-left: 0.2rem solid;
#     border-left-color: rgba(87,154,202,1);
#     border-bottom-color: rgba(87,154,202,1);
#     border-right-color: rgba(87,154,202,1);
#     border-top-color: rgba(87,154,202,1);
#     border-radius: 0.2rem;
#     box-shadow: 0 0.2rem 0.5rem rgb(0 0 0 / 5%), 0 0 0.0625rem rgb(0 0 0 / 10%);
#     transition: color .25s,background-color .25s,border-color .25s;">
# <p style="position: relative;
#     margin: 0 -0.6rem;
#     padding: 0.4rem 0.6rem 0.4rem 2rem;
#     font-weight: 700;
#     background-color: rgba(87,154,202,.1);">
#     Petit rappel: Pour trouver l'inverse d'une fonction par exemple f(x) = 2x + 3, on valide les choses suivantes: 
# </p>
# </div>
# 
# 1. La fonction $f$ est-elle bijective?
# Dans notre cas, oui, car $f$ est une fonction continue et monotone croissante. Nous constatons que la fonction est une droite qui passe par tous les points du plan cartésien et qu'elle ne croise jamais une même valeur deux fois.
# 1. On écrit la fonction sous la forme $y=f(x) : y = 2x+3$
# 2. On change les rôles de $x$ et $y : x = 2y + 3$
# 3. On résoudre pour $y : x - 3 = 2y$, donc $y = \frac{x-3}{2}$
# 4. La fonction inverse est $f^{-1}(x)=\frac{x-3}{2}$
# 
# Finalement, on peut vérifier que la fonction inverse donne bien le résultat attendu:
# 
# $$ f^{-1}(f(x)) = f^{-1}(2x+3) = \frac{(2x+3)-3}{2} = x $$
# 
# De même, si on aplique la fonction inverse $f^{-1}$ à la fonction $f$:
# 
# $$ f(f^{-1}(x)) = f(\frac{x-3}{2}) = 2\frac{x-3}{2} + 3 = x $$
# 

# Dans notre exemple.
# 
# On a:
# 
# $$ F(x) = \frac{1}{2} \left[ -cos(x) + 1 \right] $$
# 
# 1. On échange $x$ et $y : x = \frac{1}{2} \left[ -cos(y) + 1 \right]$
# 2. On résoudre pour $y$
#    1. On isole le cosinus:
# 
#         $$ 2x = -cos(y) + 1 $$
# 
#         $$ cos(y) = 1 - 2x $$
#     
#     2. On aplique la fonction inverse du cosinus (arcosinus) pour trouver $y$:
# 
#         $$ cos(y) = 1 - 2x $$
#         
#         $$ y = cos^{-1}(1 - 2x) $$
# 
# 3. La fonction inverse devient $F^{-1}(x) = cos^{-1}(1-2x)$
# 
# Pour $F(x)$ l'intervalle de définition est limité par le cosinus qui est défini entre $-1$ et $1$. Ainsi que pour la fonction inverse $F^{-1}(x)$.

# ## Question 4
# 
# Avec Python, tester la fonction $F$ poue générer des évènements selon la distribution de $f$ avec des nombres aléatoires distribués uniformément.

# In[1]:


import numpy as np
import matplotlib.pyplot as plt


# In[2]:


def f(x):
    return (1 / 2) * np.sin(x)

def F(x):
    return (1 / 2) * (1 - np.cos(x))

def F_inv(x):
    return np.arccos(1 - 2 * x)


# In[3]:


N = 1000 # Nombre des évènements
n_unif = [ np.random.rand() for i in range(N) ] # N nombres aléatoires uniformes
x = [F_inv(i) for i in n_unif] # values of x
y = [f(i) for i in x] # values of f(x) = sin(x) / 2

n, bins, patches = plt.hist(x, density=True, alpha=0.75)
plt.plot(x, y, 'r.', markersize=1, label='f(x)')
plt.xlabel('x')
plt.ylabel('f(x)')
plt.title('Loi de probabilité f(x) = sin(x) / 2')
# update the x-axis to show in terms of PI (i.e. 0 to PI)
plt.xticks(np.arange(0, 4, step=1), [r'$0$', r'$\frac{\pi}{4}$', r'$\frac{\pi}{4}$',r'$\pi$'])
plt.legend()
plt.show()


# # Exercise 6

# Certaines espèces de tortues pondent de nombreux oeufs (`110` pour certaines). La distribution du nombre d'oeufs pondus suit une loi de Poisson de paramètre $\lambda = 110$.

# ## Question 1
# Rappeler la loi de Poisson; que vaut la moyenne du nombre d'oeufs?

# **Solution**
# 
# La loi de Poisson est une loi de probabilité que permet de compter le nombre d'évènements qui se produisent dans un intervalle de temps donné. Elle est définie par la formule suivante:
# 
# $$ P(k;\lambda) = \frac{\lambda^k e^{-\lambda}}{k!} $$
# 
# La moyenne du nombre d'oeufs est égale à $\lambda$.

# ## Question 2
# 
# Tous les oeufs n'arriveront pas à la maturité; on peut considérer que la probabilité qu'un oeuf arrive à la maturié est indépendante du nombre d'oeufs pondus et vaut $p$. Si le nombre d'oeufs est $n$, quelle est la loi de probabilité associée a l'éclosion de $k$ oeufs parmi les $n$ oeufs?

# **Solution**
# 
# La loi de probabilité associée à l'éclosion de $k$ oeufs parmi les $n$ oeufs est la loi binomiale. Elle est définie par la formule suivante:
# 
# $$ P(k;n,p) = \binom{n}{k} p^k (1-p)^{n-k} $$

# ## Question 3
# Démontrer que la loi de probabilité du nombre d'oeufs pondus et arrivant à l'éclosion est une loi de Poisson de paramètre $\lambda \times p$.

# La probabilité d'obtenir $k$ oeufs éclos pour une ponte est donc la probabilité de pondre $r$ oeufs et que $k$ d'entre eux arrivent à l'éclosion. On peut donc écrire:
# 
# $$ P(k;n,p) = \sum_{r=0}^{n} P(r;\lambda) P(k-r;n-r,p) $$
# 
# 

# # Exercise 7

# La police utilise généralement des sortes de pistolets radar pour mesurer la vitesse des voitures et détecter celles avec un excès de vitesse. Ce pistolet envoie des ondes radio de fréquence $f_0$ se déplacant avec une vitesse proche de celle de la lumière $c$ sur une voiture et mesure la fréquence $f$ de l'onde réfléchie. Celle-ci sera différente à cause de l'effet Doppler selon l'équation:
# 
# $$ f = f_0 \left( 1 + \frac{v}{c} \right) $$
# 
# où $v$ est la vitesse de la voiture.

# ## Question 1
# 
# Quelle doit être l'incertitude relative de ces pistolets sur la mesure de fréquence pour mesurer la vitesse d'une voiture avec une précision de $1\text{ km/h}$?

# **Solution**
# 
# Pour déterminer l'incertitude relative de la mesure de fréquence, nous devons d'abord déterminer la variation de fréquence résultant d'un changement de vitesse de $\Delta v = 1\text{ km/h}$.
# 
# Ici, la quantité d'intérêt est la vitesse de la voiture $v$, la mesure est la fréquence $f$ mesurée par le pistolet, et le paramètre est la fréquence de référence $f_0$ émise par le pistolet. Le paramètre $y$ est donc $f_0$, qui est connu avec une certaine incertitude $\Delta y$. La mesure $x$ est la vitesse de la voiture $v$, pour laquelle on souhaite connaître l'incertitude. La quantité d'intérêt $z$ est donc $v$, et l'incertitude sur $z$ est donnée par:
# 
# $$ \Delta v = \Delta f(x, \Delta x, y, \Delta y) $$
# 
# En utilisant l'équation de l'effet Doppler, nous avons:
# 
# $$f = f_0 \left( 1 + \frac{v}{c} \right)$$
# 
# En dérivant par rapport à $v$, nous avons:
# 
# $$\frac{df}{dv} = \frac{f_0}{c}$$
# 
# Ainsi, la variation de fréquence due à un changement de vitesse $\Delta v$ est:
# 
# $$\Delta f = \frac{f_0}{c} \Delta v$$
# 
# 
# On peut calculer l'incertitude sur la fréquence à partir de celle sur de la voiture. 
# 
# $$\frac{\Delta f}{f} = \frac{\frac{f_0}{c} \Delta v}{f_0 \left( 1 + \frac{v}{c} \right)} = \frac{\Delta v}{c \left( 1 + \frac{v}{c} \right)}$$
# 
# Nous pouvons utiliser cette expression pour trouver la valeur de l'incertitude relative qui nous donnera une précision de $1\text{ km/h}$ sur la mesure de la vitesse. Si nous appelons cette incertitude relative $\delta$, nous avons:
# 
# $$\delta = \frac{\Delta v}{c \left( 1 + \frac{v}{c} \right)} = \frac{1\text{ km/h}}{3\times10^8 \text{ m/s} \left( 1 + \frac{v}{3\times10^8 \text{ m/s}} \right)}$$
# 
# Pour trouver la valeur numérique de cette expression lorsque $v$ est la vitesse maximale que la police veut mesurer, nous pouvons la substituer dans l'expression donnant l'incertitude relative $\delta$:
# 
# $$\delta = \frac{1\text{ km/h}}{3\times10^8 \text{ m/s} \left( 1 + \frac{v_{max}}{3\times10^8 \text{ m/s}} \right)}$$
# 
# Si nous supposons que la vitesse maximale que la police veut mesurer est $150\text{ km/h}$, nous avons:
# 
# $$\delta = \frac{1\text{ km/h}}{3\times10^8 \text{ m/s} \left( 1 + \frac{150\text{ km/h}}{3\times10^8 \text{ m/s}} \right)} \approx 3.3\times10^{-9}$$
# 
# Ainsi, l'incertitude relative de la mesure de fréquence doit être d'environ $3.3\times10^{-9}$ pour mesurer la vitesse d'une voiture avec une précision de $1\text{ km/h}$.
# 
# 
