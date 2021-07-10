A factory is a class designed to create other objects without exposing instantiation logic.
-> the simple factory is basically a helper class, a facade, but limited to object construction.

When creating an object is not just a few assignments and involves some logic, it makes sense to put it in a dedicated factory instead of repeating the same code everywhere.