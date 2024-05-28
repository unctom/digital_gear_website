# Laravel with Tailwind, Preline and Custom Fonts

This Project is simply a get ahead setup of Tailwind, Preline and some fonts that are added this includes;

-   Montserrat
-   Lato
-   Poppins

## Guide

Clone this project to your Local Environment

1. <code>Git Clone</code>
 <pre><code>git clone https://github.com/unctom/laravel_project_template.git</code></pre>

2. <code>Composer Install</code>
 <pre><code>composer install</code></pre>

3. <code>Install Node Dependancies</code>
 <pre><code>npm install -D</code></pre>

4. <code>Create Environment File</code>
 <pre><code>cp .env.example .env</code></pre>

5. <code>Configure Database Settings inside environment file by setting</code>
 <pre><code>
 DB_CONNECTION=mysql
 DB_HOST=127.0.0.1
 DB_PORT=3306
 DB_DATABASE=database_name
 DB_USERNAME=database_user
 DB_PASSWORD=database_password
 </code></pre>

6. Run Artisan<code>Migrations</code>
 <pre><code>php artisan migrate</code></pre>

7. Generate app Key
 <pre><code>php artisan key:generate</code></pre>

## Our Website

Visit our website for more solutions <a href="https://digitalgearjunction.africa">DGJ</a>
