/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./resources/**/*.blade.php"],
    theme: {
        extend: {
            screens: {
                md: "740px",
                // => @media (min-width: 740px) { ... }
            },
        },
        screens: {
            tab: "740px",
            // => @media (min-width: 740px) { ... }

            laptop: "1024px",
            // => @media (min-width: 1024px) { ... }

            desktop: "1280px",
            // => @media (min-width: 1280px) { ... }
        },
    },
    plugins: [],
};
