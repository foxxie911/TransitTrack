# TransitTrack
> This is a full stack web application which shows the real-time location and empty seat count of public buses.

This application lets your enter the `from` and `to` location inside the input box and after clicking the search button, it shows the available bus services which cover those two locations (if any). Upon clicking one of the bus services it takes you to a new page which shows the bus stops and a map showing all the bus locations of that particular bus service. Upon clicking one of those marker on the map (represents a bus), it shows the bus plate no., available seats, and other necessary information.


## Development setup

> [!important]
> This application will be using port 8000 for http and 5432 for database. Make sure these ports are free so that no port conflicts occurs.

#### Pre-requisite

- PHP & Composer
- Docker
- Node
- WSL (for Windows)

#### For All Platform

> [!note]
> In Windows, Laravel sail applications shows error even though wsl is installed. As far as I know the issue is not related with my application.

1. Install the node dependencies and build them.

```sh
npm install && npm run build
```
2. Update composer packages

```sh
composer update
```
3. Run the application

```sh
vendor/bin/sail up
```


## Meta

Foxxie 911 – [@foxxie911_LinkedIn](https://linkedin.com/in/foxxie911) - foxxie911.dev@proton.me

[https://github.com/foxxie911](https://github.com/foxxie911)

## Contributing

1. Fork it (<https://github.com/foxxie911/TransitTrack/fork>)
2. Create your feature branch (`git checkout -b feature/fooBar`)
3. Commit your changes (`git commit -am 'Add some fooBar'`)
4. Push to the branch (`git push origin feature/fooBar`)
5. Create a new Pull Request