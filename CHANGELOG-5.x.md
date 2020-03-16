# Change for 5.x

This changelog references the relevant changes (bug and security fixes) done to `orchestra/testbench-core`.

## 5.1.1

Released: 2020-03-16

### Changes

* Update Laravel 7.x skeleton.
    - Update `cors.exposed_headers` and `cors.max_age` default configuration value.
    - Add `mailers.smtp.timeout` configuration options.
    - Update `session` configuration file.

## 5.1.0

Released: 2020-03-11

### Changes

* Recommend to be used with Laravel Framework v7.1.0+.

## 5.0.2

Released: 2020-03-07

### Changes

* Update Laravel 7.x skeleton.
    - Cast `app.debug` value to `boolean`.
    - Add `queue.connections.sqs.suffix` configuration, use `SQS_SUFFIX` from environment variable.
    - Remove `view.expires`, feature has been reverted.
* Recommend to be used with Laravel Framework v7.0.6+.

## 5.0.1

Released: 2020-03-03

### Changes

* Update Laravel skeleton:
    - Add missing `array` mail transport.

## 5.0.0

Released: 2020-03-02

### Changes

* Change `Exception` typehint to `Throwable` on `Orchestra\Testbench\Console\Kernel`, `Orchestra\Testbench\Exceptions\Handler`.
* Change referenced class moved to `Illuminate\Testing` namespace. 
* Update Laravel 7 skeleton:
    - Rename default `Redis` alias under `app.aliases` to `RedisManager` to avoid incompatibility when running tests using `phpredis` extension.
    - Add `Http` alias under `app.aliases`.
    - Add `config/cors.php`.
    - Update `database`, `filesystem`, `mail`, `session` and `view` configuration file.
