# DESIGN PATTERNS

Using PHP Symfony, this repository aims to demonstrate some programming patterns.

## Getting Started

1. Run `docker compose build --no-cache` to build fresh images
2. Run `docker compose up --wait` to set up and start the container
3. Open `https://localhost` in your favorite web browser and [accept the auto-generated TLS certificate](https://stackoverflow.com/a/15076602/1352334)

> [!NOTE]
> Refer to [dunglas/symfony-docker](https://github.com/dunglas/symfony-docker) for more informations.

## Features

### Pattern #1: Decorator

Add some logic to an existing class, without changing the initial class (e.g. add some logging before an action is performed).

### Pattern #2: Singleton

Make sure you have one and only one instance of a class (e.g. only one connection to a database).

### Pattern #3: Builder

Organize you code to construct new objects steps by steps. 

## License

This project is available under the MIT License.

## Credits

Created by [tcoch](https://github.com/tcoch/tcoch).
