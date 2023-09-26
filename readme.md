# WhatsApp API Laravel Package

Easily send WhatsApp messages via the AppSenders API in your Laravel application.

<p align="center">
    <img src="YOUR_LOGO_OR_A_RELEVANT_IMAGE_URL_HERE" width="300" alt="whatsapp-api logo">
</p>

## 🚀 Installation

1. **Clone or Download the Package**:

    ```bash
    git clone https://github.com/YOUR_GITHUB_USERNAME/whatsapp-api.git
    ```

    OR

    ```bash
    composer require YOUR_PACKAGE_NAME_HERE
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

