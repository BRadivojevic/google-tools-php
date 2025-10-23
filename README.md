# Google Tools (PHP)

Endpoints:
- `public/googleImgUpload.php` — image upload + bounded resize
- `public/translate.php` — text translation via Google API

## Security
- Enforce auth before use in production.
- Validate MIME and clamp resize to server-side limits.
