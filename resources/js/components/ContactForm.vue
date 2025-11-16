<template>
    <div class="contact-form__wrapper">
        <div class="contact-form">
            <div class="contact-form__section--heading">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 640 640"
                    class="contact-form__icon jagged-svg-xl"
                >
                    <path
                        d="M224 384C330 384 416 305.2 416 208C416 110.8 330 32 224 32C118 32 32 110.8 32 208C32 247.6 46.3 284.2 70.4 313.6L34.8 380.8C29.9 390.1 31.6 401.5 39 409C46.4 416.5 57.9 418.2 67.2 413.2L148.8 370C171.9 379 197.3 384 224 384zM227.2 432C243.6 513.9 321.9 576 416 576C442.7 576 468.1 571 491.2 562L572.8 605.2C582.1 610.1 593.5 608.4 601 601C608.5 593.6 610.2 582.1 605.2 572.8L569.6 505.6C593.7 476.2 608 439.6 608 400C608 317.6 546.3 248.5 463 229.3C451.5 345.1 347.2 430.5 227.2 432zM224 136C207.9 136 194.8 149.1 194.8 165.2C194.8 178.5 184.1 189.2 170.8 189.2C157.5 189.2 146.8 178.5 146.8 165.2C146.8 122.6 181.4 88 224 88C266.6 88 301.2 122.6 301.2 165.2C301.2 210.7 266.7 229.9 247.5 237C245.2 247.8 235.6 256 224 256C210.7 256 200 245.3 200 232C200 211.8 214.6 197.4 229.5 192.5C235.5 190.5 241.8 187.4 246.3 183C250.2 179.2 253.2 174 253.2 165.3C253.2 149.2 240.1 136.1 224 136.1zM196 304C196 288.5 208.5 276 224 276C239.5 276 252 288.5 252 304C252 319.5 239.5 332 224 332C208.5 332 196 319.5 196 304z"
                    />
                </svg>
                <h2 class="contact-form__heading">Reach Out</h2>
            </div>
            <div class="contact-form__section-wrapper">
                <form class="contact-form__section--form">
                    <label class="input">
                        <span class="input__label">Name *</span>
                        <div
                            class="jagged-border"
                            data-jagged="dark"
                        >
                            <input
                                name="name"
                                type="text"
                                required
                                class="input__input"
                            />
                        </div>
                    </label>
                    <label class="input">
                        <span class="input__label">Email *</span>
                        <div
                            class="jagged-border"
                            data-jagged="dark"
                        >
                            <input
                                name="email"
                                type="email"
                                required
                                class="input__input"
                            />
                        </div>
                    </label>
                    <label class="input input--subject">
                        <span class="input__label">Subject *</span>
                        <div
                            class="jagged-border"
                            data-jagged="dark"
                        >
                            <input
                                name="subject"
                                type="text"
                                required
                                class="input__input"
                            />
                        </div>
                    </label>
                    <label class="input">
                        <span class="input__label">Message</span>
                        <div
                            class="jagged-border"
                            data-jagged="dark"
                        >
                            <textarea
                                name="subject"
                                type="text"
                                class="input__input input__input-textarea"
                            />
                        </div>
                    </label>
                    <button class="button jagged-border" data-jagged="light">
                        <span>Send</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</template>

<style scoped>
.contact-form__wrapper {
    container-type: inline-size;
}

.contact-form {
    display: grid;
    gap: 2rem;

    color: var(--bouche-color-neutral-100);
    fill: var(--bouche-color-neutral-100);

    @container (min-width: 700px) {
        grid-template-columns: 33% 1fr;
        align-items: center;
    }
}

.contact-form__section--heading {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0.75rem;
}

.contact-form__icon {
    width: 188px;
}

.contact-form__heading {
    font-family: "Rubik Bubbles";
    font-size: 2rem;
    text-transform: uppercase;
}

.contact-form__section-wrapper {
    container-type: inline-size;
}

.contact-form__section--form {
    display: grid;
    gap: 1.5rem;

    @container (min-width: 400px) {
        grid-template-columns: 1fr 1fr;
    }
}

.input {
    display: flex;
    flex-direction: column;
    gap: 0.25rem;

    &:last-of-type {
        grid-column: 1 / -1;
    }
}

.input__label {
    font-family: "Rubik Bubbles";
    font-size: 1.125rem;
    text-transform: uppercase;
}

.input__input {
    width: 100%;
    padding: 0.75rem;
    border-radius: 1rem;

    font-size: 1rem;
    line-height: 1.3;

    color: var(--bouche-color-neutral-100);
    border: none;
    background-color: var(--bouche-color-nightsky-800);

    &:focus-visible {
        outline: var(--bouche-color-nightsky-500) 4px solid;
        outline-offset: 6px;
    }

    &:focus {
        outline: none;
    }
}

.input__input-textarea {
    min-width: 100%;
    max-width: 100%;
    min-height: 6rem;
}

.input--subject {
    grid-column: 1 / -1;
}

.button {
    grid-column: 1 / -1;

    width: calc(100% - 0.5rem);
    padding: 1rem 2rem;
    margin: 0.25rem;

    position: relative;

    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.75rem;

    font-family: "Rubik Bubbles";
    font-size: 1.5rem;
    text-decoration: none;
    text-transform: uppercase;
    color: var(--bouche-color-nightsky-900);
    fill: var(--bouche-color-nightsky-900);
    background-color: var(--bouche-color-neutral-100);
    white-space: nowrap;

    border-radius: 16px;

    cursor: pointer;

    transition-property: color, fill, background-color, transform;
    transition-duration: 0.15s;
    transition-timing-function: ease-out;

    &:focus-visible {
        outline: var(--bouche-color-nightsky-500) 4px solid;
        outline-offset: 8px;
    }

    &:hover {
        color: var(--bouche-color-nightsky-850);
        fill: var(--bouche-color-nightsky-850);
        background-color: var(--bouche-color-lamplight-500);

        transform: rotate(-2deg) scale(0.95);
    }

    @container (min-width: 700px) {
        max-width: none;
    }
}
</style>
