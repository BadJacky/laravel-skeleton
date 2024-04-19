export default {
    '*.php': ['./vendor/bin/pint'],
    '*.{js,mjs,jsx,ts,tsx,json,css,scss,md,vue}': ['prettier . --write'],
    '*.{js, jsx,ts,tsx}': ['eslint --fix .'],
};
