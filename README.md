# Fuel PDFCrowd

A FuelPHP package wrapping around the [PDFCrowd](https://pdfcrowd.com) [PHP API class](https://pdfcrowd.com/web-html-to-pdf-php/).

## Usage

Copy `config/pdfcrowd.php` into your `app/config/` directory and set your username and API key.

You can now user any of the [API methods](https://pdfcrowd.com/web-html-to-pdf-php/) with the `PDFCrowd` object. For example:

```php
$pdfcrowd = new PDFCrowd();
echo $pdfcrowd::convertHtml('Hello <strong>World!</strong> :)');
```