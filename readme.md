#Project 4 - Gender Transition Tracker

##Purpose
A tool to allow (currently exclusively private) blogging and tracking of life milestones, specifically geared toward the process of gender transition.

##Function
The three main functions and their abilities (at this time) are as follows:
* User authentication  
    * New user creation  
    * Login and log out  
    * User profile, with ability to edit optional fields (birthday, gender, pronouns)  
    * If user has specified a birthday in their profile, app displays a "Happy birthday" message  
* Private blogging  
    * Creating new blog posts  
    * Viewing a list of blog posts with the title, date, and a truncated preview of each post starting with the most recent  
    * Viewing each full post individually  
    * Options to edit and delete each post, both from the list of all posts and from the individual post view  
* Timeline  
    * Creating new timeline events (milestones)  
    * Viewing a list of milestones  
    * Options to edit and delete each milestone  

##Development Notes
* Throughout the creation of this app I kept changing my mind about the best way to describe the milestones/timeline function, so it is referred to differently in different places throughout the code.  In the model, database, and controller I use the word "events", in the routes, layout, migration, and seeds I use "milestones", and in the main view and front end I switch between "events", "milestones", and "timeline". It is (I think) fairly clear that all three refer to the same function, and consistency is used where it is required for the app to function.  
* You may notice a number of strangely named Git commits with tiny changes. These are from a work session where I forgot that the purpose of a local domain is to test and view the results of changes to your code without having to push each tiny change to the repository.  
* The seeder for the Users table includes three users - Jill, Jamal, and Jan. Jill and Jamal are for the purpose of showing that you cannot view the timeline or blog posts of one user while signed in as another. Jill also is set to be exactly 21 years old on the day the seeder is run, showing how the greeting for a logged in user changes on their birthday. Jan exists to show how the app responds to a user having no blog posts, timeline events, or profile information. The login information for all three users consists of an email that is the user's name followed by "@harvard.edu" and the password "helloworld".