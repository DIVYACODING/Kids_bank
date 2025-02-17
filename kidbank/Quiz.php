<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking Quiz for Kids</title>
    <link rel="stylesheet" href="./assets/css/quize.css">
</head>
<body>
    <div class="container">
        <h1>Banking Quiz for Kids</h1>
        <div id="quiz-container">
            <div class="question">
                <p>1. What is the purpose of a bank?</p>
                <div class="options">
                    <label><input type="radio" name="q1" value="a">A. To save money</label>
                    <label><input type="radio" name="q1" value="b">B. To spend money</label>
                    <label><input type="radio" name="q1" value="c">C. To eat money</label>
                </div>
            </div>
            <div class="question">
                <p>2. What is interest?</p>
                <div class="options">
                    <label><input type="radio" name="q2" value="a">A. Money you owe</label>
                    <label><input type="radio" name="q2" value="b">B. Money you earn on savings</label>
                    <label><input type="radio" name="q2" value="c">C. Money you spend</label>
                </div>
            </div>
            <div class="question">
                <p>3. What is the best place to keep your money safe?</p>
                <div class="options">
                    <label><input type="radio" name="q3" value="a">A. Under your bed</label>
                    <label><input type="radio" name="q3" value="b">B. In a piggy bank</label>
                    <label><input type="radio" name="q3" value="c">C. In a bank account</label>
                </div>
            </div>
            <div class="question">
                <p>4. What is a budget?</p>
                <div class="options">
                    <label><input type="radio" name="q4" value="a">A. A plan for spending and saving money</label>
                    <label><input type="radio" name="q4" value="b">B. A type of food</label>
                    <label><input type="radio" name="q4" value="c">C. A type of bank account</label>
                </div>
            </div>
            <div class="question">
                <p>5. What does ATM stand for?</p>
                <div class="options">
                    <label><input type="radio" name="q5" value="a">A. Automated Teller Machine</label>
                    <label><input type="radio" name="q5" value="b">B. Automatic Transfer Money</label>
                    <label><input type="radio" name="q5" value="c">C. All The Money</label>
                </div>
            </div>
            <div class="question">
                <p>6. What is a credit card?</p>
                <div class="options">
                    <label><input type="radio" name="q6" value="a">A. A way to borrow money from a bank</label>
                    <label><input type="radio" name="q6" value="b">B. A type of ID card</label>
                    <label><input type="radio" name="q6" value="c">C. A tool to clean money</label>
                </div>
            </div>
            <div class="question">
                <p>7. What is a loan?</p>
                <div class="options">
                    <label><input type="radio" name="q7" value="a">A. Money you earn on savings</label>
                    <label><input type="radio" name="q7" value="b">B. Money you owe</label>
                    <label><input type="radio" name="q7" value="c">C. Money you spend</label>
                </div>
            </div>
            <div class="question">
                <p>8. What is a debit card?</p>
                <div class="options">
                    <label><input type="radio" name="q8" value="a">A. A card that allows you to withdraw money from an ATM</label>
                    <label><input type="radio" name="q8" value="b">B. A card that allows you to spend money from your bank account</label>
                    <label><input type="radio" name="q8" value="c">C. A card that gives you free money</label>
                </div>
            </div>
            <div class="question">
                <p>9. What is a savings account?</p>
                <div class="options">
                    <label><input type="radio" name="q9" value="a">A. A type of loan</label>
                    <label><input type="radio" name="q9" value="b">B. A way to spend money</label>
                    <label><input type="radio" name="q9" value="c">C. A bank account that earns interest on your money</label>
                </div>
            </div>
            <div class="question">
                <p>10. Why is it important to save money?</p>
                <div class="options">
                    <label><input type="radio" name="q10" value="a">A. So you can spend it all at once</label>
                    <label><input type="radio" name="q10" value="b">B. To buy toys</label>
                    <label><input type="radio" name="q10" value="c">C. To have money for emergencies and future goals</label>
                </div>
            </div>
            <button onclick="submitQuiz()">Submit Quiz</button>
        </div>
        <div id="quiz-results" style="display: none;">
            <h2>Quiz Results</h2>
            <table id="result-table">
                <thead>
                    <tr>
                        <th>Question</th>
                        <th>Your Answer</th>
                        <th>Correct Answer</th>
                        <th>Result</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Results will be populated here -->
                </tbody>
            </table>
            <p>Total Score: <span id="total-score"></span> out of 10</p>
        </div>
    </div>

    <script src="./assets/js/quize.js"></script>



</body>
</html>
