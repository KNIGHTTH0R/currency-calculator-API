# currency-calculator
This is a Case Study for a Currency Calculator Project

##Installation and set up procedures

1. Download / Clone the code fom the git repository 
2. run `composer install` on the project root folder
3. Make a copy of the `.env.example` to `.env`
4. Make necessary changes on the `.env` file to suit your needs
5. run `php artisan key:generate` on the project root folder
4. run `php artisan serve` and load the webpage with the url mentioned at the output

### Additional / Optional installation procedures
As an additional feature i have worked on user authentication and following are the set up instructions

1. create a mysql database
2. update the `.env` file to suit your needs
3. run `php artisan migrate` to create tables on the mysql database