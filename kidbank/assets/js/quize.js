function submitQuiz() {
    var answers = ['a', 'b', 'c', 'a', 'a', 'a', 'b', 'b', 'c', 'c'];
    var score = 0;
    var resultTableBody = document.querySelector('#result-table tbody');
    var totalScoreSpan = document.getElementById('total-score');

    for (var i = 1; i <= 10; i++) {
        var answer = document.querySelector('input[name="q' + i + '"]:checked');
        var correctAnswer = answers[i - 1];
        var result = "";

        if (answer) {
            var selectedAnswer = answer.value;

            if (selectedAnswer === correctAnswer) {
                score++;
                result = "Correct";
            } else {
                result = "Incorrect";
            }
        } else {
            result = "Not Answered";
        }

        var newRow = resultTableBody.insertRow();
        newRow.innerHTML = "<td>" + i + "</td>" +
                            "<td>" + (answer ? answer.parentNode.textContent.trim() : "Not answered") + "</td>" +
                            "<td>" + correctAnswer.toUpperCase() + "</td>" +
                            "<td class='" + (result === "Correct" ? "correct" : "incorrect") + "'>" + result + "</td>";
    }

    totalScoreSpan.textContent = score;
    document.getElementById('quiz-container').style.display = 'none';
    document.getElementById('quiz-results').style.display = 'block';
}