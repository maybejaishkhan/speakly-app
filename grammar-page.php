<?php
// index.php
require_once 'includes/config.php';
?>

<?php include 'includes/head.php'; ?>
    <style>
        <?php include "static/css/reset.css"; ?>h1 {
            font-size: clamp(2rem, 5vw, 3rem);
            font-style: bolder;
        }

        h2 {
            font-size: clamp(1.5rem, 5vw, 2rem);
        }

        section {
            font-size: 1em;
            padding: 1rem;
        }

        .content-section {
            padding: 2rem;
            padding-top: 0;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>

    <main>
        <section class="content-section">
            <section class="header">
                <h1>English Grammar</h1>
                <p>Grammar is the study of the structure and rules of a language. It is a crucial aspect of language learning as it helps you understand how words are used and how they can be combined to form sentences. It is however impossible to define every single rule that exists in a language (pure descriptivism) just because of the nature of how natural languages "are".</p>
            </section>
            <section class="properties-of-english" id="s-1">
                <h2>📚 Properties of English</h2>
                <p>English is a language that has a very rich grammar. It is a language that is very flexible and can be used in many different ways. It is also a language that is very easy to learn and understand. English is also a language that is very important in the world of technology and communication.</p>
            </section>
            <section class="sentence-structure">
                <h2>📝 Sentence Structure</h2>
                <p>Sentences are the basic building blocks of a language. They are the way in which words are combined to form a complete thought. In English, sentences are made up of a subject, a verb, and an object. The subject is the person or thing that the action is about. The verb is the action that is being performed. The object is the thing that is being acted upon.</p>
                <p>In English, sentences are made up of a subject, a verb, and an object. The subject is the person or thing that the action is about. The verb is the action that is being performed. The object is the thing that is being acted upon.</p>
            </section>
            <section class="parts-of-speech">
                <h2>✨ Parts of Speech</h2>
                <p>Parts of speech are the different types of words in a language. They help you understand the function of a word and how it fits into a sentence. In English, there are 9:
                <?php include 'components/grammar/parts-of-speech-tabs.php'; ?>
            </section>

            <section class="functions-of-speech">
                <h2>🛠️ Functions of Speech</h2>
                <p>Functions of speech are the different types of roles a word can take in a sentence. There are many many different ones but the main ones are these seven: <b>subject</b>, <b>direct object</b>, <b>object of preposition</b>, <b>predicative complement</b>, <b>modifier</b>, <b>adjunct</b>, <b>determiner</b>.</p>
            </section>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>

</html>