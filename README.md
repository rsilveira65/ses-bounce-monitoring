# ses-bounce-monitoring
Small script for AWS SES bounce monitoring


## Project Setup
```bash
$ composer install
```

```bash
$ cp src/config/parameters.yml.dist src/config/parameters.yml
```

## Configuration
To configure the script, set the follow parameters:
```bash
.
└── src
    └── config
        └── parameters.yml
```
- src/config/parameters.yml - Add your SES credentials.

## RUN

```bash
$ php index.php
```

## Result
Will return the day bounce rating.

```bash
35
```