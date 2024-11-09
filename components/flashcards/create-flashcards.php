


<style>
    .flashcard-form {
        padding: 1rem;
        border: 3px solid var(--neutral-900);
    }

    .flashcards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(15rem, 1fr));
        gap: 1rem;
        margin-top: 1rem;
    }

    .flashcard-entry {
        display: flex;
        flex-direction: column;
        padding: 1rem;

        .flashcard-heading {
            font-size: 1.5rem;
            padding: 0.5rem;
        }

        .flashcard-description {
            font-size: 1rem;
            margin-top: 1rem;
            resize: none;
            min-height: 200px;
            max-height: 300px;
            padding: 0.5rem;

        }

        &[data-color="red"] {
            background-color: hsl(0, 100%, 60%);
        }

        &[data-color="pink"] {
            background-color: hsl(345, 100%, 60%);
        }

        &[data-color="purple"] {
            background-color: hsl(270, 100%, 60%);
        }

        &[data-color="indigo"] {
            background-color: hsl(240, 100%, 60%);
        }

        &[data-color="blue"] {
            background-color: hsl(210, 100%, 60%);
        }

        &[data-color="teal"] {
            background-color: hsl(180, 100%, 60%);
        }

        &[data-color="green"] {
            background-color: hsl(140, 100%, 60%);
        }

        &[data-color="lime"] {
            background-color: hsl(100, 100%, 60%);
        }

        &[data-color="yellow"] {
            background-color: hsl(60, 100%, 60%);
        }

        &[data-color="orange"] {
            background-color: hsl(30, 100%, 60%);
        }

    }

    .flashcard-entry>input,
    .flashcard-entry>textarea {
        border: none;

        &:focus {
            outline: 2px solid var(--primary-700);
        }
    }

    .toprow {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;

        .title-entry {
            font-size: 1.5rem;

            input {
                font-size: 1.5rem;
                padding: 0.5rem;
                margin: 0.5rem;
                border: none;
                border-bottom: 3px solid black;
            }
        }

        button[type="submit"] {
            font-size: 1.5rem;
            padding: 0.5rem;
            border: none;
            background-color: var(--neutral-900);
            color: var(--neutral-100);

            &:hover {
                background-color: var(--primary-700);
            }

            &:active {
                background-color: green;
                ;
            }
        }
    }
</style>

<h2>Create Flashcard Sets</h2>
<form action="#" method="POST" class="flashcard-form">
    <div class="toprow">
        <div class="title-entry">
            <input type="text" name="flashcard-title" id="flashcard-title" required placeholder="Enter Title">
        </div>
        <button type="submit">Create </button>
    </div>

    <div class="flashcards">
        <div class="flashcard-entry" data-color="red">
            <input type="text" name="fh1" class="flashcard-heading" placeholder="Flashcard 1">
            <textarea type="text" name="fd1" class="flashcard-description" placeholder="Description of Flashcard 1"></textarea>
        </div>
        <div class="flashcard-entry" data-color="orange">
            <input type="text" name="fh2" class="flashcard-heading" placeholder="Flashcard 2">
            <textarea type="text" name="fd2" class="flashcard-description" placeholder="Description of Flashcard 2"></textarea>
        </div>
        <div class="flashcard-entry" data-color="yellow">
            <input type="text" name="fh3" class="flashcard-heading" placeholder="Flashcard 3">
            <textarea type="text" name="fd3" class="flashcard-description" placeholder="Description of Flashcard 3"></textarea>
        </div>
        <div class="flashcard-entry" data-color="lime">
            <input type="text" name="fh4" class="flashcard-heading" placeholder="Flashcard 4">
            <textarea type="text" name="fd4" class="flashcard-description" placeholder="Description of Flashcard 4"></textarea>
        </div>
        <div class="flashcard-entry" data-color="green">
            <input type="text" name="fh5" class="flashcard-heading" placeholder="Flashcard 5">
            <textarea type="text" name="fd5" class="flashcard-description" placeholder="Description of Flashcard 5"></textarea>
        </div>
        <div class="flashcard-entry" data-color="teal">
            <input type="text" name="fh6" class="flashcard-heading" placeholder="Flashcard 6">
            <textarea type="text" name="fd6" class="flashcard-description" placeholder="Description of Flashcard 6"></textarea>
        </div>
        <div class="flashcard-entry" data-color="blue">
            <input type="text" name="fh7" class="flashcard-heading" placeholder="Flashcard 7">
            <textarea type="text" name="fd7" class="flashcard-description" placeholder="Description of Flashcard 7"></textarea>
        </div>
        <div class="flashcard-entry" data-color="indigo">
            <input type="text" name="fh8" class="flashcard-heading" placeholder="Flashcard 8">
            <textarea type="text" name="fd8" class="flashcard-description" placeholder="Description of Flashcard 8"></textarea>
        </div>
        <div class="flashcard-entry" data-color="purple">
            <input type="text" name="fh9" class="flashcard-heading" placeholder="Flashcard 9">
            <textarea type="text" name="fd9" class="flashcard-description" placeholder="Description of Flashcard 9"></textarea>
        </div>
        <div class="flashcard-entry" data-color="pink">
            <input type="text" name="fh10" class="flashcard-heading" placeholder="Flashcard 10">
            <textarea type="text" name="fd10" class="flashcard-description" placeholder="Description of Flashcard 10"></textarea>
        </div>
    </div>
</form>