var questions = document.getElementsByClassName('question');

var answers = document.getElementsByClassName('answer');

for (i = 0; i < questions.length; i++) { 
    let question = questions[i];
    let answer = answers[i];
    
    question.onclick = function () {
        if (answer.style.display == 'none') {
            answer.style.display = 'block';
        } else  {
            answer.style.display = 'none';
        }
        
    };
}