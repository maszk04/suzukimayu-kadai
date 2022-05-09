const quiz = [
  {
    question: '僕のヒーローアカデミアの主人公の名前は?',
    answers:[
        'オールマイト',
        '麗日お茶子',
        '爆豪勝己',
        '緑谷出久'
    ],
  correct : '緑谷出久'
  },
  {
    question: '僕のヒーローアカデミア、峯田実の個性は次のうちどれ?',
    answers:[
        '無重力',
        'もぎもぎ',
        '酸',
        'シュガードープ'
    ],
  correct : 'もぎもぎ'
  },{
    question: '僕のヒーローアカデミア、次のうちヴィランではないのはだれ?',
    answers:[
        'スピナー',
        'トガヒミコ',
        'オールフォーワン',
        'ガンヘッド'
    ],
  correct : 'ガンヘッド'
  },{
    question: '僕のヒーローアカデミア、蛙吹梅雨のヒーロー名は?',
    answers:[
        'インビジブルガール',
        'FROPPY（フロッピー）',
        'Pinky（ピンキー）',
        'Mt.レディ'
    ],
  correct : 'FROPPY（フロッピー）'
  }
];

const quizLength=quiz.length;
let quizIndex = 0;
let score = 0;

const $button =document . getElementsByTagName('button');
let buttonLength = $button.length;

//クイズの問題文、選択肢を定義
const setupQuiz=()=>{
      document.getElementById('js-question').textContent = quiz[quizIndex].question;
    let buttonIndex = 0;

    while(buttonIndex<buttonLength){
      $button[buttonIndex].textContent = quiz[quizIndex].answers[buttonIndex];
      buttonIndex++;
    }
}
setupQuiz();

const clickHandler =(e) =>{
  if(quiz[quizIndex].correct === e.target.textContent){
    window.alert('正解!');
    score++;
  }else{
    window.alert('不正解!');
  }

quizIndex++;

if(quizIndex < quizLength){
  setupQuiz()
}else{
  window.alert('終了!あなたの正解数は' + score + '/' + quizLength+'です!') ;
}

};


let handlerIndex = 0;
while (handlerIndex < buttonLength){
  $button[handlerIndex].addEventListener('click',(e) => {
    clickHandler(e);
  });
  handlerIndex++;
}

