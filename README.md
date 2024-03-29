<h1 align="center">Musicians' Bazaar</h1>

<!-- <p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p> -->

## Execution

- Clone the repository to your local machine using the command git clone https://github.com/your-username/musicians-bazaar.git.
- Make sure you have Composer and Node.js installed on your machine.
- In the root directory of the project, run ```composer install``` to install the PHP dependencies.
- Copy the .env.example file to a new file called .env by running the command ```cp .env.example .env``` (on Unix-based systems) or ```copy .env.example .env``` (on Windows).
- In the .env file, set the value of DB_DATABASE to the name of your MySQL database.
- Create a new MySQL database with the same name as the DB_DATABASE value you set in the .env file.
- Run ```php artisan key:generate``` to generate a new application key.
- Run ```php artisan migrate``` to run the database migrations and create the necessary tables.
- Run ```php artisan db:seed``` to seed the database with sample data.
- Run ```npm install``` to install the JavaScript dependencies.
- Run ```npm run dev``` to compile the JavaScript and CSS assets.
- Run ```php artisan serve``` to start the development server.
- Visit http://localhost:8000 in your web browser to view the website.

## <h1>Functional Requirements:</h1>

The website will allow users to buy and sell musical instruments and accessories online. Sellers can create an account and post listings of their products, while buyers can browse the listings and contact sellers to purchase the products. The website should be user-friendly for both buyers and sellers, and should include search functionality to enable users to find specific products. The website will not be responsible for the quality of the products, delivery or payment.

## <h1>Main Functions:</h1>

### Seller Account Creation:
- Sellers can create an account on the website and add information about their products, such as photos, category, sub-category, description, price, condition of the instrument, address and phone number.
- Sellers can manage their account and the listings they have posted.
### Product Search:
- Buyers can filter products based on category, instrument (sub-category), and price.
- Buyers can search for an instrument in the titles of the listings and apply a price filter to their search.
- Search results should be presented in a clear and easily understandable manner.
### Product Display:
- Products will be displayed on the website with detailed information, such as description, photos, price, seller's contact information, etc.
- Buyers can directly contact the seller to purchase the product.
### Account Management:
- Users can create an account to manage their personal information.
- Users can modify or delete their account at any time.
### Security:
- The website must ensure the security of users' personal information.
- Financial transactions will not be processed by the website.
### Customer Support:
- Users can contact customer support for any questions or concerns.

## <h1>Additional Functions:</h1>

### Listing Promotion:
- Sellers can pay $5 to promote their listing for 5 days.
- Promoted listings will appear at the top of the search results for better visibility.

## <h1>UML (Unified Modeling Language)</h1>
- **[Class Diagram](https://lucid.app/lucidchart/6ef4d1cf-1fdf-4ed7-819a-cfc54d720348/edit?viewport_loc=-1038%2C-175%2C4231%2C2056%2C0_0&invitationId=inv_5b95bfa2-b4c3-4a02-95d5-6eb2b823d18d)**
- **[Use Case Diagram](https://lucid.app/lucidchart/658e1ba4-7d1f-4800-857b-1bd621eccd9f/edit?viewport_loc=-938%2C-224%2C4834%2C2349%2C0_0&invitationId=inv_e5a7e573-e666-49d2-93f1-e78b1deded7e)**
- **[Sequence Diagram](https://drive.google.com/file/d/1ZopqnWgd1p8douhbzMRuf7cekBGZ733K/view?usp=share_link)**

## <h1>Packages</h1>

- **[Laravel Fortify](https://laravel.com/docs/9.x/fortify)** is a frontend agnostic authentication backend implementation for Laravel.
- **[Laravel Socialite](https://laravel.com/docs/9.x/socialite)** for the authentication via Facebook.
- **[yajra](https://github.com/yajra/laravel-datatables)** jQuery DataTables API is a Laravel package for handling server-side works of DataTables jQuery Plugin via AJAX option by using Eloquent ORM, Fluent Query Builder or Collection. It allows us to quickly create datatables that can be used to display large amounts of data in an organized and efficient manner.
- **[Stripe Package](https://techsolutionstuff.com/post/laravel-9-stripe-payment-gateway-integration)** Laravel 9 Stripe Payment Gateway Integration


## <h1>Website mockup: </h1> **[Link to figma](https://www.figma.com/file/6omQcO7msBpAME1YLSz4no/Musicians'-Bazaar?node-id=0-1)**
