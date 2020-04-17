# Pizza task, backend
- Released at [https://dashboard.heroku.com/apps/pizza-task-mk-backend](https://dashboard.heroku.com/apps/pizza-task-mk-backend)
- Now it has API endpoint for list of pizzas https://pizza-task-mk-backend.herokuapp.com/api/v1/products
- Sometimes it's pretty slow because I used generic free database hosting, going to fix that

## Deploy
### Option 1. Fast
For fast deploy and result I've attached _env.example with credentials for used services:
1. Database at db4free.net
2. http://fixer.io/ api key for currency converting
3. https://currencylayer.com/ as fallback for currency converting if fixer doesn't
4. Do next
```
cp _env.example .env
composer install
php artisan serve
```

### Option 2. From scratch
Start with
```
cp .env.example .env
```
Then prepare empty database and add credentials to .env. After that
```
composer install
php artisan migrate
php artisan key:generate
php artisan db:seed
php artisan serve
```

## Notes
1. Used standart workflow:
    1. Split task into issues https://github.com/mihan007/pizza_task_backend/issues. You can see finished tasks(closed) and still open
    2. Prepare Travis for testing the app https://travis-ci.com/github/mihan007/pizza_task_backend
    3. Each task get it's own branch https://github.com/mihan007/pizza_task_backend/branches
    4. After finishing each PR was checked with Travis
    5. Deploy at Heroku done using Heroku integration with Github. Each push to master lead to deploy
2. Used [json-api](https://jsonapi.org/). It gives ability to do work fast, your resources will have pagination, filtering from scratch.
3. Prepared API docs to be covered with https://stoplight.io/. Travis publish docs after each push to prod https://stoplight.io/p/docs/gh/mihan007/pizza_task_backend
4. Included error tracking with https://sentry.io/

## Things left to do
- All at https://github.com/mihan007/pizza_task_backend/issues
- Fix tests at travis configuration - need to add database setup there

## Task description
Let’s say you want to start a new **pizza delivery business**. Please create a web application for ordering pizza for your clients, which contains a shopping cart. Take the pizza order and the delivery address and contact details for the client. Login is not required but could be available for checking the history of orders.
### Requirements
- Your clients should be able to order pizzas from the menu
- The menu contains at least 8 pizzas
- You can decide what else you want in the menu
- Processing order/etc. with payment is NOT required. Concentrate on the interface to your pizza customer up to the point the customer confirms his order.
- The pizza order process should cover ordering single or several pizzas with definition of the quantity and calucation of a total price in Euros and US$ also adding delivery costs to the bill.
### Technology (preferred as we use them in our company)
- Frontend – ReactJS
- Backend – Laravel
- Database – MySQL
- You get extra points for adding testing (for both frontend and backend);
- Design - you are free to use any framework or library whatever you want but keep in mind we primarly judge functionality and workflow. Less is more.
### Delivery format
- Please provide the repository links separately for frontend and backend with Demo application URL (e.g. in Heroku).
- The solution has to be testable by a non-technical person
### Resources
- Deployment of the application: Heroku
- Free mysql db host (https://remotemysql.com/);
- Use Git as code source management tool (following Git Flow will be assessed) Add Readme.md file (Project explanation file) to help us in deploying your application.
- The estimated duration for the task completion is 6 days (no extension of deadline).
