# WhatsApp API Laravel Package

Easily send WhatsApp messages via the AppSenders API in your Laravel application.

<p align="center">
    <img src="YOUR_LOGO_OR_A_RELEVANT_IMAGE_URL_HERE" width="300" alt="whatsapp-api logo">
</p>

## 🚀 Installation

1. **Clone or Download the Package**:

    ```bash
    git clone https://github.com/mohamedhekal/appsenders-laravel-whatsapp-api.git
    ```

    OR

    ```bash
    composer require mohamedhekal/appsenders-laravel-whatsapp-api
    ```

2. **Register the Service Provider**:
    Add the following line to the `providers` array in `config/app.php`:

    ```php
    WhatsAppAPI\WhatsAppServiceProvider::class,
    ```

3. **Publish Configuration**:

    ```bash
    php artisan vendor:publish --tag=config
    ```

4. **Setup Configuration**:
    Add your AppSenders API credentials to your `.env` file:

    ```
    WHATSAPP_APPKEY=YOUR_APP_KEY
    WHATSAPP_AUTHKEY=YOUR_AUTH_KEY
    ```

## 📝 Usage

### Send a Simple Message Or Message with PDF

```php
use WhatsAppAPI\WhatsApp;

$response = WhatsApp::sendMessage('RECEIVER_NUMBER', 'Hello, World!');

$response = WhatsApp::sendMessage('RECEIVER_NUMBER', 'Check this PDF!', 'https://www.africau.edu/images/default/sample.pdf');
```



## 📝 Developer

### Developed By: Eng. Mohamed Hekal

## 💰 For Subscription (Pricing)

### Call : +201093854603
### 📞 Contact on WhatsApp
[Click here to chat on WhatsApp](https://wa.me/201093854603/)

## 💎 Packages 💎 
 ## 📦 Package Details

### First package:
- **Number of messages:** 1000 messages per month
- **Cost:** 30 EGP per month

### The second package:
- **Number of messages:** 2000 messages per month
- **Cost:** 60 EGP per month

### The third package:
- **Number of messages:** 5000 messages per month
- **Cost:** 150 EGP per month

### Fourth package:
- **Number of messages:** 10,000 messages per month
- **Cost:** 300 EGP per month

### Fifth package:
- **Number of messages:** 15,000 messages per month
- **Cost:** 450 EGP per month

### Sixth package:
- **Number of messages:** 20,000 messages per month
- **Cost:** 600 EGP per month

### The seventh package:
- **Number of messages:** 30,000 messages per month
- **Cost:** 900 EGP per month

### The tenth package:
- **Number of messages:** Unlimited per month
- **Cost:** 1200 EGP per month

### 🌟 Annual Package - Special Offer
- **Number of messages:** Unlimited each month
- **Cost:** 5000 EGP annually



