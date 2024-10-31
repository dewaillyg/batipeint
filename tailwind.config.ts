import type { Config } from "tailwindcss";

const config: Config = {
  content: [
    "./pages/**/*.{js,ts,jsx,tsx,mdx}",
    "./components/**/*.{js,ts,jsx,tsx,mdx}",
    "./app/**/*.{js,ts,jsx,tsx,mdx}",
  ],
  theme: {
    extend: {
      colors: {
        // background: "var(--background)",
        // foreground: "var(--foreground)",
        highlight: 'var(--highlight)',
        highlightOpacity: 'var(--highlight-opacity)',
        highlightVariant: 'var(--highlight-variant)',
        stack: 'var(--stack)',
      },
      fontFamily: {
        fontStack: 'var(--font-stack)',
        fontHighlight: 'var(--font-highlight)',
      },
      backgroundImage: {
        //Home
        'home-principal': "url('/img/home/principal.jpg')",
        'home-1': "url('/img/home/second-1.jpg')",
        'home-2': "url('/img/home/second-2.jpg')",
        'home-3': "url('/img/home/second-3.jpg')",
        //Service
        'service-1': "url('/img/service/service-1.jpg')",
        'service-2': "url('/img/service/service-2.jpg')",
        'service-3': "url('/img/service/service-3.jpg')",
        'service-4': "url('/img/service/service-4.jpg')",
        'service-5': "url('/img/service/service-5.jpg')",
        'service-6': "url('/img/service/service-6.jpg')",
        // MainStory
        'story': "url('/img/story/main.webp')",
        'story-story': "url('/img/story/story.webp')",
      }
    },
  },
  plugins: [],
};
export default config;
