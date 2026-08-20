# CHANGELOG DIVICHILD

## 2026-08-20

- **Bumped version to 3.0.0** in `style.css`.
- **functions.php updates**:
  - Fixed WordPress editor / Divi Builder blank screen issue by restricting script version stripping (`vc_remove_wp_ver_css_js`) to the frontend only.
  - Added missing `exit;` call after `wp_redirect()` in `author_page_redirect()` to prevent code execution during redirect.
  - Optimized stylesheet enqueueing by removing redundant parent style calls (handled natively by Divi).
  - Added security enhancements: disabled XML-RPC and obfuscated login error messages.
  - Added performance optimizations: disabled WP Emojis scripts/styles and cleaned up unnecessary `<head>` links (RSD, WLW manifest, shortlinks).
  - Added SVG upload support in media library.
  - Translated all PHP comments to English to eliminate Non-Basic ASCII highlight warnings in VS Code.
- **style.css updates**:
  - Added general UX & accessibility improvements (`scroll-behavior: smooth`, keyboard focus outline, responsive video/iframe embeds).
  - Fixed WP Admin Bar overlapping the Divi header on mobile devices.
  - Enhanced mobile menu hover states and Scroll-to-Top button styling.
  - Added Yoast Breadcrumbs styling.
  - Translated all CSS comments to English.

## 2025-11-28

- Organizing additional functions into the "example" directory.
- Creating the starter DiviChild.zip, an archive for download.

## 2023-10-28

Add in function.php: Custom image size for Blog Module.
