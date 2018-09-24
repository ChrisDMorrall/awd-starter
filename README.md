# Avanti Web Design Worpress 4.9.8 and Bootstrap 4.1.3 Starter Template

## Created using WPGulp from https://github.com/ahmadawais/WPGulp

Changes to the original WPGulp install include

1. Local Bootstrap Install using NPM
2. Updated style.scss to include Bootstrap source .scss files and removed CDN enqueue from functions.php
3. Included a Bootstrap custom.scss file to overide default bootstrap colours


## To Install into XAMMP local Dev

1. Create a new project folder
2. Create a new MySQL DB in PHPMyAdmin
3. Copy the wp-config.php file from an exisiting project and update the DB name and regenerate a new set of keys
4. Browse to the wp-admin URL for the new site to start the WP Install process
5. Delete existing WP Theme Folders and create a new Theme Folder
6. Clone this repo into new folder and update the projectURL in wpgulp.config.js file
7. Run NPM Install to download dependencies
8. Run NPM START to ready the environment
9. Get Coding!!!! :)
