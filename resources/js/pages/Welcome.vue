<template>
    <div class="page__container">
        <main class="page__content">
            <div class="page__logo">
                <img
                    src="/harrison.webp"
                    class="page__logo-image page__logo-image--harrison"
                />
                <img
                    src="/bouche.webp"
                    class="page__logo-image page__logo-image--bouche"
                />
            </div>

            <div class="page__cta">
                <p class="page__tagline">
                    <span class="page__tagline-line-1">Developer</span>
                    <span class="page__tagline-line-2">for hire.</span>
                </p>

                <a
                    href="mailto:harrison@bouche.dev"
                    class="page__text jagged-border"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 640 640"
                        class="page__text-icon jagged-svg"
                    >
                        <path
                            d="M112 128C85.5 128 64 149.5 64 176C64 191.1 71.1 205.3 83.2 214.4L291.2 370.4C308.3 383.2 331.7 383.2 348.8 370.4L556.8 214.4C568.9 205.3 576 191.1 576 176C576 149.5 554.5 128 528 128L112 128zM64 260L64 448C64 483.3 92.7 512 128 512L512 512C547.3 512 576 483.3 576 448L576 260L377.6 408.8C343.5 434.4 296.5 434.4 262.4 408.8L64 260z"
                        />
                    </svg>
                    <span>Reach Out</span>
                </a>
            </div>
        </main>
    </div>
</template>

<style scoped>
.page__container {
    min-height: 100dvh;
    padding: 2rem;

    display: flex;
    align-items: center;
    justify-content: center;

    @container (min-width: 1024px) {
        padding-inline: 6rem;
    }
}

.page__content {
    container-type: inline-size;

    width: 100%;
    max-width: clamp(335px, 80%, 1000px);
    border-radius: 1rem;

    transition: opacity 1s ease-out;

    @starting-style {
        opacity: 0;
    }
}

.page__logo {
    width: 100%;
    margin-block-end: 1rem;

    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0.5rem;

    @container (min-width: 800px) {
        flex-direction: row;
        justify-content: center;
        gap: 1.5rem;
    }
}

.page__logo-image {
    width: 100%;
}

.page__logo-image--harrison {
    @container (min-width: 800px) {
        transform-origin: left;
        transform: scale(1.1);
    }
}

.page__logo-image--bouche {
    transform: scale(0.8);

    @container (min-width: 800px) {
        transform-origin: right;
        transform: scale(0.9);
    }
}

.page__cta {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 1rem;

    @container (min-width: 600px) {
        flex-direction: row;
        gap: 3rem;
    }

    /* border: red 1px solid; */
}

.page__text {
    width: 100%;
    padding: 1rem 2rem;

    position: relative;

    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.75rem;

    font-family: "Rubik Bubbles";
    font-size: 2rem;
    text-decoration: none;
    text-transform: uppercase;
    color: var(--bouche-color-lamplight-500);
    fill: var(--bouche-color-lamplight-500);
    white-space: nowrap;

    border-radius: 16px;

    transition-property: color, fill, background-color, transform;
    transition-duration: 0.15s;
    transition-timing-function: ease-out;

    &:focus-visible {
        outline: var(--bouche-color-nightsky-500) 4px solid;
        outline-offset: 4px;
    }

    &:hover {
        color: var(--bouche-color-nightsky-850);
        fill: var(--bouche-color-nightsky-850);
        background-color: var(--bouche-color-lamplight-500);

        transform: rotate(-2deg) scale(0.95);
    }
}

.page__text-icon {
    width: 2.5rem;
}

.page__tagline {
    height: 150px;

    position: relative;

    display: flex;
    flex-direction: column;
    color: white;

    transform: scale(0.7);

    @media (min-width: 500px) {
        transform: scale(1);
    }
}

.page__tagline-line-1 {
    z-index: 1;

    font-family: "Rubik Vinyl", "Rubik Bubbles";
    font-size: 4rem;
    color: var(--bouche-color-lamplight-500);
}

.page__tagline-line-2 {
    font-family: "Crustaceans Signature";
    font-size: 7rem;
    transform: translateX(12px) translateY(-88px);
}

.page__tagline-line-2::after {
    content: "";

    width: 280px;
    height: 40px;

    position: absolute;
    z-index: 2;
    left: 0;
    top: 24px;

    background-color: var(--bouche-color-nightsky-850);
    opacity: 50%;
}
</style>
