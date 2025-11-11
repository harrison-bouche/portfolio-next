<template>
    <div class="page__container">
        <main class="page__content">
            <div class="page__logo">
                <img src="/harrison.png" />
                <img
                    src="/bouche.png"
                    class="page__logo-bouche"
                />
            </div>

            <a
                href="mailto:harrison@bouche.dev"
                class="page__text"
                >Hire me!</a
            >
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
    max-width: clamp(335px, 80%, 900px);
    border-radius: 1rem;

    transition: opacity 1s ease-out;

    @starting-style {
        opacity: 0;
    }
}

.page__logo {
    width: 100%;
    margin-block-end: 2rem;

    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0.5rem;

    @container (min-width: 600px) {
        gap: 1rem;
    }
}

.page__logo-bouche {
    transform: scale(0.85);
}

.page__text {
    width: 100%;
    text-align: center;

    display: block;

    font-family: "Crustaceans Signature";
    font-size: clamp(3rem, 10vw, 4rem);
    color: var(--bouche-color-neutral-100);

    transition: 0.25s;

    &:hover {
        transform: scale(1.1);
        color: var(--bouche-color-lamplight-500);
    }
}
</style>
