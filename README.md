[![Build Status](https://travis-ci.org/rsilveira65/ses-bounce-monitoring.svg?branch=master)](https://travis-ci.org/rsilveira65/ses-bounce-monitoring)
[![CircleCI](https://circleci.com/gh/rsilveira65/ses-bounce-monitoring.svg?style=svg)](https://circleci.com/gh/rsilveira65/ses-bounce-monitoring)

Small script written in PHP for AWS SES bounce rate monitoring. Also, it can easily be integrated with [Nagios]('https://www.nagios.org') or another tool.

### But, Why?? Find more about SES and Bounce Rate:
- [5 Ways to Decrease Your Bounce Rate](https://aws.amazon.com/blogs/ses/5-ways-to-decrease-your-bounce-rate/)
- [Email Definitions: Bounces](https://aws.amazon.com/blogs/ses/email-definitions-bounces/)

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
- src/config/parameters.yml - Add your AWS credentials.

## RUN

```bash
$ php index.php
```

## Result
Will return the day bounce rate.
- Bounce rate usually refers to the number of hard bounces per number of emails sent, and is expressed as a percentage
- For example, if we sent 10,000 emails and 222 of them bounced, our bounce rate would be 222 ÷ 10,000, or 2.22%. 
```bash
3
```

## Unit Tests
```bash
$ composer test
```
