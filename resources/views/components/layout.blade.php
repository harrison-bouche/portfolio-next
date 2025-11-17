<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <title>{{ config("app.name") }}</title>

    <link
        rel="icon"
        href="/favicon.svg"
        type="image/svg+xml"
    >

    <link rel="preconnect" href="https://challenges.cloudflare.com">
    <script
        src="https://challenges.cloudflare.com/turnstile/v0/api.js"
        async
        defer
    ></script>

    @stack('scripts')

    @vite(["resources/css/app.css"])
</head>

<body>
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
            <filter id="jagged-svg-xl">
                <feTurbulence
                    type="fractalNoise"
                    baseFrequency="0.25"
                    numOctaves="3"
                />
                <feDisplacementMap
                    in="SourceGraphic"
                    scale="5"
                />
            </filter>
        </defs>
    </svg>

    {{ $slot }}
</body>

</html>
