import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
		"./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
		 "./storage/framework/views/*.php",
		 "./resources/views/**/*.blade.php",
		 "./vendor/joydeep-bhowmik/src/resources/views/components/**/*.blade.php",
		 "./vendor/robsontenorio/mary/src/View/Components/**/*.php"
	],
    darkMode: "class",

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
		require("daisyui")
	],
};
