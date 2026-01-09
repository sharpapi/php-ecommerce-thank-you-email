![SharpAPI GitHub cover](https://sharpapi.com/sharpapi-github-laravel-bg.jpg "SharpAPI PHP Client")

# Ecommerce Thank You Email API for PHP

## 🛒 Generate thank you emails using AI - personalized post-purchase messages

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sharpapi/php-ecommerce-thank-you-email.svg?style=flat-square)](https://packagist.org/packages/sharpapi/php-ecommerce-thank-you-email)
[![Total Downloads](https://img.shields.io/packagist/dt/sharpapi/php-ecommerce-thank-you-email.svg?style=flat-square)](https://packagist.org/packages/sharpapi/php-ecommerce-thank-you-email)

Check the full documentation on the [Ecommerce Thank You Email API for PHP API](https://sharpapi.com/en/catalog/ai/e-commerce/custom-thank-you-e-mail-generator) page.

---

## Quick Links

| Resource | Link |
|----------|------|
| **Main API Documentation** | [Authorization, Webhooks, Polling & More](https://documenter.getpostman.com/view/31106842/2s9Ye8faUp) |
| **Postman Documentation** | [View Docs](https://documenter.getpostman.com/view/31106842/2sBXVeGsVo) |
| **Product Details** | [SharpAPI.com](https://sharpapi.com/en/catalog/ai/e-commerce/custom-thank-you-e-mail-generator) |
| **SDK Libraries** | [GitHub - SharpAPI SDKs](https://github.com/sharpapi) |

---

## Requirements

- PHP >= 8.0

---

## Installation

### Step 1. Install the package via Composer:

```bash
composer require sharpapi/php-ecommerce-thank-you-email
```

### Step 2. Visit [SharpAPI](https://sharpapi.com/) to get your API key.

---
## Laravel Integration

Building a Laravel application? Check the Laravel package version for better integration.

---

## What it does

Generate thank you emails using AI - personalized post-purchase messages

---

## Usage
```php
<?php

require __DIR__ . '/vendor/autoload.php';

use SharpAPI\EcommerceThankYou\ThankYouEmailClient;
use GuzzleHttp\Exception\GuzzleException;

$apiKey = 'your_api_key_here';
$client = new ThankYouEmailClient(apiKey: $apiKey);

try {
    $statusUrl = $client->generateThankYouEmail(
        content: 'Your text content here',
        language: 'English'
    );

    // Optional: Configure polling
    $client->setApiJobStatusPollingInterval(10);
    $client->setApiJobStatusPollingWait(180);

    // Fetch results (polls automatically)
    $result = $client->fetchResults($statusUrl);
    $resultData = $result->getResultJson();

    echo $resultData;
} catch (GuzzleException $e) {
    echo "API error: " . $e->getMessage();
}
```

---

## Example Response
```json

{
    "data": {
        "type": "api_job_result",
        "id": "8c3af4d1-a8ae-4c52-9656-4f26254b7b71",
        "attributes": {
            "status": "success",
            "type": "ecommerce_thank_you_email",
            "result": {
                "email": "Dear Customer,\n\nThank you for your recent purchase of the Razer Blade 16 Gaming Laptop: NVIDIA GeForce RTX 4090-13th Gen Intel 24-Core i9 HX CPU. We appreciate your business and are confident that you will enjoy the high performance and advanced features of your new laptop.\n\nWe look forward to serving you again. Please visit our store soon for more exciting products and offers.\n\nBest regards,\n[Your Company Name]"
            }
        }
    }
}

```
---

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

---

## Credits

- [A2Z WEB LTD](https://github.com/a2zwebltd)
- [Dawid Makowski](https://github.com/makowskid)
- Boost your [PHP AI](https://sharpapi.com/) capabilities!

---

## License

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](LICENSE.md)

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

---

## Social Media

🚀 For the latest news, tutorials, and case studies, don't forget to follow us on:
- [SharpAPI X (formerly Twitter)](https://x.com/SharpAPI)
- [SharpAPI YouTube](https://www.youtube.com/@SharpAPI)
- [SharpAPI Vimeo](https://vimeo.com/SharpAPI)
- [SharpAPI LinkedIn](https://www.linkedin.com/products/a2z-web-ltd-sharpapicom-automate-with-aipowered-api/)
- [SharpAPI Facebook](https://www.facebook.com/profile.php?id=61554115896974)
