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
            <form
                method="POST"
                action="{{ route("contact") }}"
                class="contact-form__section--form"
            >
                @csrf
                <label class="input">
                    <span class="input__label">Name *</span>
                    <div
                        class="jagged-border @error("name") error @enderror"
                        data-jagged="dark"
                    >
                        <input
                            name="name"
                            type="text"
                            required
                            class="input__input "
                        />
                    </div>
                </label>
                <label class="input">
                    <span class="input__label">Email *</span>
                    <div
                        class="input__input-wrapper jagged-border @error("email") error @enderror"
                        data-jagged="dark"
                    >
                        <input
                            name="email"
                            type="email"
                            required
                            class="input__input"
                        />
                        @error("email")
                            <span class="input__error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>
                <label class="input input--subject">
                    <span class="input__label">Subject *</span>
                    <div
                        class="jagged-border @error("subject") error @enderror"
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
                        class="jagged-border @error("message") error @enderror"
                        data-jagged="dark"
                    >
                        <textarea
                            name="message"
                            class="input__input input__input-textarea"
                        ></textarea>
                    </div>
                </label>
                @env("production")
                <div
                    class="cf-turnstile"
                    data-sitekey="0x4AAAAAACBQLUSobEpgWH4u"
                    data-theme="dark"
                    data-size="normal"
                ></div>
                @endenv
                <button
                    class="button jagged-border"
                    data-jagged="light"
                >
                    <span>Send</span>
                </button>
            </form>
        </div>
    </div>
</div>
