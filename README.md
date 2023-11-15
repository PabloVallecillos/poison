Poison
---
Version: 1.0.0

### Tech stack

- Version: 1.0.0
- Tested up to wp version: 6.4.1
- Requires PHP: 8.2
- Requires Composer: 2.6.3
- Requires Node: 18.18.0
- Requires pnpm: 8.10.2
- Requires npm: 9.8.1
- [PHP Linter](https://github.com/CodelyTV/php-coding_style-codely)
- [CSS Linter](https://github.com/stylelint/stylelint)
- [SCSS Linter](https://github.com/postcss/postcss-scss)
- [JS Linter](https://github.com/eslint/eslint)
- Project commands mapped in Makefile

### Development

#### Install dependencies
```bash
make install
```

#### Architecture
Use oop in the inc folder for fun, but keep in mind the wp template hierarchy.

#### Plugins
- ACF
___
ACF json directory configurable with the constant ACF_JSON_DIRECTORY.
