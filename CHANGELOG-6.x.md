# Change for 6.x

This changelog references the relevant changes (bug and security fixes) done to `orchestra/testbench-core`.

## 6.0.1

Released: 2020-09-09

### Changes

* Throw explicit exception when using `withFactories()` without `laravel/legacy-factories`.

## 6.0.0

Released: 2020-09-08

### Added

* Added `Orchestra\Testbench\Factories\UserFactory` to handle `Illuminate\Foundation\Auth\User` model.
* Automatically autoloads `Illuminate\Database\Eloquent\LegacyFactoryServiceProvider` if the service provider exists.

### Changes

* Update support for Laravel Framework v8.
* Increase minimum PHP version to 7.3 and above (tested with 7.3 and 7.4).
* Configuration changes:
    - Changed `auth.providers.users.model` to `Illuminate\Foundation\Auth\User`.
    - Changed `queue.failed.driver` to `database-uuid`.
