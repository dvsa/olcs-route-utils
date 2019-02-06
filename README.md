# OLCS Route Utils 

This is a library for helping with zend route organisation within the OLCS project at DVSA. 
It allows for childroutes to be added to a folder named according the parent route and these will then be merged 
into the main route array.

### Prerequisites

This library is only created for Zend Routes. It is a requirment the project has a route configuration attributed to a 
variable

```
$routes = [
    'api' => [
        'type' => 'Literal',
        'options' => [
            'route' => '/api/',
            'defaults' => [
                'controller' => 'Api\Generic'
            ]....
```

### Installing

Installation is via composer 
```
composer require devs/olcs-route-utils
```



## Running the tests

As this is a package, the typical devtools shortcuts used within the OLCS team do not apply unit tests are run in the normal way 
```
vendor/bin/phpunit
```

### And coding style tests



```
Give an example
```


## Contributing

Please read [CONTRIBUTING.md](https://gist.github.com/PurpleBooth/b24679402957c63ec426) for details on our code of conduct, and the process for submitting pull requests to us.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/dvsa/olcs-route-utils/tags). 

## Authors
igor.stimoli@bjss.com
shaun.hare@dvsa.gov.uk

See also the list of [contributors](https://github.com/dvsa/olcs-route-utils/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* This is just an extraction of work igor did within the project.

