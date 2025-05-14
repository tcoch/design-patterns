# Builder.md

The builder design patterns helps you organize your code.

Rather than getting a lot of arguments in a constructor,
you can split the attributes handling in sub-functions.

Moreover, your code will be easier to maintain: if you need to add a new attribute,
simply add a new method for tis handling. You won't need to change the constructor,
you won't need to change your existing code. Only create a new method.
