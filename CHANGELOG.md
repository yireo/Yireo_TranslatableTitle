# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [0.0.2] - 25 November 2026
### Fixed
- Page titles that were already translated are no longer translated a second time
- Runtime page titles (search terms, product and CMS page names) are no longer used as translation keys; titles are only translated in the frontend
- Empty or non-string page titles no longer cause a type error in the title plugin

### Changed
- Composer package renamed to `yireo/magento2-translatabletitle`
- Supported Magento framework versions are now constrained to 100.1 up to 103.x (Magento 2.1 to 2.4)

### Removed
- Support for PHP 8.1; PHP 8.2 up to 8.5 is now required
