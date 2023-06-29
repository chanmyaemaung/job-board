# CL Job Board

Thank you for visiting the CL Job Board! This web application has been developed using Laravel 10, PHP 8.1, the latest version of Tailwind CSS, and the latest version of Alpine.js. The purpose of this job board is to facilitate the connection between employers and job seekers. It offers a platform for job creation, job application, expected salary input, company registration, and an advanced filter system.

## Features

### Employer Features

-   Create and post job listings
-   Specify job details, requirements, and qualifications
-   Set the expected salary for the job

### Employee Features

-   Browse and search job listings
-   Apply for jobs
-   Input expected salary when applying for a job
-   Register a user account
-   Submit job applications

### Company Registration

-   Companies can register an account to post jobs
-   Manage company information

### Advanced Filter System

-   Job seekers can refine their job search using advanced filters
-   Filter jobs by location, industry, experience level, and more
-   Easily find relevant job listings based on specific criteria


## Screenshots
<div id="plugin-settings-preview">
    <img src="https://i.imgur.com/dDGFE8U.png" alt="Advance Job Board Filter" width="100%">
</div>
<div id="plugin-settings-preview">
    <img src="https://i.imgur.com/IdgtqsW.png" alt="Strongly type validation checked." width="100%">
</div>
<div id="plugin-settings-preview">
    <img src="https://i.imgur.com/D9c8b3Y.png" alt="Applied listed jobs" width="100%">
</div>
<div id="plugin-settings-preview">
    <img src="https://i.imgur.com/TqZlSsA.png" alt="Create a job post" width="100%">
</div>


## Requirements

To run the Laravel CL Job Board application locally, you need to have the following technologies installed:

-   Laravel 10
-   PHP 8.1
-   Tailwind CSS (latest version)
-   Alpine.js (latest version)

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/chanmyaemaung/job-board.git
    ```

2. Navigate to the project directory:
    ```bash
    cd job-board
    ```
3. Install the dependencies:
    ```bash
    composer install
    ```
4. Create a copy of the .env.example file and rename it to .env. Update the necessary configuration values, such as database settings.

5. Generate the application key:
   ```bash
    php artisan key:generate
    ```
6. Run the database migrations and seed the database with sample data:
    ```bash
    php artisan migrate:fresh --seed
    ```
7. Build the frontend assets:
    ```bash
    npm install && npm run dev
    ```
8. Start the development server:
    ```bash
    php artisan serve
    ```

9. Access the application in your browser at http://localhost:8000.

## Support

If you encounter any issues while using the CL Job Board, don't hesitate to contact me at info@chanmyaemaung.net. I'll be happy to assist you.

## Contribute

Anyone in the world who wants to help make the CL Job Board better is welcome to do so. Visit our GitHub project at https://github.com/chanmyaemaung/job-board if you want to help with this project.

## License

The CL Job Board is licensed under the GPLv2 or later license.