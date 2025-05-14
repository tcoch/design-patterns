# Singleton.md

With the singleton pattern, you will ever have only on instance of your class.

This is interesting with connections to external services, like database for instance.
With this pattern, you can ensure there is only one connection active,
so no concurrent requests can be made (at least from your code).
