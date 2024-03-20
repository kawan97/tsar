<img src="https://raw.githubusercontent.com/kawan97/tsar/main/logo.png"
     alt="Tsar Logo"
     style="height:300px;" />

# tsar Laravel Package
[![Total Downloads](https://img.shields.io/packagist/dt/dzhwarkawan/tsar)](https://packagist.org/packages/dzhwarkawan/tsar)
[![Latest Version](https://img.shields.io/packagist/v/dzhwarkawan/tsar)](https://packagist.org/packages/dzhwarkawan/tsar)

Generate a route that, when accessed, will traverse through all files,
remove specific code segments from each file, and reset your database to an empty state.

## Installation

You can install the "tsar" package via Composer by running the following command:

   ```php
    composer require dzhwarkawan/tsar
   ```

## Getting Started

Once the package is installed, follow these steps to get started:

1. Configure the package in your Laravel application.

   - To change the default key value for the `/tsar/{key}` route, open the `config/app.php` file and add the `tsar_key` configuration option. For example:
   
     ```php
     'tsar_key' => 'your_custom_key',
     ```

2. Usage

   - Access the "tsar" test route by visiting `/tsar-test`. It will display "Hi from tsar" to confirm that the package is working.

   - Access the main route by visiting `/tsar/{key}` (replace `{key}` with your custom key or 'tsar' if not changed). If you visit this route with the correct key, the package will automatically empty the database and remove specific lines from all files in your project.


## License

This package is open-source software licensed under the [MIT License](LICENSE).


## Support

If you encounter any issues or have questions, feel free to open an issue on the [GitHub repository](https://github.com/kawan97/tsar/issues).

## Credits

This package is developed and maintained by:

- [Kawan Pshtiwan](https://github.com/kawan97)
- [Dzhwar Kamaran](https://github.com/dzhwar-k)

And with contributions from our amazing community of open-source developers.

## Changelog

See the [CHANGELOG](CHANGELOG.md) file for information about the latest updates and changes.
