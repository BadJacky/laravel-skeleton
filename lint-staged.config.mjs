export default {
    '*.php': ['./vendor/bin/pint --dirty'],
    '*.{js,mjs,jsx,ts,tsx,json,css,scss,md,vue}': ['prettier . --write'],
    '*.{js, jsx,ts,tsx}': ['eslint --fix .'],
};
