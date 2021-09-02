# Job Portal Project
Online job portal website provides an efficient way to find job information between Job seekers and companies.Company can create their company account and they can also post jobs that the company wants to hire.The job seeker can view job information and  company profile. And, the job seeker can apply by looking at  the information of the recruiting company.Admin can manage the company and jobs. Authorized company will be allowed to post job after the admin checks and allows.

## Requirements

- PHP 8
- Apache 
- MySQL 8
- Composer 2.1.6
- Laravel 8

## Installation

Please check the official laravel installation guide for server requirements before you start.
[Official Documentation](https://laravel.com/docs/8.x)

Clone the repository
```
git clone https://github.com/scm-ojt/job-portal
```
Switch to the repo folder
```
cd job-portal
```
Install all the dependencies using composer
```
composer install
```
Copy the example env file and make the required configuration changes in the .env file
```
cp .env.example .env
```
Generate a new application key
```
php artisan key:generate
```
Run the database migrations (Set the database connection in .env before migrating)
```
php artisan migrate
```
Run the database seeder 
```
php artisan db:seed
```
Start the local development server
```
php artisan serve
```
You can now access the server at http://localhost:8000 and login using this email and password for admin.

```
Email : superadmin@gmail.com
Password : 12345678
```





## Features

- [Admin](#Admin)
- [Company](#Company)
- [Frontend](#Frontend)


## Admin
Admin can manage the users, companies, and jobs. Admin part include `User Authentication`, `Active or Deactive Company`, `Approve job that post by companies ` , `Role and Permission between admin and company`.
    
