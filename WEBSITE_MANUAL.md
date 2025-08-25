This is a comprehensive analysis of the UIU Robotics Club website, designed to serve as a manual for future maintainers.

### Website Structure and Technology

The website is built using **PHP** for server-side logic and **Tailwind CSS** for styling. It follows a modular structure with reusable components for the header, footer, and other common elements.

- **Core Configuration (`/_settings/config.php`)**: This file is the backbone of the site. It defines essential constants like `SITE_NAME`, `SITE_TAGLINE`, and the absolute path (`ABSPATH`), which is crucial for including files reliably. It also manages error reporting based on the `IS_PRODUCTION` flag. When `IS_PRODUCTION` is `false`, errors are displayed for debugging; otherwise, they are logged to `logs/error.log`.

- **Includes (`/_includes/`)**: This directory contains reusable PHP files that are included on multiple pages:
  - `head.php`: Contains the HTML head section, including metadata, links to stylesheets (like `uiurc.css`), and favicons.
  - `header.php` & `header2.php`: Define the site's navigation bar. It appears there might be two versions of the header, so it's important to check which one is being used on a given page.
  - `footer.php`: Contains the site's footer, including quick links, contact information, and social media icons.
  - `scroll-to-top.php`: A simple script that provides a "scroll to top" button.
  - `svg.php`: Contains SVG definitions for icons used across the site.

- **Styling (`/assets/css/`)**:
  - `tailwind.css`: The input file for Tailwind CSS.
  - `uiurc.css`: The compiled output CSS file that is actually used by the website. To make styling changes, you should edit `tailwind.css` and then run the build command.

- **Building CSS**: The `package.json` file includes a script to compile the Tailwind CSS. To watch for changes and automatically recompile, run:
  ```bash
  npm run dev
  ```

### Key Pages and Their Functionality

1.  **Home Page (`index.php`)**:
    - The main landing page of the website.
    - Features a hero section with a carousel of images.
    - Includes sections for "Our Events," "What do we do?," and "Brands we work with."
    - The events section is a carousel that dynamically loads event data from a JavaScript array.

2.  **About Us (`/AboutUs/index.php`)**:
    - Provides an introduction to the UIU Robotics Club.
    - Features a timeline of achievements and key statistics about the club.
    - Includes links to the Executive and Developer pages.

3.  **Achievements (`/Achievements/index.php`)**:
    - Displays a grid of the club's achievements.
    - The achievement data is stored in a JavaScript array within the file and rendered dynamically. To add a new achievement, you'll need to add a new object to the `achievements` array in the script tag.

4.  **Events (`/All_Events/index.php`)**:
    - Lists both upcoming and featured events.
    - Similar to the achievements page, the event data is stored in JavaScript arrays (`staticUpcomingEvents` and `staticOurEvents`). To update the events, modify these arrays.

5.  **Blog (`/Blog/`)**:
    - `index.php`: The main blog page, featuring a main article and a list of other recent posts.
    - `AllBlogs.php`: A page that displays all blog posts in a grid.
    - `blog1.php`, `blog2.php`, etc.: Individual blog post pages. To add a new blog post, you would create a new `blogX.php` file and link to it from `AllBlogs.php` and potentially `index.php`.

6.  **Executive Committee (`/Executive/`)**:
    - `index.php`: Displays the current and past executive committees. It uses a timeline to switch between years. The data for the committee members is hardcoded in the HTML.
    - `Devs.php`: Showcases the developers who worked on the website. It features a modal for each developer with more details.

### How to Maintain and Update the Website

-   **Adding a New Event**:
    1.  Open `/All_Events/index.php`.
    2.  If it's an upcoming event, add a new object to the `staticUpcomingEvents` array. If it's a past event, add it to the `staticOurEvents` array.
    3.  Each event object should have a `heading`, `time`, `location`, `details`, `image`, and `link`.

-   **Adding a New Achievement**:
    1.  Open `/Achievements/index.php`.
    2.  Add a new object to the `achievements` array in the script tag.
    3.  Each achievement object needs a `team`, `year`, `event`, `achievement`, `members`, and `image`.

-   **Adding a New Blog Post**:
    1.  Create a new file, e.g., `blog5.php`, in the `/Blog/` directory. You can use an existing blog post file as a template.
    2.  Add the content for the new blog post in this file.
    3.  Open `/Blog/AllBlogs.php` and add a new link to your `blog5.php` file, following the existing format.
    4.  Optionally, feature the new post on the blog's main page (`/Blog/index.php`) by updating the featured article section.

-   **Updating the Executive Committee**:
    1.  Open `/Executive/index.php`.
    2.  To add a new committee year, you'll need to add a new `div` with the `data-year` attribute and populate it with the new members' information.
    3.  You will also need to add the new year to the `years` array in the JavaScript at the bottom of the file.

-   **Changing Styles**:
    1.  Make sure you have Node.js and npm installed.
    2.  Run `npm install` in the root directory to install the necessary dependencies (Tailwind CSS).
    3.  Edit the `/assets/css/tailwind.css` file to make your style changes.
    4.  Run `npm run dev` to compile the CSS into `/assets/css/uiurc.css`.

This manual should provide a solid foundation for maintaining and updating the UIU Robotics Club website. Remember to always back up files before making significant changes.