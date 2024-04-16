export default {
    plugins: ['prettier-plugin-blade'],
    singleQuote: true,
    overrides: [
        {
            files: ['*.blade.php'],
            options: {
                parser: 'blade',
            },
        },
    ],
};
