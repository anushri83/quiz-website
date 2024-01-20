<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz App</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 0;
            padding: 20px;
        }

        #quiz-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        .choices {
            display: block;
            margin: 10px 0;
            padding: 10px;
            background-color: #eee;
            border: 1px solid #ccc;
            border-radius: 5px;
            cursor: pointer;
        }

        .choices:hover {
            background-color: #ddd;
        }
    </style>
</head>

<body>

    <div id="quiz-container">
        <h1 id="sdaf"></h1>
        <div id="x"></div>
    </div>

    <script>
        const gg = async () => {
            let gg;
            await fetch('https://opentdb.com/api.php?amount=10&category=22&difficulty=easy&type=multiple')
                .then((r) => r.json())
                .then((rr) => {
                    gg = rr.results;
                    console.log(gg)
                });

            let arr = gg.map((e) => {
                let x = Array.from(e.incorrect_answers);
                let f = Math.floor(Math.random() * 4);
                x.splice(f, 0, e.correct_answer);
                return {
                    question: e.question,
                    choices: x,
                    correct_ans: e.correct_answer
                };
            });

            console.log(arr);
            document.getElementById("sdaf").innerText = arr[0].question;
            let asdk = document.getElementById("x");
            let ht = "";
            arr[0].choices.forEach((e) => {
                ht += "<div class='choices'>" + e + "</div>";
            });
            asdk.innerHTML = ht;

            let choicesElements = document.querySelectorAll('.choices');
            choicesElements.forEach((e) => e.addEventListener('click', (event) => {
                if (event.target.innerText == arr[0].correct_ans) {
                    console.log("Correct!");
                } else {
                    console.log("Incorrect!");
                }
            }));
        }

        gg();
    </script>
</body>

</html>
