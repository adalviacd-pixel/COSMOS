
// ============================
// COSMOS - JAVASCRIPT
// ============================


// MOBILE NAVIGATION

const menuToggle = document.getElementById("menuToggle");
const navLinks = document.getElementById("navLinks");

menuToggle.addEventListener("click", function () {
    navLinks.classList.toggle("show");

    menuToggle.textContent =
        navLinks.classList.contains("show") ? "✕" : "☰";
});

// Close menu after clicking a navigation link

document.querySelectorAll(".nav-links a").forEach(function (link) {
    link.addEventListener("click", function () {
        navLinks.classList.remove("show");
        menuToggle.textContent = "☰";
    });
});


// EXPLANATION LEVEL SWITCHER

const explanations = {
    beginner:
        "A black hole is a region in space where gravity is so strong that nothing, not even light, can escape once it crosses a boundary called the event horizon.",

    curious:
        "A black hole forms when a large amount of matter is compressed into an extremely small region. Its gravity bends spacetime so strongly that beyond the event horizon, every possible path leads inward.",

    deep:
        "In general relativity, a black hole is a region of spacetime bounded by an event horizon. For a simple non-rotating black hole, the Schwarzschild radius is the radius at which the escape velocity equals the speed of light."
};

const levelButtons = document.querySelectorAll(".level-button");
const explanationText = document.getElementById("explanationText");

levelButtons.forEach(function (button) {

    button.addEventListener("click", function () {

        const selectedLevel = button.dataset.level;

        explanationText.textContent =
            explanations[selectedLevel];

        // Remove active class from all buttons
        levelButtons.forEach(function (item) {
            item.classList.remove("active");
        });

        // Highlight selected button
        button.classList.add("active");

    });

});


// QUIZ INTERACTION

const quizOptions = document.querySelectorAll(".quiz-option");
const quizFeedback = document.getElementById("quizFeedback");

quizOptions.forEach(function (option) {

    option.addEventListener("click", function () {

        // Prevent answering more than once
        if (document.querySelector(".quiz-option:disabled")) {
            return;
        }

        const answer = option.dataset.answer;

        if (answer === "correct") {

            option.classList.add("correct");

            quizFeedback.textContent =
                "Correct! Saturn is famous for its spectacular ring system. ✦";

        } else {

            option.classList.add("wrong");

            quizFeedback.textContent =
                "Not quite! The correct answer is Saturn. Its rings are made mostly of ice and rocky particles.";

            // Highlight the correct answer
            document.querySelector('[data-answer="correct"]')
                .classList.add("correct");

        }

        // Disable all answer buttons
        quizOptions.forEach(function (item) {
            item.disabled = true;
        });

    });

});


// CONSOLE MESSAGE

console.log("COSMOS is ready for exploration!");
