# User Guide

# Installation

##Setting  up the files
1) Checkout the git repository into a new directory
2) Setup your web server to point to the `/public` directory
3) Run `composer install` within the root directory to install all of the composer dependencies
4) Run `npm install` within the root directory to install all of the npm dependencies
5) Run the command `npm run prod` to build the css.

##Setting up the database
1) Rename the `env.example` file in the root to `.env` and input your database credentials
2) Run `php artisan migrate` within the root directory to setup the database with the tables and fields required
3) Edit the `/database/seeds/UserSeeder` file to configure the users which the database will be pre-configured with, or leave it with the example users
4) Run `php artisan db:seed` to populate the users table with the users specified in the seeder

##Styling
The `resources/sass/_variables.scss` file contains the colour scheme which can be easily edited.

Run the command `npm run prod` after any changes are made.

Header styling: `resources/sass/elements/_header.scss`.

Content container styling: `resources/sass/elements/_layout.scss`.

Quiz form styling: `resources/sass/elements/_quiz.scss`.

# Using the Quiz Manager

##Admin
After logging in, if you are logged in as an admin user, the Admin link will appear in the header. Upon clicking this you will be redirected to the admin dashboard. In the dashboard you are provided with links to the various sections of the admin on the left sidebar. Use these to view the data in those tables in the database, or if you have the Edit permission, you will also be able to create, edit and delete.

##Creating a Quiz

- Slug - The text in the URL which will be used to navigate to this specific quiz.
- Title - The main header which will display at the top of the quiz page.
- Description - Will display below the title, allowing for you to provide more information that won't fit in the title.
- Welcome text - Text which will display below the description as an introduction to the quiz. Can also be interpreted as a secondary description field.
- Admin name - The name of the author of this quiz. Does not display on the frontend so is only used for reference when viewing a quiz from within the admin.
- Starts at - Use this date input to specify which date the quiz will be valid from.
- Expires at - Use this date input to specify which date the quiz will be valid to.
- Active - This should be checked if you want the quiz to be visible. - NOTE: It will only be visible depending on if the current date lies within the start and expiration dates.

##Creating a Question

- Question - The title of the question, to display above the options.
- Quiz - This is a dropdown which will contain all of the quizzes created, so you can select a quiz to assign this question to.
- Active - This should be checked if you want the question to be visible.
- Order - Input a number in this field to determine where this question will appear in the quiz. This field is used to sort all questions within a quiz.
- Option - Use this field to input the options for the answer to the question. Use the Add Option button to add more options.
- Description - Will display below the title, allowing for you to provide more information that won't fit in the title.


##Frontend

After logging in, you will be able to view the quizzes on the frontend. These will only display if they are set to active and the current date falls within the Start and Expiry dates for this quiz.

The quizzes are displayed in a table format. To access a quiz page, click the button in the quiz's row.

From the quiz page, the quiz can be completed by selecting one option for each question and then clicking the submit button at the bottom. Upon submission, the user will be redirected to the homepage with a success message.
