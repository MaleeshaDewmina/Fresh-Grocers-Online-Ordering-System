# Source audit and packaging notes

This package was prepared from `grocery-store.zip` and the June 2025 Unit 35 coursework report.

## Preserved

- `fresh/` PHP application, under the easier-to-understand `web-app/` path
- Frontend styles, JavaScript, fonts and most assets required by the PHP prototype
- Four original website screenshots and four original design diagrams from the report
- Original project branding image from the report

## Excluded from public bundle

- `grocery-store/fresh/images/1.jpg`: a misnamed PNG of approximately **110 MB**, unrelated to an application image reference. Excluded to avoid a huge and potentially unsafe image decompression.
- `fresh/admin/setup_admin.php`: an unauthenticated setup endpoint hardcoding a demo administrator password.
- `fresh/hash_password.php`: an ad hoc password demonstration endpoint.
- `fresh/test_db.php`, `fresh/session_test.php`: debug endpoints.
- Original user-upload folder contents and local VS Code launch configuration.
- Root-level `grocery-store/*.html` static Bootstrap template and assets: separate third-party-derived template, not necessary for the documented PHP implementation; licensing was not verified. Kept in the user's untouched original archive.
- Complete assignment report: includes student ID, campus email and staff details.

## Changes

- `includes/db.php` now reads database settings from environment variables, with local-only defaults. The suggested local database name is `fresh_grocers`. This does not supply a database schema.
- Visible PHP page labels `Velvet Vogue` were changed to `Fresh Grocers`, preserving core PHP control flow.

- The contact page uses demo-only contact details.

## Findings

- The user-facing report models customer, product, order and administrative flows, but those designs do not prove the supplied code is complete.
- The original PHP code contains clothing-store leftovers (e.g. size, gender, clothing types) and the database schema is missing.
- Admin pages and purchase flows have not been executed or security tested. Features are described as source-present or documented—not verified deployments.
- Before use outside a local sandbox, audit access control, XSS output escaping, prepared queries, CSRF defenses, stock/order integrity, server-side amount verification, and third-party assets.
