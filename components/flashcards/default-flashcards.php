<style>
    .default-flashcards {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        
        fieldset {
            display: flex;
            padding: 1rem;

            legend {
                font-size: 2rem;
                font-weight: bold;
                text-align: center;
            }
        }

        .beginner, .advanced, .expert {
            font-family: var(--font-mono);
            padding: 1rem;
            margin: 0.5rem;
            width: 100px;
            min-height: 150px;
            display: grid;
            place-items: center;
            border-radius: var(--rounded);
            cursor: pointer;
            transition: scale 0.3s ease, background-color 0.3s ease;

            &:hover {
                scale: 1.1;
            }

            &:nth-child(2) {
                background-color: hsla(0, 50%, 50%, 100%);

                &:hover {
                    background-color: hsla(0, 100%, 50%, 100%);
                }
            }

            &:nth-child(3) {
                background-color: hsla(50, 50%, 50%, 100%);

                &:hover {
                    background-color: hsla(50, 100%, 50%, 100%);
                }
            }

            &:nth-child(4) {
                background-color: hsla(100, 50%, 50%, 100%);

                &:hover {
                    background-color: hsla(100, 100%, 50%, 100%);
                }
            }
        }
    }

</style>

<div class="default-flashcards">
    <div class="beginner-flashcards">
        <fieldset>
            <legend>Beginner</legend>
            <div class="beginner">Set 1A</div>
            <div class="beginner">Set 1B</div>
            <div class="beginner">Set 1C</div>
        </fieldset>
    </div>
    <div class="advanced-flashcards">
        <fieldset>
            <legend>Advanced</legend>
            <div class="advanced">Set 2A</div>
            <div class="advanced">Set 2B</div>
            <div class="advanced">Set 2C</div>
        </fieldset>
    </div>
    <div class="expert-flashcards">
        <fieldset>
            <legend>Expert</legend>
            <div class="expert">Set 3A</div>
            <div class="expert">Set 3B</div>
            <div class="expert">Set 3C</div>
        </fieldset>
    </div>
</div>