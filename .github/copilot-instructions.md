# Copilot Instructions for AI Coding Agents

## Project Overview
This is a PHP-based personal profile website. The codebase is organized for modularity and maintainability, with clear separation of concerns:
- **Root PHP files** (`index.php`, `about.php`, `projects.php`, etc.) serve as entry points for different site sections.
- **Assets/** contains static resources:
  - `css/style.css` for global styles
  - `images/` for profile and project images
- **Include/** holds reusable PHP components:
  - `Header.php` and `footer.php` are included in main pages for consistent layout and navigation

## Key Patterns & Conventions
- **Header/Footer Inclusion:** All main PHP files use `include('Include/Header.php')` and `include('Include/footer.php')` for layout consistency.
- **File Naming:** Page files are named after their function (e.g., `projects.php` for projects section).
- **Static Assets:** Reference images and CSS using relative paths from the root or `Assets/` directory.
- **No Frameworks:** The site does not use a PHP framework; all routing and logic are handled in individual PHP files.

## Developer Workflows
- **Local Development:**
  - Use XAMPP or similar local server. Place files in the `htdocs` directory and access via `http://localhost/mike profile/`.
- **Debugging:**
  - Use `echo` or `var_dump` in PHP files for quick inspection.
  - Check browser console for CSS/image issues.
- **No Automated Build/Test:**
  - There are no build scripts, test suites, or package managers. All changes are manual.

## Integration Points
- **No External APIs or Databases:**
  - The site is static except for PHP includes. No database or API integration is present.
- **Image Usage:**
  - Images in `Assets/images/` are referenced directly in HTML `<img>` tags.

## Example: Adding a New Page
1. Create a new PHP file (e.g., `newpage.php`) in the root.
2. At the top, include the header: `<?php include('Include/Header.php'); ?>`
3. Add page content.
4. At the bottom, include the footer: `<?php include('Include/footer.php'); ?>`
5. Add any new images to `Assets/images/` and reference them with relative paths.

## Important Files & Directories
- `index.php`, `about.php`, `projects.php`, etc.: Main site pages
- `Include/Header.php`, `Include/footer.php`: Shared layout components
- `Assets/css/style.css`: Global styles
- `Assets/images/`: Site images

---
For questions or unclear conventions, review existing PHP files for examples or ask for clarification.
