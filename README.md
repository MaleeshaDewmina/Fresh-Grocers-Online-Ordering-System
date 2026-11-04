# Fresh Grocers — Online Grocery Ordering System

**Academic project • Unit 35: System Analysis & Design • Pearson BTEC HND in Computing (2025)**

An academic web project based on the **Fresh Grocers** grocery-delivery scenario in Sri Lanka. The work combines requirements analysis, feasibility assessment, Agile/Scrum planning, a proposed e-commerce system design and an archived PHP/MySQL prototype.

**Developer and academic author:** [Maleesha Dewmina Perera](https://github.com/MaleeshaDewmina)

> **Status:** Historical coursework prototype. Not deployed or end-to-end verified. The original source archive did not contain the matching MySQL schema or migrations. Do not use the code for real payments, customer data or production deployment without a full review.

## Scope and functionality

- Grocery browsing, product listings and product-detail pages
- Shopping-cart and checkout interfaces
- Customer registration, login and account pages
- Administrator dashboard and product-management pages
- Academic system analysis: feasibility, requirements, user roles, Agile versus traditional methodologies
- Design documentation: entity-relationship diagram, use-case diagram, data-flow diagram and order-placement flowchart

**Implementation note:** The features above are supported by coursework screenshots, source-file presence and design documents, but have not all been functionally tested. Proposed features such as SMS delivery notifications, proximity-based driver matching and customer ratings must not be treated as verified implementations.

## Technologies

**PHP, MySQL (mysqli), HTML, CSS, JavaScript**, with local PHP/MySQL development tools.

## Source and documentation

The original implementation is a legacy coursework project. The intended repository layout is:

```text
web-app/                  PHP pages, admin/, css/, js/, images/, includes/
docs/screenshots/         Screenshots extracted from the 2025 assignment
docs/diagrams/            ERD, use case, DFD and order flowchart
docs/notes/               Source limitations and provenance notes
README.md
.gitignore
```

The uploaded README is a starting point; application source and graphics should be uploaded separately after review. Do not confuse missing files with confirmed features.

## Local development

1. Install PHP, MySQL and a local web server (for example, XAMPP).
2. Place the PHP project folder in the server document root.
3. Configure the local database connection using environment variables such as `FRESH_DB_HOST`, `FRESH_DB_USER`, `FRESH_DB_PASSWORD` and `FRESH_DB_NAME` when using the cleaned configuration.
4. Restore a **matching, sanitized** MySQL database schema from an original backup if available.
5. Open the local application through `http://localhost/...` and test each workflow.

The provided source archive has legacy references to a different clothing-store project and may require changes before the application runs correctly. The database is not supplied, so these steps are **guidance rather than a verified runbook**.

## Security and source hygiene

The archived source contains development-only scripts including an administrator-account seeder with a hardcoded demo password. Do **not** upload those scripts or any real credentials, database exports with personal data, .env files or private student information.

The original checkout does not have verified payment-provider integration and needs stronger server-side validation before any practical use.

## Project origin

This repository represents **“Web-based System for Fresh Grocers”**, an individual System Analysis & Design assignment submitted in June 2025.

**Author:** Maleesha Dewmina Perera • [GitHub profile](https://github.com/MaleeshaDewmina)

The complete academic report is intentionally not uploaded publicly. Future additions may include selected screenshots and diagrams with provenance notes.
