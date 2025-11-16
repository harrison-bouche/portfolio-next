<!DOCTYPE html>
<html
    lang="en"
    @class(["dark" => ($appearance ?? "system") == "dark"])
>

<head>
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    {{-- Inline script to detect system dark mode preference and apply it immediately --}}
    <script>
        (function() {
            const appearance = '{{ $appearance ?? "system" }}';

            if (appearance === 'system') {
                const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

                if (prefersDark) {
                    document.documentElement.classList.add('dark');
                }
            }
        })();
    </script>

    <title inertia>{{ config("app.name") }}</title>

    <link
        rel="icon"
        href="/favicon.svg"
        type="image/svg+xml"
    >

    @vite(["resources/js/app.ts"])
    @inertiaHead
</head>

<body class="font-sans antialiased">
    <svg
        xmlns="http://www.w3.org/2000/svg"
        version="1.1"
        height="0"
        width="0"
    >
        <defs>
            <filter id="jagged">
                <feTurbulence
                    type="fractalNoise"
                    baseFrequency=".1"
                    numOctaves="5"
                />
                <feDisplacementMap
                    in="SourceGraphic"
                    scale="3"
                />
            </filter>
            <filter id="jagged-svg">
                <feTurbulence
                    type="fractalNoise"
                    baseFrequency="0.5"
                    numOctaves="4"
                />
                <feDisplacementMap
                    in="SourceGraphic"
                    scale="1.5"
                />
            </filter>
        </defs>
    </svg>

    @inertia
</body>

</html>
