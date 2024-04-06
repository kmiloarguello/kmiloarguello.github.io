In our last class, we introduced the concept of "changing bases," and talked about writing vectors and linear transformations in other bases. In the homework and in class, we saw that in several situations this idea of "changing basis" could make a linear transformation much easier to work with; in several cases, we saw that linear transformations under a certain basis would become diagonal, which made tasks like raising them to large powers far easier than these problems would be in the standard basis.

But how do we find these "nice" bases? What does it mean for a basis to be"nice?" In this set of lectures, we will study one potential answer to this question: the concept of an **orthonormal basis**.

## 1 Orthogonality

To start, we should define the notion of **orthogonality**. First, recall/remember the definition of the **dot product**:

**Definition**.: Take two vectors \((x_{1},\ldots x_{n}),(y_{1},\ldots y_{n})\in\mathbb{R}^{n}\). Their **dot product** is simply the sum

\[x_{1}y_{1}+x_{2}y_{2}+\ldots x_{n}y_{n}.\]

Many of you have seen an alternate, geometric definition of the dot product:

**Definition**.: Take two vectors \((x_{1},\ldots x_{n}),(y_{1},\ldots y_{n})\in\mathbb{R}^{n}\). Their **dot product** is the product

\[||\vec{x}||\cdot||\vec{y}||\cos(\theta),\]

where \(\theta\) is the angle between \(\vec{x}\) and \(\vec{y}\), and \(||\vec{x}||\) denotes the length of the vector \(\vec{x}\), i.e. the distance from \((x_{1},\ldots x_{n})\) to \((0,\ldots 0)\).

These two definitions are equivalent:

**Theorem**.: Let \(\vec{x}=(x_{1},x_{2},x_{3}),\vec{y}=(y_{1},y_{2},y_{3})\) be a pair of vectors in \(\mathbb{R}^{3}\). Then the algebraic interpretation of \(\vec{x}\cdot\vec{y}\), given by

\[x_{1}y_{1}+x_{2}y_{2}+\ldots x_{n}y_{n},\]

is equal to the geometric interpretation

\[||\vec{x}||\cdot||\vec{y}||\cos(\theta),\]

where \(\theta\) is the angle between \(\vec{x}\) and \(\vec{y}\).