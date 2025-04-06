Here is an overview of the files and their roles:

people.csv: Data source for the profiles.

router.php: Routes dynamic URLs to the correct profile pages.

template-profile.php: Template for individual profile pages.

template-people-directory.php: Template for displaying all profiles in a grid.

github.php: Fetches additional GitHub data (repos, followers) for each profile.

helpers.php: Contains utility functions to simplify common tasks (CSV parsing, API calls, etc.).

style.css: Custom styles for the profiles and directory pages.

sitemap.php: Generates a custom sitemap to ensure the profiles are indexed by search engines.

functions.php: Includes the logic to enqueue stylesheets and scripts and any additional theme functions.

------------------------------------------------------------------------------------------------------------///////

Data Management: The CSV file contains the foundational data for each person’s profile (name, GitHub username, bio, etc.).

Dynamic Routing: The router.php file ensures that URLs like /people/john-doe/ load the correct profile page dynamically based on the CSV data.

GitHub Integration: We fetch additional information (like the repository count and follower count) for each person using the GitHub API.

Profile and Directory Pages: We use template-profile.php for individual profiles and template-people-directory.php for the directory page that lists all people in a grid.

SEO and Discoverability: A custom sitemap.php file ensures all profile pages are indexed by search engines.

Error Handling: The project includes error handling for invalid slugs and missing CSV data, ensuring a smooth user experience.

