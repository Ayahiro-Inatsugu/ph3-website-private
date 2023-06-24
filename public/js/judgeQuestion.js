// judgeQuestion.js
document.querySelectorAll('#option_btn').forEach(function(optionBtn) {
  optionBtn.addEventListener('click', function(e) {
    e.preventDefault();
    const isCorrect = e.target.getAttribute('data-is-correct');
    if (isCorrect === "1") {
      alert('正解です！');
    } else {
      alert('不正解です...');
    }
  });
});
