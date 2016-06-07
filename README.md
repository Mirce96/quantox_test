Senior PHP Backend Developer Test

The goal of this test is to assert (to some degree) your coding skills.

Feel free to add at any point any particular technique or algorithm that you think might enrich the

overall quality of the end result.

When you're finished, reply within the existing mail conversation by attaching a zip file with your

results.

Requirements

PHP

You MUST NOT​use any frameworks for this test.

You are, however, allowed to use any PHP libraries as long as they are installed via

[Composer](https://getcomposer.org/).

Database

Database engine used MUST ​be MySQL.

Expectations

Candidate is expected to be able to develop this test in 8 hours or less, although feel free to

invest as much time as you find adequate.

Your task:

Please implement the following 4­screen logic:

­ Home screen

­ Link to login screen

­ Link to register screen

­ Search form:

­ Search text input

­ Search button

Description

­ The link to the login screen should send the user to the Login Screen.

­ The link to the register screen should send the user to the Register Screen.

­ By typing any text in the search field and submitting form, the app should redirect the user to

the Results Screen and display the list of matching results.

Register Screen

Display a form to the user with:

­ email input field

­ name input field

­ password input field

­ repeat password input field

­ submit button

When the form is submitted, it should be validated and, if the validation passes, the information

should be saved on the database.

If the validation does not pass, an error message should be sent back to the client with a

description of what went wrong.

Login Screen

Display a form to the user with:

­ email input field

­ password input field

­ submit button

When the form is submitted, it should be validated and, if the validation passes, try to login the

user.

If the user is not logged in successfully, a generic error message should be returned to the

client, like “Error logging you in.”

If the user is logged in successfully an message should appear saying "Welcome, {name of the

user}!"

Results Screen

If the user is not logged in, no results should be displayed. Instead, a message saying “Please

login” should show, with the login form below (the same "view" file used on the Login Screen

should be used here).

If the user is logged in, then the page should display all matching results of users with either a

name or an email address similar to the query text provided by the client.

Test Evaluation Criteria

­ Front End look and feel will be valued, but will be considered as a plus.

­ All validations must be server side. You can use javascript, but that’s completely optional.

­ Installation instructions should be included.

­ Code should be documented where needed (use your own judgement).

­ Although not mandatory, you can include a text file explaining your approach to the problem

and why it was resolved in a certain way.

­ Any extra features that you might want to include will be taken into account AS LONG as the

basic feature requirements described in this sheet are met.

­ Security of the overall solution will be taken into account.

­ Design patterns and other coding best­practices will be taken into account.

THANKS AND GOOD LUCK!