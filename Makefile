.PHONY: install
install:
	composer install && pnpm i

.PHONY: scss-watch
scss-watch:
	pnpm run sass-watch

.PHONY: scss-build
scss-build:
	pnpm run sass-build

.PHONY: php-linter-fix
php-linter-fix:
	./vendor/bin/ecs --fix

.PHONY: scss-linter-fix
scss-linter-fix:
	pnpm stylelint "**/*.scss" --fix --custom-syntax postcss-scss

.PHONY: js-linter-fix
js-linter-fix:
	pnpm run js-lint
